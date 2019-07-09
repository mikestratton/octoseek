@extends('layouts.jquery-tabs')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-light bg-primary">

                        Attorney Sample Data


                </div>

                <div class="card-body">
                    <h3 class="pt-3 pb-3 text-primary">
                      Attorney listings data sample<br><br>
                    </h3>

                    <div id="tabs" class="ui-tabs ui-corner-all ui-widget ui-widget-content">
                        <ul role="tablist" class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header ">
                            <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="tabs-1" aria-labelledby="ui-id-15" aria-selected="true" aria-expanded="true"><a href="#tabs-1" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-15">Website</a></li>
                            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-2" aria-labelledby="ui-id-16" aria-selected="false" aria-expanded="false"><a href="#tabs-2" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-16">Phone</a></li>
                            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-3" aria-labelledby="ui-id-17" aria-selected="false" aria-expanded="false"><a href="#tabs-3" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-17">Salary</a></li>
                            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-4" aria-labelledby="ui-id-18" aria-selected="false" aria-expanded="false"><a href="#tabs-4" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-18">Address</a></li>
                            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-5" aria-labelledby="ui-id-19" aria-selected="false" aria-expanded="false"><a href="#tabs-5" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-19">Credit</a></li>
                            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-6" aria-labelledby="ui-id-20" aria-selected="false" aria-expanded="false"><a href="#tabs-6" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-20">Employees</a></li>
                        </ul>
                        <div id="tabs-1" aria-labelledby="ui-id-15" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="false" style="display: block;">
                           <h2 class="text-left pt-3 pb-3">Find Attorneys Websites</h2>
                            @if($att_web)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Attorney</th>
                                            <th class="text-left">Website</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($att_web as $attorney)
                                            <tr>
                                                <td class="text-left">{{ $attorney->company }}</td>
                                                <td class="text-left">{{ $attorney->website }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                           @else
                            <p>Please check back later.</p>

                            @endif

                        </div>
                        <div id="tabs-2" aria-labelledby="ui-id-16" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
                            @if($att_pho)
                                <h2 class="text-left pb-3 pt-3">Find Attorneys Websites & Phone Numbers</h2>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Attorney</th>
                                        <th class="text-left">Website</th>
                                        <th class="text-left">Phone</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($att_pho as $attorney)
                                        <tr>
                                            <td class="text-left">{{ $attorney->company }}</td>
                                            <td class="text-left">{{ $attorney->website }}</td>
                                            <td class="text-left">{{ $attorney->phone }}</td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>Please check back later.</p>

                            @endif
                        </div>
                        <div id="tabs-3" aria-labelledby="ui-id-17" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
                            @if($att_pho)
                                <h2 class="text-left pb-3 pt-3">Find Attorneys with an Estimated Yearly Salary Over $1,000,000</h2>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Attorney</th>
                                        <th class="text-left">Salary</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($att_sal as $attorney)
                                        <tr>
                                            <td class="text-left">{{ $attorney->company }}</td>
                                            <td class="text-left">{{ $attorney->sales }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>Please check back later.</p>

                            @endif
                        </div>

                        <div id="tabs-4" aria-labelledby="ui-id-18" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
                            @if($att_add)
                                <h2 class="text-left pb-3 pt-3">Find Addresses of Attorneys in the State of New York</h2>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Attorney</th>
                                        <th class="text-left">Address</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($att_add as $attorney)
                                        <tr>
                                            <td class="text-left">{{ $attorney->company }}</td>
                                            <td class="text-left">
                                                {{ $attorney->address }}, {{ $attorney->city }}, {{ $attorney->state }} {{ $attorney->zip }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>Please check back later.</p>

                            @endif
                        </div>

                        <div id="tabs-5" aria-labelledby="ui-id-19" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
                            @if($att_alp)
                                <h2 class="text-left pb-3 pt-3">Find the Alpha Credit Rating of Attorneys in the State of New York</h2>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Attorney</th>
                                        <th class="text-left">City & State</th>
                                        <th class="text-left">Rating</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($att_alp as $attorney)
                                        <tr>
                                            <td class="text-left">{{ $attorney->company }}</td>
                                            <td class="text-left">{{ $attorney->city }}, {{ $attorney->state }}</td>
                                            <td class="text-left">{{ $attorney->credit_score_alpha }} </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>Please check back later.</p>

                            @endif
                        </div>


                        <div id="tabs-6" aria-labelledby="ui-id-20" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
                            @if($att_emp)
                                <h2 class="text-left pb-3 pt-3">Find Attorneys With More Then 50 Employees</h2>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Attorney</th>
                                        <th class="text-left">Employees</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($att_emp as $attorney)
                                        <tr>
                                            <td class="text-left">{{ $attorney->company }}</td>
                                            <td class="text-left">{{ $attorney->employees }} </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>Please check back later.</p>

                            @endif
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
