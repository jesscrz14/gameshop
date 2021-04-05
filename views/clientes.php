<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MITO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/letra-m.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v2.3.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="../index.html">MITO</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.html">Inicio</a></li>
          <li><a href="../index.html#about">Nosotros</a></li>
          <li><a href="../index.html#services">Servicios</a></li>
          <li><a href="../index.html#team">Equipo</a></li>
          <li class="drop-down"><a href="">Gestión de Información</a>
            <ul>
              <li class="drop-down"><a href="#">Tablas</a>
                <ul>
                  <li><a href="../views/clientes.php">Clientes</a></li>
                  <li><a href="../views/curriculum.php">Currículum</a></li>
                  <li><a href="../views/demandante.php">Demandantes</a></li>
                  <li><a href="../views/experiencia.php">Experiencia</a></li>
                  <li><a href="../views/perfil.php">Perfil</a></li>
                  <li><a href="../views/solicitud.php">Solicitudes</a></li>
                  <li><a href="../views/asocia.php">Asocios</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#">Consultas</a>
                <ul>
                  <li><a href="../views/operador_logico.php">Operador Lógico</a></li>
                  <li><a href="../views/operador_comparacion.php">Op.Comparación</a></li>
                  <li><a href="../views/join.php">Join</a></li>
                  <li><a href="../views/procedimiento_almacenado.php">Proc. Almacenado</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="../index.html#contact">Contacto</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Clientes</h2>
          <ol>
            <li><a href="../index.html">Inicio</a></li>
            <li>Clientes</li>
          </ol>
        </div>

      </div>

    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <!-- Button trigger modal para ingresar registros -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertar">
        Nuevo Cliente
      </button>
      <br><br><br>

    <table class="table table-striped">
  <thead>
    <tr class="text-center">
      <th scope="col">CÓDIGO</th>
      <th scope="col">CIF</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">DIRECCIÓN</th>
      <th scope="col">TELÉFONO</th>
      <th scope="col">FAX</th>
      <th scope="col">EDITAR</th>
      <th scope="col">ELIMINAR</th>

    </tr>
  </thead>
  <tbody>
    <!-- REGISTROS DE LA BASE DE DATOS -->
    <?php include_once("../php/listar_clientes.php");?>
    <?php foreach ($cliente as $cliente) {?>

    <!-- SE MOSTRARÁ CADA UNO DE LOS REGISTROS" POR COLUMNAS-->
  
    <tr class="text-center">
      <td><?php echo $cliente->cod_cliente;?></td>
      <td><?php echo $cliente->cif;?></td>
      <td><?php echo $cliente->nombre;?></td>
      <td><?php echo $cliente->direccion;?></td>
      <td><?php echo $cliente->telefono;?></td>
      <td><?php echo $cliente->num_fax;?></td>
      <td><button type="button" class="btn btn-success editarbtn" data-toggle="modal" data-target="#editar"><img src="../assets/img/editar.png"/></button></td>
      <td><button type="button" class="btn btn-danger eliminarbtn" data-toggle="modal" data-target="#eliminar"><img src="../assets/img/eliminar.png"/></button></td>
    </tr>

   <?php  }?>
  </tbody>
</table>
  </div>
    </section>

  </main><!-- End #main -->

  <!-- MODAL INSERTAR NUEVO REGISTRO -->

  <!-- Modal -->
<div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- FORMULARIO -->
        <form action="../php/insertar_clientes.php" method="POST">
          <div class="form-group">
            <label>CÓDIGO</label>
            <input type="integer" name="cod_cliente" class="form-control">
          </div>

           <div class="form-group">
            <label>CIF</label>
            <input type="integer" name="cif" class="form-control">
          </div>

           <div class="form-group">
            <label>NOMBRE</label>
            <input type="text" name="nombre" class="form-control">
          </div>

           <div class="form-group">
            <label>DIRECCIÓN</label>
            <input type="text" name="direccion" class="form-control">
          </div>

           <div class="form-group">
            <label>TELÉFONO</label>
            <input type="text" name="telefono" class="form-control">
          </div>

           <div class="form-group">
            <label>FAX</label>
            <input type="integer" name="num_fax" class="form-control">
          </div>
          
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>

        </form>
        
      </div>
      
    </div>
  </div>
</div>

<!-- MODAL PARA EDITAR UN REGISTRO YA EXISTENTE -->

  <!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- FORMULARIO -->
        <form action="../php/editar_clientes.php" method="POST">
          <input type="hidden" name="cod_cliente" id="update_cod">
          
           <div class="form-group">
            <label>CIF</label>
            <input type="integer" name="cif" id="cif" class="form-control">
          </div>

           <div class="form-group">
            <label>NOMBRE</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
          </div>

           <div class="form-group">
            <label>DIRECCIÓN</label>
            <input type="text" name="direccion" id="direccion" class="form-control">
          </div>

           <div class="form-group">
            <label>TELÉFONO</label>
            <input type="text" name="telefono" id="telefono" class="form-control">
          </div>

           <div class="form-group">
            <label>FAX</label>
            <input type="integer" name="num_fax" id="num_fax" class="form-control">
          </div>
          
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>

        </form>
        
      </div>
      
    </div>
  </div>
</div>

    <!-- MODAL ELIMINAR -->

  <!-- Modal -->
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> <!-- AQUI SE REALIZARÁ LA BAJA -->
        <h4>¿Está seguro de eliminar al cliente?</h4>
        <p>Recuerda: no puedes eliminar al cliente si este se encuentra ligado a un registro de otra tabla. Deberás eliminar primero los otros registros.</p>
        <br>
        
        <form action="../php/eliminar_clientes.php" method="POST">
        <input type="hidden" name="cod_cliente" id="eliminar_id"> <!-- DE TIPO HIDDEN PARA OCULTAR LOS DATOS --> 


        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Eliminar</button>
        </div>
          
        </form>

      </div>
    </div>
  </div>
</div>


<!-- en una lista despegable, aparecerán la consulta que estamos solicitando-->
<center><h4>Selección de un cliente en específico</h4>
<select id="cliente" name="cliente" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
<option value="" selected>Seleccione el cliente</option>
<?php
include_once("..php/conexion.php");
$sentencia= $bd -> prepare("SELECT * FROM cliente");
$sentencia->execute();
foreach ($sentencia as $cliente) {
    /*se mostrarán los campos de nuestra tabla*/
    echo '<option value="'.$cliente['cod_cliente'].'"> CIF '.$cliente['cif'].' | '.$cliente['nombre'].' </option>';
}
?>
</select></center>
<br><br><br>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MITO</h3>
      <p>Soluciones de Negocios</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MITO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a>EQUIPO MITO</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

<!-- SCRIP PARA EDITAR --> 
<script>
  $('.editarbtn').on('click',function(){
    $tr=$(this).closest('tr');
    var datos=$tr.children("td").map(function(){
      return $(this).text();
    });
    $('#update_cod').val(datos[0]);
    $('#cif').val(datos[1]);
    $('#nombre').val(datos[2]);
    $('#direccion').val(datos[3]);
    $('#telefono').val(datos[4]);
    $('#num_fax').val(datos[5]);
  });
</script>

<!-- SCRIP PARA ELIMINAR -->
  <script>
  $('.eliminarbtn').on('click',function(){
    $tr=$(this).closest('tr'); // almacenera los datos para eliminarlos 
    var datos=$tr.children("td").map(function(){ //children igualdara los elemenentos secundarios, cada uno de los td, map recorrerá los elementos
      return $(this).text(); //obendrá el texto de cada elemento
    });
    $('#eliminar_id').val(datos[0]); //posicion 0, que es el ID

  });
</script>

</body>

</html>