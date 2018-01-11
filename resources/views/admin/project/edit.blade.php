@extends('admin.layout.app')
@section('title', 'Editing: ' . $project->title)
@section('content')
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Projects</a></li>
                <li class="breadcrumb-item active">Editing: {{ $project->title }}</li>
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
                            {!! Form::open(['url' => route('project.update', $project->id), 'class' => 'form-horizontal', 'method' => 'put', 'enctype' => 'multipart/form-data'])!!}

                            <!-- Title -->
                            <div class="form-group row">
                                {!! Form::label('title', 'Title:*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('title', $project->title, ['class' => 'form-control form-control-success', 'placeholder' => 'Enter title...']) !!}
                                </div>
                            </div>
                            <!--  -->
                            <div class="form-group row">
                                {!! Form::label('subtitle', 'Subtitle:', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('subtitle', $project->subtitle, ['class' => 'form-control form-control-success', 'placeholder' => 'Enter title...']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('preview', 'Description:*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::textarea('description', $project->description, ['class' => 'form-control form-control-success', 'placeholder' => 'Enter description...']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('body', 'Date:*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('date', $project->date, ['class' => 'form-control form-control-success', 'placeholder' => 'Enter date...']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('body', 'Link:*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('link', $project->link, ['class' => 'form-control form-control-success', 'placeholder' => 'Insert link...']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('body', 'Category:*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('category', $categories, $project->category_id,['class' => 'form-control form-control-success', 'placeholder' => 'Select category...']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('body', 'Tags', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('test1', old('link'), ['data-role' => 'tagsinput', 'placeholder' => 'Enter tags...']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('body', 'Images', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::file('image[]', ['multiple' => 'multiple','class' => 'form-control form-control-success']) !!}
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <div class="col-sm-4 offset-sm-2">
                                    {{ Form::submit('Create', ['class' => 'btn btn-primary btn-block']) }}
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