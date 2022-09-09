@extends('template.admin.base')

@section('admin_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        edit
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/article', $article->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="" class="control-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $article->title }}">
                            </div>
                            <div class="form-group ">
                                <label for="Write" class="control-label">Write</label>
                                <input type="text" class="form-control" name="write" value="{{ $article->write }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"> {{ $article->description }}
                    </textarea>
                            </div>

                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i> save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
