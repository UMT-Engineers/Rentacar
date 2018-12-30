<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
class homecontroller extends Controller
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
            $newuser = new User();
            $newuser->name = $data['name'];
            $newuser->email = $data['email'];
            $newuser->password = $data['pwd'];

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
    public function ListUser()
    {
      $users = User::get()->toArray();

      //echo '<pre>';
      //print_r($users);

      return view('listusers')->with("users",$users);

    }
    public function createQueryBuilder(Request $request)
    {

        // try {
        // DB::connection()->getPdo();
        // if(DB::connection()->getDatabaseName()){
        //     echo "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
        // }else{
        //     die("Could not find the database. Please check your configuration.");
        // }
        // } catch (\Exception $e) {
        //     die("Could not open connection to database server.  Please check your configuration.");
        // } 
       $data = $request->input();
       $tbldata = "";
       if (!empty($data))
       {
          try
          {
            DB::table('users')->insert(['name' => $data['name'], 'email'=>$data['email'], 'password'=>$data['pwd'] ]);
            // $tbldata = DB::table('users')->get();
            // print_r($tbldata);
          }
          catch(\Exception $exp)
          {
            $tbldata = DB::table('users')->get();
            print_r($tbldata);
            $request->session()->flash('alert-success', 'Exception User Not Added successfully!');
            return redirect()->back();
          }
          return redirect()->back();
          $request->session()->flash('alert-success', 'User Added successfully!');
       }
       else
       {
           return redirect()->back();
       }
       // echo "<pre>";
       // print_r($data);
       // echo "</pre";
        //
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

       $users = User::get()->toArray();

       return view('frmSignup', ['users'=>$users]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
