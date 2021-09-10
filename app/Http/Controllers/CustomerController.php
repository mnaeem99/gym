<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\CustomerModal;
use App\Model\CoursesModal;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = CustomerModal::get()->toArray();
        return view('admin.listcustomer')->with('customers',$customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCustomer()
    {
        $courses = CoursesModal::get()->toArray();
        return view('register')->with('courses',$courses);
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
            $newcustomer = new CustomerModal();
            $newcustomer->firstname = $data['firstname'];
            $newcustomer->lastname = $data['lastname'];
            $newcustomer->dob = $data['dob'];
            $newcustomer->address = $data['address'];
            $newcustomer->email = $data['email'];
            $newcustomer->mobile = $data['mobile'];
            $newcustomer->course = $data['course'];
            $newcustomer->time = $data['time'];
            $newcustomer->save();
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
          $request->session()->flash('alert-success', 'Congratulation booking successfull!');
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
        $customers = CustomerModal::where('id',$id)->first()->toArray();
        return view('admin.editcustomer')->with('customers',$customers);
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
            $updatecustomer = CustomerModal::find($id);
            $updatecustomer->firstname = $data['firstname'];
            $updatecustomer->lastname = $data['lastname'];
            $updatecustomer->dob = $data['dob'];
            $updatecustomer->address = $data['address'];
            $updatecustomer->email = $data['email'];
            $updatecustomer->mobile = $data['mobile'];
            $updatecustomer->course = $data['course'];
            $updatecustomer->time = $data['time'];
            $updatecustomer->save();           
        }
          catch(\Exception $exp)
          {
            //$request->session()->flash('alert-danger', $exp->getmessage());
            //return redirect()->back();
            return redirect('/listcustomer')->with('alert-danger', $exp->getmessage());
          }
          //$request->session()->flash('alert-success', 'Congratulation booking successfull!');
          //return redirect()->back();
          return redirect('/listcustomer')->with('alert-success', 'Customer has been successfully updated');

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
        CustomerModal::where('id', $id)->delete();
        return redirect('/listcustomer')->with('alert-success', 'Customer has been successfully delete');
    }
}