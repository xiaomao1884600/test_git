<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/3/6
 * Time: 下午2:44
 */

namespace App\Services\Elastic\Models;

use App\Services\Elastic\Foundation\Base\Model;

class Tests extends Model
{
    /**
     * Elastic 索引名称
     *
     * @var string
     */
    protected $index = 'test_20180306';

    /**
     * Elastic 映射名称
     *
     * @var string
     */
    protected $type = 'test1';

    /**
     * Elastic 映射配置
     *
     * @var string
     */
    protected $mappings = 'tests';
}