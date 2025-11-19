<?php

namespace site\Vitreon\Router;

use Exception;
use site\Vitreon\Router\Url;
use site\Vitreon\Router\VerifyController;
use site\Vitreon\Router\VerifyActionController;

class Start{

    private $objUrl;
    public $objController;
    private $action;
    private $params;
    private $nameController;

    public function __construct()
    {
        $this->objUrl = new Url;
        $this->nameController = $this->objUrl->getControllName();
        $this->action = $this->objUrl->getActionName();
        $this->params = $this->objUrl->getParams();
        $this->start();
    }

    public function start(): void
    {
        $this->defineConstantes();
        if (isset($this->nameController)) {
            $this->startObjController($this->nameController);
            new VerifyActionController($this->objController, $this->action, $this->params);
            return;
        }

        throw new Exception("erro desconecido", 500);
    }


    function startObjController(string $nameController): void
    {
        $controller = new VerifyController($nameController);
        $this->objController = new $controller->class;
    }

    function defineConstantes()
    {



        if ($_SERVER["SERVER_NAME"] === "localhost") {
            define("LINK", "http://localhost/vitreon/");
        }
        if ($_SERVER["SERVER_NAME"] === "vitreon.com.br") {
            define("LINK", "https://vitreon.com.br");
        }
    }
}
