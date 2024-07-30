<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
</head>
<body>
    
<div class="container">
 <div class="row">
    <a href="{{route('registerdata')}}" class="btn btn-success">Add</a>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead align="center">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th colspan="2" >Action</th>
                        </tr>
                    </thead>
        <tbody>
         @foreach ($userdata as $item)
              {{-- //  @dd($item); --}}
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->city}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->email }}</td>
                <td>{{$item->contact}}</td>
                <td>{{$item->address}}</td>
                                                   
                <td><a href="{{route('deletedata',$item->id)}}" class="btn btn-danger">Delete</a></td>
                <td><a href="{{route('editdata', $item->id)}}" class="btn btn-info">Edit</a></td>
               
            </tr>
            @endforeach
                </tbody>
              </table>

            </div>
        </div>
    </div>

 </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>