<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <link rel="stylesheet" href="{{asset('public/css/x.css')}}">
      <script src="{{asset('public/js/x.js')}}"></script>
</head>
<body>

<div class="container">    
        
        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
            
            <div class="row">                
                <div class="iconmelon">
                  <svg viewBox="0 0 32 32">
                    <g filter="">
                      <use xlink:href="#git"></use>
                    </g>
                  </svg>
                </div>
            </div>
            
            <div class="panel panel-default" >
                <div class="panel-heading">
                    <div class="panel-title text-center">Login</div>
                </div>     
    
                <div class="panel-body" >
    
                    <form name="form" id="form" class="form-horizontal" action="{{ route('login') }}" method="POST">
                    @csrf
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="" placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                                       
                        </div>
    
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                                                                  
    
                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                                <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
                            </div>
                        </div>
    
                    </form>     
                   <strong> Login email:</strong> admin@admin.com <br>
                  <strong>  Passsword:</strong> password
                </div>                     
            </div>  
        </div>
    </div>
    
    <div id="particles"></div>
    
</body>
</html>