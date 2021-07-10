<?php
include_once('../app/config/config.php');
//echo $URL;
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
          Formato de Registro - Unidad Receptora
        </h1> <br>
        <small>Para ser llenado por el Responsable de la Empresa o Institución</small>
      </section>

      <!-- Main content AQUI VA CODIGO PRINCIPAL-->
      <section class="content">
        <form action="" method="post">
          <div class="row">
            <div class="col-md-12">
              <!-- PANEL DATOS GENERALES-->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><strong>Datos Generales</strong></h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-6">
                      <!--COLUMNA IZQ-->
                      <div class="form-group">
                        <label>Empresa o Institución</label>
                        <input name="nombre_ur" type="text" class="form-control" required placeholder="Nombre de la UR">
                      </div>
                      <div class="form-group">
                        <label>Sector</label>
                        <select name="sector" class="form-control" required>
                          <option value="Público">Público</option>
                          <option value="Privado">Privado</option>
                          <option value="Social">Social</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Télefono</label>
                        <input name="telefono" type="tel" class="form-control" required minlength="10" maxlength="10" placeholder="Ej. 6681234567" title="Ingrese un télefono valido [6681234567]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                      </div>
                      <div class="form-group">
                        <label>Cargo</label>
                        <input name="cargo" type="text" class="form-control" maxlength="50" required placeholder="Máximo 50 carácteres">
                      </div>
                      <div class="form-group">
                        <label>Nombre del Proyecto</label>
                        <input name="nombre_proy" type="text" class="form-control" required maxlength="50" required placeholder="Máximo 50 carácteres" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <!--COLUMNA DER-->
                      <div class="form-group">
                        <label>Giro y/o Actividad</label>
                        <input name="giro" type="text" class="form-control" required placeholder="Nombre del giro o actividad">
                      </div>
                      <div class="form-group">
                        <label>Domicilio</label>
                        <input name="domicilio" type="text" class="form-control" maxlength="100" required placeholder="Máximo 100 carácteres">
                      </div>
                      <div class="form-group">
                        <label>Nombre del Responsable</label>
                        <input name="nombre_res" type="text" class="form-control" required placeholder="Nombre Completo" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                      </div>
                      <div class="form-group">
                        <label>E-mail</label>
                        <input name="email" type="email" name="email" class="form-control" placeholder="ejemplo@ejemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ingrese un email valido [ejemplo@ejemplo.com]">
                      </div>
                      <div class="form-group">
                        <label>Objetivo</label>
                        <input name="objetivo" type="text" class="form-control" required maxlength="50" required placeholder="Máximo 50 carácteres">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <!-- PANEL PRACTICANTES SOLICITADOS-->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><strong>Practicantes Solicitados</strong></h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-4">
                      <!--COLUMNA IZQ-->
                      <div class="form-group">
                        <select name="pract_soft" class="form-control" required>
                          <option value="" selected disabled hidden>Cantidad de Practicantes</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select name="pract_civ" name="pract_soft" class="form-control" required>
                          <option value="" selected disabled hidden>Cantidad de Practicantes</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select name="pract_geo" class="form-control" required>
                          <option value="" selected disabled hidden>Cantidad de Practicantes</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <!--COLUMNA MEDIO-->
                      <div class="form-group">
                        <input type="text" class="form-control" style="background-color: #fff;" readonly value="De la Carrera">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" style="background-color: #fff;" readonly value="De la Carrera">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" style="background-color: #fff;" readonly value="De la Carrera">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <!--COLUMNA DERECHA-->
                      <div class="form-group">
                        <input type="text" class="form-control" style="background-color: #fff;" readonly value="Ingeniería de Software">
                      </div>
                      <div class="form-group" required>
                        <input type="text" class="form-control" style="background-color: #fff;" readonly value="Ingeniería de Cívil">
                      </div>
                      <div class="form-group" required>
                        <input type="text" class="form-control" style="background-color: #fff;" readonly value="Ingeniería de Géodesia">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <!-- PANEL ESP DE PRACTICAS-->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><strong>Especificaciones de la Practica</strong></h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <!--COLUMNA IZQ-->
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Del Día</label>
                        <select name="dia_inicio" class="form-control" required>
                          <option value="" selected disabled hidden>Día</option>
                          <option value="Lunes">Lunes</option>
                          <option value="Martes">Martes</option>
                          <option value="Miercoles">Miercoles</option>
                          <option value="Jueves">Jueves</option>
                          <option value="Viernes">Viernes</option>
                          <option value="Sábado">Sábado</option>
                          <option value="Domingo">Domingo</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Al Día</label>
                        <select name="dia_final" class="form-control" required>
                          <option value="" selected disabled hidden>Día</option>
                          <option value="Lunes">Lunes</option>
                          <option value="Martes">Martes</option>
                          <option value="Miercoles">Miercoles</option>
                          <option value="Jueves">Jueves</option>
                          <option value="Viernes">Viernes</option>
                          <option value="Sábado">Sábado</option>
                          <option value="Domingo">Domingo</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>En Horario de</label>
                        <select name="hora_inicio" class="form-control" required>
                          <option value="" selected disabled hidden>Hora de inicio</option>
                          <option value="1 AM">7 AM</option>
                          <option value="2 AM">8 AM</option>
                          <option value="3 AM">9 AM</option>
                          <option value="4 AM">10 AM</option>
                          <option value="5 AM">11 AM</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Hasta las</label>
                        <select name="hora_final" class="form-control" required>
                          <option value="" selected disabled hidden>Hora de salida</option>
                          <option value="1 PM">12 PM</option>
                          <option value="2 PM">13 PM</option>
                          <option value="3 PM">14 PM</option>
                          <option value="4 PM">15 PM</option>
                          <option value="5 PM">16 PM</option>
                          <option value="6 PM">17 PM</option>
                          <option value="7 PM">18 PM</option>
                          <option value="8 PM">19 PM</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Beca / Apoyo Económico</label>
                        <input name="apoyo" type="text" class="form-control" required minlength="1" maxlength="6" placeholder="Cantidad $" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Fecha de Inicio</label>
                        <input name="fecha_inicio" type="date" id="txtDate" class="form-control" min="<?php echo date("Y-m-d"); ?>" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Fecha de Terminación</label>
                        <input name="fecha_final" type="date" id="txtDate" class="form-control" min="<?php echo date("Y-m-d"); ?>" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <!-- PANEL PERFIL REQUERIDO-->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><strong>Perfil Requerido</strong></h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <!--COLUMNA IZQ-->
                    <div class="col-md-2">
                      <label>Seleccione 3 Competencias:</label>
                      <div class="form-check">
                        <input name="comp[]" class="form-check-input" type="checkbox" value="Iniciativa">
                        <label class="form-check-label">Iniciativa</label>
                      </div>
                      <div class="form-check">
                        <input name="comp[]" class="form-check-input" type="checkbox" value="Trabajo en Equipo">
                        <label class="form-check-label">Trabajo en Equipo</label>
                      </div>
                      <div class="form-check">
                        <input name="comp[]" class="form-check-input" type="checkbox" value="Toma de Decisiones">
                        <label class="form-check-label">Toma de Decisiones</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <label>&nbsp</label>
                      <div class="form-check">
                        <input name="comp[]" class="form-check-input" type="checkbox" value="Comunicación">
                        <label class="form-check-label">Comunicación</label>
                      </div>
                      <div class="form-check">
                        <input name="comp[]" class="form-check-input" type="checkbox" value="Puntualidad">
                        <label class="form-check-label">Puntualidad</label>
                      </div>
                      <div class="form-check">
                        <input name="comp[]" class="form-check-input" type="checkbox" value="Honestidad">
                        <label class="form-check-label">Honestidad</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Dominio del Idioma</label>
                        <select name="idioma" class="form-control" required>
                          <option selected value="Inglés">Inglés</option>
                          <option value="Francés">Francés</option>
                          <option value="Alemán">Alemán</option>
                          <option value="Japonés">Japonés</option>
                          <option value="Italiano">Italiano</option>
                          <option value="Otro">Otro</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Nivel</label>
                        <select name="nivel_idioma" class="form-control" required>
                          <option selected value="Básico">Básico</option>
                          <option value="Intermedio">Intermedio</option>
                          <option value="Avanzado">Avanzado</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Otros Requisitos:</label>
                          <textarea name="otros" class="form-control" required rows="3" style="resize:none"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row pull-right">
                      <div class="col-md-12">
                        <a href="" class="btn btn-default btn-lg">Cancelar</a>
                        <input type="submit" class="btn btn-primary btn-lg" value="Registrar Datos" name="btn_fr_ur">
                      </div>
                    </div>
                  </div>
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