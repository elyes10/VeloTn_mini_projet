<?php

namespace App\Http\Controllers;
use App\Models\event;
use App\Models\ride;
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
        $events = (new event())->orderBy('id','desc')->paginate(5);
        return view('events.index', compact('events'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function indexback()
    {
        $events = (new event)->orderBy('id','desc')->paginate(10000);
        return view('events.index_backend', compact('events'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required',
        ]);

        event::create($request->post());

        return redirect()->route('events.index_backend')->with('success','Event has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param event $event
     * @return Response
     */
    public function show(event $event)
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
    public function update(Request $request, event $event)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        $event->fill($request->post())->save();

        return redirect()->route('events.index_backend')->with('success','Event Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param event $event
     * @return Response
     */
    public function destroy(event $event)
    {
        $event->delete();
        return redirect()->route('events.index_backend')->with('success','Event has been deleted successfully');
    }
}
