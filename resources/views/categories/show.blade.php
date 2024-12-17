@extends('layouts.app')

@section('content')
    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        {{ __('Category') }}
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">{{ $category->name }}</h2>
                        <p class="card-text">{{ $category->description }}</p>
                        <a class="btn btn-secondary" href="{{ route('categories.index') }}">{{ __('Back') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
