@extends('layouts.admin')

@section('css')
<style>
    .card-profile > .card-body{
        margin-top: 3px !important;
    }
    .user-detail{
        height: 16.8rem;
    }
    .card-profile > .card-avatar {
        max-width: 130px;
        max-height: 130px;
    }
    .card-avatar > img {
        width: 100%;
        height: auto;
        border-radius: 50%;
    }
    .nav-link.active{
        border-radius: 0px !important;
        background-color: #3ec9d7 !important;
    }
</style>
@endsection
@section('content')
<div class="pcoded-content">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-profile user-detail text-center">
                <div class="card-avatar m-auto">
                    @if($user->image == null)
                    <img class="img" src="{{asset('admin_theme/images/user/account.png')}}">
                    @else
                    <img class="img" src="{{asset($user->image)}}">
                    @endif
                </div>
                <div class="card-body">
                    <h6 class="card-category text-gray">{{$user->role}} | 
                        <span class="badge bg-light-success">active</span>
                    </h6>
                    <h4 class="card-title">{{$user->username}}</h4>
                    <p class="card-description">
                        {{$user->email}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header p-0">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active btn" data-toggle="tab" href="#tabs-1" role="tab">
                                <i class="material-icons-two-tone">info</i> Personal Info
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" data-toggle="tab" href="#tabs-2" role="tab">
                                <i class="material-icons-two-tone">lock</i> Secutity Info
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">   
                        <form action="{{ route('admin.generalUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="inputState">Image</label>
                                    <input type="file" name="image" id="inputState" class="dropify" data-default-file="{{ asset($user->image)}}" accept=".png, .jpg, .jpeg, .gif, .svg .mp4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="inputPassword4">Username</label>
                                    <input type="text" name="username" class="form-control" id="inputPassword4" value="{{$user->username}}" placeholder="Username">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="inputEmail4">Email</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail4" value="{{$user->email}}" placeholder="Email">
                                </div>
                                
                            </div>
                            <button type="submit" class="btn  btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="tab-pane " id="tabs-2" role="tabpanel">
                        <form action="{{ route('admin.passUpdate') }}" method="POST">
                        @csrf                                    
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="inputCurrentPass">Current Password</label>
                                        <input type="password" name="current_password" id="inputCurrentPass" class="form-control @error('current_password') is-invalid @enderror" autocomplete="off">
                                        @error('current_password')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="inputNewPass">New Password</label>
                                        <input type="password" name="password" id="inputNewPass" class="form-control @error('password') is-invalid @enderror" autocomplete="off">
                                        @error('password')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="inputNewPassCon">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="inputNewPassCon" class="form-control @error('password_confirmation') is-invalid @enderror" autocomplete="off">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection