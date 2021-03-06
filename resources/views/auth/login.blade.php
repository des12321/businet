@extends('templatelogin')
@section ('content-login')

    <div class="inner-form">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">ENTRAR</a></li>
            <li><a href="#tab2" data-toggle="tab">REGISTRARTE</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active in fade" id="tab1">
                <div class="panel-group">
                    <form id="form-login" action="{{ route('auth.login') }}" method="post"
                          enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Username</label>
                                <div class="form-group">
                                    <input type="text" name="usernameLogin" id="usernameLogin" class="form-control"
                                           placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label>Contraseña</label>
                                <div class="form-group">
                                    <input type="password" name="passwordLogin" id="passwordLogin" class="form-control input"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-default">
                                    <span>Iniciar Sesión</span>
                                </button>
                            </div>
                            <div class="col-lg-12">
                                <div class="forgot">
                                    <p>¿Olvido su contraseña?</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="tab2">
                <div class="panel-group">
                    <form role="form">
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Username</label>
                                <div class="form-group">
                                    <input type="text" name="name" id="ad_soyad" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Email</label>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Contraseña</label>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Password Again</label>
                                <div class="form-group">
                                    <input type="password" name="password2" id="email" class="form-control"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-default">
                                    <span>Registrate</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  <!-- inner-form -->
@endsection