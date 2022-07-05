@extends('user.user_template')
@section('title','Forgot Password')
@section('content')
    <div class="container" style="padding-top: 20px;">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('forgotPassword')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mail Adresiniz</label>
                        <input type="email" class="form-control" id="forgotEmail" aria-describedby="emailHelp" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>
            </div>
        </div>
    </div>

@endsection
