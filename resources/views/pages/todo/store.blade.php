@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="page-title">My Store</h2>
            </div>
            <div class="col-lg-12">
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
