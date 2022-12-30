<?php 

namespace Modules\Theme\Repositories\Interface;

interface ThemeProductInterface
{
    public function getPaginateWithRelation($limit);
    public function getHotWithRelation($limit);
    public function getAllWithRelation();
    public function search($value);
    public function getPaginate($limit);
    public function massCreate($models);
    public function massUpdate($id,$models);
    public function save($models);
    public function delete($models);
    public function findById($id);
    public function getSort();
}