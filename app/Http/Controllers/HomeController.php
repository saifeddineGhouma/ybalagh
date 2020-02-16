<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Reclamation;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
    }
    public function liste()
    {
        $reclamations=Reclamation::where('user_id',Auth::user()->id)->get();
        return view('front.reclamations',compact('reclamations'));
    }
    public function create()
    {
        $categories=Categorie::all();
      
        return view('front.createReclamation',compact('categories'));
    }
    public function store( Request $request)
    {
        $reclamation=new Reclamation();
        $reclamation->description=$request->description;
        $reclamation->categorie_id=$request->categorie_id;
        $reclamation->user_id=Auth::user()->id;
        $reclamation->adresse=$request->adresse;
        $path = $request->file('photo')->store('public/Photo');
        $reclamation->photo=$path;

        $reclamation->save();
        return \Redirect::route('reclamation.liste');


    }
    public function edit($id)
    {
       $reclame=Reclamation::find($id);
       $categories=Categorie::all();
       return view('front.edit-reclamation',compact('reclame','categories'));

    }
    public function update( Request $request , $id)
    {
        $reclamation= Reclamation::find($id);
        $reclamation->description=$request->description;
        $reclamation->categorie_id=$request->categorie_id;
        $reclamation->user_id=Auth::user()->id;
        $reclamation->adresse=$request->adresse;
        if($request->hasFile('photo'))
        { 
            $path = $request->file('photo')->store('public/Photo');
        $reclamation->photo=$path;

        }
       

        $reclamation->save();

        return \Redirect::route('reclamation.liste');

        


    }
   
}
