@extends('layouts.app')

@section('page_title', ' - Add')

@section('content')
    <h1 class="mt-5">Add</h1>

    <form method="post" action="{{ route('add.post') }}">
        @csrf
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description">
                @if ($errors->has('description'))
                    <small class="text-danger">
                        {{ $errors->first('description') }}
                    </small>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
@endsection
