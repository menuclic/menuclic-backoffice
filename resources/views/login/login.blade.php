@extends('layouts.auth')

@section('content')
    <section id="wrapper" class="login-register" ng-controller="LoginController">
        <div class="login-box login-sidebar animated fadeInRight">
            <div class="white-box ">
                <form class="form-horizontal form-material" id="loginform" ng-submit="login()" name="loginForm">
                    <a href="javascript:void(0)" class="text-center db"><img src="/images/logo.png" style="height: 150px" alt="Home" /></a>

                    @if(session('error'))
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" ng-required="true" ng-model="user.user" placeholder="Correo electrónico" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" ng-required="true" ng-model="user.password" placeholder="Contraseña" />
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Recordarme en este equipo</label>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <a href="javascript:void(0)" id="to-recover" class="text-dark"><i class="fa fa-lock m-r-5"></i> Olvidé mi contraseña</a>
                        </div>
                    </div>

                    <div class="form-group" ng-show="errorMessage">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                [[ errorMessage ]]
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-default btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" ng-disabled="loginForm.$invalid || busy">
                                <span class="fa fa-spin fa-spinner" ng-show="busy"></span>
                                Iniciar Sesión
                            </button>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection