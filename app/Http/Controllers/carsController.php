<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\car ;

class carsController extends Controller
{
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
{
  //get data and pass to view
   $blogs = Blog::all();
   return view('blog.index', ['blogs' => $blogs]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $data = $request->input();
      //  echo "<pre>";
      //  print_r($data);
      //  echo "<pre>";

       $tbldata = "";
       if (!empty($data))
       {
          try
          {
            $newcar = new car();
           echo  $newcar->name =$data['name'];
           echo $newcar->company =$data['company'];
           echo $newcar->air_condition =$data['air_condition'];
           echo $newcar->registeration =$data['registeration'];
           echo $newcar->no_of_passenger =$data['no_of_passenger'];
           echo $newcar->luggage =$data['luggage'];
         //   echo $newcar->doors =$data->doors;
             $newcar->save();
              //change text fields it miss match with database attributes
              
             }
          catch(\Exception $exp)
          {
            // $tbldata = DB::table('cars')->get();
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
    public function editcar($id)
    {
      $userdata = car::where('cid',$id)->first()->toArray();
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
    public function updatecar(Request $request)
    {
        $postdata=$request->input();

        car::where('cid',$postdata['id'])->Update(['name'=>$postdata['name'],'company'=>$postdata['company'],'air_condition'=>$postdata['air_condition'],'registeration'=>$postdata['registeration'],'no_of_passenger'=>$postdata['no_of_passenger'],'luggage'=>$postdata['luggage']]);
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
    public function deletecar($id)
    {
        car::where('cid',$id)->delete();
        redirect()->to('/listcars');
    }
}
