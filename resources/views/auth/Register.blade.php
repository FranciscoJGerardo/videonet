@extends('layout.app')

@section('title')
    Registrate
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group
                            @error('name')
                                has-error
                            @enderror">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control my-2" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group
                            @error('email')
                                has-error
                            @enderror">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control my-2" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group
                            @error('password')
                                has-error
                            @enderror">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control my-2">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group
                            @error('password_confirmation')
                                has-error
                            @enderror">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control my-2">
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Registrate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection