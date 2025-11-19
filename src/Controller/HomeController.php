<?php
    namespace site\Vitreon\Controller;
    use site\Vitreon\Router\RouterController;

    class HomeController extends RouterController{
        function index(){
            $this->render("home/index");
        }
    }

?>