<!doctype html>
<html lang="en">

<head>
    <title>Laravel Pagination</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Customers</h1>
        <div class="card">
            <div class="card-header">
                <form class="row row-cols-lg-auto g-1" autocomplete="off">
                    <div class="col">
                        <input type="text" class="form-control" name="q" value="{{ $q }}" placeholder="Search Here...">
                    </div>
                    <div class="col">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-striped table-hover n-0">
                    <thead>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Contact Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Postal Code</th>
                        <th>Country</th>
                    </thead>
                    <?php $i = 1; ?>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->contact_name }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->postal_code }}</td>
                        <td>{{ $customer->country }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @if($customers->hasPages())
            <div class="card-footer">
                {{ $customers->links() }}
            </div>
            @endif
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>