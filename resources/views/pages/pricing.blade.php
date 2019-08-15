@extends('layouts.app')

@section('content')

<section class="pricing py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
               <h1 class="text-light">Pricing</h1>
                <hr class="text-light">
            </div>
        </div>
        <div class="row">
            <!-- Free Tier -->
            <div class="col-lg-4">
                <div class="card mb-5 mb-lg-0">

                    <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">100 - 999 Records</h5>
                        <h6 class="card-price text-center">10¢<span class="period">/per record</span></h6>
                        <hr>
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Records by Location</li>
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Focused Search Parameters</li>
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>CSV/Excel Format</li>
                        </ul>
                        <a href="/contact" class="btn btn-block btn-primary text-uppercase">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Plus Tier -->
            <div class="col-lg-4">
                <div class="card mb-5 mb-lg-0">
                    <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">1,000 - 4,999 Records</h5>
                        <h6 class="card-price text-center">9¢<span class="period">/per record</span></h6>
                        <hr>
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Records by Location</li>
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Focused Search Parameters</li>
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>CSV/Excel Format</li>
                        </ul>
                        <a href="/contact" class="btn btn-block btn-primary text-uppercase">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Pro Tier -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">5,000+ Records</h5>
                        <h6 class="card-price text-center">8¢<span class="period">/per record</span></h6>
                        <hr>
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Records by Location</li>
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Focused Search Parameters</li>
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>CSV/Excel Format</li>
                        </ul>
                        <a href="/contact" class="btn btn-block btn-primary text-uppercase">Buy Now</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

@endsection