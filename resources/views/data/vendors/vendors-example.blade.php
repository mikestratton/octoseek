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
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
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
