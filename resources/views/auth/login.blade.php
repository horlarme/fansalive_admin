@extends('layouts.plain')
@section('title') Login @stop
@section('content')

    <!-- ############ LAYOUT START-->
      <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
          <div class="pull-center">
            <div>
              <!-- brand -->
              <a class="navbar-brand">
                <div ui-include="'../assets/images/logo.svg'"></div>
                <img src="../assets/images/logo.png" alt="FansAlive" class="hide">
                <span class="hidden-folded inline">Login {{  " | " . env('APP_TITLE')}}</span>
              </a>
              <!-- / brand -->
            </div>
          </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
          <div class="m-b text-sm text-warning"></div>
          <form action="{{route('login')}}" method="POST">
            {{csrf_field()}}
            <div class="md-form-group float-label">
              <input type="email" name="email" class="md-input" value="{{ old('email')?:'' }}" required>
              <label>Email</label>
              @if($errors->has('email'))
              <p class="help-block text-warning">{{$errors->first('email')}}</p>
              @endif
            </div>
            <div class="md-form-group float-label">
              <input type="password" name="password" class="md-input" required>
              <label>Password</label>
              @if($errors->has('password'))
              <p class="help-block text-warning">{{$errors->first('password')}}</p>
              @endif
            </div>      
            <div class="m-b-md">        
              <label class="md-check">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><i class="primary"></i> Keep me signed in
              </label>
            </div>
            <button type="submit" class="btn primary btn-block p-x-md">Sign in</button>
          </form>
        </div>

      </div>
    <!-- ############ LAYOUT END-->

@endsection