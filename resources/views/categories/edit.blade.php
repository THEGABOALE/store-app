@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">{{ __('Update Category') }}</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('Description') }}</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $category->description }}</textarea>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-secondary" href="{{ route('categories.index') }}">{{ __('Back') }}</a>
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
