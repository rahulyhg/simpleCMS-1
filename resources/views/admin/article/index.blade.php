@extends('admin.layout.app')

@section('content')
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Articles</li>
            </ul>
        </div>
    </div>

    <section class="charts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h2 class="h5 display">Articles</h2>
                                <a class="btn btn-success btn-sm" href="{{ route('article.create') }}" role="button">Create</a>
                                <a class="btn btn-success btn-sm" href="{{ route('category.index') }}" role="button">Manager categories</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($articles as $article)
                                    <tr>
                                        <th scope="row">{{ $article->id }}</th>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ substr($article->description, 0, 100) }}</td>
                                        <td>{{ $article->category_id }}</td>
                                        <td>{{ $article->author }}</td>
                                        <td>{{ $article->image }}</td>
                                        <td><a class="btn btn-success btn-xs btn-block"
                                               href="{{ route('article.show', $article->id) }}"
                                               role="button">Show
                                            </a>

                                            <a class="btn btn-success btn-xs btn-block"
                                               href="{{ route('article.edit', $article->id) }}"
                                               role="button">Edit
                                            </a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['article.destroy', $article->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-success btn-xs btn-block']) !!}
                                            {!! Form::close() !!}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop