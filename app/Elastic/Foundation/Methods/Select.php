<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/22
 * Time: 上午11:31
 */

namespace App\Services\Elastic\Foundation\Methods;


use App\Services\Elastic\Foundation\Base\Method;

class Select extends Method
{
    public function execute(array $arguments)
    {
        $this->query['select'] = $arguments;
        return $this;
    }
}