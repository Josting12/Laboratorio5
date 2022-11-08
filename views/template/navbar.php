<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"></a> <img src="images//logo1.jpg" class="img-fluid" alt="..."></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Comentario
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("crear")   ?>">Craer comentario</a></li>
                        
                    </ul>
                </li>
               
            </ul>
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
            <?php if (isset($_SESSION["usuario"])){?>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       <?php echo $_SESSION["nombre"]?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       
                        <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("cerrar_sesion")   ?>">Cerrar Sesion</a></li>
                    </ul>
                </li>
                <?php }else{?>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("login")   ?>" tabindex="-1">Login</a>
                </li>
                <?php }  ?>

            </ul>

        </div>
    </div>



    
</nav>