@extends('emails.template')
@section('title','Şifre Sıfırlama')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Şifre Sıfırlama Linki</div>
                <div class="card-body">
                    <a href="http://laravel.test/changePassword?forgot_unique={{$forgot_unique}}">Şifreyi Sıfırlamak İçin Tıkla</a>.
                </div>
            </div>
        </div>
    </div>
@endsection
