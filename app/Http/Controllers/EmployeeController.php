<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Detail;

use App\Group;

use Illuminate\Http\Request;




class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kras=Employee::paginate(5);
        return view('kragroupsemployee.employeefront',compact('kras'));
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
        $per=Detail::get()->where('groupname','=',$request->get('groupname'))->SUM('percentage');
       
        if($per>=100)
        {
                    $kras = new Employee([
                        'empname' => $request->get('empname'),
                        'groupname' => $request->get('groupname'),
                        'startdate'=> $request->get('startdate'),
                        'enddate'=> $request->get('enddate'),
                    ]);
                    $kras->save();
                    $abcds= Group::all();
                    
                    
                    return view('kragroupsemployee.employeeadd',compact('kras','abcds'))->with('success', 'KRA has been added');
        }
        else
        {
            return redirect()->back() ->with('alert', 'SORRY! The sum of calculated percentage is less than 100 %');
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
        $kras=Employee::paginate(5);
        $abcds= Group::all();
        return view('kragroupsemployee.employeeadd',compact('kras','abcds'));
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
