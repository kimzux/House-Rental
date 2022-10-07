@include('layouts.head')
<div class="register-box">
  <div class="register-logo">
    <a href="/"><img  src="/dist/img/logo.png" alt="AdminLTELogo" height="150" width="150"></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="POST" action="{{ route('register') }}">
                        @csrf

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
         
        </div>
        @error('name')
                <small class="text-danger">{{$message}}</small>
                @enderror
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
                <small class="text-danger">{{$message}}</small>
                @enderror
              
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Phone number" name="phone_number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        @error('phone_number')
                <small class="text-danger">{{$message}}</small>
                @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         @error('password')
                <small class="text-danger">{{$message}}</small>
                @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password"  name="password_confirmation">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div style="display:flex; justify-content:space-between" >
            <div class="icheck-primary">
              <input type="radio" id="agreeTerms" name="status" value="2">
              <label for="agreeTerms">
             landlord
              </label>
              </div>
              <div class="icheck-primary">
              <input type="radio" id="agreeTerms2" name="status" value="3">
              <label for="agreeTerms2">
              tenant
              </label>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <a href="{{route('login')}}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

@include('layouts.foot')






