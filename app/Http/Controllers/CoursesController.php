<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\CoursesModal;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = CoursesModal::get()->toArray();
        return view('admin.listcourse')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcourse()
    {
        return view('admin.addcourse');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        //var_dump($data);
        //die();
        //$tbldata = "";
       if (!empty($data))
       {
          try
          {
            $newCourse = new CoursesModal();
            $newCourse->name = $data['name'];
            $newCourse->description = $data['description'];
            $newCourse->stime = $data['stime'];
            $newCourse->etime = $data['etime'];
            $newCourse->save();
           // User::create(['name' => $data['name'], 'email'=>$data['email'], 'password'=>$data['pwd'] ]);
            // $tbldata = DB::table('users')->get();
            // print_r($tbldata);
          }
          catch(\Exception $exp)
          {
            // $tbldata = DB::table('users')->get();
            // print_r($tbldata);
            $request->session()->flash('alert-danger', $exp->getmessage());
            return redirect()->back();
          }
          $request->session()->flash('alert-success', 'Course Added successfull!');
          return redirect()->back();
       }
       else
       {
           return redirect()->back();
       }
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = CoursesModal::where('id',$id)->first()->toArray();
        return view('admin.editcourse')->with('courses',$courses);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = $request->input();
        if (!empty($data))
       {
          try
          {
            $updateCourse = CoursesModal::find($id);
            $updateCourse->name = $data['name'];
            $updateCourse->description = $data['description'];
            $updateCourse->stime = $data['stime'];
            $updateCourse->etime = $data['etime'];
            $updateCourse->save();           
        }
          catch(\Exception $exp)
          {
            //$request->session()->flash('alert-danger', $exp->getmessage());
            //return redirect()->back();
            return redirect('/listcourse')->with('alert-danger', $exp->getmessage());
          }
          //$request->session()->flash('alert-success', 'Congratulation booking successfull!');
          //return redirect()->back();
          return redirect('/listcourse')->with('alert-success', 'Course has been successfully updated');

       }
       else
       {
           return redirect()->back();
       }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CoursesModal::where('id', $id)->delete();
        return redirect('/listcourse')->with('alert-success', 'Course has been successfully delete');
    }
}