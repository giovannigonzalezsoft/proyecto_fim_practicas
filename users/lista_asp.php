<?php
include_once('../app/config/config.php');

?>
<!DOCTYPE html>
<html>

<head>
  <?php include('../layout/head.php'); ?>
  <title>PracticasFIM</title>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include('../layout/menu.php'); ?>
    <!-- MENU DE LA IZQUIERDA -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Lista de Aspirantes a Practicas Profesionales
        </h1> <br>
      </section>

      <!-- Main content AQUI VA CODIGO PRINCIPAL-->
      <section class="content">
        <form action="" method="post">
          <div class="row">
            <div class="col-md-12">
              <!-- PANEL DATOS PERSONALES-->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><strong>Lista de Aspirantes</strong></h3>
                </div>
                <div class="panel-body">
                  <table class="table table-bordered table-hover">
                    <th>Nombre</th>
                    <th>Unidad Académica</th>
                    <th>Carrera</th>
                    <th>Email</th>
                    <th>Ver Datos</th>
                    <?php
                    $res = $con->prepare("SELECT * FROM fr_pract WHERE estatus = 'P'");
                    if ($res->execute()) {
                      $res->setFetchMode(PDO::FETCH_ASSOC);
                      $query = $res->fetchAll();
                      foreach ($query as $row) {  //Sacar variables
                        $id = $row['id_practicante'];
                        $nombre = $row['nombre'];
                        $un_academica = $row['un_academica'];
                        $carrera = $row['carrera'];
                        $email = $row['email'];
                    ?>
                        <tr>
                          <td><?php echo $nombre ?></td>
                          <td><?php echo $un_academica ?></td>
                          <td><?php echo $carrera ?></td>
                          <td><?php echo $email ?></td>
                          <td class="text-center">
                            <button data-target="#add<?php echo $id; ?>" name="btn_ver" type="button" class="btn btn-primary" data-toggle="modal">
                              Abrir FR
                            </button>
                          </td>
                        </tr>
                        <!-- EMPIEZA CODIGO DE MORAL RECIBE ID DEL FR E IMPRIME SU FORMULARIO-->
                        <div id="add<?php echo $id; ?>" class="modal fade" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">AL ACEPTAR UN ASPIRANTE SE GENERARÁ SU CARTA DE ACEPTACIÓN</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <?php
                              $res2 = $con->prepare("SELECT * FROM fr_pract WHERE id_practicante = :id");
                              $res2->bindParam(":id", $id, PDO::PARAM_INT);
                              if ($res2->execute()) {
                                $res2->setFetchMode(PDO::FETCH_ASSOC);
                                $query2 = $res2->fetchAll();
                                foreach ($query2 as $row) {  //Sacar variables
                                  $nombre2 = $row['nombre'];
                                  $domicilio2 = $row['domicilio'];
                                  $sexo2 = $row['sexo'];
                                  $fecha_nac2 = $row['fecha_nac'];
                                  $telefono2 = $row['telefono'];
                                  $email2 = $row['email'];
                                  $un_academica2 = $row['un_academica'];
                                  $carrera2 = $row['carrera'];
                                  $num_cuenta2 = $row['num_cuenta'];
                                  $sit_escolar2 = $row['sit_escolar'];
                                  $contacto2 = $row['contacto'];
                                  $tel_contacto2 = $row['tel_contacto'];
                                  $email_contacto2 = $row['email_contacto'];
                                  $giro_pref2 = $row['giro_pref'];
                                  $sector2 = $row['sector'];
                                  $dia_inicio2 = $row['dia_inicio'];
                                  $dia_final2 = $row['dia_final'];
                                  $hora_inicio2 = $row['hora_inicio'];
                                  $hora_final2 = $row['hora_final'];
                                  $actividades2 = $row['actividades'];
                                  $que_esperas2 = $row['que_esperas'];
                                  $comp_1_mod = $row['comp_1'];
                                  $comp_2_mod = $row['comp_2'];
                                  $comp_3_mod = $row['comp_3'];
                                  $idioma2 = $row['idioma'];
                                  $nivel_idioma2 = $row['nivel_idioma'];
                                }
                              }
                              ?>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-12">
                                    <!-- PANEL DATOS PERSONALES-->
                                    <div class="panel panel-primary">
                                      <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Datos Personales</strong></h3>
                                      </div>
                                      <div class="panel-body">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <!--COLUMNA IZQ-->
                                            <div class="form-group">
                                              <label>Nombre Completo</label>
                                              <input name="nombre" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $nombre2 ?>">
                                            </div>
                                            <div class="form-group">
                                              <label>Sexo</label>
                                              <input name="sexo" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $sexo2 ?>">
                                            </div>
                                            <div class="form-group">
                                              <label>Télefono Personal</label>
                                              <input name="telefono" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $telefono2 ?>">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <!--COLUMNA DER-->
                                            <div class="form-group">
                                              <label>Domicilio</label>
                                              <input name="domicilio" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $domicilio2 ?>">
                                            </div>
                                            <div class="form-group">
                                              <label>Fecha de Nacimiento DD/MM/YY</label>
                                              <input name="fecha_nac" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo date("d-m-Y", strtotime($fecha_nac2)) ?>">
                                            </div>
                                            <div class="form-group">
                                              <label>E-mail</label>
                                              <input name="email" type="text" name="email" class="form-control" readonly style="background-color:transparent;" value="<?php echo $email2 ?>">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <!-- PANEL DATOS ACADEMICOS-->
                                    <div class="panel panel-primary">
                                      <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Datos Académicos</strong></h3>
                                      </div>
                                      <div class="panel-body">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <!--COLUMNA IZQ-->
                                            <div class="form-group">
                                              <label>Unidad Académica</label>
                                              <input name="un_academica" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $un_academica2 ?>">
                                            </div>
                                            <div class="form-group">
                                              <label>Número de Cuenta UAS</label>
                                              <input name="num_cuenta" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $num_cuenta2 ?>">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <!--COLUMNA DER-->
                                            <div class="form-group">
                                              <label>Carrera</label>
                                              <input name="carrera" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $carrera2 ?>">
                                            </div>
                                            <div class="form-group">
                                              <label>Situación Escolar</label>
                                              <input name="sit_escolar" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $sit_escolar2 ?>">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <!-- PANEL DATOS CONTACTO EMERGENCIA-->
                                    <div class="panel panel-primary">
                                      <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Datos de Emergencia</strong></h3>
                                      </div>
                                      <div class="panel-body">
                                        <div class="row">
                                          <!--COLUMNA IZQ-->
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Nombre del Contacto</label>
                                              <input name="contacto" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $contacto2 ?>">
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Télefono Personal</label>
                                              <input name="tel_contacto" type="tel" class="form-control" readonly style="background-color:transparent;" value="<?php echo $tel_contacto2 ?>">
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>E-mail</label>
                                              <input name="email_contacto" type="email" name="email" class="form-control" readonly style="background-color:transparent;" value="<?php echo $email_contacto2 ?>">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <!-- PANEL PERFIL DE PRACT PROFESIONALES-->
                                    <div class="panel panel-primary">
                                      <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Perfil Preferente de Practica Profesional</strong></h3>
                                      </div>
                                      <div class="panel-body">
                                        <div class="row">
                                          <!--COLUMNA IZQ-->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Giro o Actividad Económica</label>
                                              <input name="giro_pref" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $giro_pref2 ?>">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Sector</label>
                                              <input name="sector" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $sector2 ?>">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <!-- PANEL DISPONIBILIDAD-->
                                    <div class="panel panel-primary">
                                      <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Disponibilidad</strong></h3>
                                      </div>
                                      <div class="panel-body">
                                        <div class="row">
                                          <!--COLUMNA IZQ-->
                                          <div class="col-md-3">
                                            <div class="form-group">
                                              <label>Del Día</label>
                                              <input name="dia_inicio" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $dia_inicio2 ?>">
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                              <label>Al Día</label>
                                              <input name="dia_final" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $dia_final2 ?>">
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                              <label>En Horario de</label>
                                              <input name="hora_inicio" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $hora_inicio2 ?>">
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                              <label>Hasta las</label>
                                              <input name="hora_final" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $hora_final2 ?>">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <!-- PANEL ACTIVIDADES DE PRACTICAS-->
                                    <div class="panel panel-primary">
                                      <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Actividades en Practica Profesional</strong></h3>
                                      </div>
                                      <div class="panel-body">
                                        <div class="row">
                                          <!--COLUMNA IZQ-->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Actividades que te Gustaría Realizar</label>
                                              <textarea name="actividades" class="form-control" rows="3" style="resize: none;background-color: rgba(0, 0, 0, 0);" readonly><?php echo $actividades2 ?></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="form-group">
                                                <label>Que esperas de tu Practica Profesional</label>
                                                <textarea name="que_esperas" class="form-control" rows="3" style="resize: none;background-color: rgba(0, 0, 0, 0);" readonly><?php echo $que_esperas2 ?></textarea>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <label>Competencias:</label>
                                            <div class="form-group">
                                              <input name="comp" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $comp_1_mod . ", " . $comp_2_mod . " y " . $comp_3_mod ?>">
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                              <label>Dominio del Idioma</label>
                                              <input name="idioma" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $idioma2 ?>">
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                              <label>Nivel</label>
                                              <input name="nivel_idioma" type="text" class="form-control" readonly style="background-color:transparent;" value="<?php echo $nivel_idioma2 ?>">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar Ventana</button>
                                  <button type="submit" class="btn btn-success" name="btn_gen_carta" value="<?php if (isset($id)) {echo $id;} ?>">Aceptar Aspirante</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      <?php
                      }                                                                
                    }
                      ?>
                  </table>              
                </div>
              </div>
            </div>
        </form>    
      </section>
      <!-- /.content -->
    </div>
    <?php include('../layout/footer.php'); ?>
    <!-- AQUI ES FOOTER -->

  </div>
  <?php include('../layout/links.php'); ?>
  <!-- LINKS JQUERY, ETC -->
</body>

</html>