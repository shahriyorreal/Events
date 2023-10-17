<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
    <title>Registration</title>
</head>
<body>
    
    <div class="container">
        <form action="{{route('register-user')}}" method="POST">
            @if (Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf

            <div class="form-group">
                <div class="col-sm-12">
                    <h2 style="text-align: center; color: blue">Registration</h2>
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

                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                    <span class="text-danger"> @error('name') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-6">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" placeholder="Surname" name="surname">
                    <span class="text-danger"> @error('surname') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-6">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="text" class="form-control" placeholder="Date of Birth" name="date_of_birth">
                    <span class="text-danger"> @error('date_of_birth') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-6" align="center">   
                    <button class="btn btn-success" style="width: 80px;">Submit</button>
                </div>
                <br>
                <a href="login">Login</a>
                
            </div>
        </form>
    </div>
</body>
</html>