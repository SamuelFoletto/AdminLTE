@extends('layouts.auth')
@section('body-class', 'register-page')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.register-logo -->
        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">Faça agora seu registro!</p>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nome Completo"
                           name="name" value="{{ old('name') }}"
                        />
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        <input type="email" class="form-control @error('email') is-invalid @enderror/>" placeholder="Email"
                               name="email" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha"
                               name="password" value="{{old('password')}}"
                        />
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        <input type="password" class="form-control " placeholder="Confirme sua senha" name="password_confirmation"
                        />

                    </div>
                    <div class="row">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                    </div>
                </form>
                <p class="mb-0 text-center">
                    <a href="login.html" class="text-center"> Eu já tenho um cadastro... </a>
                </p>
            </div>
        </div>
    </div>

@endsection
