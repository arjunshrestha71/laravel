<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontController extends Controller
{
   public function index(){
   		return view ('index');
   }

   public function catlist($id){
   		$post = Post::where('categories_id', $id)->get();
   		return view ('catlist', compact('post'));

   }

   public function details($id){
   		$details = Post::where('id', $id)->get();
   		return view ('details', compact('details'));

   }
}
