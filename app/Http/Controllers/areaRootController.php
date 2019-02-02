<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class areaRootController extends Controller
{
    //Add method Here
    public function areaadd(Request $request)
    {
    	// only print requested
    	// save this data to table
    	$post = Area::create([
    		"Name"=>$request->Name,
    		"City_id"=>$request->City_id
      	]);
    	return redirect('/areashow');
    }	
    // create show method here
    public function areashow(Request $request)
    {
    	// get all deta from database
    	$posts = Area::all();
    	// simple display all data here
    	return view('areashow')->with('postdata',$posts);
    	// we can you the data in variable postdata in view
    }



    // add method for delete here
    public function delete(Request $request,$id)
    {
        // delete the row
        Area::where('id',$id)->delete();
        return redirect('/areashow');
    }

    // update post method
    public function areaupdate(Request $request,$id)
    {
        // get the data of this id form db
        $post = Area::find($id);

        //dd($post);

        return view('areaupdate')->with('post',$post);
    }


    public function areasaveUpdated(Request $request)
    {
        // update row
        Area::where('id',$request->id)->update([

            'Name'=>$request->Name,
            'City_id'=>$request->City_id
        ]);
        // redirect  to table
        return redirect('/areashow');
    }
}
