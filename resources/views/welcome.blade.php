<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    </head>

        <title>Laravel</title>

    <body>  


        <div class="container mt-5">
            <div class="row">
                <div class="offset-md-3 col-md-6">

                    <form action="{{url('/store')}}" method="post" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="mb-3">
                          <label  class="form-label"></label>
                          <input type="text" class="form-control" placeholder="enter name" name="name">
                        </div>
                        <div class="mb-3">
                          <label  class="form-label"></label>
                          <input type="number" class="form-control" placeholder="enter age" name="age">
                        </div>
                        <div class="mb-3">
                          <label  class="form-label"></label>
                          <input type="email" class="form-control" placeholder="enter email" name="email">
                        </div>
                        <div class="mb-3">
                          <label  class="form-label"></label>
                          <input type="text" class="form-control" placeholder="enter phone" name="phone">
                        </div>
                        <div class="mb-3">
                          <label  class="form-label"></label>
                          <input type="file" class="form-control" name="image">
                        </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                      </form>


                </div>
            </div>
        </div>
      




    </body>
</html>
