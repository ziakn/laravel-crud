<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_data;
class StudentdataController extends Controller
{
    //
    
    public function show()
    {
        $studentdata = Student_data::all()->toArray();
    
        return view("studentdata.show",compact('studentdata'));
        # code...
    }

    public function create()
    {
        return view('studentdata.create');
        # code...
    }

    public function saveData(Request $request)
    {
        // for validation........
        $this->validate($request,[
            'name'  => 'required',
            'email'   => 'required',
            'mobile'  => 'required',
            'password'  => 'required',
        ]);
        $studentdata=new Student_data([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'mobile' => $request->get('mobile'),
            'password' => $request->get('password'),
    ]);
    $studentdata->save();

    $studentdata = Student_data::all()->toArray();
    return view("studentdata.show",compact('studentdata'));
    // return view('studentdata.create');

    // return redirect()->route('studentdata.create')->with('success','Data Added');
    }


    public function edit($id)
    {
        # code...
        $studentdata=Student_data::find($id);
        return view('studentdata.edit',compact('studentdata'));
    }



    public function update(Request $request)
    {
        // $studentdata=Student_data::find($id);
        // $studentdata->name= $request->get('name');
        // $studentdata->email= $request->get('email');
        // $studentdata->mobile= $request->get('mobile');
        // $studentdata->password= $request->get('password');
        // $studentdata->update();
       
        $id=$request->input('id');
        $student_data=new Student_data;
        $data=array(
            'name'=> $request->post('name'),
            'email'=> $request->post('email'),
            'mobile'=> $request->post('mobile'),
            'password'=> $request->post('password'),
        );
        Student_data::where('id','=',$id)->update($data);
        $student_data->update();


        $studentdata = Student_data::all()->toArray();
        return view("studentdata.show",compact('studentdata'));
        // return redirect()->route('student.index')->with('success','Data Updated');
        # code...
    }



    public function delete($id)
    {
        $studentdata=Student_data::find($id);
        $studentdata->delete();

        $studentdata = Student_data::all()->toArray();
        return view("studentdata.show",compact('studentdata'));
        # code...
    }

}
