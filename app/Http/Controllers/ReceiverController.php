<?php

namespace App\Http\Controllers;

use App\Sportsman;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReceiverController extends Controller
{
    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('welcome', [
            'sportsmen' => Sportsman::orderBy('sportsman_number', 'asc')->get()
        ]);
    }
}
