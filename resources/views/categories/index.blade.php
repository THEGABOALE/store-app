@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-4">Categories</h1>
                <div class="d-flex justify-content-end mb-3">
                    <a class="btn btn-primary" href="{{ route('categories.create') }}">{{ __('New Category') }}</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Options') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm flex-fill mx-1">{{ __('Show') }}</a>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm flex-fill mx-1">{{ __('Edit') }}</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline mx-1 flex-fill" onsubmit="return confirm('{{ __('Are you sure you want to delete this category?') }}');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm w-100">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
