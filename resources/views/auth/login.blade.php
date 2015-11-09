@extends('layout.admin.main')

@section('content')
                        <?php echo
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('Content-Type: text/html');?>
    
    <div class="col-md-6" style="margin-top: 70px !important">
        <img src="{{ asset('img/c.PNG') }}" width="650" height="490" alt="">

    </div>
    <div class="col-md-4" style="margin-top: 200px !important">
        <div class="panel panel-default">
                <div class="panel-heading">UNP-Guidance Record Management System{{ Auth::user() }}</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" maxlength="13">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Login</button>

                                
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>


@endsection