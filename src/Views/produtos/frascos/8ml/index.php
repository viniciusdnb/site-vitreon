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
                <h2 class="text-center">frasco de vidro para esmalte de 8,5ml</h2>
            </div>
            <div class="row">
                <p class="text-center" style="font-size: 20px;">Frasco de 8,5ml perfeito para sua linha de esmalte vidro simples e elegante</p>
            </div>
         

            <div class="row text-center" style="padding: 20px; gap: 1rem;">
                <div class="col" style="padding: 10px; width: 350px; border-radius: 5px; box-shadow: 0 0 5px 0 rgb(142, 142, 143);">
                    <div class="row">
                        <div class="col text-center">
                            <div class="col" style="background-color:#2E6AD9; border-radius: 8px">
                                <div id="vt-0001" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <a href="<?php echo LINK ?>public/img/vt-0001.png" target="_blank">
                                                <img src="<?php echo LINK ?>public/img/vt-0001.png" style="width:300px; border-radius: 10px; cursor:zoom-in;" alt="frasco de 8ml">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="<?php echo LINK ?>public/img/vt-0001-top.png" target="_blank">
                                                <img src="<?php echo LINK ?>public/img/vt-0001-top.png" style="width:300px; border-radius: 10px; cursor:zoom-in;" alt="frasco de 8ml visao topo">
                                            </a>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#vt-0001" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#vt-0001" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h3 class="g-4">FRASCO CILINDIRCO - REF: VT 0001</h3>
                            </div>
                            <div class="row p-4">
                                <div class="col"><span>VOLUME UTIL</span></div>
                                <div class="col text-center"><span>8,5ML</span></div>
                            </div>
                            <div class="row p-4">
                                <div class="col"><span>TERMINAÇÃO</span></div>
                                <div class="col text-center"><span>ROSCA *** PEGAR MAIS INFO</span></div>
                            </div>
                            <div class="row p-4">
                                <a href="https://wa.me/5511914856039?text=ola!tenho interesse no vidro CILINDIRCO VT 0001" class="btn btn-primary g-4">SOLICITE UM ORÇAMENTO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      





        </section>
    </main>

    <div id="up">
           <a href="<?php echo LINK ?>produtos/vidro8ml/#inicio" class="p-4">
            <img id="img_footer" src="<?php echo LINK ?>public/img/double-up-64.png" alt="seta para subir">
        </a>
    </div>