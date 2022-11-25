<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    </head>

<div class="container mt-5">

    
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        
        @foreach ($te as $item)
        
        <tr>
            <th scope="row">{{$item->teid}}</th>
            <td>{{$item->name}}</td>
            <td>{{ $item->age}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->phone}}</td>
            <td><img src="images/{{ $item->img}}" width="60px"/></td>
            <td><a href="{{url('/delete') }}/{{$item->teid}}" class="btn btn-danger"> Delete</a></td>
        </tr>
        
        @endforeach
    </tbody>
  </table>
  
</div>