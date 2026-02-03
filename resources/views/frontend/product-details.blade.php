@extends('frontend.layouts.app')

@section('content')
    @include('frontend.partials.product-detail', ['product' => $product])
@endsection
