<form action="http://localhost/result.php" method="POST">
	<h3>Number 1</h3>
	<input type="text" name="num1">
	<select name="action">
        <option value="add">Сложить</option>
        <option value="subtract">Вычесть</option>
        <option value="multiply">Умножить</option>
		<option value="divide">Разделить</option>
	</select>

	<h3>Number 2</h3>
	<input type="text" name="num2">
	
	<button type="submit">Посчитать</button>
</form>

<?php

if (isset($_GET['res']))
{
	echo '<h3><br>Result: ' . $_GET['res'] . '</h3>';
}

?>