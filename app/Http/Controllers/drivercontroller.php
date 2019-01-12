<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\driver;
use App\location;

class drivercontroller extends Controller
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
        echo "<pre>";
       print_r($data);
       echo "<pre>";
       $tbldata = "";
       if (!empty($data))
       {
          try
          {
            $newdata = new driver();
            echo $newdata->name =$data['drivername'];
            echo $newdata->email =$data['Email'];
            echo $newdata->age =$data['age'];
            echo $newdata->phone =$data['phone'];
            echo $newdata->cnic =$data['cnic'];
            // $newdata->total_drive =$data['total_drive'];
           echo  $newdata->duty_start =$data['duty_start'];
           echo  $newdata->duty_end =$data['duty_end'];
           $newlocation= new location();
             $newlocation->addresses =$data['addresses'];
             $newlocation->town =$data['town'];
             $newdlocation->city =$data['city'];
             $newdlocation->save();
             $locid=location::where('addresses',$data['addresses'])->first()->toArray();
             $newdata->locid=$locid;
             $newdata->save();
            //change text fields it miss match with database attributes

                  



           // driver::create(['name' => $data['name'], 'email'=>$data['email'], 'password'=>$data['pwd'] ]);
            // $tbldata = DB::table('drivers')->get();
            // print_r($tbldata);
          }
          catch(\Exception $exp)
          {
            // $tbldata = DB::table('drivers')->get();
            // print_r($tbldata);
            $request->session()->flash('alert-danger', $exp->getmessage());
            return redirect()->back();
          }
          $request->session()->flash('alert-success', 'driver Added successfully!');
          return redirect()->back();
          
       }
       else
       {
           return redirect()->back();
       }
       
    }
   
    public function show($id)
    {

       $driver = driver::get()->toArray();

       return view('frmSignup', ['drivers'=>$driver]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editdriver($id)
    {
      $driverdata = driver::where('did',$id)->first()->toArray();
      // echo "<pre>";
      // print_r($driverdata);

      // echo $id;
      // die();
      return view('frmEditdriver')->with('driverdata',$driverdata);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatedriver(Request $request)
    {
        $postdata=$request->input();

        driver::where('did',$postdata['driverid'])->Update(['name'=>$postdata['drivername'],'email'=>$postdata['Email'],['age'=>$postdata['age'],'phone'=>$postdata['phone'],['cnic'=>$postdata['cnic'],'duty_start'=>$postdata['duty_start'],'duty_end'=>$postdata['duty_end']]);
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
    public function deletedriver($id)
    {
        driver::where('did',$id)->delete();
        redirect()->to('/listdrivers');
    }

}
