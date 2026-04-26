<html>
<head>
    <title>Users Detail</title>
</head>
<body>
 <div class="container">
     @foreach($user1 as $key=>$value) 
     
        <h6>Name- {{$value['name']}}|Phone number- {{$value['phone'] }}</h6>
     @endforeach
    </div>

</body>
</html>
    



    