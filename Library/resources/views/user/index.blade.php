<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Customers</title>
    <br>
</head>
<body>

    <div class="container-fluid">

    <h2> <center> LIBRARY RECORDS </center> </h2>
    <table class="table table-hover table-dark">
   
<tr>
<th>NAME </th>
<th>EMAIL</th>
<th>NUMBER</th>
<th>ADDRESS</th>


</tr>
@foreach ($users as $user)

<tr>
<th>{{$user->firstName}}
{{$user->lastName}} </th>
<th>{{$user->email}}</th>
<th>{{$user->contactNumber}}</th>
<th>{{$user->address}}</th>


</tr>
@endforeach
</table>

    </div>
    
</body>
</html>