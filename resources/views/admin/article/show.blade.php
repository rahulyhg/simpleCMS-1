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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            {{ $article->title }}
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="card-img-top" src="{{ asset('images/0CyNwzR.jpg') }}" alt="Card image cap">
                                    <strong>Body:</strong><p class="card-text">{{ $article->author }}</p>
                                    <strong>Body:</strong><p class="card-text">{{ $article->created_at }}</p>
                                    <strong>Body:</strong><p class="card-text">{{ $article->updated_at }}</p>
                                </div>
                                <div class="col-md-9">
                                    <strong>Subtitle:</strong><p class="card-text">{{ $article->subtitle }}</p>
                                    <strong>Preview:</strong><p class="card-text">{{ $article->preview }}</p>
                                    <strong>Body:</strong><p class="card-text">{{ $article->body }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            Created at: {{ $article->created_at }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop