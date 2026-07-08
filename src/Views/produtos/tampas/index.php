    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-image: none;
            /* Remove o SVG padrão */
            /*color: var(--bg-ident-seta-carrosel);*/
            /* Define a cor da seta se usar conteúdo textual */
            font-size: 2rem;
        }

        .carousel-control-prev-icon::after {
            content: '◀';
            opacity: 30%;
            /* Ou use um ícone Unicode ou FontAwesome */
            color: #06087cff;
            /* Cor personalizada */
        }

        .carousel-control-next-icon::after {
            content: '▶';
            opacity: 30%;
            color: #06087cff;
        }

        .btn-vitreon {
            background-color: #3E4095;
        }
    </style>
    <main class="container-fluid">
        <section class="container">
            <div class="row p-4">
                <h1 class="text-center">SOBRE TAMPA ALUMINIZADA</h1>
                
            </div>
            <div class="row">
                <h2 class="text-center" style="font-size: 20px;">Sobre tampa para completar o charme da valvula<h2>
            </div>
     

            <div class="row text-center container-box">
                <div class="col container-box-produto">
                    <div class="row">
                        <div class="col text-center">
                            <div class="col container-carousel">
                                <div id="tampa" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <a href="<?php echo LINK ?>public/img/tampa-dourada.png" target="_blank">
                                                <img src="<?php echo LINK ?>public/img/sobre-tampa-dourada.png" style="width:300px; border-radius: 10px; cursor:zoom-in;"  alt="sobre tampa dourada">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="<?php echo LINK ?>public/img/tampa-prata.png" target="_blank">
                                                <img src="<?php echo LINK ?>public/img/sobre-tampa-prata.png" style="width:300px; border-radius: 10px; cursor:zoom-in;"  alt="sobre tampa prata">
                                            </a>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#tampa" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#tampa" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h3 class="g-4">SOBRE TAMPA ALUMINIZADA PARA VALVULAS</h3>
                            </div>
                            <div class="row p-4">
                                <div class="col"><span>COR</span></div>
                                <div class="col text-center"><span>PRATA E DOURADO</span></div>
                            </div>
                            <div class="row p-4">
                                <div class="col"><span>TERMINAÇÃO</span></div>
                                <div class="col text-center"><span>FEA 15MM</span></div>
                            </div>
                            <div class="row p-4">
                                <a href="https://wa.me/55<?php echo WHATS ?>?text=ola!tenho interesse em sobre tampas" class="btn btn-primary g-4">SOLICITE UM ORÇAMENTO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
    </main>

    <div id="up">
        <a href="<?php echo LINK ?>produtos/sobretampa/#inicio" class="p-4">
            <img id="img_footer" src="<?php echo LINK ?>public/img/double-up-64.png" alt="seta para subir">
        </a>
    </div>