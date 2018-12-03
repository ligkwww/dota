<?php
class Container{
    protected $binds;
    protected $instances;

    public function bind($abstract,$concrete){
        $this->binds[$abstract] = $concrete;
    }

    public function make($abstract,$param=[]){
        $params[0] = $this;
        $params[1] = $param;
        $arts = call_user_func_array($this->binds[$abstract],$params);
        return $arts;
    }
}