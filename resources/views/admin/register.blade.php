<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Login</title>

    <style>
        body {
            background: #c8e1f7;
        }
    </style>
  </head>
  <body>
    <div class="container mt-5 p5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-7">
                        <img src="assets/images/login.jpg" width=15px height= 338px class="card-img-top" alt="">
                    </div>
                    <div class="col-lg-5">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (Session::has('status'))
                            <div class="alert alert-warning" role="alert">
                                {{ Session::get('status') }}
                            </div>
                        @endif
                        <form action="{{ url('register') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3>Form Register</h3>
                            <hr>
                            <label for="name">Name</label>
                            <input type="name" name="name" class="form-control">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                            <br>
                            <input type="submit" name="submit" class="btn btn-md btn-primary" value="Register">
                            <a href="login" class="btn btn-warning">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>
