@extends('admin.layout.app')

@section('content')
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Projects</li>
            </ul>
        </div>
    </div>

    <section class="charts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h2 class="h5 display">Projects</h2>
                                <a class="btn btn-success btn-sm" href="{{ route('project.create') }}" role="button">Create</a>
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
                                    @foreach($projects as $project)
                                    <tr>
                                        <th scope="row">{{ $project->id }}</th>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ substr($project->description, 0, 100) }}</td>
                                        <td>{{ $project->category_id }}</td>
                                        <td>{{ $project->author }}</td>
                                        <td>{{ $project->image }}</td>
                                        <td>
                                            <button class='btn btn-lg ' style='background-color:transparent;'>
                                                <i class="fa fa-times"></i>
                                            </button>

                                            <a class="btn btn-success btn-xs btn-block"
                                               href="{{ route('project.edit', $project->id) }}"
                                               role="button"><i class="fa fa-times"></i>
                                            </a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['project.destroy', $project->id],'style'=>'display:inline']) !!}
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