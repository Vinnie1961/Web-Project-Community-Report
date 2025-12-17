<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

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

    public function reportMaker(){
        return view('reportMaker');
    }

    public function store(Request $request){

        Report::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date_time' => $request->date,
            'image' => 'placeholder',
            'status'=> 'Unaddressed',
            
        ]);

        return view('reports');
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

    // public function dummyUpdate($id){
    //     $portofolio = Portofolio::find($id);
    //     if($portofolio){ //check if Portofolio exists
    //         $portofolio->title = "Portofolio Pertama";
    //         $portofolio->save();
    //         dump($portofolio);
    //     }else{
    //         return "Data doesn't exist";
    //     }
    // }
    
    // public function dummyDelete($id){
    //     $portofolio = Portofolio::find($id);
    //     if($portofolio){ //check if Portofolio exists
    //         $portofolio = Portofolio::find($id);
    //         $portofolio->delete();
    //         dump($portofolio);
    //     }else{
    //         return "Data doesn't exist";
    //     }
    // }
}