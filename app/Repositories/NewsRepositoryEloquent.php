<?php
/**
 * Created by PhpStorm.
 * User: da
 * Date: 11/09/2017
 * Time: 00:42
 */

namespace App\Repositories;

use App\News;
use App\Repositories\Contracts\NewsRepositoryInterface;

class NewsRepositoryEloquent extends BaseRepository implements NewsRepositoryInterface
{
    public function __construct(News $model)
    {
        parent::__construct($model);
    }

    public function getListNews()
    {
        return $this->findWhere([])->orderBy('created_at', 'desc')->get();
    }
}
