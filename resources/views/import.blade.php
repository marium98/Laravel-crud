
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 Search Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    @if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
        <div class="container">
        <br>
            <form action="ViewPages" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                <div class="row">
                <label for="from" class="col-form-label">From</label>
                    <div class="col-md-2">
                    <input type="date" class="form-control input-sm" id="from" name="from">
                   
                </div>
                    <label for="from" class="col-form-label">To</label>
                    <div class="col-md-2">
                        <input type="date" class="form-control input-sm" id="to" name="to">
                        
                    </div>
                    
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-sm" name="search" >Search</button>
                        
                        <button type="submit" class="btn btn-success btn-sm" name="exportExcel" >Export Excel</button>
                        <a href="{{ url('/student') }}" role="button" class="btn btn-warning col-md-4">Student List</a>
                    </div>
                </div>
            </div>
            </form>
            <br>
            <table class="table table-dark" id="myTable">
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Date</th>
                
                </tr>
                @foreach ($ViewsPage as $ViewsPages)
                    <tr>
                        <td>{{ $ViewsPages->id }}</td>
                        <td>{{ $ViewsPages->name }}</td>
                        <td>{{ $ViewsPages->email }}</td>
                        <td>{{ $ViewsPages->address }}</td>
                        <td>{{ $ViewsPages->n_date }}</td>
                       
                    </tr>
                @endforeach
            </table>
</div>

</body>

</html>
