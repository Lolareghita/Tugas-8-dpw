@extends('template.client.base')

@section('client_content')

    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h1>{{ $article->title }}</h1>
                    <hr>
                    <strong> write : {{ $article->write }}</strong>
                    <p>
                        {{ $article->description }}
                    </p>
                    <hr>
                    <div class="container">
                        <form action="" method="POST">
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

                        <br>
                        <br>
                        <br>
                        <br>
                        <hr>
                        <div class="">
                            <h1>Comment</h1>
                            <hr>
                            @foreach ($list_coment as $coment)

                                <div class=" form-group">
                                    <p>
                                    <h4>{{ $coment->nama }}</h4>
                                    <p>{{ $coment->created_at->diffForHumans() }}</p>
                                    <p>{{ $coment->isi }}</p>
                                    </p>

                                </div>
                                <hr>

                            @endforeach
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </article>

@endsection
