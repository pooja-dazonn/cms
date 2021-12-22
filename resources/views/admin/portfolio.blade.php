<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>
<body>
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="{{ route('portfolio.store')}}" method="post" enctype="multipart/form-data">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf

            <!-- Name input -->
            <div class="form-outline mb-4">compnay image
              <input type="file" id="form3Example3" class="form-control form-control-lg" placeholder="image" name="file" value="" required>
              <label class="form-label" for="form3Example3"></label>
              <span class="text-danger">@error('image') {{$message}} @enderror</span>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4"> price
              <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Enter Price" name="price" value="" required>
              <label class="form-label" for="form3Example3"></label>
              <span class="text-danger">@error('price') {{$message}} @enderror</span>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">Create date
              <input type="Date" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" name="date" value="" required>
              <label class="form-label" for="form3Example4"></label>
              <span class="text-danger">@error('date') {{$message}} @enderror</span>
            </div>
            <div class="form-outline mb-3">profit
              <input type="text" id="form3Example4" class="form-control form-control-lg" placeholder="Enter Duration" name="profit" value="" required>
              <label class="form-label" for="form3Example4"></label>
              <span class="text-danger">@error('duration') {{$message}} @enderror</span>
            </div>
            <div class="form-outline mb-3">Duration
              <input type="text" id="form3Example4" class="form-control form-control-lg" placeholder="Enter Duration" name="duration" value="" required>
              <label class="form-label" for="form3Example4"></label>
              <span class="text-danger">@error('duration') {{$message}} @enderror</span>
            </div>
            <!--Button-->
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">save</button>
            
            </div>

          </form>
        </div>
      </div>
    </div>
   </section>
</body>
</html>