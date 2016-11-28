<?php
/**
 * author: seekerliu
 * createTime: 2016/11/28 下午4:38
 * Description:
 */
namespace App\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class SettingsRepository extends Repository {
    private $perPage = 10;

    public function model() {
        return 'App\Setting';
    }

    public function getList()
    {
        return $this->all()->pluck('value', 'name')->toArray();
    }

    public function batchUpdate($data)
    {
        $lists = $this->getList();
        foreach($lists as $key => &$value) {
            $value = $data[$key];
        }

        foreach($lists as $key => $list) {
            $this->update(['value'=>$list], $key, 'name');
        }
    }
}