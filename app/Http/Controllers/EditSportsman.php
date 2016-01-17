<?php

namespace App\Http\Controllers;

use App\Sportsman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EditSportsman extends Controller
{
    /**
     * Display a list of all of the sportsmen.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('sportsmen.index', [
            'sportsmen' => Sportsman::orderBy('id', 'asc')->get()
        ]);
    }
    /**
     * Create a new sportsman.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required|integer:',
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return redirect('/edit')
                ->withInput()
                ->withErrors($validator);
        }
        $sportsman = new Sportsman();
        $sportsman->sportsman_number = $request->number;
        $sportsman->name = $request->name;
        $sportsman->last_name = $request->last_name;
        $sportsman->save();
        return redirect('/edit');
    }

    /**
     * Destroy the given sportsman.
     *
     * @param  Request  $request
     * @param  Sportsman  $sportsman
     * @return Response
     */
    public function destroy(Request $request, Sportsman $sportsman)
    {
        $sportsman->delete();
        return redirect('/edit');
    }
}
