<?php  

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model{
  protected $table = "article";

  function penulis(){
    return $this->belongsTo(User::class, 'id_user');
  }
}