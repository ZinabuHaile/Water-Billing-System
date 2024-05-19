<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Generate PDF Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
     <img src="{{url('storage/images/photo.jpg')}}">
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <br/>
    <br/>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Job Title</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
                  
            @foreach($staffs as $staff)
            <tr>
                <td>{{ $staff->id }}</td>
                <td>{{ $staff->name }}</td>               
                <td>{{ $staff->jobtitle_id }}</td>
                <td>{{ $staff->phone }}</td>
                <td>{{ $staff->email }}</td>
                <td>{{ $staff->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>