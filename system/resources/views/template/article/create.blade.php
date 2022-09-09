@extends('template.admin.base')

@section('admin_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Articel
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/article') }}" method="POST" >
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group ">
                                <label for="" class="control-label">Write</label>
                                <input type="text" class="form-control" name="write">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i> save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
