<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Blog, Show!</title>
  </head>
  <body>
      <div class="text-center">
        <h1>Blog, Show!</h1>
        <p>This is a simple Show all Post.</p>
        <br>
        <a href="{{ route('create') }}">
          <button class="btn btn-md btn-success"> Create</button>
        </a>
      </div>

      <div class="text-center">
                  <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" id="alert">
                            {{ Session::get('success') }}
                        </div>    
                    @endif
                </div>

      <div class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Blog Title</th>
                <th scope="col">Blog Detail</th>
                <th scope="col">Blog Photo</th>
                <th scope="col">Date</th>
                {{-- <th scope="col">Photo</th> --}}
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($all_blog_data as $allblog)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $allblog->blog_title }}</td>
                <td>{{ $allblog->blog_detail }}</td>
                
                <td>
                  <img src="{{asset('uploads/blogs/'.$allblog->blog_photo)}}" width="100px" height="70px" alt="Image">
                 </td>
                  
                 <td>{{ $allblog->created_at }}</td>

                <td>
                    <div class="btn-group">
                      <a href="{{ route('edit',$allblog->id) }}">
                        <button class="btn btn-md btn-success me-1 p-1">edit</button>
                      </a>



                      <a href="{{ route('delete',$allblog->id) }}">
                        <button class="btn btn-md btn-danger  p-1">delete</button>
                      </a> &nbsp;

                      <a href="{{ route('blog_detail',$allblog->id) }}">
                        <button class="btn btn-md btn-success me-1 p-1">Detail</button>
                      </a>

                    </div>
                </td>
              </tr>

              @endforeach
            </tbody>
          </table>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script type="text/javascript">
$("document").ready(function(){
    setTimeout(function(){
      $("div.alert").remove();
    },3000);
});
</script>

  </body>
</html>