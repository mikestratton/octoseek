@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row mt-4">
            <div class="col-md-12">
                <img class="img-fluid" style="max-height: 200px;" src="images/nickel.png" alt="octoseek logo">
            </div>

        </div>


        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <h1>Targeted sales leads for just <strong>5¢</strong> a lead.
                    <br>Just select your target industry and
                    location. </h1>
                <h2>
                    <a href="csv-sample/apartment-sample.csv">
                        Click here for a sample download of apartment rental agencies in New York
                    City, New York</a>
                </h2>
                <p>Octoseek.com is under active development.
                    For inquiries please contact Sunny Tree Software at (330)802-0285</p>
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
