@extends('layouts.app')
@section('login')
    <div class="col s12">
        <div class="container" style="margin:auto; overflow: hidden; padding: 15px;">
            <div id="login-page" class="row">
                <div class="col s12 m8 l6 xl4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                    <form class="login-form" id="flogin" action="signin" method="post">
                        <input type="hidden" name="grant_type" value="password">
                        <input type="hidden" name="client_id" value="setabapp">
                        <input type="hidden" name="topage" value="private">
                        <div class="row">
                            <div class="input-field col s12" style="text-align:center">
                                <img style="width:80%;height:auto;margin-bottom:2.5em;"
                                    src="https://webcore.setab.gob.mx/setabtest/public/images/logo.png">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">person_outline</i>
                                <input id="uid" name="uid" type="text" placeholder="Id de usuario" value="">
                                <label for="username" class="center-align">Usuario ID</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                <input id="pwd" name="pwd" type="password" placeholder="Contraseña" value="">
                                <label for="password">Contraseña</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12 ml-2 mt-1" style="font-size:1.6em;text-align:center">
                                <span>Leer <a href="https://webcore.setab.gob.mx/setabtest/ANUNCIO_DE_PRIVACIDAD.pdf"
                                        target="_blank">aquí</a> nuestro aviso de
                                    privacidad.</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="btn btn-large waves-effect waves-light col s12 btnlogin"
                                    style="background:#B13752">Acceder</a>
                                </button>
                            </div>
                            <div class="row">
                                <div class="input-field col s12"
                                    style="text-align:center;font-size:1.2em;font-weight:bold;">
                                    <a href="https://aplicaciones.setab.gob.mx/webcorex">RECUPERA AQUÍ TU CONTRASEÑA</a>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6 m6 l6">
                                        <p class="margin medium-small">
                                            <a id="menu" class="waves-effect waves-light btn btn-floating pulse"
                                                style="background:#B13752;" title="¿Necesitas ayuda?"><i
                                                    class="material-icons">help</i></a>
                                            <a class="waves-effect waves-light" href="docs/actualizar_perfil.mp4"
                                                target="_blank"
                                                title="Al presionar el enlace, podrás ver el video informativo.."> Video
                                                Informativo...</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tutorial -->
        <div id="intro-modal" class="modal"
            style="z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);">
            <div class="modal-content">
                <p class="modal-header right">
                    <br>
                    <span class="delayed modal-close fadeInUp" style="display: none; font-size: 1.2em !important;">
                        Cerrar
                        <span class="right">
                            <i class="material-icons right-align">clear</i>
                        </span>
                    </span>
                </p>
                <div class="carousel carousel-slider center intro-carousel" data-indicators="true"
                    style="height: 174.094px;">
                    <div class="carousel-fixed-item center middle-indicator with-indicators">
                        <div class="left">
                            <button
                                class="movePrevCarousel middle-indicator-text btn btn-flat text-setab waves-effect waves-light btn-prev disabled">
                                <i class="material-icons">navigate_before</i> <span
                                    class="hide-on-small-only">Anterior</span>
                            </button>
                        </div>

                        <div class="right">
                            <button
                                class="moveNextCarousel middle-indicator-text btn btn-flat text-setab waves-effect waves-light btn-next">
                                <span class="hide-on-small-only text-siguiente">Video Tutoriales</span> <i
                                    class="material-icons">navigate_next</i>
                            </button>
                        </div>
                    </div>
                    <!-- Slides -->
                    <div class="carousel-item slide-1 active"
                        style="z-index: 0; opacity: 1; visibility: visible; transform: translateX(0px) translateX(0px) translateX(0px) translateZ(0px);">
                        <img src="https://webcore.setab.gob.mx/setabtest/public/images/logo.png" alt=""
                            class="responsive-img animated fadeInUp slide-1-img" style="max-height: 100px; width: auto;">
                        <h5 class="mt-7 center animated fadeInUp text-setab">¡Bienvenido!</h5>
                        <p class="mt-5 animated fadeInUp">
                            <a href="https://webcore.setab.gob.mx/setabtest/ANUNCIO_DE_PRIVACIDAD.pdf"
                                class="animated fadeInUp center font-weight-400">
                                <h6>Conoce como utilizamos tu información.</h6>
                            </a>
                            <a href="https://webcore.setab.gob.mx/setabtest/ANUNCIO_DE_PRIVACIDAD.pdf" target="_blank"
                                class="animated fadeInUp btn btn-setab">Aviso de Privacidad</a>
                            <a href="https://webcore.setab.gob.mx/setabtest/docs/manual_basico.pdf" target="_blank"
                                class="animated fadeInUp btn btn-setab">Manual
                                de Usuario</a>
                        </p>
                    </div>
                    <div class="carousel-item slide-2"
                        style="transform: translateX(0px) translateX(512px) translateZ(0px); z-index: -1; opacity: 1; visibility: visible;">
                        <video class="responsive-video hoverable"
                            poster="https://webcore.setab.gob.mx/setabtest/public/images/video-thumbnail.svg" controls
                            style="border-radius: 1em;" controlsList="nodownload">
                            <source src="docs/validar_plantilla.mp4" type="video/mp4">
                        </video>
                        <a href="#!" role="button" class="flow-text card-title font-weight-400">¿Cómo Validar la Plantilla
                            de Personal?</a>
                    </div>
                    <div class="carousel-item slide-3"
                        style="transform: translateX(0px) translateX(-512px) translateZ(0px); z-index: -1; opacity: 1; visibility: visible;">
                        <video class="responsive-video hoverable"
                            poster="https://webcore.setab.gob.mx/setabtest/public/images/video-thumbnail.svg" controls
                            style="border-radius: 1em;" controlsList="nodownload">
                            <source src="docs/actualizar_datos_personales.mp4" type="video/mp4">
                        </video>
                        <a href="#!" role="button" class="flow-text card-title font-weight-400">¿Cómo actualizar tus datos
                            personales?</a>
                    </div>
                    <div class="carousel-item slide-4"
                        style="transform: translateX(0px) translateX(512px) translateZ(0px); z-index: -1; opacity: 1; visibility: visible;">
                        <video class="responsive-video hoverable"
                            poster="https://webcore.setab.gob.mx/setabtest/public/images/video-thumbnail.svg" controls
                            style="border-radius: 1em;" controlsList="nodownload">
                            <source src="docs/login_basico.mp4" type="video/mp4">
                        </video>
                        <a href="#!" role="button" class="flow-text card-title font-weight-400">¿Cómo ingresar a la
                            plataforma?</a>
                    </div>
                    <!-- /Slides -->
                </div>
            </div>
        </div>
        <!-- /Tutorial -->
    @endsection
