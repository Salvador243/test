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
                            <img src="https://webcore.setab.gob.mx/setabtest/public/images/logo_blanco.png"
                                style="width:17em;">
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
                            <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);"
                                data-target="notifications-dropdown">
                                <i class="material-icons">notifications_none<small
                                        class="notification-badge badgevalue">0</small></i>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                                data-target="profile-dropdown">
                                <span class="avatar-status avatar-online">
                                    <img src="https://webcore.setab.gob.mx/setabtest/photos/AAOG660826HTCVRS09.jpg"
                                        onError="this.src='https://webcore.setab.gob.mx/setabtest/public/images/favicon.png'"
                                        alt="avatar"><i></i>
                                </span>
                            </a>
                            <ul class="dropdown-content" id="profile-dropdown" tabindex="0">
                                <li>
                                    <a class="grey-text text-darken-1"
                                        href="https://webcore.setab.gob.mx/setabtest/private/profile"><i
                                            class="material-icons">person_outline</i>Perfil</a>
                                </li>
                                <li>
                                    <a class="grey-text text-darken-1 modal-trigger" href="#modalpwd"><i
                                            class="material-icons">lock_outline</i> Cambiar Contraseña</a>
                                </li>
                                <li class="divider" tabindex="0"></li>
                                <li>
                                    <a class="grey-text text-darken-1"
                                        href="https://webcore.setab.gob.mx/setabtest/signout"><i
                                            class="material-icons">keyboard_tab</i>Salir</a>
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
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper hide-on-med-and-down">
                <img class="menu-logo" src="https://webcore.setab.gob.mx/setabtest/public/images/favicon.png"
                    alt="SETAB Logo">
                <a class="brand-logo" href="https://webcore.setab.gob.mx/setabtest/private">
                    <span class="logo-text hide-on-med-and-down">SETAB</span>
                </a>
                <a class="navbar-toggler" href="#"><i class="material-icons"
                        style="color: var(--red-morena);">radio_button_checked</i></a>
            </h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow ps ps--active-y menuapps"
            id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
            <li class="navigation-header">
                <a class="navigation-header-text">Módulos</a>
                <i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)" id="72">
                    <i class="material-icons">folder</i>
                    <span class="menu-title" data-i18n="PLANTILLA PERSONAL">PLANTILLA PERSONAL</span>
                </a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li class="bold">
                            <a class="waves-effect waves-cyan" href='#' onClick="openmodule(this)"
                                title="03) PERSONAL POR CCT" id="73">
                                <i class="material-icons">receipt</i>
                                <span class="menu-title" data-i18n="03) PERSONAL POR CCT">03) PERSONAL POR CCT</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)" id="72">
                    <i class="material-icons">folder_open</i>
                    <span class="menu-title" data-i18n="PLANTILLA PERSONAL">Arbol</span>
                </a>
                <div class="collapsible-body">
                    <div id="using_json_2" class="sidenav-new"></div>
                </div>
            </li>
        </ul>
        <div class="navigation-background"></div>
        <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium btn-setab waves-effect waves-light hide-on-large-only"
            href="#" data-target="slide-out">
            <i class="material-icons">menu</i>
        </a>
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


 <div id="contextMenu" class="context-menu" style="display: none"> 
        <ul class="menu"> 
            <li class="share"><a href="#"><i class="fa fa-share" aria-hidden="true"></i> Share</a></li> 
            <li class="rename"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Rename</a></li> 
            <li class="link"><a href="#"><i class="fa fa-link" aria-hidden="true"></i> Copy Link Address</a></li> 
            <li class="copy"><a href="#"><i class="fa fa-copy" aria-hidden="true"></i> Copy to</a></li> 
            <li class="paste"><a href="#"><i class="fa fa-paste" aria-hidden="true"></i> Move to</a></li> 
            <li class="download"><a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download</a></li> 
            <li class="trash"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></li> 
        </ul> 
    </div> 


    </div>

    <!-- BEGIN: Footer-->
    <footer class="page-footer footer footer-static mt-1 grey darken-4">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2021 <a href="https://www.setab.gob.mx" target="_blank">Secretaría de
                        Educación de Tabasco</a> Todos los derechos reservados.</span><span
                    class="right hide-on-small-only">Basado en: <a href="https://www.setab.gob.mx">WebCoreX</a></span>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        
       document.onclick = hideMenu; 
       document.oncontextmenu = rightClick; 

        function hideMenu() { 
            document.getElementById("contextMenu") 
                    .style.display = "none" 
        } 

        function rightClick(e) { 
            e.preventDefault(); 

            if (document.getElementById("contextMenu") .style.display == "block"){ 
                hideMenu(); 
            }else{ 
                var menu = document.getElementById("contextMenu")      
                menu.style.display = 'block'; 
            //    menu.style.left = (e.pageX||0 + 1) + "rem"; 
            console.log(menu.style, e.pageX);
                menu.style.top = e.pageY + "px"; 
            } 
        } 
    </script>
@endsection
