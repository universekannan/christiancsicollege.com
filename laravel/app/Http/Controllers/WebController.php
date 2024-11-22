<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{

  public function home(){
    return view('index');
  }
  
   public function about(){
    return view('about');
  } 
    
   public function correspondent_messag(){
    return view('correspondent_messag');
  } 
      
   public function principal_message(){
    return view('principal_message');
  } 
   
   public function correspondent_message(){
    return view('correspondent_message');
  } 
      
   public function bpt(){
    return view('bpt');
  }

  public function admission(){
    return view('admission');
  } 
      
   public function anatomy(){
    return view('anatomy');
  } 
      
   public function physiology(){
    return view('physiology');
  } 
      
   public function exercise_therapy(){
    return view('exercise_therapy');
  } 
      
   public function massage_and_manipulative_therapy(){
    return view('massage_and_manipulative_therapy');
  } 
      
   public function electrotherapy(){
    return view('electrotherapy');
  } 
      
   public function cardiology_and_intensive_care_unit(){
    return view('cardiology_and_intensive_care_unit');
  } 
      
   public function orthopaedics(){
    return view('orthopaedics');
  } 
      
   public function laser_therapy(){
    return view('laser_therapy');
  } 
      
   public function neurology(){
    return view('neurology');
  } 
      
   public function rehabilitation(){
    return view('rehabilitation');
  } 
      
   public function fitness_and_yoga(){
    return view('fitness_and_yoga');
  } 
      
   public function meditation_hall(){
    return view('meditation_hall');
  } 
      
   public function library(){
    return view('library');
  } 
        
   public function facilities(){
    return view('facilities');
  } 
  
   public function brochures(){
	   $sql = " select * from brochure where status='Active'";
       $brochure = DB::select( DB::raw( $sql ) );
    return view( 'brochure', compact( 'brochure' ) );

  } 
        
   public function gallery(){
    return view('gallery');
  } 
  
   public function contact(){
    return view('contact');
  } 
  
  
}
