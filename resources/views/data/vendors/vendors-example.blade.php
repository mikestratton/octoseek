@extends('layouts.jquery-tabs')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-light bg-primary">

                        Vending Machine Operators Directory | NAICS CODE 454210 | SIC CODE 5962


                </div>

                <div class="card-body">

                    @include('partials.vendor-data')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
