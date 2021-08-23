<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Secretaría de Educación del Estado de Tabasco">
    <meta name="keywords" content="setab, educación, tabasco, secretaría">
    <meta name="author" content="ThemeSelect class=" select="">
    <title>Secretaría de Educación de Tabasco</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://webcore.setab.gob.mx/setabtest/public/images/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://webcore.setab.gob.mx/setabtest/public/images/favicon.ico">
    <link rel="icon" type="image/ico" href="https://webcore.setab.gob.mx/setabtest/public/images/favicon.ico">
    <link rel="mask-icon" href="" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- END: Favicons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/css/custom/custom.css">
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/vendors/sweetalert/sweetalert.css" />
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/vendors/data-tables/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css" />
    <style href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" type="text/css"></style>
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/css/pages/data-tables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />

    {{-- NEW  STYLES --}}
    <link rel="shortcut icon" type="image/x-icon"
        href="https://webcore.setab.gob.mx/setabtest/public/images/favicon.ico">
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/css/custom/custom.css">
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/css/pages/login.css">
        <link rel="stylesheet" href="{{ asset('css/mystyles.css') }}">
    {{-- END NEW STYLES --}}
</head>

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions
2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <div class="login-bg">
        @yield('login')
    </div>

    @yield('content')

    <script>
        const hostname = window.location.protocol + "//" + window.location.host;
        const urlref = window.location.pathname.match(/^\/?(\w+)\//)[0];
        const baseurl = hostname + urlref;
    </script>

    <script src="https://webcore.setab.gob.mx/setabtest/public/app-assets/js/vendors.min.js"></script>
    <script src="https://webcore.setab.gob.mx/setabtest/public/app-assets/js/plugins.js"></script>
    <script src="https://webcore.setab.gob.mx/setabtest/public/app-assets/js/custom/custom-script.js"></script>
    <script src="https://webcore.setab.gob.mx/setabtest/public/app-assets/vendors/sweetalert/sweetalert.min.js"></script>
    <script src="https://webcore.setab.gob.mx/setabtest/public/app-assets/vendors/data-tables/js/jquery.dataTables.min.js">
    </script>
    <script
        src="https://webcore.setab.gob.mx/setabtest/public/app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="https://webcore.setab.gob.mx/setabtest/public/app-assets/vendors/formatter/jquery.formatter.min.js">
    </script>
    <script src="https://webcore.setab.gob.mx/setabtest/private/js/ajax.js"></script>
    <script src="https://webcore.setab.gob.mx/setabtest/private/js/datatables.js"></script>
    <script src="https://webcore.setab.gob.mx/setabtest/private/js/script.js"></script>
    <script src="https://webcore.setab.gob.mx/setabtest/public/js/futils.js"></script>
    <style>
        #userdiv {
            display: table;
            margin: auto;
            margin: 0;
            padding: 0;
        }

        #userdiv span a {
            color: #fff;
            display: block;
            margin: 0;
            padding: 0;
            font-Size: 0.9em;
        }

        .pg_show {
            display: block;
            position: absolute;
            background: rgba(0, 0, 0, .2);
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
            overflow: hidden;
            position: fixed;
        }

        .content {
            position: absolute;
            left: 45%;
            top: 45%;
        }

        .pg_hidden {
            display: none;
        }

    </style>

    <script type="text/javascript">
        const closeModal = document.querySelector('.modal-close');
        const delayedItems = document.querySelectorAll('.delayed');
        const videos = document.querySelectorAll('video');

        if (delayedItems) {
            setTimeout(function() {
                delayedItems.forEach(function(item, index) {
                    item.style.display = 'block';
                });
            }, 1500);
        }


        function fstopVideos(e) {
            if (videos) {
                videos.forEach(function(video, index) {
                    video.pause();
                });
            }
        }

        showHelp = () => {
            var el = document.createElement('div');
            let html =
                "<ul><li>TELÉFONO DE SOPORTE TÉCNICO:<br><a href='#'>993-3-15-10-29</a></li><li><br>CORREO ELECTRÓNICO:<br><a href='mailto:soporte.sistemas@correo.setab.gob.mx'>soporte.sistemas@correo.setab.gob.mx</a></li><li><br>MESA DE SERVICIOS:<br><a target='_blank' href='https://aplicaciones.setab.gob.mx/mesaservicios'>Ir a la Mesa de Servicios</a></li></ul>"
            //t = document.createTextNode("Custom HTML Message!!");
            el.style.cssText = 'color:#B13752;';
            //el.appendChild(t);
            el.innerHTML = html;
            swal({
                // title: 'SOLICITA AYUDA A TRAVÉS DE LOS SIGUIENTES MEDIOS:',
                icon: 'info',
                content: {
                    element: el,
                }
            });
        }
    </script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css"
        href="https://webcore.setab.gob.mx/setabtest/public/app-assets/css/custom/intro_modal.css">
    <!-- Script -->
    <script src="https://webcore.setab.gob.mx/setabtest/public/app-assets/js/search.js"></script>
    <script src="https://webcore.setab.gob.mx/setabtest/public/app-assets/js/custom/intro_modal.js"></script>
    <!-- Custom Script Local -->
    <script>
        $(document).ready(() => {
            $(".btnlogin").attr("disabled");
            $("#menu").click(() => {
                showHelp();
            })
        })
    </script>


    <!-- Query library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
    <script>
        $(function() {
            // 6 create an instance when the DOM is ready
            $('#jstree').jstree({
                "plugins" : [ "themes", "html_data", "checkbox", "sort", "ui" ]
            });
            // 7 bind to events triggered on the tree
            $('#jstree').on("changed.jstree", function(e, data) {
                console.log(data.selected);
            });
        });
    </script>
</body>

</html>
