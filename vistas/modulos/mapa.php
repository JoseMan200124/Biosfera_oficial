<section id="logo">
  <img src="vistas/img/logo_completo.png" alt="">
</section>

<div id="mapa_div">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15403.393733429206!2d-89.67544292033391!3d15.166666280273581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f618cfeb35cd9bf%3A0x5b11e2e2db4acef0!2sSierra%20de%20las%20Minas!5e0!3m2!1ses-419!2sgt!4v1671550207910!5m2!1ses-419!2sgt" width="1920" height="1080" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="contenedor">
	<div class="overlay" id="overlay">
    <div class="popup" id="popup">
      <h3>Inicio de Sesión</h3>
      <form action="" class="formulario">
        <fieldset>
          <div class="contenedor-inputs">
            <div class="campo">
              <label>Usuario</label>
              <input class="input-text" type="text">
            </div>

            <div class="campo">
              <label>Contraseña</label>
              <input class="input-text" type="password">
            </div>
          </div> <!-- .contenedor-inputs -->

          <a class="enlace" href="#">¿Olvidaste tu contraseña?</a>
          <input type="submit" class="btn-submit" value="ingresar">
          <a class="enlace" href="#">¿No tienes cuenta?, Regístrate aquí</a>
        </fieldset>
      </form>
  </div>

  <div class="overlay">
    <div class="popup" id="popup2">
			<h3>Datos Actuales</h3>
      <ul class="list-icons">
          <li><i class="fa-solid fa-temperature-three-quarters"></i>  100 °C</li>
          <li><i class="fa-solid fa-cloud-rain"></i>      %</li>
          <li><i class="fa-solid fa-droplet"></i>      %</li>
          <li><i class="fa-solid fa-wind"></i>      Km/h</li>
          <li><i class="fa-solid fa-arrow-right"></i>      NNE</li>
      </ul>		
    </div>
  </div>

</div>

    



<ul id="social-sidebar">
    <li>
      <a id="btnIcon" onclick="showPopup(popup)">
        <i class="fa-solid fa-user"></i>
        <span>Usuario</span>
      </a>
    </li>
    <li>
      <a id="btnIcon2" onclick="showPopup(popup2)">
        <i class="fa-solid fa-satellite-dish"></i>
        <span>Satelital</span>
      </a>
    </li>
    <li>
      <a id="btnIcon3" href="#" >
        <i class="fa-solid fa-cloud-sun-rain"></i>       
        <span>Clima</span>
      </a>
    </li>
    <li>
      <a id="btnIcon4" href="#">
        <i class="fa-solid fa-layer-group"></i>      
        <span>Opciones</span>
      </a>
    </li>
</ul>
  
<!-- <section id="datos-actuales">
        <h1>Datos Actuales</h1>
        <ul>
            <li><i class="fa-solid fa-temperature-three-quarters"></i>      °C</li>
            <li><i class="fa-solid fa-cloud-rain"></i>      %</li>
            <li><i class="fa-solid fa-droplet"></i>      %</li>
            <li><i class="fa-solid fa-wind"></i>      Km/h</li>
            <li><i class="fa-solid fa-arrow-right"></i>      NNE</li>
        </ul>
</section> -->

  <div id="info">
    <i class="fa-solid fa-circle-info"></i>
  </div>
  <script src="vistas/js/main.js"></script>