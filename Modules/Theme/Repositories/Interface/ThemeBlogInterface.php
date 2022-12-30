<?php 

namespace Modules\Theme\Repositories\Interface;

interface ThemeBlogInterface
{
    public function getPaginateWithRelation($limit);
    public function getAll();
    public function search($value);
    public function getPaginate($limit);
    public function massCreate($models);
    public function massUpdate($id,$models);
    public function save($models);
    public function delete($models);
    public function findById($id);
}