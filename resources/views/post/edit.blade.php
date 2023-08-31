<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, Crud!</title>
  </head>
  <body>
      <div class="text-center">
        <h1>Hello, Crud!</h1>
        <p>This is a simple CRUD application.</p>

      </div>

      <div class="container">
        <form method="POST" action="{{ route('update',$blog_single->id) }}" enctype="multipart/form-data">
          @csrf


          <div class="mb-3">
            <label for="" class="form-label">Blog Title *</label>
            <input type="text" class="form-control" name='blog_title' value="{{ old('blog_title', $blog_single->blog_title)}}">

                @error('blog_title')
                <span class="text-danger">{{ $message}}</span>
                @enderror

          </div>


          <div class="mb-3">
             <label for="" class="form-label">blog_detail</label>
             <input type="text" class="form-control" name='blog_detail' value="{{old('blog_detail',$blog_single->blog_detail)}}">

              @error('blog_detail')
                <span class="text-danger">{{ $message}}</span>
                @enderror

          </div>

          
            <div class="mb-3">
              <label for="">Profile Photo *</label><br>
              <img src="{{ asset('uploads/blogs/'.$blog_single->blog_photo) }}" width="70px" height="70px" alt="Image">
             
              
              @error('blog_photo')
              <span class="text-danger">{{ $message}}</span>
              @enderror

            </div>

            <div class="mb-3">
              <label for="" class="form-label">Upload Photo</label>
                <input type="file" name="blog_photo">

            </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>
      </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
