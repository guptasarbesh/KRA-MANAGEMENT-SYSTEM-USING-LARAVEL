<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kras=Group::paginate(5);
        return view('kragroups.groupfront',compact('kras'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $kras = new Group([
            'groupname' => $request->get('groupname'),
            'groupdescription'=> $request->get('groupdescription'),
          ]);
          $kras->save();
       
          return redirect()->action('GroupController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $kras=Group::paginate(5);
        return view('kragroups.groupadd',compact('kras'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $kra_id)
    {
        $kra = Group::find($kra_id);
        return view('kragroups.groupedit', compact('kra'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kra_id )
    {
        //
        $kras = Group::find($kra_id);
        $kras->groupname=$request->sarbesh;
        $kras->save();
        return redirect()->action('GroupController@index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kra_id)
    {
     $kras = Group::find($kra_id);
     $kras->delete();
     return redirect()->action('GroupController@index');
    }
}
