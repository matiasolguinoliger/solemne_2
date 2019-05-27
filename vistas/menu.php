
<script type="text/javascript" src="assets/codigoJsPrincipal.js"></script>
<link rel="stylesheet" href="assets/estilosCssPrincipal.css">

<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Cerrar Menu</a>
  <div class="w3-container">
	<p></p>  
        <img src="./files/capcom.jpg" alt="capcom" width="172" height="64" class="responsive">
    <h3 class="w3-padding-64"><b>Empresa<br>Courier</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="bienvenidos.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Bienvenidos</a>  
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Modulo contacto</a>
    <a href="quienesSomos.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Quienes somos</a>
    
  </div>
</nav>

<!-- Menu arriba para pantallas pequeñas -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Empresa Courier</span>
</header>

<!-- Overlay del menu cuando se abre -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<script>
	// JavaScript Document
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

