<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;

class FrontController extends Controller
{
    //display index page
    public function index(){
        return view('app.welcome');
    }

    public function about(){
        return view('app.about');
    }

    public function reports(){
        $reports = Report::all();
        return view('reports', ['reports'=>$reports]);
    }

    public function reportManager(){
        $reports = Report::all();
        return view('reportManager', ['reportManager'=>$reports]);
    }

    public function reportMaker(){
        return view('reportMaker');
    }

    public function login(){
        return view ('login');
    }

    public function auth(Request $request){
        //hardcoded authentication check
        if($request->email == 'admin@email.com' && $request->password == 'password'){
            $request->session()->put('user_id', 1);
            return redirect()->route('app.welcome');
        }else{
            return redirect()->route('login')->withErrors('Invalid Credentials');
        }
        
    }

    public function logout(Request $request){
        $request->session()->forget('user_id');
        return redirect()->route('app.welcome');
    }

    public function register(){
        return view ('register');
    }

    public function StoreRegister(Request $request){
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->pass,
        ]);

        return redirect()->route('index');

    }

    public function storeReport(Request $request){
            
        Report::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date_time' => $request->date,
            'image' => 'placeholder',
            'status'=> 'Unaddressed',
            
        ]);
        // return $request -> title;
        return redirect()->route('reports');
    }

    public function deleteReport($id){
        $report = Report::find($id);
        if($report){ 
            $report = Report::find($id);
            $report->delete();
            dump($report);
        }
    }

    public function addressReport($id){
        $report = Report::find($id);
        if($report){ 
            $report->status = "Addressed";
            $report->save();
            dump($report);
        }
    }

    // public function dummySave(){
    //     $report = new report();
    //     $report->title = "Portofolio";
    //     $report->description = "Deskripsi portofolio";
    //     $report->image = "images/Ena.png";
    //     $report->date_time = "Asshooe Nowhere";
    //     $report->location = "asdas";
    //     $report->save();
    // }

    // public function portofolioDetail($id){
    //     //uses function findorfail. Finds a row based on ID. findorfail will give a 404 page if this fails
    //     $portofolio = Portofolio::with('category')->findOrFail($id);
    //     return view('app.portofolioDetail', ['portofolio'=>$portofolio]);
    // }

    
    
    
}