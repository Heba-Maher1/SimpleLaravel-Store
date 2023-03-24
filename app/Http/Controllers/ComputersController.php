<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{
    
    public function index()
    {
        return view('computer.index' , [
            'computers' => Computer::all()
        ]);
    }

    // ------------------------------------------------------------------------------
    public function create()
    {
        return view('computer.create');
    }

    // ------------------------------------------------------------------------------
    public function store(Request $request)
    {
        $request->validate([
            'computer-name' =>'required',
            'computer-origin' =>'required',
            'computer-price' =>['required', 'integer'],
        ]);
        $computer = new Computer();
        $computer->name =strip_tags($request->input('computer-name')) ;
        $computer->origin =strip_tags($request->input('computer-origin'));
        $computer->price =strip_tags($request->input('computer-price'));

        $computer->save();

        return redirect()->route('computer.index');
    
    }

       // ------------------------------------------------------------------------------
    public function show($computer)
    {
            return view('computer.show' , [
                'computer' =>  Computer::findOrFail($computer)
            ]);
    }

        // ------------------------------------------------------------------------------
    public function edit($computer)
    {
        return view('computer.edit' , [
            'computer' =>  Computer::findOrFail($computer)
        ]);
    }

    // ------------------------------------------------------------------------------
    public function update(Request $request, $computer)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => ['required', 'integer'],
        ]);
        $to_update = Computer::findOrFail($computer);
        $to_update->name = strip_tags($request->input('computer-name'));
        $to_update->origin = strip_tags($request->input('computer-origin'));
        $to_update->price = strip_tags($request->input('computer-price'));

        $to_update->save();

        return redirect()->route('computer.show' , $computer);
    }

        // ------------------------------------------------------------------------------
    public function destroy($computer)
    {
        $to_delete = Computer::findOrFail($computer);
        $to_delete ->delete();
        return redirect()->route('computer.index');

    }
}
