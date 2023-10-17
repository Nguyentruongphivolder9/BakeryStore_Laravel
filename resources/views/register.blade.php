
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets')}}/css/css/login-register.css" rel="stylesheet">
    <title>Register Page</title>
</head>
<body>
    <div class="parent clearfix">
        <div class="bg-illustration">
          <h1 class="text-primary m-3">Baker</h1>
          <div class="burger-btn">
            <span></span>
            <span></span>
            <span></span>
          </div>
    
        </div>
        
        <div class="login">
          <div class="container">
            <h1 class="h1" >Register Form </h1>
            <div class="login-form">
              <form action="">
                <input type="text" placeholder="Username" >
                <input type="email" placeholder="E-mail Address">
                <input type="text" placeholder="Phone">
                <input type="password" placeholder="Password">
                <input type="password" placeholder="Repeat Password">
                <div class="forget-pass">
                    I already have an account ?
                  <a href="{{ route('login') }}">Login</a>
                </div>
    
                <button type="submit">LOG-IN</button>
    
              </form>
            </div>
        
          </div>
          </div>
      </div>
</body>
</html>

