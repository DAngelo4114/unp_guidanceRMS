<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>University Of Northern Philippines</title>
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}" type="text/css"  />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"  />
</head>

<body class="img-responsive" height="100%" width="100%" background="{{ asset('img/unpwatermark.jpg') }}" align ="center">
    <div class="container">
        <div class="form-container">
            <h1>Sign in</h1>
            <form method="POST" action="/auth/login">
            {!! csrf_field() !!}
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required />
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Your Password" required />
                </div>
                

                <div class="clearfix"></div>

                <hr />

                <div class="form-group">
                    <button type="submit" name="btn-login" class="btn btn-block btn-success">
                        <i class="glyphicon glyphicon-log-in"></i>&nbsp;LOG IN
                    </button>
                </div>
                
                <br />
       
                </form>
            </div>
        </div>
</body>
</html>
