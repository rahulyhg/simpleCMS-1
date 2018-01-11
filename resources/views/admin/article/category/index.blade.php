@extends('admin.layout.app')
@section('title', 'Article categories')
@section('content')
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Articles</a></li>
                <li class="breadcrumb-item active">Article categories</li>
            </ul>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <section class="charts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h2 class="h5 display">Article categories</h2> - <a class="btn btn-primary btn-sm" href="{{ route('category.create') }}" role="button">Create</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($articles as $article)
                                    <tr>
                                        <th scope="row">{{ $article->id }}</th>
                                        <td>{{ $article->name }}</td>
                                        <td>{{ $article->created_at }}</td>
                                        <td>{{ $article->updated_at }}</td>
                                        <td>
                                            <a class="btn btn-success btn-xs"
                                               href="{{ route('category.edit', $article->id) }}"
                                               role="button">Edit
                                            </a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $article->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-success btn-xs']) !!}
                                            {!! Form::close() !!}
                                        </td>
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