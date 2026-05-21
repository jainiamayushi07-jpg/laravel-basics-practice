<h1>Student List</h1>
@foreach ($singlestudent as $list)

<p>Id : {{$list->id}}</p>
<p>Student Name: {{$list->student_name}}</p>
<p>Email : {{$list->email}}</p>
<p>Age : {{$list->age}}</p>
<p>Contact : {{$list->phonenumber}}</p>
<p>Address : {{$list->address}}</p>
<p>Parents Name : {{$list->parents_name}}</p>
@endforeach