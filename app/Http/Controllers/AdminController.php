<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use Storage;
use Validator;

class AdminController extends Controller
{
    public function index(){
        return view('pages.admin.index');
    }

    public function upload(Request $request){
        $file = $request->file('file');
        $v = Validator::make(
            $request->all(),
            ['file' => 'required|mimes:jpeg,jpg,png|max:10000']
        );
        if($v->fails()) {
            return Response::json(['error' => $v->errors()]);
        }
        //Use some method to generate your filename here. Here we are just using the ID of the image
        $id = uniqid('', true);
        $filename = 'uvis'.$id.'.'.$file->getClientOriginalExtension();
        //Push file to S3
        \Tinify\setKey(\Config::get('services.tinify.key'));
        $image = \Tinify\fromBuffer(file_get_contents($file))->resize(array('method' => 'fit','width' => 1920,'height' => 1080))->toBuffer();
        $move = Storage::disk('s3')->put('images/' . $filename, $image);
        Storage::disk('s3')->setVisibility('images/'.$filename, 'public');
        if($move){
            return Response::json(['url'=> 'http://d4p17temvc0sy.cloudfront.net/images/'. $filename, 'id' => $id]);
        }else{
            return Response::json(['error'=>true]);
        }
    }
}
