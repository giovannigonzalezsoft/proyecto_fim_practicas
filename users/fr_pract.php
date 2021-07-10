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
          Formato de Registro - Practicantes Profesionales
        </h1> <br>
        <small>Para ser llenado por el Practicante Profesional</small>
      </section>

      <!-- Main content AQUI VA CODIGO PRINCIPAL-->
      <section class="content">
        <form action="" method="post">
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
                        <input name="nombre" type="text" class="form-control" maxlength="50" required placeholder="Máximo 50 carácteres" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                      </div>
                      <div class="form-group">
                        <label>Sexo</label>
                        <select name="sexo" class="form-control" required>
                          <option selected value="Masculino">Masculino</option>
                          <option value="Femenino">Femenino</option>
                          <option value="Otro">Otro</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Télefono Personal</label>
                        <input name="telefono" type="tel" class="form-control" required minlength="10" maxlength="10" placeholder="Ej. 6681234567" title="Ingrese un télefono valido [6681234567]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <!--COLUMNA DER-->
                      <div class="form-group">
                        <label>Domicilio</label>
                        <input name="domicilio" type="text" class="form-control" maxlength="100" required placeholder="Máximo 100 carácteres">
                      </div>
                      <div class="form-group">
                        <label>Fecha de Nacimiento</label>
                        <input name="fecha_nac" type="date" id="txtDate" class="form-control" max="<?php echo date("Y-m-d"); ?>" required>
                      </div>
                      <div class="form-group">
                        <label>E-mail</label>
                        <input name="email" type="email" name="email" class="form-control" placeholder="ejemplo@ejemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ingrese un email valido [ejemplo@ejemplo.com]">
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
                        <input name="un_academica" type="text" class="form-control" maxlength="100" required placeholder="Máximo 100 carácteres">
                      </div>
                      <div class="form-group">
                        <label>Número de Cuenta UAS</label>
                        <input name="num_cuenta" type="text" class="form-control" maxlength="9" required placeholder="Ej. 1234567-8">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <!--COLUMNA DER-->
                      <div class="form-group">
                        <label>Carrera</label>
                        <select name="carrera" class="form-control" required>
                          <option value="" selected disabled hidden>Nombre de la Carrera</option>
                          <option value="Ingeniería en Software">Ingeniería en Software</option>
                          <option value="Ingeniería Civíl">Ingeniería Civíl</option>
                          <option value="Ingeniería Géodesia">Ingeniería Géodesia</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Situación Escolar</label>
                        <select name="sit_escolar" class="form-control" required>
                          <option selected value="Estudiante">Estudiante</option>
                          <option value="Egresado sin Títular">Egresado sin Títular</option>
                          <option value="Títulado">Títulado</option>
                        </select>
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
                        <input name="contacto" type="text" class="form-control" maxlength="50" required placeholder="Nombre(s) y Apellido" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Télefono Personal</label>
                        <input name="tel_contacto" type="tel" class="form-control" required minlength="10" maxlength="10" placeholder="Ej. 6681234567" title="Ingrese un télefono valido [6681234567]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>E-mail</label>
                        <input name="email_contacto" type="email" name="email" class="form-control" placeholder="ejemplo@ejemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ingrese un email valido [ejemplo@ejemplo.com]">
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
                        <input name="giro_pref" type="text" class="form-control" maxlength="50" required placeholder="Máximo 50 carácteres" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Sector</label>
                        <select name="sector" class="form-control" required>
                          <option value="Público">Público</option>
                          <option value="Privado">Privado</option>
                          <option value="Social">Social</option>
                        </select>
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
                          <option value="7 AM">7 AM</option>
                          <option value="8 AM">8 AM</option>
                          <option value="9 AM">9 AM</option>
                          <option value="10 AM">10 AM</option>
                          <option value="11 AM">11 AM</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Hasta las</label>
                        <select name="hora_final" class="form-control" required>
                          <option value="" selected disabled hidden>Hora de salida</option>
                          <option value="12 PM">12 PM</option>
                          <option value="13 PM">13 PM</option>
                          <option value="14 PM">14 PM</option>
                          <option value="15 PM">15 PM</option>
                          <option value="16 PM">16 PM</option>
                          <option value="17 PM">17 PM</option>
                          <option value="18 PM">18 PM</option>
                          <option value="19 PM">19 PM</option>
                        </select>
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
                        <textarea name="actividades" class="form-control" required rows="3" style="resize:none"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Que esperas de tu Practica Profesional</label>
                          <textarea name="que_esperas" class="form-control" required rows="3" style="resize:none"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <label>Selecciona tus 3 Competencias:</label>
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
                    <div class="row pull-right">
                      <div class="col-md-12">
                        <a href="" class="btn btn-default btn-lg">Cancelar</a>
                        <input type="submit" class="btn btn-primary btn-lg" value="Registrar Datos" name="btn_fr_pract">
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