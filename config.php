<?php
class Config{
    public static $heroConfig = [
        'wr'=>Hero\Wr::class,
        'zs' => Hero\Zs::class,
    ];
    public static $artConfig = [
        'shufuji' => Art\Shufuji::class,
        'qiangliji' => Art\Qiangliji::class,
        'fengxingzhe' => Art\Fengxingzhe::class,
        'huoliquankai' => Art\Huoliquankai::class,
        'huxingshandian' => Art\Huxingshandian::class,
        'leidiandaji' => Art\Leidiandaji::class,
        'jingdianchang' => Art\Jingdianchang::class,
        'leishenzhinu'  => Art\Leishenzhinu::class
    ];
}