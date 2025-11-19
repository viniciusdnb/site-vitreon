<header id="inicio" class="container-fluid text-center border-bottom rounded-bottom">
    <nav class="navbar p-4 navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo LINK ?>">
                <img src="<?php echo LINK ?>public/img/logo160-removebg.png" width="50px" alt="logo vitreon">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo LINK ?>">INICIO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="#">PRODUTOS</a>
                        <ul class="dropdown-menu p-4" style="width: 300px;">
                            <li>

                            </li>
                            <li>
                                <p class="titulo-menu" >VIDROS PARA PERFUME</p>
                                <a class="dropdown-item" href="<?php echo LINK ?>produtos/vidro100ml">100ML</a>
                                <a class="dropdown-item" href="<?php echo LINK ?>produtos/vidro75ml">75ML</a>
                                <a class="dropdown-item" href="<?php echo LINK ?>produtos/vidro50ml">50ML</a>
                                <a class="dropdown-item" href="<?php echo LINK ?>produtos/vidro30ml">30ML</a>
                                <a class="dropdown-item" href="<?php echo LINK ?>produtos/vidro8ml">8,5ML</a>
                            </li>
                            <li><hr></li>
                            <li>
                                <p class="titulo-menu" >VALVULAS</p>
                                <a class="dropdown-item" href="<?php echo LINK ?>produtos/easycrimp">EASY CRIMP</a>
                                <a class="dropdown-item" href="<?php echo LINK ?>produtos/rosca">ROSCA</a>
                                <a class="dropdown-item" href="<?php echo LINK ?>produtos/dosadora">DOSADORA</a>
                                <a class="dropdown-item" href="<?php echo LINK ?>produtos/minitrigger">MINI TRIGGER</a>
                                <a class="dropdown-item" href="<?php echo LINK ?>produtos/recrave">RECRAVE</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo LINK ?>#sobre">SOBRE</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo LINK ?>#contato" class="nav-link">CONTATO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>