<?php

namespace App\Http\Controllers;
use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'numero' => 'required',

        ]);

        $imageName = time() . '.' . $request->file->extension();
        // $request->image->move(public_path('images'), $imageName);
        $request->file->storeAs('public/images', $imageName);

        $postData = ['name' => $request->name, 'email' => $request->email,'numero' => $request->numero, 'address' => $request->address, 'url' => $imageName];


        Association::create($postData);

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
            'numero' => 'required|min:8|max:8',
        ]);
        $imageName = '';
        if ($request->hasFile('file')) {
          $imageName = time() . '.' . $request->file->extension();
          $request->file->storeAs('public/images', $imageName);
          if ($association->url) {
            Storage::delete('public/images/' . $association->url);
          }
        } else {
          $imageName = $association->url;
        }
        $postData = ['name' => $request->name, 'email' => $request->email,'numero' => $request->numero, 'address' => $request->address, 'url' => $imageName];

        // $association->fill($request->post())->save();
        $association->update($postData);

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
        Storage::delete('public/images/' . $association->url);
        $association->delete();
        return redirect()->route('associations.index')->with('success','association has been deleted successfully');
    }

}
