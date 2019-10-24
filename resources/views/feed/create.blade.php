@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subir nueva noticia</div>
           
                <div class="card-body">
                    <form method="POST" action="{{route('feed.save')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-3 col-form-label text-md-right">Titulo</label>
                            <div class="col-md-7">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" required>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body" class="col-md-3 col-form-label text-md-right">Descripcion</label>
                            <div class="col-md-7">
                                <textarea id="body" name="body" {{$errors->has('body') ? 'is-invalid' : ''}} class="form-control" ></textarea>
                                @if($errors->has('body'))
                                    <span class="invalid -feedback" role="alert">
                                        <strong>{{$errors->first('body')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image_path" class="col-md-3 col-form-label text-md-right">Imagen</label>
                            <div class="col-md-7">
                                <input id="image_path" type="file" name="image_path" class="form-control" {{$errors->has('image_path') ? 'is-invalid' : ''}}require/>
                                @if($errors->has('image_path'))
                                    <span class="invalid -feedback" role="alert">
                                        <strong>{{$errors->first('image_path')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="source" class="col-md-3 col-form-label text-md-right">Fuente</label>
                            <div class="col-md-7">
                                <input id="source" type="text" class="form-control{{ $errors->has('source') ? ' is-invalid' : '' }}" name="source" required>

                                @if ($errors->has('source'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('source') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <input type="submit" class="btn btn-primary" value="Subir noticia">
                                </div>
                        </div>

                    </form>
                </div>
            </div>
    
        </div>
    </div>
</div>
@endsection
