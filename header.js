const task = document.getElementById('naveg');
const content = `
<div class="navBox"> 
<a href="index.html">

  <div class="Logo">
    <img
    src="img/Logo_V3.png"
    
    title = "logoJobs"
    class="LogoClass"
    width = 100px;
    height = 100px;
    
  </a>
  </div>

  <nav>
    
      <ul>
        <li class="header__link"><a href="index.html">Inicio</a></li>
        <li class="header__link"><a href="Reclutamiento.html">Publicar oferta</a></li>
        <li class="header__link"><a href="RegistrarUsuario.html">Hoja de vida</a></li>
        <li class="header__link"><a href="RegistrarUsuario.html">Inicar sesion</a></li>
      </ul>
    
  </nav>
</div>
`;

task.innerHTML = content;
