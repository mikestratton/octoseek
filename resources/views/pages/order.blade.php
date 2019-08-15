@extends('layouts.app')

@section('content')

<section class="pricing py-5">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-light">Contact</h1>
                <hr class="text-light">
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6">
                <div class="card mb-5 mb-lg-0 max-height-400">

                    <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">Place an Order</h5>
                        <h6 class="card-price text-center">Starting at 10¢</h6>
                        <hr>
                        <p class="text-center">To place an order please contact Michael Stratton at (330)802-0285
                            <br><br>
                            <img class="img-fluid" width="75%" src="images/octoseek-logo.svg" alt="Octoseek"></p>


                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-5 mb-lg-0 max-height-400">

                    <div class="card-body text-center">
                        <h5 class="card-title text-muted text-uppercase text-center">Learn More</h5>
                        <h6 class="card-price text-center">Sunny Tree Software</h6>
                        <hr>
                        <p>Octoseek.com is a software product developed by
                             <a href="https://sunnytree.org">sunnytree.org
                            <br><br>
                        <img class="img-fluid" width="60%" src="images/sunny_tree_logo.svg" alt="Sunny Tree Software">
                             </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>

                {{--<div class="card mb-5 mb-lg-0">
                    <div class="card-header text-light bg-primary">
                        Octoseek is a Software Product of Sunny Tree Software
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">To Order a list, please contact Michael Stratton, founder of Sunny Tree Software at
                        (330)802-0285.</h5>
                        <h3>To learn more about Sunny Tree Software, please visit us at
                            <a class="bg-light rounded" href="https://sunnytree.org"><span class="pl-3 pr-3">sunnytree.org</span></a>
                        </h3>
                    </div>
                </div>--}}

    </div>
</section>

@endsection