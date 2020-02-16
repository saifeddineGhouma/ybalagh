<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categorie;
use App\Reclamation;
class AdminController extends Controller
{
    public function __construct()
    {

        $this->middleware('admin');//->except(['index'])
    }
    public function index()

    {
        return view('Admin.index');
    }
    public function CreateCategorie()
    {
        return view('Admin.Categorie.create');
    }
    public function StoreCategorie(Request $request)
    {

        $categorie= new Categorie();
        $categorie->title=$request->title;
        $categorie->description=$request->description;
        $categorie->save();

        return \Redirect::route('reclame.liste.admin');


    }
    public function reclame()
    {
        $reclamations= Reclamation::all();
        return view('Admin.Reclame.index',compact('reclamations'));
    }
    public function editReclamation($id)
    {
        $reclame=Reclamation::find($id);

        return view('Admin.Reclame.edit',compact('reclame'));
    }
    public function updateReclame(Request $request,$id)
    {
        $reclame=Reclamation::find($id);

        $reclame->statu=$request->statu;
        $reclame->save();
        return \Redirect::route('reclame.liste.admin');

    }
}
