@extends('back.layout.auth')

@section('content')

<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Register</b> User</a>
    </div>
    <div class="card-body">

        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control @error('name') is-invalid @enderror" 
                    id="name"
                    aria-describedby="exampleInputEmail1-error" 
                    aria-invalid="true" 
                />
                @error('name') <span id="" class="error invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="">Username</label>
                <input 
                    type="text" 
                    name="username" 
                    class="form-control @error('username') is-invalid @enderror" 
                    id="username"
                    aria-describedby="exampleInputEmail1-error" 
                    aria-invalid="true" 
                />
                @error('username') <span id="" class="error invalid-feedback">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="">Email address</label>
                <input 
                    type="email" 
                    name="email" 
                    class="form-control @error('email')is-invalid @enderror" 
                    id="email"
                    aria-describedby="exampleInputEmail1-error" 
                    aria-invalid="true" 
                />
                @error('email')<span id="" class="error invalid-feedback">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    class="form-control @error('password')is-invalid @enderror" 
                    id="password"
                    aria-describedby="" 
                    aria-invalid="true" 
                />
                @error('password')<span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="">Retype Password</label>
                <input 
                    type="password" 
                    name="password_confirmation"
                    class="form-control @error('password_confirmation')is-invalid @enderror" 
                    id="password_confirmation"
                    aria-describedby="" 
                    aria-invalid="true" 
                />
                @error('password_confirmation')<span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span>@enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Register</button>

        </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

@endsection