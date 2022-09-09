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
              <form action="{{ url('admin/coment') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="" class="control-label"><strong> Nama</strong></label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">
                        <strong>Comment</strong> :
                    </label>
                    <br>
                    <textarea name="isi" name="" id="" cols="30" rows="10" class="form-control">

                </textarea>
                </div>

                <br>
                <button style="float: right" class="btn btn-dark"><i class="fa fa-save"></i>
                    Comment</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
