<?php
/**
 * Created by PhpStorm.
 * User: da
 * Date: 10/09/2017
 * Time: 17:39
 */

namespace App\Repositories;

use App\Repositories\Contracts\SemesterRepositoryInterface;
use App\Semester;

class SemesterRepositoryEloquent extends BaseRepository implements SemesterRepositoryInterface
{
    public function __construct(Semester $model)
    {
        parent::__construct($model);
    }
}
