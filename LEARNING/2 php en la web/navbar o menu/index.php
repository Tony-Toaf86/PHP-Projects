<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menú Responsivo</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<nav class="menu">
  <div class="menu-container">

    <!-- Logo -->
    <a href="#" class="logo">HOME</a>

    <!-- Toggle para móvil -->
    <input type="checkbox" id="menu-toggle" />
    <label for="menu-toggle" class="menu-icon">&#9776;</label>

    <!-- Enlaces -->
    <ul class="menu-links">

      <li><a href="pages/servicios/">Servicios</a></li>
      <li><a href="pages/nosotros/">Nosotros</a></li>

      <!-- Dropdown opciones -->
      <li class="dropdown">
        <a href="#">Opciones ▾</a> <!-- Desktop -->
        <input type="checkbox" id="dropdown-toggle1" />
        <label for="dropdown-toggle1">Opciones ▾</label> <!-- Móvil -->
        <ul class="dropdown-menu">
          <li><a href="pages/login/">Registrarse</a></li>
          <li><a href="pages/login/">Iniciar Sesión</a></li>
          <li><a href="#">Pendiente</a></li>
        </ul>
      </li>

      <!-- Dropdown avatar -->
      <li class="dropdown">
        <a href="#">👤 ▾</a> <!-- Desktop -->
        <input type="checkbox" id="dropdown-toggle2" />
        <label for="dropdown-toggle2">👤 ▾</label> <!-- Móvil -->
        <ul class="dropdown-menu right">
          <li><a href="#">Sobre Nosotros</a></li>
          <li><a href="#">Contáctanos</a></li>
        </ul>
      </li>

      <li class="search">
        <form>
          <input type="search" placeholder="Buscar" />
          <button type="submit">Buscar</button>
        </form>
      </li>

    </ul>

  </div>
</nav>

</body>
</html>
