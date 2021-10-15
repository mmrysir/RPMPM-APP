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
    <title>Add Employee</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="add-employee" method="post" class="sign-in-form">
          @csrf
            <h2 class="title">Add Employee</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="name" type="text" id="name" placeholder="full name" />
              <span class="text-danger">@error('name'){{$message}} @enderror</span>
            </div>
            <div class="input-field">
              <i class="fas fa-"></i>
              <input name="email" type="email"  id="email" placeholder="email" />
              <span class="text-danger">@error('email'){{$message}} @enderror</span>
            </div>
            <div class="input-field">
                <i class="fas fa-"></i>
                <input name="department" type="text"  id="department" placeholder="department" />
                <span class="text-danger">@error('department'){{$message}} @enderror</span>
              </div>
            <input type="submit" value="Add" class="btn solid" />
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
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="/js/app.js"></script>
  </body>
</html>
