<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use Validator;
use Responce;
use Auth;
use Illuminate\Support\Facades\input;
class PostController extends Controller

{

	public function myPosts()

    {

        return view('home');

    }
    public function addPost(Request $req){

      $rules= array(
        'venue' => 'required',
        'date' => 'required',
        'time' => 'required',
      );
      $validator = Validator::make(input::all(),$rules);
      if($validator->fails())
      	return response::json(array('errors'=>$validator->getMessageBag()->toarray()));

      else{

      	$post = new Post;
      	$post->venue=$req->venue;
      		$post->date=$req->date;
      			$post->time=$req->time;
      			$post->location=$req->location;
      			 $post ->user_id =auth()->id();
      			$post->save();
      			return response()->json($post);
      }
    }
}
