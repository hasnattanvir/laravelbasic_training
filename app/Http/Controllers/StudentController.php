<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    
    public function create(){
        
        return view('students.create');
    }
    public function update(){
        return view('students.update');
    }
    public function deletedata($id){
        $deldata = Students::findOrFail($id);
        dd($deldata);
        // if($deldata->image){
        //     Storage::delete($deldata->image);
        // }
        $delresult= $deldata->delete();
        if($delresult){
            return redirect()->back()->with('success','Data Delete Successfull');
        }else{
            return redirect()->back()->with('fail','Data Delete failed');
        }

    }
    public function show(){
        $stdata = Students::all();
        return view('students.show',compact('stdata'));
    }

    public function insert(Request $respons){
        $respons->validate([
            'name'=>'required|string|min:3|max:7',
            'phone'=>'required|numeric|unique:students,phone|digits:11',
            'address'=>'required|string',
            'image'=>'required|mimes:jpeg,jpg,bmp,png',
        ]);

        $data = Students::create([
            'name'=>$respons->name,
            'phone'=>$respons->phone,
            'address'=>$respons->address,
            'image'=>'image.jpg',
        ]);

        if($respons->has('image')){
            $image = $respons->image;
            $image_new_name = time().'.'.$image->getClientOriginalExtension(true);
            $image->move('storage/studentsphoto/',$image_new_name);
            $data->image=$image_new_name;
            $data->save();
        }
        $save = $data->save();
        if($save){
            return redirect()->back()->with('success','Data Insert Successfull');
        }else{
            return redirect()->back()->with('fail','Data Insert failed');
        }

        return redirect()->back();
    }

    
}
