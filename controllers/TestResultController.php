<?php

class TestResultController{
    
    public function actionList()
    {
        echo "
        
        <head>
	<title>Oqqy</title>
	<meta charset='UTF-8'>
	<!-- <link rel='stylesheet' type='text/css' href='style.css'> -->
	<link rel='icon' type='image/png' href='images/icons/favicon.png'/>
	<style>
	p {
	font-family: Oswald-Regular;
	font-size: 32px;
	line-height: 1.7;
	color: black;
	margin: 15px;
	background:linear-gradient(to right,#FFD80E,white);
	border-radius:25px;
	width:50%;
	padding:5px;
}
	.bbtn{
position:absolute;
display:inline;
background:linear-gradient(to right,#FFD80E,white);
font-size:24px;
padding:0.5%;
border-radius:50px;
border:1px solid;

}th,td {
   border: 1px solid grey;
   font-family: Oswald-Regular;
	font-size: 24px;
}
	</style>
	</head>
<body style='background:white;'>
	<p style='margin:1%;'> Тест</p>
	<button class='bbtn' style='left:80%;top:4%;'>Поделиться тестом</button>
	<table style='width:100%;text-align:center;'><tr>
	<th>Фио</th>
	<th>Почта</th>
	<th>Время</th>
	<th>Правильность</th></tr>
	<tr><td>Иванов</td><td>ivanov@gmail.com</td><td>36:55</td><td>23%</td></tr>
	</table>
	<button class='bbtn' style='left:65%;bottom:5%;'>Редактировать тест</button>
	<button class='bbtn' style='left:83%;bottom:5%;background:#FF666F;'>Удалить тест</button>
</body>";
    }
}


?>