<?php

namespace Cms\Controller;

class HomeController extends CmsController {

    /**
     * отображает главную страницу шаблона
     */
    public function index() {

        $bookModel = $this->load->model('Book');

        $data['books'] = $bookModel->repository->getAllBooks();

        $this->view->render('index', $data);
    }

    public function product() {
        echo "product Page";
    }

    public function news($id = 'Список новостей') {
        echo $id;
    }
}