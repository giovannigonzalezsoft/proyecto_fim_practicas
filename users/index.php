<?php
include ('../app/config/config.php')
//echo $URL;
?>
<!DOCTYPE html>
<html>
<head>
  <?php include ('../layout/head.php');?>
  <title>PracticasFIM</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include ('../layout/menu.php');?>   <!-- MENU DE LA IZQUIERDA -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <h3>INFORMACIÓN IMPORTANTE</h3>  
      </h1>
    </section>

    <!-- Main content AQUI VA CODIGO PRINCIPAL-->
    <section class="content">
    <img src="<?= $URL; ?>/img/fim.png" class="user-image" width="1100" height="200" alt="User Image"> <br> <br>
    <p>ATENCIÓN!
ATENCIÓN ASPIRANTES DE NUEVO INGRESO A LA FACULTAD DE INGENIERÍA MOCHIS: 
Información importante del proceso de preinscripción del ciclo escolar 2020-2021 en las licenciaturas de: <br><br>
- Ingeniería Civil. <br>
- Ingeniería Geodésica. <br>
- Ingeniería de Software. <br>
- Ingeniería en Procesos Industriales. <br>
- Ingeniería de Software en Modalidad Virtual. <br> <br>
Informacion Preinscripciones: <b style="color:blue;">Aqui</b>  <br>
Procedimiento: <b style="color:blue;">Aqui</b> <br> <br>

La información del proceso general de preinscripción ciclo escolar 2021-2022 puede ser consultada en:
<p style="color:blue;">https://www.uas.edu.mx/preinscripcion/</p><br>
Más información sobre la oferta educativa de nuestra Facultad puede ser consultada en:
  <p style="color:blue;">http://fim.uas.edu.mx/oferta </p><br> <br>
<strong>Dudas o mayor información:</strong> controlescolar.fim@uas.edu.mx #FIMUAS</p>
<img src="<?= $URL; ?>/img/inscripcion.png" class="user-image img-responsive center-block" width="500" height="500" alt="User Image"> <br> <br>

    </section>
    <!-- /.content -->
  </div>
  <?php include ('../layout/footer.php');?>   <!-- AQUI ES FOOTER -->

</div>
<?php include ('../layout/links.php');?>   <!-- LINKS JQUERY, ETC -->
</body>
</html>
