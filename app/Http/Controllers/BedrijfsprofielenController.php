<?php

namespace App\Http\Controllers;

use App\Bedrijfsprofiel;
use App\Http\Requests;
use App\Http\Requests\BedrijfsprofielRequest;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Storage;

class BedrijfsprofielenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Bedrijfsprofiel::all();
        return view('pages.admin.bedrijfsprofielen.index',compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.bedrijfsprofielen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BedrijfsprofielRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BedrijfsprofielRequest $request)
    {
        $profile = new Bedrijfsprofiel();
        $profile->title = $request->title;
        $profile->body = $request->body;
        $profile->picture = $this->uploadImage($request->file('picture'),'images','fit',1920,1080);
        $profile->save();
        Flash::success('Bedrijfsprofiel opgelagen');
        return redirect('/bedrijfsprofiel');
    }

    private function uploadImage($file,$location,$method,$width,$height){
        $filename = 'uvis'.uniqid('', true).'.'.$file->getClientOriginalExtension();
        \Tinify\setKey(\Config::get('services.tinify.key'));
        $image = \Tinify\fromBuffer(file_get_contents($file))->resize(array('method' => $method,'width' => $width,'height' => $height))->toBuffer();
        Storage::disk('s3')->put($location.'/'.$filename, $image);
        Storage::disk('s3')->setVisibility($location.'/'.$filename, 'public');
        return 'http://d4p17temvc0sy.cloudfront.net/'.$location.'/'. $filename;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Bedrijfsprofiel::findOrFail($id);
        return view('pages.admin.bedrijfsprofielen.edit',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = Bedrijfsprofiel::findOrFail($id);
        if($request->file('picture') != ''){
            $profile->title = $request->title;
            $profile->body = $request->body;
            $profile->picture = $this->uploadImage($request->file('picture'),'images','fit',1920,1080);
            $profile->update();
        } else {
            $profile->update($request->all());
        }
        Flash::success('Bedrijfsprofiel aangepast');
        return redirect('/bedrijfsprofiel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bedrijfsprofiel::destroy($id);
        Flash::success('Bedrijfsprofiel verwijderd');
        return redirect('/bedrijfsprofiel');
    }
}
