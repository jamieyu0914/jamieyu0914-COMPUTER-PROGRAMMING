<html>
<head>
<title>NxN乘法表</title>     
<meta charset="utf-8">

<style>
	table {
		border-collapse:collapse;
		margin:auto;
	}
	td {
		border: 1px solid black;
	}
</style>

</head>
       
<body>

    <p style="text-align:center;font-size:24px;color:red">NxN乘法表</p>
    <hr>
	
    <center style="width:400px;margin:auto;text-align:center">
      <form action="water-1.1.php" method="post">
        請輸入一個1到19的數字:
        <input type="input" name="number" value="<?php if (isset($_POST['number'])) echo $_POST['number']; ?>">
        <input type="submit" name="submit" value="開始">
      </form>
    </center>
	
	
<?php
	if (isset($_POST['number']))
	{
		
	if($_POST['number']>=1 && $_POST['number']<=19)
	{
		echo '<table>';
		for ($y=1; $y<=$_POST['number']; $y++)
			{
		echo '<tr>';
		for ($x=1; $x<=$_POST['number']; $x++)
			{
		echo '<td>';
		echo $y . '*' . $x . '=' . ($y * $x);
		echo '</td>';
		
	if ($x >= $y)
			{
		break;
			}
			}
		echo '</tr>';
			}
		echo '</table>';
	}
	
	else
	{
		echo '<p style="color:red;text-align:center">輸入的數字不是1 到 19</p>';
	}
	}
?>
  
  </body>
</html>



