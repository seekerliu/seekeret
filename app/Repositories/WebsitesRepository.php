<?php
/**
 * author: seekerliu
 * createTime: 2016/11/28 上午9:24
 * Description:
 */
namespace App\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class WebsitesRepository extends Repository {
    private $perPage = 10;

    public function model() {
        return 'App\Website';
    }

    public function getPaginatedList()
    {
        return $this->model
                ->with('category')
                ->paginate($this->perPage);
    }

    public function getPaginatedListByCategoryId($id)
    {
        return $this->model
                ->with('category')
                ->where('category_id', '=', $id)
                ->paginate($this->perPage);
    }
}