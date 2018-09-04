<?php

namespace Cms\Model\Book;

use Engine\Model;

class BookRepository extends Model {

    public function getAllBooks() {
        $getAllBooks = $this->queryBuilder
            ->select()
            ->from('books')
            ->sql();
        $allBooks = $this->db->query($getAllBooks);
        return $allBooks;
    }

    public function getAuthors() {
        $getAuthors = $this->queryBuilder
            ->select('author')
            ->from('books')
            ->sql();

        $authors = $this->db->query($getAuthors);
        return $authors;
    }

    public function getAuthorById($id) {
        $queryString = $this->queryBuilder
            ->select('author')
            ->from('books')
            ->where('id', $id)
            ->sql();
        $author = $this->db->query($queryString, $this->queryBuilder->values);
        return $author;
    }

}