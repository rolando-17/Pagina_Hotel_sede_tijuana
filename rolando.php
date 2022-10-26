<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="rolando.css">
</head>
<header>
  <nav class="navbar">
    <?php include('./comp/header.php') ?>
    <!--<h1>REAL INN</h1>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Section</a></li>
      <li><a href="#">Contacts</a></li>
    </ul>-->
  </nav>
</header>
<body>
<?php include('./comp/main-menu/main-menu.php') ?>
<?php //include('./comp/sliderHome/sliderHome.php') ?>
<?php //include('./comp/grid/grid.php') ?>
<?php //include('./comp/counter/counter.php') ?>
    
        <section class="showcase">
          <h1> HOTEL <span class="s-color">SEDE</span></h1>
          <h2>Código de reservación <span class="s-color">CONGRESO CONQUILAB</span></h2>
        </section>
    
        <section class="hotel-history">
          <div class="box-1"></div>
          <div class="box-2">
            <h1>
                Habitación de lujo sencilla, con desayuno Buffet
            </h1>
            <h1><span class="s-color">$1,800.00</span></h1>
            <h3>- Tarifa cotizada en Moneda Nacional</h3>
            <h3>- Tarifas sujetas a impuestos 8% IVA y 5% de ISH</h3>
            <h3>- Tarifas No Comsionable</h3>
            <h1></h1>
            
          </div>
        </section>

        <section class="hotel-history">
            <div class="box-2">
              <h1>
                Habitación de lujo doble, con desayunos Buffet
              </h1>
              <h1><span class="s-color">$2,000.00</span></h1>
              <h3>- Tarifa cotizada en Moneda Nacional</h3>
              <h3>- Tarifas sujetas a impuestos 8% IVA y 5% de ISH</h3>
              <h3>- Tarifas No Comsionable</h3>
              <h1></h1>
              <!--<a href="#">Leer mas</a>-->
            </div>
            <div class="box-11"></div>
          </section>
    
        <section class="offers">
          <div class="offers-container">
            <div class="offer-1">
              <i>
                <img class="iconos" src="ubicacion.png" alt="ubicacion">
              </i>
              <h1>Ubicación</h1>
              <p>
                Paseo de los Héroes No. 9902 Col. Zona Río, 22010 Tijuana, Baja California
              </p>
            </div>
            <div class="offer-2">
              <i>
                <img class="iconos" src="coche.png" alt="carro">
              </i>
              <h1>Estacionamiento</h1>
              <p>
                <li>La tarifa para los congresistas con boleto sellado, es de $20.00 MN</li>
                <li>La tarifa para el resto de los asistentes con boleto sellado es de $40.00 MN</li>
              </p>
            </div>
            <div class="offer-3">
              <i>
                <img class="iconos" src="llamada-telefonica.png" alt="telefono">
              </i>
              <h1>Reservaciones</h1>
              <p>Teléfono: 664 633 4000</p>
              <p>Ext. 4430 y 4436</p>
              
              <p>Email: <a href="">reservas@caminoreal.com.mx</a></p>
            </div>
          </div>
        </section>
    
        <footer>
        <?php include('./comp/footer/footer.php') ?>
        </footer>
      
        <script src="http://localhost:35729/livereload.js"></script>
</body>
</html>