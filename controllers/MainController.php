<?php

class MainController{
    
    public function actionList()
    {
        echo "
        
        <head>
        <style>

        
body{
  background-image: url(components/5.png);
  background-repeat: no-repeat;  
  background-size: cover;  	
  } 
  
  
  
  .login{
    font-family: Oswald-Medium;
    font-size: 1.6vw;
    font-weight:bolder;
    color: #43383e;
    text-align:left;
    position:absolute;
    display: block;
   left:8%;
   top:6%;
  }
  
  .testbtn{
    text-align:center; 
    background:linear-gradient(to right, white, #FFD80E);
    width: 18%;
    height: 6%;
    border-radius:50px;
    position: absolute;  
    top:13%;
    display:block;
    font-family: Oswald-Medium;
      font-size: 24px;
      line-height: 1.2; 
  margin-top: 3%;	
  }
  .testbtn:hover, .testbtn.active{
  background:linear-gradient(to right, #FFD80E, white);}
  
  
  .tests{
  
  width: 15%;
  height: 30%;
  position:relative;
  background: linear-gradient(180deg, #F8C202 0%, rgba(255, 255, 255, 0) 100%);
  border: 1px solid #000000;
  box-sizing: border-box;
  border-radius: 40px;
  padding:2%;
  float:right;
  
  }
  
          
        </style>
        <title>Oqqy</title>
        <meta charset='UTF-8'>
        <link rel='stylesheet' type='text/css' href='1.css'>
        <link rel='icon' type='image/png' href='components/5.png'/>
        </head>
      <body style='background-image:url(components/5.png)'>
        <main>
          <img src='components/5.png' style='position:absolute;top:3%;left:1%;width:5%;'>
          <span class='login' >
          Администратор
          </span>
          <div style='margin-left:2.7%;'>
          <p><button class='testbtn' onClick='header(Location: createtest )'><a href='createtest'style='font-family: Oswald-Medium; font-size: 24px; color: black;line-height: 1.2; ' >Создание теста</a></button>
          <p><button class='testbtn active' style='top:21%;'><a href='testresult'style='font-family: Oswald-Medium; font-size: 24px; color: black;line-height: 1.2; ' >Готовые тесты</a></button>
          <p><button class='testbtn' style='top:29%;' onClick='header(Location: testresult )'><a href='testresult'style='font-family: Oswald-Medium; font-size: 24px; color: black;line-height: 1.2; ' >Кандидаты</a></button>
          <p><button class='testbtn' style='top:86%; '>Выход</button>
          </div>
        </main>
        
        
        
        <div class='tests' style='margin-left:3%; margin-right:8%; margin-top:10%;'>
        <h1>Тест 3</h1>
        <br><br>
        Пройдено раз: 
        <br>Средний балл:
        <br>Среднее время:
        <br><br><a href=# style='text-align:center; margin-left:25%;'>Подробнее</a>
        </div>
        
        <div class='tests' style='margin-left:5%; margin-right:4.5%;margin-top:10%;'>
        <h1>Тест 2</h1>
        <br><br>
        Пройдено раз: 
        <br>Средний балл:
        <br>Среднее время:
        <br><br><a href='' style='text-align:center; margin-left:25%; '>Подробнее</a>
        </div>
        
      
        <div class='tests' style='margin-left:7%; margin-right:2%;margin-top:10%;'>
        <h1>Тест 1</h1>
        <br><br>
        Пройдено раз: 
        <br>Средний балл:
        <br>Среднее время:
        <br><br><a href=# style='text-align:center; margin-left:25%;'>Подробнее</a>
        </div>
        
          <div class='tests' style='margin-left:3%; margin-right:8%; margin-top:5%;'>
        <h1>Тест 6</h1>
        <br><br>
        Пройдено раз: 
        <br>Средний балл:
        <br>Среднее время:
        <br><br><a href=# style='text-align:center; margin-left:25%;'>Подробнее</a>
        </div>
        
        <div class='tests' style='margin-left:5%; margin-right:4.5%;margin-top:5%;'>
        <h1>Тест 5</h1>
        <br><br>
        Пройдено раз: 
        <br>Средний балл:
        <br>Среднее время:
        <br><br><a href=# style='text-align:center; margin-left:25%; '>Подробнее</a>
        </div>
        
      
        <div class='tests' style='margin-left:7%; margin-right:2%;margin-top:5%;'>
        <h1>Тест 4</h1>
        <br><br>
        Пройдено раз: 
        <br>Средний балл:
        <br>Среднее время:
        <br><br><a href=# style='text-align:center; margin-left:25%;'>Подробнее</a>
        </div></body>";
    }
}


?>