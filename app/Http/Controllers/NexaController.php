<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NexaModel;

class NexaController extends Controller
{
    //  why request
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


        $nexadata =  new NexaModel(); //created object for nexadata
        //object name  //databasename  =  // validateddata   [//html name segment names]
        $nexadata->name = $validatedData['name'];
        $nexadata->city = $validatedData['city'];
        $nexadata->age = $validatedData['age'];
        $nexadata->gender = $validatedData['gender'];
        $nexadata->email = $validatedData['email'];
        $nexadata->contact = $validatedData['contact'];
        $nexadata->address = $validatedData['address'];

        $nexadata->save(); //saving data in the model instance

        return redirect()->route('dataofuser');
    }


    public function show(Request $request)
    {

        $userdata = NexaModel::all();
        // dd($userdata);  //dump and die
        return view('showdata', compact('userdata')); //both are same or diffrent 
    }


    public function deleted($id)
    {
        //dd($id);
        $deleterow = NexaModel::find($id);

        $deleterow->delete();

        return redirect()->route('dataofuser');
    }


    public function editdata($id)
    {

        $editrow = NexaModel::findOrFail($id);
        // dd($editrow);
        return view('editdata', compact('editrow'));
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $updatedata = NexaModel::find($request->id);
        $updatedata->update([
            //databasecolumnname       ->name attribute in the html form 
            'name' => $request->name,
            'city' => $request->city,
            'age' => $request->age,
            'gender' => $request->gender,
            'email' => $request->email,
            'contact' => $request->contact,
            'address' => $request->address,

        ]);

        return redirect()->route('dataofuser');
    }
}
