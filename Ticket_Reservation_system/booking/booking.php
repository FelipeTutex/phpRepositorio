<?php 
  session_start();
  //----------------------------------------------------
  include('../dbengine/dbconnect.php');
  $precioBoleto=rand(50, 150);

  $nroTransaccion="";//generar id transaccion
  $x = 0;
  while($x<10){
    $num=rand(1,9);
    $nroTransaccion.=$num;
    $x=$x+1;
  }
  //---------------------------------------------------
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistema de reserva de tickets</title>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
<script src="semantic/jquery.min.js"> </script>
<script src="semantic/semantic.min.js"></script>
<link href="semantic/datepicker.css" rel="stylesheet" type="text/css">
<script src="semantic/datepicker.js"></script>
<script src="nav.js"></script>


<style>
body{
background-color:f1f1f1;
}
a{
cursor:pointer;	
}
</style>
</head>
<body>
    <div class="ui inverted huge borderless fixed fluid menu">
      <a class="header item">SISTEMA DE RESERVA DE TICKETS</a>
    </div><br>


<div class="ui fluid container center aligned" style="cursor:pointer;margin-top:40px">
<div class="ui unstackable tiny steps">
  <div class="step" onclick="booking()">
    <i class="plane icon"></i>
    <div class="content">
      <div class="title">Detalles de recerva</div>
      <div class="description">Información de viajes y reservas</div>
    </div>
  </div>

  <div class="step disabled" onclick="contact()" id="contactbtn">
    <i class="truck icon"></i>
    <div class="content">
      <div class="title">Detalles</div>
      <div class="description">Información de contacto</div>
    </div>
  </div>
  
  <div class="disabled step" id="billingbtn" onclick="billing()">
    <i class="money icon"></i>
    <div class="content">
      <div class="title">Facturación</div>
      <div class="description">Pago y verificación</div>
    </div>
  </div>

   <div class="disabled step" onclick="confirmdetails()" id="confimationbtn">
    <i class="info icon"></i>
    <div class="content">
      <div class="title">Confirmar detalles</div>
      <div class="description">Verificar los detalles del pedido</div>
    </div>
  </div> 
   <div class="disabled step" id="finishbtn">
   <i class="fas fa-check"></i>
    <div class="content">
      <div class="title">Terminar e imprimir</div>
      <div class="description">Imprimir Ticket</div>
    </div>
  </div>
</div>
</div>
<br>
<div id="dynamic">

<div class="ui container text" id="booking-page">
<div class="ui attached message">
  <div class="header">Información de reserva</div>
    <div class="header">Order Ref: <span style="color:red;font-size:15px"><?php echo $_SESSION['ORDERREF']?> <a href='index.php'>Cancelar</a></span> </div> 
  <p>Ingrese la información de reserva</p>
</div>

<form class="ui form attached fluid loading segment" onsubmit="return contact(this)">
   <div class="field">
    <label>Destino</label>
 <div class="field">
    <select required id="destination">
      <option value="" selected disabled>--Seleccione un destino--</option>
      <!--CONECCION DENTRO-->
      <?php       
        $query = "CALL Ciudades()";
        $exec=mysqli_query($conn,$query) or die(mysqli_error($conn));
      ?>

      <?php foreach ($exec as $opciones):?>
        <option> <?php echo $opciones['nombre']?></option>
      <?php endforeach?>
      <!---------------------------------------------------------->
    </select>
  </div>   
  </div>
<div class="field">  
    <label>Clase de viaje</label>
 <div class="field">
    <select name="gender" required id="travelclass">
      <option value="" selected disabled>--Clase--</option>
      <!--CONECCION DENTRO-->
      <?php
        $conn=mysqli_connect('localhost','root','','recerva_ticket');
        
        $queryCategoria = "CALL Categorias()";
        $execCategoria=mysqli_query($conn,$queryCategoria) or die(mysqli_error($conn));
      ?>

      <?php foreach ($execCategoria as $opciones):?>
        <option> <?php echo $opciones['NombreCategoria']?></option>
      <?php endforeach?>
      <!---------------------------------------------------------->
    </select>
  </div>   
  </div>
<div class="two fields"> 
<div class="field"> 
    <label>Numero de asientos</label>
<input placeholder="Number of Seats" type="number" id="seats" min="1" max="72"  value="1" required>
  </div> 
<div class="field"> 
    <label>Fecha de viaje</label>
<input type="text" readonly required id="traveldate" class="datepicker-here form-control" placeholder="ex. August 03, 1998">
  </div>  
  </div>
  <div style="text-align:center">
 <div><label>Asegúrese de que todos los campos se hayan completado correctamente</label></div>
  <button class="ui green submit button">Enviar detalles</button>
</div> 
 </form>
</div>


<div class="ui container text" id="contact-page" style="display:none">
<div class="ui attached message">
  <div class="header">Ingrese los sus datos </div>
   <div class="header">Order Ref: <span style="color:red;font-size:15px"><?php echo $_SESSION['ORDERREF']?> <a href='index.php'> Cancel Order</a></span> </div>
  <p>Llene los recuadros</p>
</div>

<form class="ui form attached fluid loading segment" onsubmit="return billing(this)">
    <div class="field">
      <label>Nombre completo</label>
      <input placeholder="Full name" type="text" id="fullname" required>
    </div>

  <div class="field">
    <label>Nro. de contacto/correo </label>
    <input placeholder="Mobile No/Contact or Email address" type="text" id="contact" required>
  </div>

 <div class="field">
    <label>Genero</label>
 <div class="field">
    <select name="gender" required id="gender">
      <option value="" selected disabled>--Elige el genero--</option>
      <option value="MALE">Masculino</option>
      <option value="FEMALE">Femenino</option>
    </select>
  </div>   
  </div>
 
 <div style="text-align:center">
 <div><label>Asegurece que sus datos esten correctos</label></div>
  <button class="ui green submit button">Enviar datos</button>
</div>
</form>
</div>


<div class="ui container text" id="billing-page" style="display:none">
<div class="ui attached message">
  <div class="header">Informacion de pago</div>
    <div class="header">Order Ref: <span style="color:red;font-size:15px"><?php echo $_SESSION['ORDERREF']?> <a href='index.php'>Cancel Order</a></span> </div> 
  <p>Ingrese los detalles del pago para continuar</p>
</div>

<form class="ui form attached fluid loading segment" onsubmit="return confirmdetails(this)">
  <div class="field"> 
<label>Pago</label>  
    <select name="gender" required id="paymentmethod">
      <option value="" selected disabled>--Metodo de pago--</option>
      <!--CONECCION DENTRO-->
      <?php    
        $conn=mysqli_connect('localhost','root','','recerva_ticket');   
        $queryTarjeta = "CALL Tarjetas()";
        $exec=mysqli_query($conn,$queryTarjeta) or die(mysqli_error($conn));
      ?>

      <?php foreach ($exec as $opciones):?>
        <option> <?php echo $opciones['tipoTarjeta']?></option>
      <?php endforeach?>
      <!---------------------------------------------------------->
      
    </select>
  </div> 
<div class="field"> 
<label>ID de la Transaccion</label> 
<div class="ui icon input">
  <input placeholder="Transaction Code" type="text" required id="codebox" value="<?php echo $nroTransaccion;?>" readonly>
  <i class="payment icon"></i>
</div>
</div>

  <div class="field"> 
<label>Confirmacion del monto a pagar</label>

<div class="ui icon input">
  <input value="<?php 
  //--------------------------------------------------
  $nuevo =$precioBoleto;
  $descuento=0;
  if( $precioBoleto>130){
    $nuevo=$precioBoleto-($precioBoleto*0.2);  
    $descuento="20%";
  }elseif ($precioBoleto>100){
    $nuevo=$precioBoleto-($precioBoleto*0.15);
    $descuento="15%";
  }elseif($precioBoleto>80){
    $nuevo=$precioBoleto-($precioBoleto*0.10);
    $descuento="10%";
  }
  echo $nuevo;
  //--------------------------------------------------
  ?>
  " type="text" id="amount" readonly>
  <!------------------------------------------------------------------->
  <?php if($precioBoleto<> $nuevo){ ;?>
    <label>Se aplico descuento del <?php echo $descuento;?></label>
  <?php };?>
  <!------------------------------------------------------------------->
</div></div>
 <div style="text-align:center">
  <button class="ui green submit button">Proceder</button>
</div>
 </form>
<div class="ui bottom attached warning message"><i class="icon help"></i><b id="payment-info"></b></div> 
</div>


<div class="ui text container" id ="confirmdetails-page" style="display:none">
<div class="ui positive message">
<b>Antes de continuar, vuelva a verificar los siguientes detalles que proporcionó</b><br>
<i>Es posible que el boleto no se vuelva a imprimir, por lo tanto, los detalles que proporcionó deben ser válidos</i>
<br>
<div class="ui horizontal divider">Detalles proporcionados</div>
<div id="details"></div>
<div class="ui horizontal divider">Confirmar detalles</div>
<div class="ui fluid container center aligned">
<a class="ui button green" onclick="senddata()">YES|Confirm</a>
</div>
</div>
</div>

</div>
</body>
</html>