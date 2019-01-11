<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\payment;
class paymentcontroller extends Controller
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
            $newdata = new payment();
             $newdata->name =$data['name'];
             $newdata->transmission =$data['transmission'];
             $newdata->air_condition =$data['air_condition'];
             $newdata->type =$data['type'];
             $newdata->no_of_passenger =$data['no_of_passenger'];
             $newdata->luggage =$data['luggage'];
             $newdata->doors =$data['doors'];
             $newdata->save();
              //change text fields it miss match with database attributes

            $newuser->save();

                  



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

}
