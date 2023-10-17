<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container">

        <form action="{{route('login-user')}}" method="POST">
            @if (Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf

            <div class="form-group">
                <div class="col-sm-12">
                    <h2 style="text-align: center; color: blue">Login</h2>
                </div>
            </div>

            <hr/>

            <div class="row">

                <div class="form-group col-md-6">
                    <label for="username">Username</label>
                    <input type="text" class="form-control"  placeholder="Username" name="username">
                    <span class="text-danger"> @error('username') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" placeholder="Password" name="password">
                    <span class="text-danger"> @error('password') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-6" align="center">   
                    <button class="btn btn-success" style="width: 80px;">Submit</button>
                </div>
                <br>
                <a href="registration">Registration</a>
                
            </div>
        </form>
    </div>
</body>
</html>