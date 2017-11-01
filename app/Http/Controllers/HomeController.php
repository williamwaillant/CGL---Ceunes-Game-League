<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formulario;

class HomeController extends Controller
{
    private $formu;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(formulario $formu)
    {
        $this->formu=$formu;
        $this->middleware('auth');
    }




    public function index()
    {
        $formus=formulario::all();
        return view('home',compact('formus'));
    }

     public function update($id, Request $request)
   {
      
      // $formus= formulario::find($id);
      // $formus->namec= $request->namec;
      // $formus->emailc= $request->emailc;
      
     
      //  $formus->update();
       return redirect()->route('index');
   }
   public function tes()
   {
    return view('index');
   }
}
