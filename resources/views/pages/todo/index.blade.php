@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="page-title">My TODO List</h2>
            </div>
            <div class="col-lg-12 mt-5">
                <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input class="form-control" type="text" name="title" placeholder="Enter Task">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-12 mt-5">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th scope="col">Count</th>
                            <th scope="col">Tital</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $key => $task)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $task->title }}</td>
                                <td>
                                    @if ($task->done == 0)
                                        <span class="badge bg-warning">Not Completed</span>
                                    @else
                                    <span class="badge bg-success">Completed</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('todo.delete',$task->id) }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                                    <a href="{{ route('todo.done',$task->id) }}" class="btn btn-success"><i class="bi bi-check-circle-fill"></i></a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@push('css')
    <style>
        .page-title {
            margin-top: 5vh;
            font-weight: bold;
            color: darkblue;
            font-family: system-ui;
        }
    </style>
@endpush
