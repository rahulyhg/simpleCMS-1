@extends('admin.layout.app')

@section('content')
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Articles</a></li>
                <li class="breadcrumb-item active">Write new article</li>
            </ul>
        </div>
    </div>
    <section class="charts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h2 class="h5 display">Create new article</h2>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['url' => route('project.store'), 'class' => 'form-horizontal', 'method' => 'post', 'enctype' => 'multipart/form-data'])!!}

                            <div class="form-group row">
                                {!! Form::label('title', 'Title*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('title', old('title'), ['class' => 'form-control form-control-success', 'placeholder' => 'Enter title...']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('subtitle', 'Subtitle*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('subtitle', old('subtitle'), ['class' => 'form-control form-control-success', 'placeholder' => 'Enter title...']) !!}
                                    <small class="form-text">Is not required.</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('preview', 'Description*', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::textarea('description', old('description'), ['class' => 'form-control form-control-success', 'placeholder' => 'Enter description...']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('body', 'Date', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('date', old('date'), ['class' => 'form-control form-control-success', 'placeholder' => 'Enter description...']) !!}
                                    <small class="form-text">Title length max </small>
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('body', 'Link', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('link', old('link'), ['class' => 'form-control form-control-success', 'placeholder' => 'Enter description...']) !!}
                                    <small class="form-text">Title length max </small>
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('body', 'Link', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('link', old('link'), ['class' => 'form-control form-control-success', 'placeholder' => 'Enter description...']) !!}
                                    <small class="form-text">Title length max </small>
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('body', 'Link', ['class' => 'col-sm-2 form-control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('test1', old('link'), ['data-role' => 'tagsinput', 'placeholder' => 'Enter tags...']) !!}
                                    <small class="form-text">Title length max </small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <select>
                                    <option value="300" onclick="anders('')">&#8364; 300,-</option>
                                    <option value="jQuery" onchange="$('test1').tagsinput('add', {'text': 'Net'});">jQuery</option>
                                    <option value="Angular">Angular</option>
                                    <option value="React">React</option>
                                    <option value="Vue">Vue</option>
                                </select>

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