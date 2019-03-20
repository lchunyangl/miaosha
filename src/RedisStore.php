<?php
/**
 * Created by PhpStorm.
 * User: lilong
 * Date: 2019/3/19
 * Time: 9:35
 */

namespace Chunyang\Miaosha;


use Illuminate\Redis\RedisServiceProvider;

class RedisStore implements StoreInterface
{
    protected $store;

    public function __construct(RedisServiceProvider $store)
    {
        $this->store = $store;
    }

    /**
     * @return RedisServiceProvider
     */
    public function getStore()
    {
        return $this->store;
    }
}