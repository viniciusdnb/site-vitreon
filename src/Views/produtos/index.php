<style>
    .img-todos-produtos {
        width: 500px;
        border-radius: 5px;
    }

    li {
        list-style: none;
    }

    a:hover {
        background-color: #FAFAFA;
        transition: 500ms ease-in;
    }
</style>
<main class="container-fluid">
    <section id="produtos" class="container">
        <div class="row p-4">
            <h1 class="text-center">Frascos de Vidro e Válvulas para Perfumes</h1>
        </div>
        <div class="row p-4">
            <p class="text-center" style="font-size:22px">Temos varios modelos de vidros e válvulas que são perfeito para seu projeto.</p>
        </div>
        <div class="row p-5">
            <div class="col text-center">
                <img src="<?php echo LINK ?>public/img/todos-vidros.png" class="img-todos-produtos" alt="varios frascos" loading="lazy">
            </div>
            <div class="col">
                <div class="row">
                    <h2 class="text-center p-4">FRASCOS DE VIDROS</h2>
                </div>
                <div class="row p-4">
                    <ul class="list-group text-center">
                        <a class="list-group-item" href="<?php echo LINK ?>produtos/vidro100ml">100ML</a>
                        <a class="list-group-item" href="<?php echo LINK ?>produtos/vidro75ml">75ML</a>
                        <a class="list-group-item" href="<?php echo LINK ?>produtos/vidro50ml">50ML</a>
                        <a class="list-group-item" href="<?php echo LINK ?>produtos/vidro30ml">30ML</a>
                        <a class="list-group-item" href="<?php echo LINK ?>produtos/vidro8ml">8,5ML</a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row p-5">
            <div class="col">
                <div class="row">
                    <h3 class="text-center gy-5">VÁLVULAS PARA VIDROS</h3>
                </div>
                <div class="row p-4">
                    <ul class="list-group text-center">
                        <a  class="list-group-item" href="<?php echo LINK ?>produtos/easycrimp"><h3 style="font-size: 18px;">EASY CRIMP</h3></a>
                        <a  class="list-group-item" href="<?php echo LINK ?>produtos/rosca"><h3 style="font-size: 18px;">ROSCA</h3></a>
                        <a  class="list-group-item" href="<?php echo LINK ?>produtos/dosadora"><h3 style="font-size: 18px;">DOSADORA</h3></a>
                        <a  class="list-group-item" href="<?php echo LINK ?>produtos/minitrigger"><h3 style="font-size: 18px;">MINI TRIGGER</h3></a>
                        <a  class="list-group-item" href="<?php echo LINK ?>produtos/recrave"><h3 style="font-size: 18px;">RECRAVE</h3></a>
                    </ul>
                </div>
            </div>
            <div class="col text-center">
                <img src="<?php echo LINK ?>public/img/todas-valvulas.png" class="img-todos-produtos" alt="varias valvulas" loading="lazy">
            </div>
        </div>
    </section>
</main>
<div id="up">
    <a href="<?php echo LINK ?>produtos/produtos/#inicio" class="p-4">
        <img id="img_footer" src="<?php echo LINK ?>public/img/double-up-64.png" alt="seta para subir">
    </a>
</div>