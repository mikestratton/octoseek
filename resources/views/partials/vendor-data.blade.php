@if($vendors)
    <div class="col-3 form-group">
        <select class="form-control" name="state" onchange="location = this.value;">
            <option value="" selected="selected">Please Select a State</option>
            <option value="/vendors/AL">Alabama</option>
            <option value="/vendors/AZ">Arizona</option>
            <option value="/vendors/CA">California</option>
            <option value="/vendors/CO">Colorado</option>
            <option value="/vendors/CT">Connecticut</option>
            <option value="/vendors/GA">Georgia</option>
            <option value="/vendors/HI">Hawaii</option>
            <option value="/vendors/ID">Idaho</option>
            <option value="/vendors/IL">Illinois</option>
            <option value="/vendors/IN">Indiana</option>
            <option value="/vendors/MN">Minnesota</option>
            <option value="/vendors/NJ">New Jersey</option>
            <option value="/vendors/NY">New York</option>
            <option value="/vendors/NC">North Carolina</option>
            <option value="/vendors/OH">Ohio</option>
            <option value="/vendors/PA">Pennsylvania</option>
            <option value="/vendors/RI">Rhode Island</option>
            <option value="/vendors/SC">South Carolina</option>
            <option value="/vendors/TX">Texas</option>
            <option value="/vendors/VA">Virginia</option>
            <option value="/vendors/WA">Washington</option>
            <option value="/vendors/WI">Wisconsin</option>

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
                    <td><a href="/vendor/{{ $vendor->id }}">{{ $vendor->company }}</a></td>
                    <td>{{ $vendor->address }}, {{ $vendor->city }}, {{ $vendor->state }} {{ $vendor->zip }}</td>
                    <td>{{ $vendor->phone }}</td>
                    <td>{{ $vendor->fax }}</td>
                </tr>

            @endforeach

        </table>

        {{ $vendors->links('vendor.pagination.bootstrap-4')}}
    </div>

@endif


