<p>1.Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, что оно больше нуля и меньше 10. Если это так - пусть функция возвращает true, если не так - false.</p>

<?php

	function isNumberInRange($num)
	{
		if ($num > 0 and $num < 10) {
			return true;
		} else {
			return false;
		}
	}
	
	echo isNumberInRange(1);

?>

<p>2.Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти. Для этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи.</p>

<?php

	$arr = [-1, 2, -5, 10, 76, 12, 15, 7, 9];
	$arrnew = [];
	
	foreach ($arr as $elem) {
	if (isNumberInRange($elem)) {
			$arrnew[] = $elem;
			}
		}
		
	echo "<pre>";
	print_r($arrnew);
	echo "</pre>";

?>
<p>3.Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр.</p>
<?php

	function getDigitsSum($num) {
		$arrnum = str_split($num, 1);
		foreach ($arrnum as $elem) {
			$sum += $elem;
		}

		return $sum;
		
		}

	echo getDigitsSum(555);
	
?>
<p>4.Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.</p>
<?php

	$arryear = range(1, 2020);
	$arrsum13 = [];
	
	foreach ($arryear as $elem) {
		if (getDigitsSum($elem) == 13) {
			$arrsum13[] = $elem;
		}
	}

	echo "<pre>";
	print_r($arrsum13);
	echo "</pre>";

?>
<p>5.Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false.</p>
<?php

	function isEven($num) {
		if ($num % 2 == 0) {
				return true;
			}
			else {
				return false;
			}
		
		}
		
	echo isEven(4);

?>
<p>6.Дан массив с целыми числами. Создайте из него новый массив, где останутся лежать только четные из этих чисел. Для этого используйте вспомогательную функцию isEven из предыдущей задачи.</p>
<?php

	$arr = range(-9, 9);
	$arreven = [];
	
	foreach ($arr as $elem) {
		if (isEven($elem)) {
			$arreven[] = $elem;
		}
	}
	
	echo "<pre>";
	print_r($arreven);
	echo "</pre>";
	
?>
<p>7.Сделайте функцию getDivisors, которая параметром принимает число и возвращает массив его делителей (чисел, на которое делится данное число).</p>
<?php

	function getDivisors($num) {
		$arrbase = range(1, $num);
		$arrdiv = [];
		
		foreach ($arrbase as $divisors) {
		if ($num % $divisors == 0) {
			$arreven[] = $divisors;
			}
		}
		
		return $arreven;
		
	}
	
	echo "<pre>";
	print_r(getDivisors(40));
	echo "</pre>";
	
?>
<p>8.Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих делителей. Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи.</p>
<?php

	function getCommonDivisors($num1, $num2) {
				
		$arrdiv1 = getDivisors($num1);
		$arrdiv2 = getDivisors($num2);
		$result = array_intersect($arrdiv1, $arrdiv2);
		return $result;
		
		}
		
	
		echo "<pre>";
		print_r(getCommonDivisors(5, 10));
		echo "</pre>";
	

	
	






















?>
<br>
<br>
<br>
<?php

	//Примеры решения задач из учебника
	//параметром будет принимать число, а возвращать массив цифр
	function getDigits($num)
	{
		return str_split($num, 1);
	}


	var_dump(getDigits(123)); //выведет [1, 2, 3] 

	//параметром принимающая массив и возвращающая сумму элементов этого массива
	function arraySum($arr) 
	{
		$sum = 0;
		foreach ($arr as $elem) {
			$sum += $elem;
		}

		return $sum;
	}
	
	//параметром принимает число и возвращает true, если сумма цифр этого числа от 1 до 9, и false - если это не так.
	function inRange($num) 
	{
		$sum = array_sum(getDigits($num));

		if ($sum >= 1 and $sum <= 9) {
			return true;
		} else {
			return false;
		}
	}

	$arr = [12, 19, 28, 13, 14, 345];
	$result = [];

	foreach ($arr as $elem) {
	if (inRange($elem)) { //если подходит - берем
		$result[] = $elem;
		}
	}
	var_dump($result);


	//Давайте решим еще одну задачу: дан массив с числами, найдем сумму всех цифр из этих чисел.
	$arr = [12, 19, 28, 13, 14, 345];
	$sum = 0;

	foreach ($arr as $elem) {
		$sum += array_sum(getDigits($elem));
	}
	echo $sum.'<br>';

	//Дан массив с числами. Создайте из него новый массив, где останутся лежать только положительные числа. Создайте для этого вспомогательную функцию isPositive, которая параметром будет принимать число и возвращать true, если число положительное, и false - если отрицательное.

	$arr = [1, 2, 3, -1, -2, -3];
	
	function isPositive($num) 
	{
		if ($num >= 0) {
			return true;
		} else {
			return false;
		}
	}
	
	$newArr = [];
	foreach ($arr as $elem) {
		if (isPositive($elem)) {
			$newArr[] = $elem;
		}
	}
	
	var_dump($newArr);
	
?>

	
	

