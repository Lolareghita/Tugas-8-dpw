@extends('template.admin.base')

@section('admin_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">

                <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/article/filter') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama Article</label>
                                <input type="text" class="form-control" name="title" value="{{ $title ?? "" }}">
                            </div>
                            <button class="btn btn-warning float-right"><i class="fa fa-search"></i> Search</button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Article
                        <a href="{{ url('admin/article/create') }}" class="btn btn-dark float-right">
                            <i class="fa fa-plus"> </i>
                            Tambah
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Title</th>
                                <th>Write</th>
                                <th>Date</th>
                                <th>Descripsion</th>
                            </thead>
                            <tbody>
                                @foreach ($list_article as $article)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/article', $article->id) }}" class="btn btn-dark">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('admin/article', $article->id) }}/edit" class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                               @include('template.admin.utils.delete',['url' => url('admin/article', $article->id)]) 
                                            </div>
                                        </td>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->write }}</td>
                                        <td>{{ $article->created_at->diffForHumans() }}</td>
                                        <td>{{ $article->description }}</td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
