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
                <h1 class="text-center">FRASCOS DE VIDROS</h1>
            </div>
            <div class="row p-2">
                <h2 class="text-center">frascos de vidro de 75ml para perfumes</h2>
            </div>
            <div class="row">
                <p class="text-center" style="font-size: 20px;">Delicadesa é a visão dos frascos de 75ml</p>
            </div>
         

            <div class="row text-center" style="padding: 20px; gap: 1rem;">
                <div class="col" style="padding: 10px; width: 350px; border-radius: 5px; box-shadow: 0 0 5px 0 rgb(142, 142, 143);">
                    <div class="row">
                        <div class="col text-center">
                            <div class="col" style="background-color:#2E6AD9; border-radius: 8px">
                                <div id="vt-2412" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <a href="<?php echo LINK ?>public/img/vt-2412.png" target="_blank">
                                                <img src="<?php echo LINK ?>public/img/vt-2412.png" style="width:300px; border-radius: 10px; cursor:zoom-in;"  alt="frasco vt-2412">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="<?php echo LINK ?>public/img/vt-2412-top.png" target="_blank">
                                                <img src="<?php echo LINK ?>public/img/vt-2412-top.png" style="width:300px; border-radius: 10px; cursor:zoom-in;"  alt="frasco vt-2412-topo">
                                            </a>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#vt-2412" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#vt-2412" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h3 class="g-4">FRASCO BOAT - REF: VT 2412</h3>
                            </div>
                            <div class="row p-4">
                                <div class="col"><span>VOLUME UTIL</span></div>
                                <div class="col text-center"><span>75ml</span></div>
                            </div>
                            <div class="row p-4">
                                <div class="col"><span>TERMINAÇÃO</span></div>
                                <div class="col text-center"><span>FEA 15MM</span></div>
                            </div>
                            <div class="row p-4">
                                <a href="https://wa.me/55<?php echo WHATS ?>?text=ola!tenho interesse no vidro BOAT VT 2412" class="btn btn-primary g-4">SOLICITE UM ORÇAMENTO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      





        </section>
    </main>

    <div id="up">
            <a href="<?php echo LINK ?>produtos/vidro75ml/#inicio" class="p-4">
            <img id="img_footer" src="<?php echo LINK ?>public/img/double-up-64.png" alt="seta para subir">
        </a>
    </div>