@extends('template.admin.base')

@section('admin_content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Article
            </div>
            <div class="card-body">
              <h3>{{ $article->title }}</h3>
              <p> Writer : <strong> {{ $article->penulis->username }}</strong>
              </p>
              <hr>
              <p>{{ $article->description }}
              {{ $article->write }}
              
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
