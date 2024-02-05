<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use thiagoalessio\TesseractOCR\TesseractOCR;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    public function index(){
   
    
        return view('home');
    }
 
    public function upload(Request $request){
 
     $image = $request->file('image');
     $filename= date('YmdHi').$image->getClientOriginalName();

     
     //$image_Path = Storage::disk('public')->putFile('images', $image);
     //$fullUrl = "http://localhost:8000/storage/$image_Path";

     $fullUrl = "http://localhost:8000/images/$filename";


     $image-> move(public_path('images'), $filename);
 
     $ocr = new TesseractOCR(public_path("images/$filename"));
     //$ocr->lang('fr','ara');
     $ocr->lang('fra' , 'eng' , 'ara');
     $text = $ocr->run();
 
     return redirect()->back()->with([
        "fullUrl"=>$fullUrl,
        "text"=>$text
    ]);
    
 
     
 
    }
}
