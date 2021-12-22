<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--font,icon link-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!--bootstrap link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Styles -->
  <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" />
  <title>Registrationpage</title>
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="{{route('register-user')}}" method="post">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            </div>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Registration</p>
            </div>
            <!-- Name input -->
            <div class="form-outline mb-4">Full Name
              <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Enter Name" name="name" value="{{old('name')}}">
              <label class="form-label" for="form3Example3"></label>
              <span class="text-danger">@error('name') {{$message}} @enderror</span>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">Email address
              <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" name="email" value="{{old('email')}}" />
              <label class="form-label" for="form3Example3"></label>
              <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">Create Password
              <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" name="password" value="{{old('password')}}" />
              <label class="form-label" for="form3Example4"></label>
              <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <!--Button-->
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Already Regitered!! login Here-><a href="login" class="link-danger">Login</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
    <!-- <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">-->
    <!-- Copyright -->
    <!-- <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>-->
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
    </div>
  </section>
</body>
<!--bootstrap link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>