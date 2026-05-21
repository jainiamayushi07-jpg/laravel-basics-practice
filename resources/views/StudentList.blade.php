<!DOCTYPE html>
<html>
<head>
    <title>My App</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-3">Students Table</h2>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>                                                                                                             
                <th>Phonenumber</th>
                 <th>Address</th>
                 <th>View</th>
                 <th>Update</th>
                 <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($studentlist as $details)
            <tr>
                <td>{{$details->id}}</td>
                <td>{{$details->student_name}}</td>
                <td>{{$details->email}}</td>
                <td>{{$details->age}}</td>
                <td>{{$details->phonenumber}}</td>
                 <td>{{$details->address}}</td>
                 <td><a href="{{route('view.singlestudentdisplay',$details->id)}}"><button type="button" class="btn btn-primary">View</button></a>
                <td><a href="{{route('showblog')}}"><button type="button" class="btn btn-primary">Update</button></a>
                <td><a href="{{route('showblog')}}"><button type="button" class="btn btn-primary">Delete</button></a>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
  
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>