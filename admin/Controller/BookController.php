<?php

namespace Admin\Controller;


class BookController extends AdminController {

    public function listing() {

        $bookModel = $this->load->model('Book');

        $data['books'] = $bookModel->repository->getAllBooks();

        $this->view->render('books/list', $data);
    }

    public function addBookPage() {

        $menuModel = $this->load->model('Menu');

        $data['items'] = $menuModel->repository->getItems();

        $this->view->render('books/add', $data);
    }

}