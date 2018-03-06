<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/18
 * Time: 下午5:28
 */

namespace App\Services\Elastic\Foundation\Base;


abstract class Commands
{
    /**
     * 命令行入口方法
     *
     * @param string $model Elastic 模型名称
     * @return mixed
     */
    abstract public function commands(string $model);

    /**
     * Elastic 模型类
     *
     * @var object
     */
    protected $models;

    /**
     * Elastic model 命名空间
     *
     * @var string
     */
    protected $modelNamespace = 'App\Services\Elastic\Models';

    /**
     * 验证 Elastic 模型是否存在
     *
     * @param string $models
     * @param string|null $namespace
     * @return $this
     */
    protected function validateModel(string $models, string $namespace = null)
    {
        if (is_null($namespace) === false) {
            $this->modelNamespace = $namespace;
        }
        $this->models = app($this->modelNamespace.'\\'.$models);
        return $this;
    }
}