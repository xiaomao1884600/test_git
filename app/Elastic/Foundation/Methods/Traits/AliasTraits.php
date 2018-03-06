<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/19
 * Time: 下午5:29
 */

namespace App\Services\Elastic\Foundation\Methods\Traits;


trait AliasTraits
{
    /**
     * 根据别名获取索引
     *
     * @param string $alias
     * @return mixed
     */
    public function getIndexesWithAlias(string $alias)
    {
        $indexes = $this->elastic->indices()->getAlias([
            'name' => $this->alias,
            'client' => [
                'ignore' => [
                    404,
                ],
            ],
        ]);

        if (isset($indexes['status'])) {
            $indexes = [];
        }

        return $indexes;
    }
}