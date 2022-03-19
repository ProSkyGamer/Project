<?php

class CreateTestController{
    
    public function actionList()
    {
        echo "
        <style>
        body{
            background:#FFD80E;
        }
        p {
            font-family: Oswald-Regular;
            font-size: 24px;
            line-height: 1.7;
            color: black;
            margin: 15px;
            background:linear-gradient(to right,white,#FFD80E);
            border-radius:25px;
            width:50%;
            padding:5px;
        }
            .bbtn{
        position:absolute;
        display:inline;
        background:white;
        font-size:24px;
        padding:0.5%;
        border-radius:50px;
        border:1px solid;
        </style>
        <script>
        answers=2;
        function addAnswer() {
            answers++;
            x=document.getElementById('section');
            var newansw=document.createElement('input');
            newansw.type='text';
            newansw.name='answer ' + answers;
            newansw.id='answer '+answers;
            newansw.value='Вариант '+answers;
            newansw.style='font-size:24px;margin-top:2.3%;margin-left:1%';
            var newanswch=document.createElement('input');
            newanswch.type='checkbox';
            newanswch.id='Ch'+answers;  
            newanswch.name='Ch' + answers;
            var brr=document.createElement('br');
            x.appendChild(newansw);
            x.appendChild(newanswch);
            x.appendChild(brr);
            if (answers==5)
            {
                var b=document.getElementById('addansw');
                var bb=document.getElementById('addansww');
                b.removeChild(bb);
            }
        };

        </script>
        <p style='margin:1%;'>Создание теста</p>
        <br>
        <input type=button value='Установка времени' class='bbtn' style='left:80%;top:4%;'/>
        <br>
        <h3 style='position:absolute;left:80%;top:8%;'>Количество вопросов : 0</h3>
        <br>
        <input type='text' size='80' placeholder='Вопрос' style='font-size:24px;margin-top:3%;margin-left:2%;'>
        <br>
        <form method='post' onSubmit='components/NextQuestion.php'>
        <input type=text value='Вопрос?' id='question' style='font-size:24px;margin-top:1%;margin-left:1%;' name='question'/>
        <div id='section'>
        <br>
        <input type=text value='Вариант 1' id='answer 1' style='font-size:24px;margin-top:-5%;margin-left:1%;' name='answer 1'/><input type='checkbox' id='Ch1'/>
        <br>
        <input type=text value='Вариант 2' id='answer 2' style='font-size:24px;margin-top:2%;margin-left:1%;' name='answer 2'/><input type='checkbox' id='Ch2'/>
        <br>
        </div>
        <div id='addansw'>
        <input type=button class='bbtn' style='left:19%;top:15%;' value='Добавить ответ' id='addansww' onClick='addAnswer()'/>
        </div>
        <br>
        <input type=submit class='bbtn' style='bottom:5%;border-radius:100px;font-size:34px; padding:1%;' value='&#8592;'/>
        <input type=submit class='bbtn' style='bottom:5%;left:6%;border-radius:100px;font-size:34px; padding:1%;' value='&#8594;' onSubmit='../components/NextQuestion.php'/>
        </form>
        <input type=button class='bbtn' style='left:80%;bottom:6%;background:#FF666F;' value='Завершить создание'/>
        "
        ;
    }
}


?>