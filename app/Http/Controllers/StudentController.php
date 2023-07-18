<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    
    public function create(){
        
        return view('students.create');
    }
    public function update(){
        return view('students.update');
    }
    public function delete(){
        
        return view('students.delete');
    }
    public function show(){
        $stdata = Students::all();
        return view('students.show',compact('stdata'));
    }

    public function insert(Request $respons){
        $respons->validate([
            'name'=>'required|string|min:3|max:70',
            'phone'=>'required|numeric|unique:students,phone|digits:11',
            'address'=>'required|string',
        ]);

        $data = Students::create([
            'name'=>$respons->name,
            'phone'=>$respons->phone,
            'address'=>$respons->address,
        ]);
        $save = $data->save();
        if($save){
            return redirect()->back()->with('success','Data Insert Successfull');
        }else{
            return redirect()->back()->with('fail','Data Insert failed');
        }

        return redirect()->back();
    }
}
