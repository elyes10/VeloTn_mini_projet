<?php

namespace App\Http\Controllers;
use App\Models\bike;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\EventRequest  $request
     * @return Response
     */
    public function store(EventRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        (new event)->create($request->post());

        return redirect()->route('events.index')->with('success','Event has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param event $event
     * @return Response
     */
    public function show(Event $event)
    {
        return view('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param event $event
     * @return Response
     */
    public function edit(Event $event)
    {
        return view('events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateeventRequest $request
     * @param event $event
     * @return Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        $event->fill($request->post())->save();

        return redirect()->route('events.index')->with('success','Event Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param event $event
     * @return Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success','Event has been deleted successfully');
    }
}
