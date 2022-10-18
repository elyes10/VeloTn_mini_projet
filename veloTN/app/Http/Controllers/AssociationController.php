<?php

namespace App\Http\Controllers;
use App\Models\Association;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $associations = Association::orderBy('id','desc')->paginate(5);
        return view('associations.index', compact('associations'));
    }
        /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('associations.create');
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
            'email' => 'required',
            'address' => 'required',
            'url' => 'required',
            'numero' => 'required',

        ]);

        Association::create($request->post());

        return redirect()->route('associations.index')->with('success','Association has been created successfully.');
    }
        /**
    * Display the specified resource.
    *
    * @param  association  $association
    * @return \Illuminate\Http\Response
    */
    public function show(Association $association)
    {
        return view('associations.show',compact('association'));
    }
        /**
    * Show the form for editing the specified resource.
    *
    * @param  association  $association
    * @return \Illuminate\Http\Response
    */
    public function edit(Association $association)
    {
        return view('associations.edit',compact('association'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Association  $association
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Association $association)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'url' => 'required',
            'numero' => 'required|min:8|max:8',
        ]);

        $association->fill($request->post())->save();

        return redirect()->route('associations.index')->with('success','Association Has Been updated successfully');
    }

   /**
    * Remove the specified resource from storage.
    *
    * @param  Association  $association
    * @return \Illuminate\Http\Response
    */
    public function destroy(Association $association)
    {
        $association->delete();
        return redirect()->route('associations.index')->with('success','association has been deleted successfully');
    }

}
