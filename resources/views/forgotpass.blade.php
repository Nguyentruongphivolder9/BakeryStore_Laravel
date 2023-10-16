
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets')}}/css/css/login-register.css" rel="stylesheet">
    <title>Forgot Password Page</title>
</head>
<body>
    <div class="parent clearfix">
        <div class="bg-illustration">
          <img src="{{asset('assets')}}/css/images/background/logo.jpg" alt="logo">
    
          <div class="burger-btn">
            <span></span>
            <span></span>
            <span></span>
          </div>
    
        </div>
        
        <div class="login">
          <div class="container">
            <h1>Reset Password</h1>
        
            <div class="login-form">
              <form action="">
                <label for="">Input your Email : </label>
                <input type="email" placeholder="E-mail Address">
                <div class="forget-pass-forgot">
                  <a href="{{ route('login') }}">LogIn</a> ||
                  <a href="{{ route('register') }}"> Register Now</a>
                </div>
    
                <button type="submit">LOG-IN</button>
    
              </form>
            </div>
        
          </div>
          </div>
      </div>
</body>
</html>

