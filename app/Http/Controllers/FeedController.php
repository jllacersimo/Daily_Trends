<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Feed;

class FeedController extends Controller
{
    public function create(){
        return view('feed.create');
    }

    public function save(Request $request){
        
        //validacion
        $validate=$this->validate($request,[
            'title'=>'required|string|max:100',
            'body'=>'required|string|max:500',
            'image_path'=>'required|mimes:jpg,jpeg,png,gif',
            'source'=>'required|string|max:255',
        ]);

        //Recoger datos
        $title=$request->input('title');
        $body=$request->input('body');
        $image_path=$request->file('image_path');
        $source=$request->input('source');

        //Asignar valores al objeto
        $now = new \DateTime();

        $user=\Auth::user();
        $feed=new Feed();
        $feed->title=$title;
        $feed->body=$body;
        $feed->source=$source;
        $feed->user_id=$user->id;
        $feed->date=$now;

        //Subir fichero
        if($image_path){
            $image_path_name=time().$image_path->getClientOriginalName();
            Storage::disk('images')->put($image_path_name, File::get($image_path));
            $feed->imagen=$image_path_name;
        }

        $feed->save();

        return redirect()->route('home')->with([
            'message'=>'La noticia se ha sido subida correctamente!!'
        ]);
       
    }
}
