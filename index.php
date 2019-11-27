<?php
require_once('SysFullCalendar/bdd.php');


$sql = "SELECT id, title, start, end, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DIFROL &mdash;Dirección Nacional de Fronteras y Límites del Estado</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

<!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="lib/hover/hoverex-all.css" rel="stylesheet">
  <link href="lib/jetmenu/jetmenu.css" rel="stylesheet">
  <link href="lib/owl-carousel/owl-carousel.css" rel="stylesheet">

<!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/blue.css">

<!-- Full Calendar  -->

	
	<!-- FullCalendar -->
	<link href='SysFullCalendar/css/fullcalendar.css' rel='stylesheet' />   


</head>


<body>
<!-- Container de Barra superior  -->
  <div class="topbar clearfix">
    <div class="container">
      <div class="col-lg-12 text-right">
        <div class="social_buttons">
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa  fa-id-badge"></i></a>
          <a href="SitioDifrolAdmin/index.php">Funcionario <span class="sr-only">(current)</span></a>
        </div>
      </div>
    </div>
  </div>
<!-- Fin Container de Barra superior   -->

<!-- Cabezera contiene logos  -->
  <header class="header">
    <div class="container">
      <div class="site-header clearfix">

        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
          <div class="site-title" id="title">
            <a href="index.php" title="">
              <h4><img height="100px" width="100px" src="./img/DIFROLlogo.png"></h4>
            </a>
          </div>
        </div>
  <!-- Espacio -->
        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
        </div> 
        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
        </div>   
  <!-- Logo UGIT -->
        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
          <div class="site-title" id="title">
            <a href="index.php" title="">
              <h4><img height="200px" width="250px" src="./img/Logo_UGIT.png"></h4>
            </a>
          </div>
        </div>
  <!-- Fin Logo UGIT -->
     
      </div>
      <!-- site header -->
    </div>
    <!-- end container -->
  </header>
<!-- Fin Cabezera contiene logos  -->

<!-- Banner Carrucel  -->
  <section id="intro">
    <div class="container">
      <div class="ror">
        <div class="col-md-8 col-md-offset-2">
          <h1>Intranet DIFROL</h1>
          <p>Bienvenidos al Intranet DIFROL en este sitio podrás encontrar ayuda para resolver dudas y problemas, además de encontrar material y sistemas de DIFROL</p>
        </div>
      </div>
    </div>
  </section>
<!-- Fin Banner Carrucel  -->

<!-- Banner de aplicaciones principales  -->
  <section class="section1">
    <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="servicebox text-center">
          <div class="service-icon">
            <div class="dm-icon-effect-1" data-effect="slide-left">
            <a href="http://sgc.difrol.cl" class=""> <i class="active dm-icon3 fa fa-envelope-open fa-5x"></i> </a>
            </div>
            <div class="servicetitle">
              <h4>SGC</h4>
              <hr>
            </div>
            <p>Aquí podrás gestionar toda la correspondencia interna y externa</p>
          </div>
        </div>
      </div>


        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="servicebox text-center">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=AddSession" class=""> <i class="active dm-icon3 fa fa-envelope fa-5x"></i> </a>
              </div>
              <div class="servicetitle">
                <h4>Correo Institucional</h4>
                <hr>
              </div>
              <p>Correo Institucional de Ministerio de Relaciones Exteriores</p>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="servicebox text-center">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-right">
                <a href="https://scl-df-app13.minrel.gov.cl/arcgiswap/apps/webappviewer/index.html?id=39de75812a334cb6b69e33a8ba5a096c" class=""> <i class="active dm-icon4 fa fa-map-marker fa-5x"></i> </a>
              </div>
              <div class="servicetitle">
                <h4>Información Territorial</h4>
                <hr>
              </div>
              <p>Sistema con la información territorial del chile  </p>
            </div>
          </div>
        </div>

    </div>
  </section>
<!-- Fin Banner de aplicaciones principales  -->

<!-- Inicio de Container de aplicacions de difrol     -->
  <section class="section5">
    <div class="container">

        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="servicebox text-center">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a href="digital-download.php" class=""> <i class="active dm-icon fa fa-download fa-4x"></i> </a>
              </div>
              <div class="servicetitle">
                <h4>Kit Digital</h4>
                <hr>
              </div>
              <p>Kit digital contiene formatos, logos 
                  que te ayudaran para generar la 
                  documentación oficial de DIFROL</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="servicebox text-center">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a href="http://flujos.difrol.cl" class=""> <i class="active dm-icon fa fa-list-alt fa-4x"></i> </a>
              </div>
              <div class="servicetitle">
                <h4>Sistema de Gestor de Solicitudes</h4>
                <hr>
              </div>
              <p>Aquí puedes gestionar tus solicitudes
               como solicitud día administrativo, 
               solicitud de cambios en sitio web, etc.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="servicebox text-center">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a href="account.php" class=""> <i class="active dm-icon fa fa-share fa-4x"></i> </a>
              </div>
              <div class="servicetitle">
                <h4>Documentación Oficial</h4>
                <hr>
              </div>
              <p>Documentación oficial podrás encontrar 
                toda la documentación que se encuentra 
                normada por DIFROL</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="servicebox text-center">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a href="http://10.10.255.73:8081/webapp/mineria/login.php" class=""> <i class="active dm-icon fa fa-truck fa-4x"></i> </a>
              </div>
              <div class="servicetitle">
                <h4>Concesiones Mineras </h4>
                <hr>
              </div>
              <p>Aqui podras encontrar la aplicacion de Concesiones Mineras </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="servicebox text-center">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a href="support.php" class=""> <i class="active dm-icon fa fa-server  fa-4x"></i> </a>
              </div>
              <div class="servicetitle">
                <h4>Soporte Técnico DIFROL</h4>
                <hr>
              </div>
              <p>Página en Construcción</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="servicebox text-center">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a href="404.php" class=""> <i class="active dm-icon fa fa-pencil fa-4x"></i> </a>
              </div>
              <div class="servicetitle">
                <h4>Persomatico</h4>
                <hr>
              </div>
              <p>Página en Construcción</p>
            </div>
          </div>
        </div>  
    </div>
  </section>
<!-- fin de Container de aplicacions de difrol     -->

 
  


  <section class="section3">
    <div class="container">

<div class="row">
    <div class="col-lg-12 text-center">
        <h1>Calendario DIFROL</h1>
        <p class="lead">Informate de las Fechas importantes</p>
        <div id="calendar" class="col-centered">
        </div>
    </div>

</div>
  </section>
  <!-- end section3 -->

  <footer class="footer">
  <div class="copyrights">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-12 columns footer-left">
        <p>Copyright © 2019 - Todos los Derechos Reservados por DIFROL.</p>
      </div>
    </div>
  </div>
  </footer>
  <div class="dmtop">Boton Envio a Principio</div>

<!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/prettyphoto/js/prettyphoto.js"></script>
  <script src="lib/isotope/isotope.min.js"></script>
  <script src="lib/hover/hoverdir.js"></script>
  <script src="lib/hover/hoverex.min.js"></script>
  <script src="lib/unveil-effects/unveil-effects.js"></script>
  <script src="lib/owl-carousel/owl-carousel.js"></script>
  <script src="lib/jetmenu/jetmenu.js"></script>
  <script src="lib/animate-enhanced/animate-enhanced.min.js"></script>
  <script src="lib/jigowatt/jigowatt.js"></script>
  <script src="lib/easypiechart/easypiechart.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="SysFullCalendar/js/main.js"></script>
  <!-- jQuery Version 1.11.1 -->
  <script src="SysFullCalendar/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="SysFullCalendar/js/bootstrap.min.js"></script>

<!-- FullCalendar -->
<script src='SysFullCalendar/js/moment.min.js'></script>
<script src='SysFullCalendar/js/fullcalendar/fullcalendar.min.js'></script>
<script src='SysFullCalendar/js/fullcalendar/fullcalendar.js'></script>
<script src='SysFullCalendar/js/fullcalendar/locale/es.js'></script>


<script>

$(document).ready(function() {

var date = new Date();
   var yyyy = date.getFullYear().toString();
   var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
   var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();

$('#calendar').fullCalendar({
  header: {
     language: 'es',
    left: 'prev,next today',
    center: 'title',
    right: 'month,basicWeek,basicDay',

  },
  defaultDate: yyyy+"-"+mm+"-"+dd,
  editable: true,
  eventLimit: true, // allow "more" link when too many events
  selectable: true,
  selectHelper: true,
  select: function(start, end) {
    
    $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
    $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
    $('#ModalAdd').modal('show');
  },
  eventRender: function(event, element) {
    element.bind('dblclick', function() {
      $('#ModalEdit #id').val(event.id);
      $('#ModalEdit #title').val(event.title);
      $('#ModalEdit #color').val(event.color);
      $('#ModalEdit').modal('show');
    });
  },
  eventDrop: function(event, delta, revertFunc) { // si changement de position

    edit(event);

  },
  eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

    edit(event);

  },
  events: [
  <?php foreach($events as $event): 
  
    $start = explode(" ", $event['start']);
    $end = explode(" ", $event['end']);
    if($start[1] == '00:00:00'){
      $start = $start[0];
    }else{
      $start = $event['start'];
    }
    if($end[1] == '00:00:00'){
      $end = $end[0];
    }else{
      $end = $event['end'];
    }
  ?>
    {
      id: '<?php echo $event['id']; ?>',
      title: '<?php echo $event['title']; ?>',
      start: '<?php echo $start; ?>',
      end: '<?php echo $end; ?>',
      color: '<?php echo $event['color']; ?>',
    },
  <?php endforeach; ?>
  ]
});

function edit(event){
  start = event.start.format('YYYY-MM-DD HH:mm:ss');
  if(event.end){
    end = event.end.format('YYYY-MM-DD HH:mm:ss');
  }else{
    end = start;
  }
  
  id =  event.id;
  
  Event = [];
  Event[0] = id;
  Event[1] = start;
  Event[2] = end;
  
  $.ajax({
   url: 'editEventDate.php',
   type: "POST",
   data: {Event:Event},
   success: function(rep) {
      if(rep == 'OK'){
        alert('Evento se ha guardado correctamente');
      }else{
        alert('No se pudo guardar. Inténtalo de nuevo.'); 
      }
    }
  });
}

});

</script>


</body>
</html>
