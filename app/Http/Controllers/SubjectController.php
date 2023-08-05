<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function create(){
        
        return view('subject.create');
    }

    public function insert(Request $respons){
        $respons->validate([
            'subname'=>'required|unique:subjects',
            'subcode'=>'required|unique:subjects',
        ]);

        $data = Subject::create([
            'SubName'=>$respons->subname,
            'SubCode'=>$respons->subcode,
            'crtd'=>$respons->subctd,
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
