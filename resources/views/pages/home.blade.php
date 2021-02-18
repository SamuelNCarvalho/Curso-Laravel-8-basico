@extends('layouts.app')

@section('page_title', ' - Home')

@section('content')
    <h1 class="mt-5 d-flex justify-content-between align-items-center">
        To Do
        <a href="{{ route('add') }}" class="btn btn-primary">Add</a>
    </h1>

    <ul class="list-group">
        @foreach ($items as $item)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $item->description }}
                <div>
                    <a href="{{ route('remove', $item->id) }}" class="badge badge-danger">Remove</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
