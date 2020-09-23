<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Change;

class ChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $сhanges = Change::all();
        return view('changes.index',compact('сhanges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('changes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $сhanges = new Change();
        $сhanges->name_change = $request->name;
        $сhanges->save();

        return redirect()->route('changes.index')->with('success', 'Смена готова!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $сhanges = Change::find($id);            
                if(!$сhanges) {
                    return redirect()->route('post.index')->withErrors('Вы не можете редактировать данный пост')
                        ->withErrors('Ты куда-то не туда пошел');
                }
        return view('changes.show', compact('сhanges'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $сhanges = Change::find($id);

        if(!$сhanges) {
            return redirect()->route('сhanges.index')->withErrors('Вы не можете редактировать данный пост')
                ->withErrors('Ты куда-то не туда пошел');
        }

        return view('changes.edit', compact('сhanges'));
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
        $сhanges = Change::find($id);
        if(!$сhanges) {
            return redirect()->route('сhanges.index')->withErrors('Вы не можете редактировать данный пост')
                ->withErrors('Ты куда-то не туда пошел');
        }
        $сhanges->name_change = $request->name;

        $сhanges->update();
        return redirect()->route('changes.index', compact('сhanges'))->with('success', 'Пост успешно отредактирован');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $сhanges = Change::find($id);
        if(!$сhanges) {
            return redirect()->route('changes.index')->withErrors('Вы не можете редактировать данный пост')
                ->withErrors('Ты куда-то не туда пошел');
        }
        $сhanges->delete();
        return redirect()->route('changes.index')->with('success', 'Пост удален');
    }
}

