<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\customer;

class customercontroller extends Controller
{
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


       // return;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $data = $request->input();
       $tbldata = "";
       if (!empty($data))
       {
          try
          {
            $newdata = new customer();
            echo $newdata->name =$data['username'];
            echo $newdata->email =$data['Email'];
            echo $newdata->age =$data['age'];
            echo $newdata->phone =$data['phone'];
            echo $newdata->cnic =$data['cnic'];
            // $newdata->total_drive =$data['total_drive'];
             $newdata->password =$data['password'];
             $newdata->save();
              //change text fields it miss match with database attributes

            

                  



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
          $request->session()->flash('alert-success', 'User Added successfully!');
          return redirect()->back();
          
       }
       else
       {
           return redirect()->back();
       }
       
    }
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $customer = customer::get()->toArray();

       return view('frmSignup', ['customers'=>$customer]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editucustomer($id)
    {
      $customerdata = customer::where('cuid',$id)->first()->toArray();
      // echo "<pre>";
      // print_r($userdata);

      // echo $id;
      // die();
      return view('frmEditUser')->with('customers',$customerdata);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateuser(Request $request)
    {
        $postdata=$request->input();

        customer::where('cuid',$postdata['userid'])->Update(['name'=>$postdata['name'],'email'=>$postdata['email'],['age'=>$postdata['age'],'phone'=>$postdata['phone'],['cnic'=>$postdata['cnic'],'password'=>$postdata['password']]);
        die();

        // echo "<pre>";
        // print_r($postdata);
        // die();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteuser($id)
    {
        user::where('cuid',$id)->delete();
        redirect()->to('/listcustomers');
    }

}
