<?

class MainController extends Controller {
    private $pageTpl = "/views/Main.php";

    public function __construct()
    {
        $this->model = new MainModel;
        $this->view = new View;
    }

    public function index() {
        $this->pageData["title"] = "Главная страница";

        $this->pageData["news_first"] = $this->model->getNews(1);
        $this->pageData["news_range"] = $this->model->getRangeNews(2,2);


        $this->view->render($this->pageTpl, $this->pageData);
    }
}