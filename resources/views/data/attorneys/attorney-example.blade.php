@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header text-light bg-primary">
                    <h1>
                        Attorney Sample Data
                    </h1>

                </div>

                <div class="card-body">
                    <h3 class="pt-3 pb-2 text-primary">
                        Clicking on any button will return a list of 10 random records
                    </h3>

                    <table width="100%">
                        <tr>
                            <th width="25%">
                               <p class="pl-3 pr-3">
                                   <a class="btn btn-info btn-block" href="#">Address</a>
                               </p>
                                <p class="pl-3 pr-3">
                                    <a class="btn btn-info btn-block" href="#">City & State</a>
                                </p>

                            </th>
                            <th width="25%">
                                <p class="pl-3 pr-3">
                                    <a class="btn btn-info btn-block" href="#">Contact Name</a>
                                </p>
                                <p class="pl-3 pr-3">
                                    <a class="btn btn-info btn-block" href="#">Contact Title</a>
                                <p/>

                            </th>
                            <th width="25%">
                                <p class="pl-3 pr-3">
                                    <a class="btn btn-info btn-block" href="#">Website</a>
                                </p>
                                <p class="pl-3 pr-3">
                                    <a class="btn btn-info btn-block" href="#">Email</a>
                                </p>
                            <th width="25%">
                                <p class="pl-3 pr-3">
                                    <a class="btn btn-info btn-block" href="#">Credit Rating</a>
                                </p>
                                <p class="pl-3 pr-3">
                                    <a class="btn btn-info btn-block" href="#">Sales</a>
                                </p>

                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
