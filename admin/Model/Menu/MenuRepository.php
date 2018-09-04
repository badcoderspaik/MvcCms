<?php

namespace Admin\Model\Menu;

use Engine\Model;

/**
 * Класс-наследник класса Model. Содержит методы работы с сущностью 'Menu'
 * Class MenuRepository
 * @package Admin\Model\Menu
 */
class MenuRepository extends Model {

    /**
     * Возвращает массив, каждый элемент которого содержит запись категории из БД
     * @return array|int|null
     */
    public function getItems() {

        $sql = $this->queryBuilder
            ->select()
            ->from('menu')
            ->sql();

        $items = $this->db->query($sql);

        return $items;
    }

}