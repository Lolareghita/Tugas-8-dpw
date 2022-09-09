<?php 


namespace App\Http\Controllers;

use App\Models\Comment;

class ComentController extends Controller {
  function store (){
    
    $comment = new Comment();
    $comment->isi = request('isi');
    $comment->nama = request('nama');
    $comment->save();

    return redirect()->back();
  }
}