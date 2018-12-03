<?php
include 'function.php';
include 'Container.php';
include 'config.php';
spl_autoload_register('autoInclude');

$container = new Container();
$heroes = Config::$heroConfig;
$arts = Config::$artConfig;
foreach($heroes as $heroName => $className){
    $container->bind($heroName,function($container,$module) use($className){
        foreach($module as $val){
            $art[$val] = $container->make($val);
        }
        return new $className($art);
    });
}
foreach($arts as $artName => $className){
    $container->bind($artName,function() use($className){
        return new $className();
    });
}

/* 创建英雄 */
$hero[] = $container->make('wr',['shufuji','qiangliji','fengxingzhe','huoliquankai']);
$hero[] = $container->make('zs',['huxingshandian','leidiandaji','jingdianchang','leishenzhinu']);
echo "共创建".count($hero)."个英雄<br/>";
foreach($hero as $key=>$val){
	$arts = $val->getArts();
	echo "英雄名称：".$val->name."，";
	echo "力量值：".$val->power;
	echo "智力值：".$val->brain;
	echo "敏捷值：".$val->speed;
	echo "<br/>英雄技能：<br/>";
	foreach($arts as $k=>$v){
		echo "技能名称：[".$v->name."] , 伤害：".$v->power()."<br/>";
	}
	echo "<br/>";
}