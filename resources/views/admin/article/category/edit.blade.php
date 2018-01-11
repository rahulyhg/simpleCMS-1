@extends('admin.layout.app')
@section('title', 'Editing category: ' . $category->name)
@section('content')
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Articles</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ul>
        </div>
    </div>
    <section class="charts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h2 class="h5 display">Editing category: {{ $category->name }}</h2>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['url' => route('category.update', $category->id), 'class' => 'form-horizontal', 'method' => 'put'])!!}

                            <div class="form-group row">
                                {!! Form::label('title', 'Name', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('name', $category->name, ['class' => 'form-control form-control-success', 'placeholder' => 'Enter name of category...']) !!}
                                    <small class="form-text">Title length max 255 chars.</small>
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <div class="col-sm-6 offset-sm-2">
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>
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