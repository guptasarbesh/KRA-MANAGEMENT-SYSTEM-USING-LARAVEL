<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kra;

class KraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kras=Kra::all();
        return view('kramanage.krafront',compact('kras'));
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
        $kras = new Kra([
            'kraname' => $request->get('kraname'),
            'kradescription'=> $request->get('kradescription'),
          ]);
          $kras->save();
       
          return redirect()->action('KraController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $kras=Kra::all();
        return view('kramanage.kraadd',compact('kras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kraedit(Request $request, $kra_id)
    {
        $kra = Kra::find($kra_id);
        return view('kramanage.kraedit', compact('kra'));
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kraupdate(Request $request, $kra_id )
    {
        //
        
        $kras = Kra::find($kra_id);
        $kras->kraname=$request->sarbesh;
        $kras->save();
        return redirect()->action('KraController@index');
    }
        

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kra_id)
    {
     $kras = Kra::find($kra_id);
     $kras->delete();
     return redirect()->action('KraController@index');
    }

    public function deleteall()
    {
       
    
      

    
    }
}
