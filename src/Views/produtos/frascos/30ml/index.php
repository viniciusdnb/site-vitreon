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
            <div class="row">
                <h1 class="text-center">EM BREVE</h1>
            </div>
           
         

            
          





        </section>
    </main>

    <div id="up">
            <a href="<?php echo LINK ?>produtos/vidro30ml/#inicio" class="p-4">
            <img id="img_footer" src="<?php echo LINK ?>public/img/double-up-64.png" alt="seta para subir">
        </a>
    </div>