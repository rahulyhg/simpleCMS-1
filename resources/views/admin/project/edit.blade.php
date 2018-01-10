@extends('admin.layout.app')
@section('title', 'Editing article')
@section('content')
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Articles</a></li>
                <li class="breadcrumb-item active">Editing article</li>
            </ul>
        </div>
    </div>
    <section class="charts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h2 class="h5 display">Editing article</h2>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['url' => route('article.update', $article->id), 'class' => 'form-horizontal', 'method' => 'put', 'enctype' => 'multipart/form-data'])!!}
                            <div class="form-group row">
                                {!! Form::label('title', 'Title*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('title', $article->title, ['class' => 'form-control form-control-success', 'placeholder' => 'Enter title...']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('subtitle', 'Subtitle*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('subtitle', $article->subtitle, ['class' => 'form-control form-control-success', 'placeholder' => 'Enter title...']) !!}
                                    <small class="form-text">Is not required.</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('preview', 'Preview*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::textarea('preview', $article->preview, ['class' => 'form-control form-control-success', 'placeholder' => 'Enter description...']) !!}
                                    <small class="form-text">Title length max </small>
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('body', 'Body*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::textarea('body', $article->body, ['class' => 'form-control form-control-success', 'placeholder' => 'Enter description...']) !!}
                                    <small class="form-text">Title length max </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('category', 'Category', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('category_id', $categories, $article->category_id, ['class' => 'form-control form-control-success', 'placeholder' => 'Select category please...']) !!}
                                    <small class="form-text">Title length max 255 chars.</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('image', 'Image*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::file('image', ['class' => 'form-control']) !!}
                                    <?php if(file_exists(public_path('/images/'. $article->image))){ ?>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ asset('images/'.$article->image) }}" alt="Card image cap">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <div class="col-sm-6 offset-sm-2">

                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop