<?php 

class Router
{
    private $routes;
    public $conrollerName;

    public function __construct()
    {
        $routesPath=ROOT.'\config\routes.php';
        $this->routes = include($routesPath);

    }

    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();
        
        foreach ($this->routes as $uriPattern => $path){
            if (preg_match("~$uriPattern~",$uri)){
                $segments = explode('/',$path);
                $conrollerName=ucfirst(array_shift($segments).'Controller');
                session_start();
                $_SESSION['controllername']=$conrollerName;

                $actionName='action'.ucfirst(array_shift($segments));

                $conrollerFile=ROOT."\\controllers\\".$conrollerName.'.php';
                if (file_exists($conrollerFile)){
                    include_once($conrollerFile);
                }
                $conrollerObject = new $conrollerName;
                $result= $conrollerObject->$actionName();

                if($result!=NULL){
                    var_dump($result);
                    break;
                }
            }
        }
    }
}

?>