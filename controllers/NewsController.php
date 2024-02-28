<?

class NewsController extends Controller {
    private $pageTpl = "/views/News.php";

    public function __construct()
    {
        $this->model = new NewsModel;
        $this->view = new View;
    }

    public function index() {
        $this->pageData["title"] = "Новости";

        $this->pageData["news"] = $this->model->getNews(5);


        $this->view->render($this->pageTpl, $this->pageData);
    }
}