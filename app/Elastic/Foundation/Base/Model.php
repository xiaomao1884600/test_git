<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/19
 * Time: 下午2:29
 */

namespace App\Services\Elastic\Foundation\Base;


class Model
{
    /**
     * Elastic 索引名称
     *
     * @var string
     */
    protected $index;

    /**
     * Elastic 索引别名
     *
     * @var string
     */
    protected $alias;

    /**
     * Elastic 映射名称
     *
     * @var string
     */
    protected $type;

    /**
     * Elastic 映射配置
     *
     * @var string
     */
    protected $mappings;

    /**
     * 索引设置
     *
     * @var array
     */
    protected $settings = [
        // 分片
        'number_of_shards'              => 5,
        // 副本数
        'number_of_replicas'            => 1,
        // 最大分页数
        'max_result_window'             => 1000000000,
    ];

    /**
     * 在对象中调用一个不可访问方法时调用
     *
     * @param string $functionName
     * @param array $arguments
     * @return $this
     * @throws \Exception
     */
    public function __call(string $functionName, array $arguments)
    {
        // 方法类命名空间
        $methodsClass = 'App\Services\Elastic\Foundation\Methods'.'\\'.ucfirst($functionName);

        // 判断方法是否存在
        if (class_exists($methodsClass) === false) {
            throw new \Exception('Call to undefined method ' . get_class($this) . '::' .$functionName . '()');
        }

        // 执行方法
        return app($methodsClass, [
            'attribute' => get_object_vars($this),
            'model' => get_class($this),
        ])->execute($arguments);
    }

}