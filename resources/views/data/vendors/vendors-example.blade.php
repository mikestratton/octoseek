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

                    @if($vendors)
                        <div class="col-3 form-group">
                            <select class="form-control" name="state" onchange="location = this.value;">
                                <option value="" selected="selected">Please Select a State</option>
                                <option value="/vendors/AL">Alabama</option>
                                <option value="/vendors/AK">Alaska</option>
                                <option value="/vendors/AZ">Arizona</option>
                                <option value="/vendors/AR">Arkansas</option>
                                <option value="/vendors/CA">California</option>
                                <option value="/vendors/CO">Colorado</option>
                                <option value="/vendors/CT">Connecticut</option>
                                <option value="/vendors/DE">Delaware</option>
                                <option value="/vendors/FL">Florida</option>
                                <option value="/vendors/GA">Georgia</option>
                                <option value="/vendors/HI">Hawaii</option>
                                <option value="/vendors/ID">Idaho</option>
                                <option value="/vendors/IL">Illinois</option>
                                <option value="/vendors/IN">Indiana</option>
                                <option value="/vendors/IA">Iowa</option>
                                <option value="/vendors/KS">Kansas</option>
                                <option value="/vendors/KY">Kentucky</option>
                                <option value="/vendors/LA">Louisiana</option>
                                <option value="/vendors/ME">Maine</option>
                                <option value="/vendors/MD">Maryland</option>
                                <option value="/vendors/MA">Massachusetts</option>
                                <option value="/vendors/MI">Michigan</option>
                                <option value="/vendors/MN">Minnesota</option>
                                <option value="/vendors/MS">Mississippi</option>
                                <option value="/vendors/MO">Missouri</option>
                                <option value="/vendors/MT">Montana</option>
                                <option value="/vendors/NE">Nebraska</option>
                                <option value="/vendors/NV">Nevada</option>
                                <option value="/vendors/NH">New Hampshire</option>
                                <option value="/vendors/NJ">New Jersey</option>
                                <option value="/vendors/NM">New Mexico</option>
                                <option value="/vendors/NY">New York</option>
                                <option value="/vendors/NC">North Carolina</option>
                                <option value="/vendors/ND">North Dakota</option>
                                <option value="/vendors/OH">Ohio</option>
                                <option value="/vendors/OK">Oklahoma</option>
                                <option value="/vendors/OR">Oregon</option>
                                <option value="/vendors/PA">Pennsylvania</option>
                                <option value="/vendors/RI">Rhode Island</option>
                                <option value="/vendors/SC">South Carolina</option>
                                <option value="/vendors/SD">South Dakota</option>
                                <option value="/vendors/TN">Tennessee</option>
                                <option value="/vendors/TX">Texas</option>
                                <option value="/vendors/UT">Utah</option>
                                <option value="/vendors/VT">Vermont</option>
                                <option value="/vendors/VA">Virginia</option>
                                <option value="/vendors/WA">Washington</option>
                                <option value="/vendors/WV">West Virginia</option>
                                <option value="/vendors/WI">Wisconsin</option>
                                <option value="/vendors/WY">Wyoming</option>
                            </select>
                        </div>

                        <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-primary">
                        <tr>
                            <th>Company</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Fax</th>
                        </tr>
                        </thead>
                        @foreach($vendors as $vendor)
                            <tr>
                                <td>{{ $vendor->company }}</td>
                                <td>{{ $vendor->address }}, {{ $vendor->city }}, {{ $vendor->state }} {{ $vendor->zip }}</td>
                                <td>{{ $vendor->phone }}</td>
                                <td>{{ $vendor->fax }}</td>
                            </tr>

                        @endforeach

                    </table>

                            {{ $vendors->links('vendor.pagination.bootstrap-4')}}
                    </div>

                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
