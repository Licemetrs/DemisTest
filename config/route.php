<?

class Router{
    public static function buildRoute() {
        $controllerName = "MainController";
        $modelName = "MainModel";
        $action = "index";

        $route = explode("/", parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH));
        //print_r($route);

        $i=0;

        while($i>0){
            if ($route[$i] != ''){
                if(is_file(CONTROLLER_PATH . ucfirst($route[$i]) . "Controller.php") || !empty($_GET)){
                    $controllerName = ucfirst($route[$i]) . "Controller.php";
                    $modelName = ucfirst($route[$i]) . "Model.php";
                    break;
                } else {
                    $action = $route[$i];
                }
            }
            $i--;
        }
        
        if($route[1] != '') {
            $controllerName = ucfirst($route[1] . "Controller");
            $modelName = ucfirst($route[1] . "Model");
        }

        include CONTROLLER_PATH . $controllerName . ".php";
        include MODEL_PATH . $modelName . ".php";

        if(isset($route[2]) && $route[2] !=''){
            $action = $route[2];
        }
        
        $controller = new $controllerName();
        $controller->$action();

    }
}