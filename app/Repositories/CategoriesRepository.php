<?php
/**
 * author: seekerliu
 * createTime: 2016/11/27 下午4:53
 * Description:
 */
namespace App\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class CategoriesRepository extends Repository {
    private $perPage = 25;

    public function model() {
        return 'App\Category';
    }

    public function getPaginatedList()
    {
        return $this->model->with('websites')->paginate($this->perPage);
    }
}