<?php
namespace App\Repositories;

interface RepositoryInterface
{

    public function getAll();

    public function find($id);

    public function where($attribute, $value);

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function delete($id);
}