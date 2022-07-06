@extends('user.user_template')
@section('title','Forgot Password')
@section('content')
    <div class="container" style="padding-top: 20px;">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('resetPassword',['forgot_unique'=>$forgot_unique])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Yeni Şifreniz</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Şifre Yenile</button>
                </form>
            </div>
        </div>
    </div>

@endsection
