<style>

  .Fixed
  {
      position: fixed;

      left:-150px;
  }
  /* define a fixed width for the entire menu */
  .navigation {
    width: 300px;
  }

  /* reset our lists to remove bullet points and padding */
  .mainmenu, .submenu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  /* make ALL links (main and submenu) have padding and background color */
  .mainmenu a {
    display: block;
    background-color: #CCC;
    text-decoration: none;
    padding: 10px;
    color: #000;
  }

  /* add hover behaviour */
  .mainmenu a:hover {
      background-color: #C5C5C5;
  }


  /* when hovering over a .mainmenu item,
    display the submenu inside it.
    we're changing the submenu's max-height from 0 to 200px;
  */

  .mainmenu li:hover .submenu {
    display: block;
    max-height: 200px;
  }

  /*
    we now overwrite the background-color for .submenu links only.
    CSS reads down the page, so code at the bottom will overwrite the code at the top.
  */

  .submenu a {
    background-color: #999;
  }

  /* hover behaviour for links inside .submenu */
  .submenu a:hover {
    background-color: #666;
  }

  /* this is the initial state of all submenus.
    we set it to max-height: 0, and hide the overflowed content.
  */
  .submenu {
    overflow: hidden;
    max-height: 0;
    -webkit-transition: all 0.35s ease-out;
  }
</style>

<div class="Fixed">
  <nav class="navigation">
    <ul class="mainmenu">
      <li><a href="/admin/formularios">Formularios</a>
        <ul class="submenu">
          <li><a href="">Uso de Espacios</a></li>
          <li><a href="">Voluntariado</a></li>
        </ul>
      </li>

      <li><a href="/admin/servicios">Servicios</a>
        <ul class="submenu">
          <li><a href="">Uno</a></li>
          <li><a href="">Dos</a></li>
        </ul>
      </li>

      <li><a href="/admin/tramites">Trámites</a>
        <ul class="submenu">
          <li><a href="">Uno</a></li>
          <li><a href="">Dos</a></li>
        </ul>
      </li>

      <li><a href="/admin/usuarios">Usuarios</a>
        <ul class="submenu">
          <li><a href="">Administrativos</a></li>
          <li><a href="">Regulares</a></li>
        </ul>
      </li>


      <li><a href="/admin/catalogo">Catálogo</a></li>
      <li><a href="/admin/elemqr">Elemento QR</a></li>
      <li><a href="/admin/galeria">Galería</a></li>
      <li><a href="/admin/noticias">Noticias</a></li>
      <li><a href="/admin/reservaciones">Reservaciones</a></li>      
      <li><a href="/admin/transparencia">Transparencia</a></li>
      <li><a href="{{ url('admin/logout') }}">Salir</a></li>
      
    </ul>
  </nav>
</div>


