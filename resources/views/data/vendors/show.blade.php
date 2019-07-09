@extends('layouts.app')

@section('meta-description')
    <meta name="description" content="{{ $vendor->company }}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
       @include('partials.vendor-show')
    </div>
</div>
@endsection
