<?php


namespace App\Http\Controllers;

use App\Models\crudtable;
use Illuminate\Http\Request;
use Session;

class crudController extends Controller
{
    public function crud() 
    {
        $cruddata = crudtable::all();
        return view ('crud')->with('crud_data', $cruddata);
    }

    public function store ( Request $Request)
    {
        $crudtable = new crudtable;

        $crudtable->name = $Request->name;

        $crudtable->save();
        
        return redirect()->back();
    }

    public function edite($id)
    {
        $crudData = crudtable::find($id);
        return view ('edite')->with('crudData', $crudData);
        
    }

    public function update (Request $request, $id )
    {
       $crudData = crudtable::find($id);
        
       $crudData->name = $request->name;
        
       $crudData->save();

       return redirect()->route('crud');
    }

    public function delete ($id)
    {
    
       $crudData = crudtable::find($id);

       $crudData->delete();
      
       Session::flash('status', 'data Delete Successfully');
       return redirect()->route('crud');

    }
}

