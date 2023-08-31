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
        <p>Click details for All Blog.</p>
        <a href="{{ route('blog_index') }}">
          <button class="btn btn-md btn-success"> Show</button>
        </a>
      </div>

      @if (Session::has('success'))
        <div class="alert alert-success" id="alert">
            {{ Session::get('success') }}
        </div>
        @endif


      <div class="container">
        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
          @csrf

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Blog Title *</label>
              <input type="text" name="blog_title" class="form-control" value="{{old('blog_title')}}">

              @error('blog_title')
              <span class="text-danger"><strong>{{ $message }}</strong></span>
              @enderror

            </div>

              
            <div class="form-group mb-3">
                <label>Post Detail *</label>
                <textarea name="blog_detail" class="form-control snote" cols="30" rows="10"></textarea>

                @error('blog_detail')
                <span class="text-danger">{{ $message}}</span>
                @enderror
                
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Profile Photo *</label>
                <input type="file" name="blog_photo" class="form-control" value="{{old('blog_photo')}}">

                @error('blog_photo')
                <span class="text-danger">{{ $message}}</span>
                @enderror
                
            </div>

            <div class="form-group mb-3">
                <label>Want to send this to subscribers?</label>
                <select name="subscriber_send_option" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

    


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  
  <script type="text/javascript">
  $("document").ready(function(){
      setTimeout(function(){
        $("div.alert").remove();
      },5000);
  });
  </script>

  </body>
</html>

