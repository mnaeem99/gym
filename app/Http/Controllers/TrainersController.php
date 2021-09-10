<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TrainersModal;


class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = TrainersModal::get()->toArray();
        return view('admin.listtrainer')->with('trainers',$trainers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addtrainer()
    {
        return view('admin.addtrainer');
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
            $newTrainer = new TrainersModal();
            $newTrainer->name = $data['name'];
            $newTrainer->designation = $data['designation'];
            $newTrainer->dob = $data['dob'];
            $newTrainer->about = $data['about'];
            /*if($request->hasFile('image'))
            {
                $file = $request->file($data['image']);
                var_dump($file);
                die();
                $extension =$file->getClientOriginalExtension();
                $filename= time().'.'. $extension;
                $file->move('upload/newTrainer/',$filename);
                $newTrainer->image = $filename;
            }
            else
            {
                //return $request;
                $newTrainer->image = '';
            }*/
            $newTrainer->save();
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
          $request->session()->flash('alert-success', 'Trainer Added successfull!');
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
        $trainers = TrainersModal::where('id',$id)->first()->toArray();
        return view('admin.editTrainer')->with('trainers',$trainers);
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
            $updateTrainer = TrainersModal::find($id);
            $updateTrainer->name = $data['name'];
            $updateTrainer->designation = $data['designation'];
            $updateTrainer->dob = $data['dob'];
            $updateTrainer->about = $data['about'];
            $updateTrainer->save();           
        }
          catch(\Exception $exp)
          {
            //$request->session()->flash('alert-danger', $exp->getmessage());
            //return redirect()->back();
            return redirect('/listtrainer')->with('alert-danger', $exp->getmessage());
          }
          //$request->session()->flash('alert-success', 'Congratulation booking successfull!');
          //return redirect()->back();
          return redirect('/listtrainer')->with('alert-success', 'Trainer has been successfully updated');
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
        TrainersModal::where('id', $id)->delete();
        return redirect('/listtrainer')->with('alert-success', 'Trainer has been successfully delete');
    }
}