<?php

namespace Admin\Model\Book;

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

    /**
     * @var string путь к изображению обложки книги
     */
    public $coverUrl;

    /**
     * @return string
     */
    public function getCoverUrl():string {
        return $this->coverUrl;
    }

    /**
     * @param $coverUrl
     * @return $this
     */
    public function setCoverUrl($coverUrl) {
        $this->coverUrl = $coverUrl;
        return $this;
    }

    /**
     * @var string название файла книги
     */
    public $bookFile;

    /**
     * @return string
     */
    public function getBookFile(): string {
        return $this->bookFile;
    }

    /**
     * @param string $bookFile
     * @return $this
     */
    public function setBookFile(string $bookFile) {
        $this->bookFile = $bookFile;
        return $this;
    }

    /**
     * @var string год издания книги
     */
    public $year;

    /**
     * @return string
     */
    public function getYear(): string {
        return $this->year;
    }

    /**
     * @param string $year
     * @return $this
     */
    public function setYear(string $year) {
        $this->year = $year;
        return $this;
    }

    /**
     * @var string текст с описанием книги
     */
    public $text;

    /**
     * @return string
     */
    public function getText(): string {
        return $this->text;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text) {
        $this->text = $text;
        return $this;
    }

    /**
     * @var int id категории книги
     */
    public $categoryId;

    /**
     * @return int
     */
    public function getCategoryId(): int {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return $this
     */
    public function setCategoryId(int $categoryId) {
        $this->categoryId = $categoryId;
        return $this;
    }

}