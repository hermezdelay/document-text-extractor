<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use thiagoalessio\TesseractOCR\TesseractOCR;

class UpdateImageController extends Controller
{
    //

    public function upload(Request $request){
        // i'll do validation on the request
        $request->validate([
            "image"=>"required|mimes:png,jpg,jpeg|max:50000"
        ]);
        $image = $request->image;

        $image_Path = Storage::disk('public')->putFile('images', $image);
        $tessereact = new TesseractOCR(public_path("storage/$image_Path"));

        $text = $tessereact->run();
        return response([
            "text"=>$text
            ], Response::HTTP_OK);
    }


    public function index(Request $request){
       
        return "salam w khlass";
    }
}
