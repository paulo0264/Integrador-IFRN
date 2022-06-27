@extends('layouts.app')

@section('content')
    <section id="form">
        <!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form">
                        <!--login form-->
                        <h2>Logar para sua Conta</h2>
                        <form action="#">
                            <input type="text" placeholder="Nome" />
                            <input type="email" placeholder="Email" />
                            <span>
                                <input type="checkbox" class="checkbox">
                                Manter conectado
                            </span>
                            <button type="submit" class="btn btn-default">Logar</button>
                        </form>
                    </div>
                    <!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OU</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form">
                        <!--sign up form-->
                        <h2>Criar nova Conta</h2>
                        <form action="#">
                            <input type="text" placeholder="Nome" />
                            <input type="email" placeholder="Email" />
                            <input type="password" placeholder="Password" />
                            <button type="submit" class="btn btn-default">Criar</button>
                        </form>
                    </div>
                    <!--/sign up form-->
                </div>
            </div>
        </div>
    </section>
    <!--/form-->
@endsection
