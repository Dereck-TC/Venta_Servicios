<!-- <!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css"/>
  <link rel="stylesheet" type="text/css" href="../css/fonts.css"/>
  <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css"/>
  <link rel="stylesheet" type="text/css" href="../css/owl.theme.default.min.css"/>
  <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css"/>
  <link rel="stylesheet" type="text/css" href="../css/magnific-popup.css"/>
</head>
<body> -->
<?php 
//require_once('includes/header.php');
//require_once('includes/navbar.php');
?>
<div class="container">
  <div class="card">
    <button class="proceed"><svg class="sendicon" width="24" height="24" viewBox="0 0 24 24">
  <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
</svg></button>
   <img src="https://seeklogo.com/images/V/VISA-logo-62D5B26FE1-seeklogo.com.png" class="logo-card">
 <label>Card number:</label>
 <input id="user" type="text" class="input cardnumber"  placeholder="1234 5678 9101 1121">
 <label>Name:</label>
 <input class="input name"  placeholder="Edgar Pérez">
 <label class="toleft">CCV:</label>
 <input class="input toleft ccv" placeholder="321">
  </div>
  <div class="receipt">
    <div class="col"><p>Cost:</p>
    <h2 class="cost">$400</h2><br>
    <p>Name:</p>
    <h2 class="seller">Codedgar</h2>
    </div>
    <div class="col">
      <p>Bought Items:</p>
      <h3 class="bought-items">Corsair Mouse</h3>
      <p class="bought-items description">Gaming mouse with shiny lights</p>
      <p class="bought-items price">$200 (50% discount)</p><br>
      <h3 class="bought-items">Gaming keyboard</h3>
      <p class="bought-items description">Look mommmy, it has colors!</p>
      <p class="bought-items price">$200 (50% discount)</p><br>
    </div>
    <p class="comprobe">This information will be sended to your email</p>
  </div>
</div>

<?php 
//require_once('./includes/footer.php');
?>
</body>
</html>
