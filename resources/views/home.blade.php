@extends('layouts.master')
@section('title', 'Home')

@section('content')
    <div class="row justify-content-center p-md-6">
        @foreach ($productData as $item)
        <div class="col-lg-4 col-md-4 p-3 d-flex align-items-stretch">
            <div class="card" style="width: 28rem;">
                <img src="{{ $item->image_url }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->description }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
