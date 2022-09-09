@extends('template.admin.base')

@section('admin_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        coment
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Date</th>
                                <th>isi</th>
                            </thead>
                            <tbody>
                                @foreach ($list_coment as $comment)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>
                                      <div class="btn-group">
                                        <a href="{{ url('admin/coment', $comment->id) }}" class="btn btn-dark">
                                          <i class="fa fa-comment"></i>
                                      </a>
                                      </div>
                                  </td>
                                  <td>{{ $comment->nama  }}</td>
                                  <td>{{ $comment->created_at->diffForHumans()  }}</td>
                                  <td>{{ $comment->isi }}</td>
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
