<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, Subscriber!</title>
  </head>
  <body>
      <div class="text-center">
        <h1>Blog Portal</h1> <br>
        {{-- <p>This is a simple CRUD application.</p> --}}
        <a href="{{ route('blog_index') }}">
          <button class="btn btn-md btn-success"> Show All Blog</button>
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
        </div>

      <br><br><br>
<div class="container">
    <div class="text-center">
        {{-- <div class="form-group mb-3"></div> --}}
      <div class="col-md-6">
        <div class="item">
            <h2 class="heading">Subscribe/Newsletter</h2>
            <p>
                In order to get the latest news and other great items, please subscribe us here: 
            </p>

            <form action="{{ route('subscribe') }}" method="post">
                @csrf

                <div class="form-group mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Email Address">

                    @error('email')
                    <span class="text-danger">{{ $message}}</span>
                    @enderror

                </div>

                <button type="submit" class="btn btn-primary">Subscribe Now</button>
             

            </form>

        </div>
    </div>
</div>

</div>

<br><br><br>

<div class="text-center">
    <h1>Blog User</h1>
    <p>All Subscribe Send Message.</p>
    <a href="{{ route('admin_subscribers') }}">
      <button class="btn btn-md btn-success"> Message</button>
    </a>
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

