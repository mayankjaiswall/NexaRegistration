<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NexaModel;

class NexaController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'city' => 'required|string',
            'age' => 'required|integer',
            'gender' => 'required|string',
            'email' => 'required|string',
            'contact' => 'required|integer',
            'address' => 'required|string',
        ]);

        $nexadata = new NexaModel(); //created object for nexadata
        //object name  //databasename  =  // validateddata [//html name content]
        $nexadata->name = $validatedData['name'];
        $nexadata->city = $validatedData['city'];
        $nexadata->age = $validatedData['age'];
        $nexadata->gender = $validatedData['gender'];
        $nexadata->email = $validatedData['email'];
        $nexadata->contact = $validatedData['contact'];
        $nexadata->address = $validatedData['address'];

        $nexadata->save(); //saving data in the model instance

        return redirect()->back();
    }

    public function show(Request $request)
    {

        $userdata = NexaModel::all();
        //dd($userdata);  //dump and die
        return view('showdata', compact('userdata'));
    }
}
