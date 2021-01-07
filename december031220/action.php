<meta charset="UTF-8">
<title> My first site </title>

<link rel="stylesheet" href= "stylethanks.css">


</head>

<body>
	<!--/*
<nav>
	
	
	 
	<a href="#"> Стрижки </a>
	<a href="#"> Укладки </a>
	<a href="#"> Стайлинг </a>
	<a href="#"> Борода </a>
	<a href="#"> Стиль </a>
	<a href="#"> Контакты </a>
	<a href="profile.html"> Профиль </a>
	</nav>
	-->
	
	
	
 <?php
 error_reporting(0);
$file = fopen('Orders.txt','a+');
$no = 'New Order #';
$eos = ' ';

$fileCounter = file("count.txt");
$count = implode("", $fileCounter);
$count++;
$myfile = fopen("count.txt","w");
fputs($myfile,$count);
fclose($myfile);
	
	
	
fwrite ($file, $no);// запись "новый заказ" 
	fwrite ($file, $count. PHP_EOL);
	 
fwrite ($file,$_POST['name']. PHP_EOL);//имя
 
fwrite ($file,$_POST['email']. PHP_EOL);//почта
 
fwrite ($file,$_POST['phone']. PHP_EOL);//тел
 
fwrite ($file,$_POST['adress']. PHP_EOL);//адрес
 
fwrite ($file,$_POST['pay']. PHP_EOL);//способ оплаты
 
 fwrite ($file,$_POST['message']. PHP_EOL);//сообщение

fwrite ($file,$_POST['option1']. PHP_EOL);//флажок
fwrite ($file, $eos. PHP_EOL);//пустая строка, как конец данных по заказу
fclose($file);
	?>
	
	<div class="eee">
		<?php 
	
 echo '<p style="color: aliceblue, font: arial"> Ваш заказ принят. ',
 'Через 15 секунд Вы перейдете на главную страницу '."<br>", 
	 'Номер Вашего заказа: ', $count, '   ';
		 
 
echo "<a href=\"home.html\">переход на главную</a>";


echo "<script>
function thanks() {
location.href=\"home.html\"
}

setTimeout (thanks, 10000);

</script>";

?>
	
	
	 </div>
	
	</body>