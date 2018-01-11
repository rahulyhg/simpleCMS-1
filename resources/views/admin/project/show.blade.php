@extends('admin.layout.app')
@section('title', $project->title)
@section('content')
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Projects</a></li>
                <li class="breadcrumb-item active">{{ $project->title }}</li>
            </ul>
        </div>
    </div>
    <section class="charts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    @foreach($images as $image)
                                        <img class="card-img-top" src="{{ asset('images/project/'. $image->name) }}" alt="Card image cap"><hr>
                                    @endforeach
                                </div>
                                <div class="col-md-9">
                                    <strong>Title:</strong><p class="card-text">{{ $project->title }}</p>
                                    <strong>Subtitle:</strong><p class="card-text">{{ $project->subtitle }}</p>
                                    <strong>Description:</strong><p class="card-text">{{ $project->description }}</p>
                                    <strong>Date:</strong><p class="card-text">{{ $project->date }}</p>
                                    <strong>Category:</strong><p class="card-text">{{ $project->category_id }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            Created at: {{ $project->created_at }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop