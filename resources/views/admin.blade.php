<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Laravel Site</title>
</head>
<body>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    @if (\Session::has('failure'))
        <div class="alert alert-failure">
            <ul>
                <li>{!! \Session::get('failure') !!}</li>
            </ul>
        </div>
    @endif
    @if(isset(Auth::user()->email))
        Logged In
        <h2>Logout</h2>
        <form method="post" action="{{ url('/user/logout') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="submit" name="logout" class="btn btn-primary" value="Logout" />
            </div>
        </form>
        <h2>Article Form</h2>
        <form method="post" action="{{ url('/articles') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Enter Title</label>
                <input type="text" name="title" class="form-control" />
            </div>
            <div class="form-group">
                <label>Enter Author</label>
                <input type="text" name="author" class="form-control" />
            </div>
            <div class="form-group">
                <label>Enter Body</label>
                <textarea name="body"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submitarticle" class="btn btn-primary" value="Post Article" />
            </div>
        </form>
        <h2>Image Form</h2>
        <form method="post" action="{{ url('/image') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Image</label>
                <input type="file" accept=".gif,.jpg,.jpeg,.png" name="image" class="form-control" />
            </div>
            <div class="form-group">
                <input type="submit" name="uploadImage" class="btn btn-primary" value="Upload Image" />
            </div>
        </form>
    @else
        <form method="post" action="{{ url('/user/login') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Enter Email</label>
                <input type="email" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" />
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login" />
            </div>
        </form>
    @endif
    
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

   
</body>
</html>