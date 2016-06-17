<?php
echo 'Поехали...'."\n";
echo '1. Формируем "лабирин" с комнатами'.PHP_EOL;
$lab = [];
$complexity = 100;
for($i=0;$i<$complexity;$i++){
	$lab[$i] = 0;
}
echo 'Лабиринт создан, получилось '.$complexity.' комнат'.PHP_EOL;
echo 'Запускаем первого учасника.'.PHP_EOL;
$logic = 3*pow($complexity, 3)*log($complexity);
for($i=0;$i<=$logic;$i++){
	$rand = rand(0,$complexity);
	if(isset($lab[$rand])){
		$lab[$rand]++;
	}
}
echo 'Первый участник думает, что прошел все комнаты '.$logic.PHP_EOL;
echo 'Начинаем проверку комнат.'.PHP_EOL;
$good = 0;
$fail = 0;
$rep = 0;
for($i=0;$i<$complexity;$i++){
	if($lab[$i] > 0){
		$good++;
	}else{
		$fail++;
	}
	if($lab[$i] > 1){
		$rep++;
	}
}
echo 'Пройдено комнат '.$good.' из '.$complexity.PHP_EOL;
echo 'Пропущенно комнат '.$fail.' из '.$complexity.PHP_EOL;
echo 'Более 1-го раза заходил в '.$rep.' из '.$complexity.' комнат'.PHP_EOL;
