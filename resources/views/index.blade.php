@extends('layouts.app')
@section('content')
<!-- BEGIN: Header-->
<div class="pgbar pg_hidden">
    <div class="content">
        <div class="preloader-wrapper active">
            <div class="spinner-layer spinner-red-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color no-shadow nav-collapsible sideNav-lock">
            <div class="nav-wrapper">
                <div class="logo-wrapper hide-on-med-and-down">
                    <a href="https://tabasco.gob.mx/educacion" class="" target="_blank">
                        <img src="https://webcore.setab.gob.mx/setabtest/public/images/logo_blanco.png" style="width:17em;">
                    </a>
                </div>
                <ul class="navbar-list right">
                    @if (Auth::check())
                    <li class="hide-on-med-and-down">{{ Auth::user()->name }}</li>
                    @endif
                    <li class="hide-on-med-and-down">
                        <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                            <i class="material-icons">settings_overscan</i>
                        </a>
                    </li>
                    <li class="hide-on-large-only search-input-wrapper">
                        <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
                            <i class="material-icons">search</i>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown">
                            <i class="material-icons">notifications_none<small class="notification-badge badgevalue">0</small></i>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown">
                            <span class="avatar-status avatar-online">
                                <img src="https://webcore.setab.gob.mx/setabtest/photos/AAOG660826HTCVRS09.jpg" onError="this.src='https://webcore.setab.gob.mx/setabtest/public/images/favicon.png'" alt="avatar"><i></i>
                            </span>
                        </a>
                        <ul class="dropdown-content" id="profile-dropdown" tabindex="0">
                            <li>
                                <a class="grey-text text-darken-1" href="https://webcore.setab.gob.mx/setabtest/private/profile"><i class="material-icons">person_outline</i>Perfil</a>
                            </li>
                            <li>
                                <a class="grey-text text-darken-1 modal-trigger" href="#modalpwd"><i class="material-icons">lock_outline</i> Cambiar Contraseña</a>
                            </li>
                            <li class="divider" tabindex="0"></li>
                            <li>
                                <a class="grey-text text-darken-1" href="https://webcore.setab.gob.mx/setabtest/signout"><i class="material-icons">keyboard_tab</i>Salir</a>
                            </li>
                        </ul>
                    </li>

                    <!-- notifications-dropdown-->
                    <ul class="dropdown-content" id="notifications-dropdown">
                        <li>
                            <h6>Notificaciones:<span class="new badge bagdevalue">1</span></h6>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- END: Header-->

<!-- BEGIN: SideNav-->
{{-- <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper hide-on-med-and-down">
            <img class="menu-logo" src="https://webcore.setab.gob.mx/setabtest/public/images/favicon.png" alt="SETAB Logo">
            <a class="brand-logo" href="https://webcore.setab.gob.mx/setabtest/private">
                <span class="logo-text hide-on-med-and-down">SETAB</span>
            </a>
            <a class="navbar-toggler" href="#"><i class="material-icons" style="color: var(--red-morena);">radio_button_checked</i></a>
        </h1>
    </div>

    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium btn-setab waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out">
        <i class="material-icons">menu</i>
    </a> 
</aside> --}}


<aside class="sidebar-new sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper hide-on-med-and-down">
            <img class="menu-logo" src="https://webcore.setab.gob.mx/setabtest/public/images/favicon.png" alt="SETAB Logo">
            <a class="brand-logo" href="https://webcore.setab.gob.mx/setabtest/private">
                <span class="logo-text hide-on-med-and-down">SETAB</span>
            </a>
            <a class="navbar-toggler" href="#"><i class="material-icons" style="color: var(--red-morena);">radio_button_checked</i></a>
        </h1>
    </div>
    <div id="jstree">
        <!-- in this example the tree is populated from inline HTML -->
        <ul>
            <li>Root node 1
                <ul>
                    <li id="child_node_5">Child node 1</li>
                    <li>Child node 2</li>
                </ul>
            </li>
            <li>Root node 2</li>
            <li data-jstree='{"opened":true,"selected":false}'>Root
                <ul>
                    <li data-jstree='{"disabled":true}'>Child</li>
                    <li data-jstree='{"icon":"//jstree.com/tree.png"}'>
                        Child</li>
                    <li data-jstree='{"icon":"glyphicon glyphicon-leaf"}'>
                        Child</li>
                </ul>
            </li>
        </ul>
    </div>
    <i class="navigation-header-icon material-icons">more_horiz</i>
</aside>


<!-- END: SideNav-->
<!-- END: Header-->
<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="col s12 p-0">
            <ul class="tabs swipeable tabmodules">
                <li class="tab col m2"><a href="#mymessages">AVISOS</a></li>
            </ul>
        </div>
        <div id="tabscontent">
            <div id="maintab" class="col s12">
                <div id="mymessages" class="mt-1">No hay avisos por el momento</div>
            </div>
        </div>
    </div>
</div>

<div id="intro-modal" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h5>ACTUALIZACIÓN DE DATOS PERSONALES</h5>
        <div style="text-align:center;font-size:1.2em;padding-top:2em;">
            <h6>POR FAVOR TÓMATE UN TIEMPO PARA:</h6>
            <a class="btn btn-large btn-main" href="https://webcore.setab.gob.mx/setabtest/ANUNCIO_DE_PRIVACIDAD.pdf" target="_blank">LEER AVISO DE
                PRIVACIDAD</a>
            <a class="btn btn-large btn-main" href="https://webcore.setab.gob.mx/setabtest/docs/manual_basico.pdf" target="_blank">LEER MANUAL</a>
            <a class="btn btn-large btn-main" href="https://webcore.setab.gob.mx/setabtest/docs/login_basico.mp4" target="_blank">VER VIDEO INFORMATIVO</a>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">CERRAR</a>
    </div>
</div>

<!-- BEGIN: Footer-->
<footer class="page-footer footer footer-static mt-1 grey darken-4">
    <div class="footer-copyright">
        <div class="container"><span>&copy; 2021 <a href="https://www.setab.gob.mx" target="_blank">Secretaría de
                    Educación de Tabasco</a> Todos los derechos reservados.</span><span class="right hide-on-small-only">Basado en: <a href="https://www.setab.gob.mx">WebCoreX</a></span>
        </div>
    </div>
</footer>

<div id="modalpwd" class="modal" onclosednone>
    <form action="https://webcore.setab.gob.mx/setabtest/get" id="fchangepwd">
        <div class="modal-content">
            <h4 class="mb-0 mt-0 display-flex justify-content-between">Actualizar Contraseña</h4>
            <input type="hidden" name="op" value="11">
            <input type="hidden" name="modname" value="jsusers">
            <input type="hidden" name="pexec" value="changemypwd">
            <div class="input-field">
                <label>Contraseña Actual</label>
                <input type="password" id="pwd0" name="pwd0">
            </div>
            <div class="input-field">
                <label>Nueva Contraseña</label>
                <input type="password" id="pwd1" name="pwd1">
            </div>
            <div class="input-field">
                <label>Confirmar Nueva Contraseña</label>
                <input type="password" id="pwd2" name="pwd2">
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-gray btn-flat ">Cancelar</a>
            <a class="btn setabtn" onClick="sendpwd()">Actualizar</a>
        </div>
    </form>
</div>


@endsection

