<?php

namespace App\Http\Controllers;

use App\Models\Fondateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class FondateurController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
       $fondateurs = Fondateur::orderBy('id','desc')->paginate(5);
       return view('fondateurs.index', compact('fondateurs'));
   }
       /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
       return view('fondateurs.create');
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
           'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


       ]);

       $imageName = time() . '.' . $request->file->extension();
       // $request->image->move(public_path('images'), $imageName);
       $request->file->storeAs('public/images', $imageName);

       $postData = ['name' => $request->name, 'description' => $request->description, 'url' => $imageName];


       Fondateur::create($postData);

       return redirect()->route('fondateurs.index')->with('success','fondateur has been created successfully.');
   }
       /**
   * Display the specified resource.
   *
   * @param  fondateur  $fondateur
   * @return \Illuminate\Http\Response
   */
   public function show(Fondateur $fondateur)
   {
       return view('fondateurs.show',compact('fondateurs'));
   }
       /**
   * Show the form for editing the specified resource.
   *
   * @param  fondateur  $fondateur
   * @return \Illuminate\Http\Response
   */
   public function edit(Fondateur $fondateur)
   {
       return view('fondateurs.edit',compact('fondateur'));
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Fondateur  $fondateur
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, Fondateur $fondateur)
   {
       $request->validate([
        'name' => 'required',
        'description' => 'required',
       ]);
       $imageName = '';
       if ($request->hasFile('file')) {
         $imageName = time() . '.' . $request->file->extension();
         $request->file->storeAs('public/images', $imageName);
         if ($fondateur->url) {
           Storage::delete('public/images/' . $fondateur->url);
         }
       } else {
         $imageName = $fondateur->url;
       }
       $postData = ['name' => $request->name, 'description' => $request->description, 'url' => $imageName];

       // $fondateur->fill($request->post())->save();
       $fondateur->update($postData);

       return redirect()->route('fondateurs.index')->with('success','fondateur Has Been updated successfully');
   }

  /**
   * Remove the specified resource from storage.
   *
   * @param  Fondateur  $fondateur
   * @return \Illuminate\Http\Response
   */
   public function destroy(Fondateur $fondateur)
   {
       Storage::delete('public/images/' . $fondateur->url);
       $fondateur->delete();
       return redirect()->route('fondateurs.index')->with('success','fondateur has been deleted successfully');
   }
}
