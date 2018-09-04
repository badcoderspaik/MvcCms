<?php

namespace Cms\Model\Book;

use Engine\Core\Database\ActiveRecord;

class Book {
    use ActiveRecord;

    /**
     * @var string имя таблицы в БД
     */
    protected $table = 'books';

    /**
     * @var int id идентификатор книги в базе
     */
    public $id;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @var string название книги
     */
    public $title;

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title) {
        $this->title = $title;
        return $this;
    }

    /**
     * @var string автор книги
     */
    public $author;

    /**
     * @return string
     */
    public function getAuthor(): string {
        return $this->author;
    }

    /**
     * @param string $author
     * @return $this
     */
    public function setAuthor(string $author) {
        $this->author = $author;
        return $this;
    }

}