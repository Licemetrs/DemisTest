<?

class ContactController extends Controller {
    private $pageTpl = "/views/Contact.php";

    public function __construct()
    {
        $this->model = new Model;
        $this->view = new View;
    }

    public function index() {
        $this->pageData["title"] = "Новости";

        $this->view->render($this->pageTpl, $this->pageData);
    }
}