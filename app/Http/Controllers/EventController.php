<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Firm;
use App\Models\Employee;
use App\Models\Change;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $firms = Firm::all();
        $employees = Employee::all();
        $changes = Change::all();
        return view('events.create',compact('firms','employees','changes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = Event::create($request->all());
        return redirect()->route('events.index')->with('success', 'событие созданно!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        $firmName = $event->firm->name;
        $employeeName = $event->employee->name_employee;
        $changeName = $event->change->name_change;
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
        $event = Event::find($id);
        $firms = Firm::all();
        $employees = Employee::all();
        $changes = Change::all();
        return view('events.edit', compact('event','firms','employees', 'changes'));
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
        $event = Event::find($id);
        if(!$event) {
            return redirect()->route('events.index')->withErrors('Вы не можете редактировать данный пост')
                ->withErrors('Ты куда-то не туда пошел');
        }
        $event->name_event = $request->name_event;
        $event->price = $request->price;
        $event->type_work = $request->type_work;
        $event->firm_id  = $request->firm_id ;
        $event->employee_id = $request->employee_id;
        $event->date = $request->date;
        $event->change_id  = $request->change_id;

        $event->update();
        return redirect()->route('events.index')->with('success', 'Пост успешно отредактирован');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        if(!$event) {
            return redirect()->route('events.index')->withErrors('Вы не можете удалять это')
                ->withErrors('Ты куда-то не туда пошел');
        }
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Пост удален');
    }
}
