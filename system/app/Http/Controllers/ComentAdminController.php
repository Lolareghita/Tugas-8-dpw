<?php 


namespace App\Http\Controllers;

use App\Models\Comment;

class ComentAdminController extends Controller {

    function index (){
      $data['list_coment'] = Comment::all();
      return view('template.coment.index', $data);
    }

    function store (){
    
      $comment = new Comment();
      $comment->isi = request('isi');
      $comment->nama = request('nama');
      $comment->save();
  
      return redirect('admin/coment');
    }

  function show(Comment $comment){
    $data['comment'] = $comment;
    return view('template.coment.show', $data);
  }
  
}