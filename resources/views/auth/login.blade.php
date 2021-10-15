
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/css/login.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{route('login-user')}}" method="post" class="sign-in-form">
          @if(Session::has('success'))
            <div class="alert alert-success" >{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger" >{{Session::get('fail')}}</div>
            @endif
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="email" type="text" id="email" placeholder="email" value="{{old('email')}}" />
              <span class="text-danger">@error('email'){{$message}} @enderror</span>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password"  id="password" placeholder="Password"  value=""/>
              <span class="text-danger">@error('password'){{$message}} @enderror</span>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <br>
            <a href="register">register</a>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
             welcome to our services
            </p>
            
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              be part of our journey
            </p>
            
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="/js/app.js"></script>
  </body>
</html>


