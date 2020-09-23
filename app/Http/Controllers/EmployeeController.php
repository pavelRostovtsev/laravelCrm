<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employees = new Employee();
        $employees->name_employee = $request->name_employee;
        $employees->email = $request->email;
        $employees->save();

        return redirect()->route('employees.index')->with('success', 'Смена готова!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees = Employee::find($id);            
                if(!$employees) {
                    return redirect()->route('post.index')->withErrors('Вы не можете это редактировать')
                        ->withErrors('Ты куда-то не туда пошел');
                }
        return view('employees.show', compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = Employee::find($id);

        if(!$employees) {
            return redirect()->route('employees.index')->withErrors('Вы не можете редактировать данный пост')
                ->withErrors('Ты куда-то не туда пошел');
        }

        return view('employees.edit', compact('employees'));
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
        $employees = Employee::find($id);
        if(!$employees) {
            return redirect()->route('employees.index')->withErrors('Вы не можете редактировать данный пост')
                ->withErrors('Ты куда-то не туда пошел');
        }
        $employees->name_employee = $request->name_employee;
        $employees->email = $request->email;

        $employees->update();
        return redirect()->route('employees.index')->with('success', 'Пост успешно отредактирован');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = Employee::find($id);
        if(!$employees) {
            return redirect()->route('employees.index')->withErrors('Вы не можете редактировать данный пост')
                ->withErrors('Ты куда-то не туда пошел');
        }
        $employees->delete();
        return redirect()->route('employees.index')->with('success', 'Пост удален');
    }
}