<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
    
    <title>Dashboard</title>
</head>
<body>
    <div class="container"> 
        <div class="form-group">
            <div class="col-sm-12">
                <h2 style="text-align: center; color: blue">Dashboard</h2>
            </div>
            <div class="pull-right">
                <a href="{{url('add')}}">Create event</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->username}}</td>
                    <td>{{$data->name}}</td>
                    <td><a href="logout">Logout</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="container">
        <div class="col-sm-12">
            <h2 style="text-align: center; color: blue">Events</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Creator</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events  as $item)
                <tr> 
                    <td>{{$item->title}}</td>
                    <td>{{$item->text}}</td>
                    <td>{{$item->creator }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>