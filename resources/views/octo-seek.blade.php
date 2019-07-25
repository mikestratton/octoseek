@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row m-5">
            <div class="col-md-12">
                <img class="img-fluid" style="max-height: 100px;" src="images/octoseek-logo.svg" alt="octoseek logo">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <h1>Targeted sales leads starting at <strong>10¢</strong> a lead.</h1>
                <h2>Define your search results parameters and we generate valuable data
                    within your target industry and area.</h2>

                <p  class="text-left">Available search results parameters: Key Executive Name, Phone/Fax, Employee Size,
                    Yearly Revenue,  Latitude/Longitude, SIC Code & Description, Non-profits,
                    Public/Private, Square Footage, Website, Women Owned, Fortune 1000 Ranking,
                    Credit Score, Home Based Business</p>

             </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">

                <h2 class="text-left">Contact</h2>
                <p class="text-left">Octoseek.com is under active development. For inquiries please contact
                    Michael Stratton, Founder of Sunny Tree Software at (330)802-0285</p>
            </div>

        </div>
        <hr>
        <div class="row mt-5">
            <div class="col-md-12">
                <h3>Supported Industries</h3>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <h5>Real Estate Development <br>
                    NAICS Code 531390 <br>
                </h5>
            </div>
            <div class="col-md-4">
                <h5><a href="/vendors">Vending Machine Operators <br>
                        NAICS Code 454210</a> <br>
                </h5>
            </div>
            <div class="col-md-4">
                <h5><a href="/attorneys"> Offices of Lawyers<br>
                    NAICS Code 541110 </a><br>

                </h5>
            </div>
        </div>



                <div class="bottom-0-octo">


                </div>


    </div>
@endsection
