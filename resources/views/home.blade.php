@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 text-center mb-4">
            <h1 class="display-4">{{ __('Dashboard') }}</h1>
        </div>

        <div class="col-lg-6 col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">{{ __('Categories') }}</div>

                <div class="card-body">
                    <p class="card-text">{{ __('Manage your categories') }}</p>
                    <p class="card-text">{{ __('Total Categories: ') }} {{ $categories_count }}</p>
                    {{-- Acordion con los ultimos 4 registros --}}
                    <div class="accordion my-2" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{ __('Last Categories') }}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        @foreach ($categories as $category)
                                        <li class="list-group-item"> <a href="{{ route('categories.show', $category->id) }}" class="text-decoration-none"> {{ $category->name }} </a> </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>

                    <a href="{{ route('categories.index') }}" class="btn btn-primary">{{ __('Go to Categories') }}</a>
                </div>
            </div>
        </div>


        <div class="col-lg-6 col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">{{ __('Products') }}</div>

                <div class="card-body">
                    <p class="card-text">{{ __('Manage your products') }}</p>
                    <p class="card-text">{{ __('Total Products: ') }} {{ $products_count }}</p>
                    {{-- Acordion con los ultimos 4 registros --}}
                    <div class="accordion my-2" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    {{ __('Last Products') }}
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        @foreach ($products as $product)
                                        <li class="list-group item"> <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none"> {{ $product->name }} </a> </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('products.index') }}" class="btn btn-primary">{{ __('Go to Products') }}</a>
                @endsection