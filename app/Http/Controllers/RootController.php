<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lawyer;

class RootController extends Controller
{
    //Add method Here
    public function add(Request $request)
    {
    	// only print requested
    	// save this data to table
    	$post = lawyer::create([
    		"name"=>$request->name,
    		"address"=>$request->address,
    		"contactno"=>$request->contactno,
    		"email"=>$request->email,
    		"password"=>$request->password,
    		"securityquestion"=>$request->securityquestion,
    		"securityanswer"=>$request->securityanswer
      	]);
    	return redirect('/Lawyershow');
    }	
    // create show method here
    public function Lawyershow(Request $request)
    {
    	// get all deta from database
    	$posts = Lawyer::all();
    	// simple display all data here
    	return view('Lawyershow')->with('postdata',$posts);
    	// we can you the data in variable postdata in view
    }



    // add method for delete here
    public function delete(Request $request,$id)
    {
        // delete the row
        Lawyer::where('id',$id)->delete();
        return redirect('/Lawyershow');
    }

    // update post method
    public function Lawyerupdate(Request $request,$id)
    {
        // get the data of this id form db
        $post = Lawyer::find($id);

        //dd($post);

        return view('Lawyerupdate')->with('post',$post);
    }


    public function LawyersaveUpdated(Request $request)
    {
        // update row
        Lawyer::where('id',$request->id)->update([

            'name'=>$request->name,
            'address'=>$request->address,
            'contactno'=>$request->contactno,
            'email'=>$request->email,
            'password'=>$request->password,
            'securityquestion'=>$request->securityquestion,
            'securityanswer'=>$request->securityanswer
        ]);
        // redirect  to table
        return redirect('/Lawyershow');
    }

}