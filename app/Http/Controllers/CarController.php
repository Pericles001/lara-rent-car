<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //
        if ($request->search !== null){
            $cars = Car::orderBy('created_at', 'DESC')->whereMarque($request->search)->simplePaginate(5);
            return view('cars.index')->with([
                'cars' => $cars,
                'title' => "Resultat trouvé pour : ".$request->search ,
                 'count' => $cars->count()
            ]);
        } else {
            $cars = Car::all();
            return view('cars.index')->with([
                'cars' =>Car::simplePaginate(5),
                'title' => "Toutes les voitures" ,
                'count' => $cars->count()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
    'marque'=> 'required',
    'model'=>'required',
    'type'=>'required',
    'prixJ'=>'required',
    'dispo'=>'required',
    'image'=>'required'
]);
$name= '';
if($request->hasFile('image')){
    $file = $request->file('image');
    $name= $file->getClientOrOriginalName();
    $file->move(public_path('images'), $name);

}
Car::create([
    'marque'=> $request->marque,
    'model'=>$request->model,
    'type'=>$request->type,
    'prixJ'=>$request->prixJ,
    'dispo'=>$request->dispo,
    'image'=>$request->$name
]);
return redirect()->route('admins.index')->withSuccess('voiture ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //

        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
