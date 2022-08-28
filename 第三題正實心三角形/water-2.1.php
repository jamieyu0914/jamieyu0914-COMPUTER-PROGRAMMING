<html>
<head>
<title>正實心三角形</title>     
<meta charset="utf-8">
</head>
       
<body>

    <p style="text-align:center;font-size:24px;color:red">正實心三角形</p>
    <hr>
	
    <center style="width:400px;margin:auto;text-align:center">
      <form action="water-2.1.php" method="post">
        請輸入一個數字:
        <input type="input" name="number" value ="<?php echo $_POST['number']; ?>">
        <input type="submit" name="submit" value="開始">
      </form>
    </center>
   
	 
	 
<?php  




       echo '<center>';
    $height=$_POST['number'];  
               
      if($_POST['submit']){ 
    

     echo '<br>';
     for($x=1;$x<=$height;$x++){    
     
     for($y=1;$y<=$height-$x;$y++){ 
    
     echo ' ';
      }
      for($z=1;$z<=($x*2)-1;$z++){ 
	  
      echo '*'; 
      }
      echo '<br>';
      } 
  
    
       echo '</center>';
    
	}
  ?>
  
  </body>
</html>
