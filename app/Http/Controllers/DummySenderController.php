<?php

namespace App\Http\Controllers;

use App\Sportsman;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\SportsmanRepository;
use Illuminate\Database\Eloquent\Collection;

class DummySenderController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var SportsmanRepository
     */
    protected $sportsmen;
    protected $start_times;
    protected $finish_times;

    /**
     * Create a new controller instance.
     *
     * @param  SportsmanRepository  $sportsmen
     * @return void
     */
    public function __construct(SportsmanRepository $sportsmen)
    {

        $this->sportsmen = $sportsmen;
    }

    /**
     * Display a list of all of the sportsmen.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        $sportsmen = $this->sportsmen->getSportsmen();
        $spotID = 1;
        $this->start_times = $this->generateStartTimes($sportsmen);
        return view('sender.index', [
            'sportsmen'   => $sportsmen,
            'spotID'      => $spotID,
            'start_time'  => $this->start_times
            //TODO: sort start_times, send them appropriately one after another
        ]);
    }

    /**
     * Send the generated start_time to the Receiver.
     *
     * @param  Request  $request
     * @param  Sportsman  $sportsman
     * @return Response
     */
    public function send(Request $request, Sportsman $sportsman)
    {
        //$sportsman->send();
        return redirect('/sender');
    }

    /**
     * Update the Receiver with generated finish_time.
     *
     * @param  Request  $request
     * @param  Sportsman  $sportsman
     * @return Response
     */
    public function update(Request $request, Sportsman $sportsman)
    {
        //$sportsman->send();
        return redirect('/sender');
    }

    private function generateStartTimes(Collection $sportsmen)
    {
        $array = array();
        for($i=0;$i<count($sportsmen);$i++)
        {
            $duration = rand(1, 600);
            $date = new DateTime();
            $date->add(new DateInterval(sprintf('PT%dS', $duration)));
            $array[$i] = date('Y-m-d H:i:s', $date->getTimestamp());
        }
        return $array;
    }

    private function generateFinishTimes(Collection $sportsmen)
    {
        $array = array();
        for($i=0;$i<count($sportsmen);$i++)
        {
            $duration = rand(240, 600);
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $this->start_times[$i]);
            $date->add(new DateInterval(sprintf('PT%dS', $duration)));
            $array[$i] = date('Y-m-d H:i:s', $date->getTimestamp());
        }
        return $array;
    }
}
