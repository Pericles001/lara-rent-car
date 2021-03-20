<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Command;
use Illuminate\Http\Request;
use App\Models\Car;
use DateTime;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('commands.index')->with(['commands' => Command::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, Car $car)
    {
        //
        return view('commands.create')->with(
            [
                'id' => Car::findOrFail($id),
                'car' => $car::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'car_id' =>'required',
            'dateL' => 'required',
            'dateR' => 'required'
        ]);

        $car = Car::findOrFail($request->car_id);
        $dateLocation = new DateTime($request->dateL);
        $dateRetour = new DateTime($request->dateR);
        $jours = date_diff($dateLocation, $dateRetour);
        $prixTtc = $car->prixJ * $jours->format('%d');

        Command::create([

            'user_id' => auth()->user()->id,
            'car_id' => $request->car_id,
            'dateL' => $request->dateL,
            'dateR' => $request->dateR,
            'prixTTC' =>   $prixTtc
        ]);
        $car->update([
            'dispo' => 0
        ]);
        return redirect()->route('cars.index')->with([
            'success' => 'Commande ajoutée'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function show(Command $command)
    {
        //
        return view('commands.show')->with($command);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function edit(Command $command)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Command $command)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function destroy(Command $command)
    {
        //
    }
}
