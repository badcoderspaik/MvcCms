<?php
/**
 *Список роутов для админ-панели
 */

$this->router->add('login', '/admin/login/', 'LoginController:form');//страница с формой входа в админку
$this->router->add('dashboard', '/admin/', 'DashboardController:index');//главная страница админки
$this->router->add('auth-admin', '/admin/auth/', 'LoginController:authAdmin', 'POST');
$this->router->add('logout', '/admin/logout/', 'AdminController:logout');
$this->router->add('pages', '/admin/pages/', 'PageController:listing');
$this->router->add('books', '/admin/books/', 'BookController:listing');
$this->router->add('create-page', '/admin/pages/create/', 'PageController:createPage');
$this->router->add('add-books', '/admin/books/add/', 'BookController:addBookPage');