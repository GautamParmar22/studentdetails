<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class StudInsertController extends Controller {
    
    public function addData(Request $request){
        $req = $request->all();
        //echo $req['gender'];
        //echo "<pre/>"; print_r($request->all());die;
          $first_name = $request->input('firstname');
          $last_name = $request->input('lastname');
          $email = $request->input('email'); 
          $mobile_no = $request->input('phone');
          $photo = $request->input('photo');
          $gender = $request->input('gender');
          $data=array( 'firstname'=>$first_name,'lastname'=>$last_name,'email'=>$email,'mobile_no'=>$mobile_no,'photo'=>$photo,'gender'=>$gender);
          //var_dump($data);
          DB::table('student_info')->insert($data);
         
          echo "Record inserted successfully.";
          
          
          //cho<a href="/insert">Click Here</a> to go back;
          /*
          $photo = $request->validate(['file' =>'required|mimes:jpg,jpeg|max:1024']);
          $photo = time().'.'.$request->file->extension();  
          $request->file->move(public_path('file uploads'), $photo);
          
          $user = new User;
          $user->firstname = Input::post('firstname');
          $user->lastname = Input::post('lastname');
          $user->email = Input::post('email');
          $user->mobile_no = Input::post('mobile_no');
          $user->photo = Input::post('photo');
          $user->gender = Input::post('gender');
          $user->save(); */

       //return Redirect::back();
       
       
   } 
   
}

