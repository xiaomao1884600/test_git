<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/19
 * Time: 下午2:43
 */

namespace App\Services\Elastic\Foundation\Base;


use Elasticsearch\ClientBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Elastic
{
    /**
     * Elastic 链接配置
     *
     * @var \Illuminate\Config\Repository|mixed
     */
    protected $connections;

    /**
     * Elastic 配置参数
     *
     * @var array
     */
    protected $config = [];

    public function __construct(string $connections = 'default')
    {
        $this->elasticInit($connections);
    }

    /**
     * 实例化 Elastic 类
     *
     */
    public function instantiation()
    {
        // 实例化一个新的客户端
        return ClientBuilder::create()
            // 设置主机
            ->setHosts($this->connections['hosts'])
            // 设置重试
            ->setRetries($this->connections['retries'])
            // 设置记录器
            ->setLogger($this->setLogger())
            // 建立客户对象
            ->build();
    }

    /**
     * 初使化 Elastic 配置
     *
     * @param string $connections
     * @throws \Exception
     */
    public function elasticInit(string $connections)
    {
        // 初使化链接配置
        if (empty($this->connections = config('elastic.connections.'.config('elastic.'.$connections), []))) {
            throw new \Exception('elastic connections not fount');
        }
    }

    /**
     * 设置记录器
     *
     * @return Logger
     */
    private function setLogger ()
    {
        // 设置ElasticSearch日志名称
        $logger = new Logger(config('elastic.logger.name', 'elastic'));
        // 设置日志文件路径
        $filePath = storage_path(
            config('elastic.logger.file_path') . DIRECTORY_SEPARATOR
            . config('elastic.logger.name') . '_' .date('Y-m-d') . '.log');

        // 设置日志级别
        $logger->pushHandler(new StreamHandler($filePath, config('elastic.logger.level')));
        // 反回日志记录器对象
        return $logger;
    }
}