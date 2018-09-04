<?php
//Список роутов

/**
 * добавляем роуты в свойство [array Router::routes]. После добавления роутов в это свойство оно будет иметь
 * следующий вид:
 * Router::routes['home'] = ['pattern => '/', 'controller' => 'HomeController', 'method' => 'GET'],
 *
 * то-есть двумерный массив
 */
$this->router->add('home', '/', 'HomeController:index');//роут для домашней страницы
$this->router->add('product', '/product', 'HomeController:product');//страница продутков
$this->router->add('news', '/news', 'HomeController:news');//страница новостей
$this->router->add('news_single', '/news/(id:int)', 'HomeController:news');//страница одной новости
$this->router->add('category', '/category', 'CategoryController:category');//страница категорий
$this->router->add('category_single', '/category/(id:int)', 'CategoryController:category');//страница одной категории по id