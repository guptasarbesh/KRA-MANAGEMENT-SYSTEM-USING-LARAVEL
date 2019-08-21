<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

use App\Group;
use App\Kra;


class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kras=Detail::paginate(5);
        return view('kragroupsdetail.detailfront',compact('kras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    $final=Group::get('groupname');
      echo $final;

   
        $per=Detail::get()->where('groupname'::$request->get('groupname'))->SUM('percentage');
        echo $per;
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $per=Detail::get()->where('groupname','=',$request->get('groupname'))->SUM('percentage');
            
       if($per<=100)
       {
       
        $kras = new Detail([

            'groupname' => $request->get('groupname'),
            'kraname' => $request->get('kraname'),
         
            'percentage'=> $request->get('percentage'),
            
         ]);
         if($request->get('percentage')+$per <=100)
         {
            $kras->save();
            $fbds= Group::all();
            $abs = Kra::all();
            $abcs= Kra::all();
            $abcds= Group::all();
            return view('kragroupsdetail.detailadd',compact('kras','fbds','abs','abcs','abcds'));
         }
         else
         {
            echo 'SORRY!!!';
         }
                      
         
        }
        else
        {
           echo 'SORRY!!!';

        }
      
  
         
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $fbds= Group::all();
        $abs = Kra::all();
        $abcs= Kra::all();
        $abcds= Group::all();
        return view('kragroupsdetail.detailadd',compact('fbds','abs','abcs','abcds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $kra_id)
    {
        $kra = Detail::find($kra_id);
        return view('kragroupsdetail.detailedit', compact('kra'));
        
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
        $kras = Detail::find($kra_id);
        $kras->percentage=$request->sarbesh;
        $kras->save();
        return redirect()->action('DetailController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kra_id)
    {
     $kras = Detail::find($kra_id);
     $kras->delete();
     return redirect()->action('DetailController@index');
    }
}
