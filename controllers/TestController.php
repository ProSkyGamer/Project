<?php

class TestController{
    
    public function actionList()
    {
        echo "
        
        <head>
	<meta charset='UTF-8'>
        <title>Oqqy</title></head>
        <style>
        body{
          background-image: url(1.jpg);
          background-repeat: no-repeat;  
          background-size: cover;  	
          background-color: #FFD80E;
          } 
          .header{
            padding-top:40px;
            padding-left:70px;
            font-size:30px;
          }
          .questionBlock{
            
            font-size:30px;
            line-height:40px;
            
          }
          
          
          
          .login100-form-btn{
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            min-width: 160px;
            height: 45px;
            background-color: transparent;
            border-radius: 31px;
          
            font-family: Oswald-Regular;
            font-size: 16px;
            color: #fff;
            line-height: 1.2;
            text-transform: uppercase;
          
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            position: relative;
            z-index: 1;
          }
          
          .login100-form-btn::before{
            content: '';
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
            border-radius: 31px;
            background-color: #F8C202;
            pointer-events: none;
            
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
          }
          
          .login100-form-btn:hover:before{
            background-color: #222222;
            width: calc(100% + 20px);
          }
          
          /* Таймер */
          
          .timer{
            margin-left: 80%;
            margin-top:0 px;
          
          }
              .timer__items {
                display: flex;
                font-size: 48px;
              }
          
              .timer__item {
                position: relative;
                min-width: 60px;
                margin-left: 10px;
                margin-right: 10px;
                padding-bottom: 15px;
                text-align: center;
              }
          
              .timer__item::before {
                content: attr(data-title);
                display: block;
                position: absolute;
                left: 50%;
                bottom: 0;
                transform: translateX(-50%);
                font-size: 14px;
              }
          
              .timer__item:not(:last-child)::after {
                content: ':';
                position: absolute;
                right: -15px;
              }

            div.questionBlock {
                display: none;
            }
        </style>
        <script type = 'text/javascript'>
            var answer;
        </script>
		<link rel='stylesheet' type='text/css' href='Тестирование.css'>
		<link rel='icon' type='image/png' href='5.png'/>
    </head> 

	<div class='timer'>
    <div class='timer__items'>
      <div class='timer__item timer__minutes'>00</div>
      <div class='timer__item timer__seconds'>00</div>
    </div> </div>	
    
	
	<body class='header'><h1>Тестирование</h1>
        <div class = 'questionBlock'>
           1. Вопрос 1<br>
            <input type = 'radio' name=q1 onclick='qa.nowRight = 0'>Вариант 1;<br>
            <input type = 'radio' name=q1 onclick='qa.nowRight = 1'>Вариант 2;<br>
            <input type = 'radio' name=q1 onclick='qa.nowRight = 0'>Вариант 3;<br>
            <input type = 'radio' name=q1 onclick='qa.nowRight = 0'>Вариант 4;<br> 
        </div>
        <div class = 'questionBlock'>
            2. Вопрос 2<br>
            <input type = 'checkbox' name=q2 onclick='qa.nowRight = 0'>Вариант 1;<br>
            <input type = 'checkbox' name=q2 onclick='qa.nowRight = 0'>Вариант 2;<br>
            <input type = 'checkbox' name=q2 onclick='qa.nowRight = 0,5'>Вариант 3;<br>
            <input type = 'checkbox' name=q2 onclick='qa.nowRight = 0,5'>Вариант 4;<br>
            <input type = 'checkbox' name=q2 onclick='qa.nowRight = 0'>Вариант 5;<br>
        </div>
        <div class = 'questionBlock'>
            3. Вопрос 3<br>
			<select class='que' style=' width:150px; height:40px; font-size:25px;border-radius:15px;'>
            <option value='Вариант 1' name=q3 onclick='qa.nowRight = 0'>Вариант 1</option><br>
            <option value='Вариант 2' name=q3 onclick='qa.nowRight = 1'>Вариант 2</option><br>
			<option value='Вариант 2' name=q3 onclick='qa.nowRight = 1'>Вариант 3</option><br>
			<option value='Вариант 2' name=q3 onclick='qa.nowRight = 1'>Вариант 4</option><br>
			</select>
        </div>
        <div class = 'questionBlock'>
            4. Вопрос 4<br>
			<input type='text' size='140'>
        </div>
			
			<div class='container-login100-form-btn-slv'>
						<button class='login100-form-btn' style='font-size:25px; position:absolute; bottom:90px; left:150px;'  onclick='qa.nextOrResult()'>
							Следующий вопрос
						</button>
			</div>
			
			
			
					

        <script type = 'text/javascript'>
		    document.addEventListener('DOMContentLoaded', function () {
      // конечная дата
      const deadline = new Date(new Date().getFullYear(), new Date().getMonth() + 1, 01);
      // id таймера
      let timerId = null;
      // склонение числительных
      function declensionNum(num, words) {
        return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
      }
      // вычисляем разницу дат и устанавливаем оставшееся времени в качестве содержимого элементов
      function countdownTimer() {
        const diff = deadline - new Date();
        if (diff <= 0) {
          clearInterval(timerId);
        }

        const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
        const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
        $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
        $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;
        $minutes.dataset.title = declensionNum(minutes, ['минута', 'минуты', 'минут']);
        $seconds.dataset.title = declensionNum(seconds, ['секунда', 'секунды', 'секунд']);
      }
      // получаем элементы, содержащие компоненты даты
      const $minutes = document.querySelector('.timer__minutes');
      const $seconds = document.querySelector('.timer__seconds');
      // вызываем функцию countdownTimer
      countdownTimer();
      // вызываем функцию countdownTimer каждую секунду
      timerId = setInterval(countdownTimer, 1000);
    });
	
            var qa = new QuestAnalizer();
            function QuestAnalizer() {
                var now = 0, printed = false, rightCount = 0;
                var questionBlocks = document.querySelectorAll('div.questionBlock');
                var allQCount = questionBlocks.length;
                this.nowRight = 0;
                questionBlocks[now].style.display = 'block';
                this.nextOrResult = function () {
                    if (now >= allQCount-1) {
                        now++;
                        if (!printed) {
                            questionBlocks[now - 1].style.display = 'none'
                            var p = document.createElement('p');
                            p.innerHTML = 'Верных ответов ' + rightCount + '. Вы набрали ' + (rightCount / allQCount * 100).toFixed(0) + '%';
                            document.body.appendChild(p);
                            printed = true;
                        } else {
                            alert('Ваш результат будет отправлен на почту.');
                        }
                    } else {
                        questionBlocks[now].style.display = 'none';
                        now++;
                        rightCount += this.nowRight;
                        questionBlocks[now].style.display = 'block';
                    }
                }
            }
            
        </script>
    </body>";
    }
}


?>