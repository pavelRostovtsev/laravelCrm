<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firm;
use App\Models\Employee;

class FirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $firms = Firm::all();
        return view('firms.index',compact('firms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $employees = Employee::where('firm_id', null)->get();
        return view('firms.create',compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $firms = new Firm();

        $firms->name = $request->name;
        $firms->save();


        if(is_null($request->employees)) {
            $employees = $request->employees;
            if(is_array($employees) && is_null($employees) ) {
                foreach($employees as $employee) {
                    $employees = Employee::find($employee);
                    $employees->firm_id = $firms->id;
                    $employees->update();
                }
            }
        }   

        return redirect()->route('firms.index')->with('success', 'Компания добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
        $firm = Firm::find($id);
        $employees = $firm->employee;
        foreach($employees as $employee){
            echo $employee->name_employee. '<br>';
        }
        die;
        return view('events.show', compact('event', 'firmName', 'employeeName', 'changeName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //// $employees = Firm::find(1)->employees; 
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
