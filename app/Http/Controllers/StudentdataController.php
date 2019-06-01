<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

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
       
        $this->validate($request,[
                'name' => 'required|min:1|max:35',
    			'email' => 'required|email|unique:student_datas',
                'mobile' => 'numeric',
                'password' => 'required',
                 'image'=>'required'
                ],[
                    'name.required' => ' The name field is required.',
                    'name.min' => ' The first name must be at least 5 characters.',
                    'name.max' => ' The first name may not be greater than 35 characters.',
                    'email.required' => 'Email is allready exist, try another one',
                    // 'mobile.required' => 'Mobile required',
                    'mobile.numeric' => 'Mobile should be numeric',
                    'password.required' => 'Password required',
                    'image' => 'Upload image'
                ]);



        if(Input::hasFile('image'))
        {
            $file=Input::file('image');
            $file->move(public_path().'/images/att/', $file->getClientOriginalName());
            $url=$file->getClientOriginalName();
            
        }
        else
        {
            $url= $request->input('image');
        }
        
        $studentdata=new Student_data([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'mobile' => $request->get('mobile'),
            'password' => $request->get('password'),
            'image' => $url
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

        if(Input::hasFile('image'))
        {
            $file=Input::file('image');
            $file->move(public_path().'/images/att/', $file->getClientOriginalName());
            $url=$file->getClientOriginalName();
            
        }
        else
        {
            $url= $request->input('image');
        }


        $student_data=new Student_data;
        $data=array(
            'name'=> $request->post('name'),
            'email'=> $request->post('email'),
            'mobile'=> $request->post('mobile'),
            'password'=> $request->post('password'),
            'image' => $url
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
