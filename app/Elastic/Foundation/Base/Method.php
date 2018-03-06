<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/19
 * Time: 上午11:24
 */

namespace App\Services\Elastic\Foundation\Base;


use App\Services\Elastic\Foundation\Methods\Traits\AliasTraits;
use App\Services\Elastic\Foundation\Methods\Traits\ResultTraits;

abstract class Method
{
    use AliasTraits, ResultTraits;

    abstract public function execute(array $arguments);

    /**
     * 映射配置命名空间
     *
     * @var string
     */
    protected $mappingsNamespace = 'App\Services\Elastic\Mappings';

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
    protected $settings;

    /**
     * Elastic 映射名称
     *
     * @var string
     */
    protected $type;

    /**
     * Elastic 实例
     *
     * @var object
     */
    protected $elastic;

    /**
     * Elastic 模型
     *
     * @var string
     */
    protected $model;

    /**
     * Elastic 查询
     *
     * @var array
     */
    protected $query = [
        'select' => [],
        'size' => 10,
        'from' => 0,
    ];

    /**
     * 构造方法
     *
     * Method constructor.
     * @param array $attribute
     * @param string $model
     * @throws \Exception
     */
    public function __construct(array $attribute, string $model)
    {
        $this->model = $model;
        // 类初始化
        $this->methodInit($attribute);
    }

    private function query()
    {
        return [
            'index'     => $this->index,
            'type'      => $this->type,
            'client'    => [],
            'body'      => [
                '_source' => $this->query['select'],
                'size' => $this->query['size'],
                'from' => $this->query['from'],
                'sort' => [],
                'query' => [],
            ],
        ];
    }

    /**
     * 获取索引映射参数设置
     *
     * @return array
     * @throws \Exception
     */
    protected function mappings()
    {
        // 方法类命名空间
        $mappingsClass = $this->mappingsNamespace.'\\'.ucfirst($this->mappings);

        // 判断方法是否存在
        if (class_exists($mappingsClass) === false) {
            throw new \Exception('Call to undefined method ' . get_class($this) . '::' .$mappingsClass . '()');
        }
        return get_object_vars(app($mappingsClass));
    }

    /**
     * 初始化方法
     *
     * @param array $attribute
     * @throws \Exception
     */
    private function methodInit(array $attribute)
    {
        // 初始化参数
        $this->initParams($attribute);

        // 实例化 Elastic
        $this->initElastic();

        // 初始化索引名称
        $this->initIndexes();
    }

    /**
     * 初始化参数
     *
     * @param array $attribute
     */
    private function initParams(array $attribute)
    {
        if (empty($attribute) === false) {
            foreach ($attribute as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    /**
     * 初始化 Elastic
     *
     * @param string $connections
     */
    private function initElastic(string $connections = 'default')
    {
        // 实例化 Elastic 类
        $this->elastic = app(Elastic::class, ['connections' => $connections])
            ->instantiation();
    }

    /**
     * 初始化索引名称
     */
    private function initIndexes()
    {
        // 判断索引是否设置
        if (empty($this->index)) {
            // 如果没有设置，则以文件名蛇形命名设置索引名称
            $temp = explode('\\', $this->model);
            $this->index = snake_case(end($temp));unset($temp);
        }

        // 判断索引别名是否设置
        if (is_null($this->alias) === false) {
            // 索引别名已经设置使用别名获取索引名称
            $indexes = $this->getIndexesWithAlias($this->alias);
            // 判断是否用别名获取到索引名称
            if (empty($indexes)) {
                // 未获取到设索引别称
                $this->index = $this->index. '_' . date('Ymd');
            } else if (count($indexes) > 1) {
                // 获取到多个索引名称，抛出错误
                throw new \Exception('别名 ['.$this->alias.']设置不正确');
            } else {
                $indexes = array_keys($indexes);
                $this->index = reset($indexes);
            }
        }
    }
}