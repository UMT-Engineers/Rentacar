<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\location;
class locationcontroller extends Controller
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
            $newdata = new location();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $cars = car::get()->toArray();

       return view('frmSignup', ['cars'=>$cars]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edituser($id)
    {
      $userdata = car::where('id',$id)->first()->toArray();
      // echo "<pre>";
      // print_r($userdata);

      // echo $id;
      // die();
      return view('frmEditUser')->with('userdata',$userdata);
      
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

        car::where('id',$postdata['userid'])->Update(['name'=>$postdata['name'],'email'=>$postdata['email']]);
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
        user::where('id',$id)->delete();
        redirect()->to('/listcars');
    }

}
