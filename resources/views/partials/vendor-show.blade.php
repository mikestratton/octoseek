<div class="col-md-5">
    <div class="card">
        <div class="card-header text-light bg-primary">

            Vendor Listing


        </div>

        <div class="card-body">

            <h1>{{ $vendor->company }}
            </h1>
            <p>
                <strong>Address:</strong> <br>{{ $vendor->address }}<br> {{ $vendor->city }}, {{ $vendor->state }} {{ $vendor->zip }}
            </p>
            <p><strong>Phone:</strong> <br>{{ $vendor->phone }} </p>
            <p>
                <strong>Executive:</strong> <br>{{ $vendor->name }}, {{ $vendor->title }}
            </p>
            <p><strong>Estimated Sales:</strong> <br> {{ $vendor->sales }}</p>
            <p><strong>Number of Employees:</strong> <br> {{ $vendor->employees }}</p>
            <p><strong>County</strong><br>
                {{ $vendor->county }}</p>



        </div>

    </div>
    <h4 class="m-5"><a href="/vendors">&larr; Back to Vendors Directory</a></h4>
</div>


