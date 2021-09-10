<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ContactModal;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactModal::get()->toArray();
        return view('admin.listcontact')->with('contacts',$contacts);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            $newcontact = new ContactModal();
            $newcontact->name = $data['name'];
            $newcontact->email = $data['email'];
            $newcontact->message = $data['message'];
            $newcontact->save();
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
          $request->session()->flash('alert-success', 'Thanks for submitting Feedback!');
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
        $contacts = ContactModal::where('id',$id)->first()->toArray();
        return view('admin.editcontact')->with('contacts',$contacts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->input();
        if (!empty($data))
       {
          try
          {
            $updatecontact = ContactModal::find($id);
            $updatecontact->name = $data['name'];
            $updatecontact->email = $data['email'];
            $updatecontact->message = $data['message'];
            $updatecontact->save();           
        }
          catch(\Exception $exp)
          {
            //$request->session()->flash('alert-danger', $exp->getmessage());
            //return redirect()->back();
            return redirect('/listcontact')->with('alert-danger', $exp->getmessage());
          }
          //$request->session()->flash('alert-success', 'Congratulation booking successfull!');
          //return redirect()->back();
          return redirect('/listcontact')->with('alert-success', 'Feedback has been successfully updated');

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
        ContactModal::where('id', $id)->delete();
        return redirect('/listcontact')->with('alert-success', 'Feedback has been successfully delete');
    
    }
}
