<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    </head>


<h1 class="text-center">Update Teacher </h1>


<div class="container mt-5">
    <div class="row">
        <div class="offset-md-3 col-md-6">

            <form action="{{url('/updatete',$te->teid)}}" method="post" enctype="multipart/form-data">


                @csrf
                <div class="mb-3">
                  <label  class="form-label"></label>
                  <input type="text" class="form-control" value="{{ $te->name }}" placeholder="enter name" name="name">
                </div>
                <div class="mb-3">
                  <label  class="form-label"></label>
                  <input type="number" class="form-control" value="{{$te->age}}" placeholder="enter age" name="age">
                </div>
                <div class="mb-3">
                  <label  class="form-label"></label>
                  <input type="email" class="form-control" value="{{ $te->email }}" placeholder="enter email" name="email">
                </div>
                <div class="mb-3">
                  <label  class="form-label"></label>
                  <input type="text" class="form-control" value="{{ $te->phone }}" placeholder="enter phone" name="phone">
                </div>
                <div class="mb-3">
                    <img src="{{url('/')}}/images/{{$te->img}}" width="60px"/>
                    <br/>
                <input type="hidden" value="{{$te->img}}" name="oldimg">
                  <label  class="form-label"></label>
                  <input type="file" class="form-control" name="image">
                </div>
                 <button type="submit" class="btn btn-primary">Update</button>
              </form>


        </div>
    </div>
</div>


