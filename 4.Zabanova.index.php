<!DOCTYPE html>
<head>
  <meta  charset=utf-8">
  <title>Домашнее задание 2</title>
 </head>
 <body>
	<h5> Забанова Юлия Афанасьевна</h5>
	<h6>До моего Дня рождения осталось</h6>
	
<?php   
    $birthday = '18.09.1990';

$bd = explode('.', $birthday);
$bd = mktime(0, 0, 0, $bd[1], $bd[0], date('Y') + ($bd[1].$bd[0] <= date('md')));
$days_until = ceil(($bd - time()) / 86400);
echo  $days_until;
?>
  &nbsp;<b>Дней</b>
<p>
<h4> Узнайте сколько дней осталось до твоего Дня рождения </h4>

<h5> Укажите дату своего рождения </h5>
       
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <p><input type="date" name="age"> </p>
           <a href="?age=<?php echo $_GET['age'];?>	"></a>
        <p><input type="submit" /></p>
		</form>
  <?php
$aDate = time(); 
$bDate = strtotime ($_GET['age']);  
$datediff = $aDate - $bDate;
echo "";
echo floor($datediff/(86400));
  ?>  
  &nbsp;<b>Ваш возраст в днях</b> 
  <p>
  <h3> До Дня рождения осталось </h3>
  <h4> Укажите дату следующего Дня рождения</h4>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <p><input type="date" name="agu"> </p>
           <a href="?age=<?php echo $_GET['agu'];?>	"></a>
        <p><input type="submit" /></p>
		</form>
  
<?php
          $cdate = strtotime($_GET['agu']) ;
		 $today = time();
         $difference = $cdate - $today;
		 function days_until($date){
    return (isset($date)) ? floor((strtotime($date) - time())/60/60/24) : FALSE;
}
         if ($difference < 0) { $difference = 0; }
		 echo floor ($difference/60/60/24).""."дней осталось до Вашего Дня рождеия"; 
		?>
		<p>
		<?php
		  if ($difference/60/60/24 == 0) { 
		   echo "Поздравляю!!! У Вас сегодня День рождения!!!!"; 
		  }
       ?>
   
  
</body>
</html>


