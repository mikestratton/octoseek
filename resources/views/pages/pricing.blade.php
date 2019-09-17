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
                        <div class="text-center">

                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="8SKR5CYV9Y2MA">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                        </div>
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
                        <div class="text-center">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="HH5NHUCMCT2FE">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                        </div>

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
                        <div class="text-center">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="VVCJFFY54FHGJ">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

@endsection
