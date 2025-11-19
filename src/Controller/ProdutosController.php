<?php
    namespace site\Vitreon\Controller;
    use site\Vitreon\Router\RouterController;

    class ProdutosController extends RouterController{
        function vidro100ml(){
            $this->render("produtos/frascos/100ml/index");
        }
        function vidro75ml(){
            $this->render("produtos/frascos/75ml/index");
        }
         function vidro50ml(){
            $this->render("produtos/frascos/50ml/index");
        }
         function vidro30ml(){
            $this->render("produtos/frascos/30ml/index");
        }
         function vidro8ml(){
            $this->render("produtos/frascos/8ml/index");
        }
        function easycrimp(){
            $this->render("produtos/valvulas/easycrimp/index");
        }
        function recrave(){
            $this->render("produtos/valvulas/recrave/index");
        }
         function minitrigger(){
            $this->render("produtos/valvulas/minitrigger/index");
        }
         function dosadora(){
            $this->render("produtos/valvulas/dosadora/index");
        }
        function rosca(){
            $this->render("produtos/valvulas/rosca/index");
        }
        function produtos(){
            $this->render("produtos/index");
        }
    }

?>