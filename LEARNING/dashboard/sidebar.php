<!-- Sidebar Navigation -->
<div class="sidebar">
    <div class="logo">
        <h2>Admin Panel</h2>
    </div>
    <nav>
        <ul>
            <li class="active">
                <a href="#dashboard">
                    <i class="icon-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#users">
                    <i class="icon-users"></i>
                    Usuario Administrador
                </a>
            </li>
            <li>
                <a href="#analytics">
                    <i class="icon-analytics"></i>
                    Analisis
                    <?php
                    require 'db_connection.php';

                    ?>
                </a>
            </li>
            <li>
                <a href="#settings">
                    <i class="icon-settings"></i>
                    Configuracion
                </a>
            </li>
        </ul>
    </nav>
</div>
