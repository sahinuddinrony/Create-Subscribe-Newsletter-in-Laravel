<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Single Post, Show!</title>
  </head>
  <body>

    <div class="text-center">
          <h1>Single Post, Show!</h1>
          <p>Here is show every single post.</p>
          <br>
          <a href="{{ route('form') }}">
            <button class="btn btn-md btn-success"> Home Page</button>
          </a>  <br><br><br><br>

          <div class="page-content">
              <div class="container">
                  {{-- <div class="row"> --}}
                      <div class="col-lg-8 col-md-6">
                        
                          <div class="main-text">
                            <p>
                              {{-- <b>Blog Photo:</b> --}}
                              <img src="{{asset('uploads/blogs/'.$post_detail->blog_photo)}}" width="500px" height="200px" alt="Image">
                            </p>
                        </div>

                          <div class="main-text">
                            <p>
                              <b>Create Date:</b>
                                {{ $post_detail->created_at }} 
                            </p>
                        </div>

                          <div class="main-text">
                              <p>
                                <b>Blog Detail:</b> 
                                  {{ $post_detail->blog_detail }} 
                              </p>
                          </div>
                      </div>
                    
            </div>

          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>