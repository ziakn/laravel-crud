<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_data;
class StudentdataController extends Controller
{
    //
    
    public function create()
    {
        return view('studentdata.create');
        # code...
    }

    public function saveData(Request $request)
    {
        # code...
        $studentdata=new Student_data([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'mobile' => $request->get('mobile'),
            'password' => $request->get('password'),
    ]);
    $studentdata->save();
    return view('studentdata.create');

    // return redirect()->route('studentdata.create')->with('success','Data Added');
    }
}
