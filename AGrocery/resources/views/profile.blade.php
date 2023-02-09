@extends('layout')
@section('headline', 'Amazing E-Grocery')

@section('content')
<div class="container-fluid" style="min-height: 87vh; display:flex; flex-direction: column; justify-content:center; align-items:center">
    @if ($session = session('session'))
        <div class="row mb-3">
            <div class="col-sm-8">
                <div class="alert alert-{{ $session['color'] }}" role="alert">
                    {{ $session['message'] }}
                </div>
            </div>
        </div>
    @endif

    <main class="form-signin w-100 m-auto justify-content-center">
        <div style="display:flex; flex-direction: row; justify-content: center; align-items: center">
            <div style="display:flex; flex-direction: row; align-items: center; padding: 30px">
                <img src="{{ asset('images/' . Auth::user()->display_picture_link) }}" class="rounded-circle" alt="..." style="height: 130px; width: 130px">
            </div>
            <form class="row g-3" method="POST" action="/profile" enctype="multipart/form-data">
                @csrf
                <div style="display:flex; flex-direction: row">
                    <div class="col-md-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" value="{{ old('first_name', $user->first_name) }}">
                        @error('firstName')
                            <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3 ms-2">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{ old('last_name', $user->last_name) }}">
                        @error('lastName')
                            <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div style="display:flex; flex-direction: row">
                    <div class="col-md-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"  value="{{ old('email', $user->email) }}">
                        @error('email')
                            <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3 ms-2">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" aria-label="Select Role" name="role" disabled>
                            @foreach ($roles as $role)
                                <option value="{{ $role->role_id }}"
                                    @if (old('role', $user->role_id) == $role->role_id) selected @endif>
                                    {{ $role->role_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('role')
                            <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div style="display:flex; flex-direction: row">
                    <div class="col-md-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" aria-label="Select Gender" name="gender" disabled>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->gender_id }}"
                                    @if (old('gender', $user->gender_id) == $gender->gender_id) selected @endif>
                                    {{ $gender->gender_desc }}
                                </option>
                            @endforeach
                        </select>
                        @error('gender')
                            <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3 ms-2">
                        <div class="mb-3">
                            <label for="displayPicture" class="form-label">Display Picture</label>
                            <input class="form-control" type="file" id="displayPicture" name="displayPicture">
                        </div>
                        @error('displayPicture')
                            <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div style="display:flex; flex-direction: row">
                    <div class="col-md-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3 ms-2">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="password_confirmation">
                    </div>
                </div>

                <button class="btn btn-md btn-primary" type="submit" fdprocessedid="95bo" style="margin-left:10px;max-width: 150px;">Save</button>
            </form>
        </div>
    </main>
</div>
@endsection
