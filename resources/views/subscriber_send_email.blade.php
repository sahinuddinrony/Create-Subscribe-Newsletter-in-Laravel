<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Send Email To Subscribers</title>
  </head>
  <body>

       <div class="text-center">
              <h1>Send Message All User</h1>
              {{-- <p>Here is show every single post.</p> --}}
              <br>
              <a href="{{ route('form') }}">
                <button class="btn btn-md btn-success"> Home Page</button>
              </a> 
      </div> <br><br>
      

      <div class="text-center">
        <div class="card-body">
          @if (Session::has('success'))
          <div class="alert alert-success" id="alert">
                {{ Session::get('success') }}
              </div>    
          @endif
         </div>
      </div>


      <div class="container">
        <form method="POST" action="{{ route('subscriber_send_email_submit') }}" enctype="multipart/form-data">
          @csrf

            <div class="mb-3">

                <label>Subject *</label>
                <input type="text" class="form-control" name="subject" value="{{old('subject')}}">

              @error('subject')
              <span class="text-danger">{{ $message}}</span>
              @enderror

            </div>

            <div class="form-group mb-3">
                <label>Message *</label>
                <textarea name="message" class="form-control snote" cols="30" rows="10"></textarea>

                @error('message')
              <span class="text-danger">{{ $message}}</span>
              @enderror
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
      },3000);
  });
  </script>

  </body>
</html>
