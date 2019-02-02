<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruser;

class ruserRootController extends Controller
{
	//Add method Here
    public function Ruseradd(Request $request)
    {
    	// only print requested
    	// save this data to table
    	$post = Ruser::create([
    		"name"=>$request->name,
    		"address"=>$request->address,
    		"contactno"=>$request->contactno,
    		"email"=>$request->email,
    		"password"=>$request->password,
    		"securityquestion"=>$request->securityquestion,
    		"securityanswer"=>$request->securityanswer
      	]);
    	return redirect('/Rusershow');
    }	
    // create show method here
    public function Rusershow(Request $request)
    {
    	// get all deta from database
    	$posts = Ruser::all();
    	// simple display all data here
    	return view('Rusershow')->with('postdata',$posts);
    	// we can you the data in variable postdata in view
    }
     // add method for delete here
    public function Ruserdelete(Request $request,$id)
    {
        // delete the row
        Ruser::where('id',$id)->delete();
        return redirect('/Rusershow');
    }

    // update post method
    public function Ruserupdate(Request $request,$id)
    {
        // get the data of this id form db
        $post = Ruser::find($id);

        //dd($post);

        return view('Ruserupdate')->with('post',$post);
    }


    public function LawyersaveUpdated(Request $request)
    {
        // update row
        Ruser::where('id',$request->id)->update([

            'name'=>$request->name,
            'address'=>$request->address,
            'contactno'=>$request->contactno,
            'email'=>$request->email,
            'password'=>$request->password,
            'securityquestion'=>$request->securityquestion,
            'securityanswer'=>$request->securityanswer
        ]);
        // redirect  to table
        return redirect('/Rusershow');
    }
    
}
