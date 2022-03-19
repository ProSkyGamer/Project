<?php

class LoginController{
    
    public function actionList()
    {
        echo "
        <head>
        <style>
        



/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
  font-family: Oswald-Regular;
  src: url('../fonts/oswald/Oswald-Regular.ttf'); 
}

@font-face {
  font-family: Oswald-Medium;
  src: url('../fonts/oswald/Oswald-Medium.ttf'); 
}

@font-face {
  font-family: Oswald-Bold;
  src: url('../fonts/oswald/Oswald-Bold.ttf'); 
}



/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: Oswald-Regular, sans-serif;
}

/*---------------------------------------------*/
a {
	font-family: Oswald-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
  color: #111111;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: Oswald-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

input[type='number'] {
    -moz-appearance: textfield;
    appearance: none;
    -webkit-appearance: none;
}

input[type='number']::-webkit-outer-spin-button,
input[type='number']::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}


input::-webkit-input-placeholder { color: #43383e;}
input:-moz-placeholder { color: #43383e;}
input::-moz-placeholder { color: #43383e;}
input:-ms-input-placeholder { color: #43383e;}

textarea::-webkit-input-placeholder { color: #43383e;}
textarea:-moz-placeholder { color: #43383e;}
textarea::-moz-placeholder { color: #43383e;}
textarea:-ms-input-placeholder { color: #43383e;}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}

/*//////////////////////////////////////////////////////////////////
[ Utility ]*/
.txt1 {
  font-family: Oswald-Bold;
  font-size: 20px;
  color: #333333;
  line-height: 1.2;
}

.txt2 {
  font-family: Oswald-Regular;
  font-size: 16px;
  color: #999999;
  line-height: 1.4;
}

.txt3 {
  font-family: Oswald-Regular;
  font-size: 16px;
  color: #333333;
  line-height: 1.2;
  text-transform: uppercase;
}

.bg1 {background-color: #FFD80E;}
.bg2 {background-color: #FFD80E;}

.bo1 {border-bottom: 1px solid #929292;}

.hov1:hover {
  border-bottom: 1px solid #111111;
  color: #111111;
}

/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  position: relative;
  background-color: #FFD80E;
}

.wrap-login100 {
  width: 25%;
  background: transparent;
  border-radius: 0px;
}


/*==================================================================
[ Form ]*/

.login100-form {
  width: 100%;
  position: relative;
}

.login100-form-title {
  font-family: Oswald-Medium;
  font-size: 7.5vw;
  color: #43383e;
  line-height: 1.2;
  text-align: center;
width:250%;
position:relative;
  display: block;
}


/*------------------------------------------------------------------
[ Button Login with ]*/

.btn-login-with {
  font-family: Oswald-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 25px;
  border-radius: 25px;
}

.btn-login-with i {
  font-size: 20px;
  margin-right: 10px;
}

.btn-login-with:hover {
  color: #fff;
  background-color: #333333;
}

/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  background-color: #fff;
  border-radius: 31px;
  position: relative;
  z-index: 1;
}

.input100 {
  font-family: Oswald-Medium;
  font-size: 16px;
  color: #43383e;
  line-height: 1.2;

  position: relative;
  display: block;
  width: 100%;
  height: 42px;
  background: #fff;
  border-radius: 31px;
  padding: 0 35px 0 35px;
  margin:5px;
}


/*------------------------------------------------------------------
[ Focus Input ]*/

.focus-input100 {
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
  background-color: #fff;
  pointer-events: none;
  
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100:focus + .focus-input100 {
  width: calc(100% + 20px);
}

/*---------------------------------------------*/
.btn-show-pass {
  font-size: 15px;
  color: #aaaaaa;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  position: absolute;
  z-index: 200;
  height: 100%;
  top: 0;
  right: 25px;
  padding: 0 5px;
  cursor: pointer;
  -webkit-transition: background 0.4s;
  -o-transition: background 0.4s;
  -moz-transition: background 0.4s;
  transition: background 0.4s;
}

.btn-show-pass:hover {
  color: #111111;
}

.btn-show-pass.active {
  color: #111111;
}

/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.login100-form-btn {
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

.login100-form-btn::before {
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

.login100-form-btn:hover:before {
  background-color: #222222;
  width: calc(100% + 20px);
}


/*------------------------------------------------------------------
[ Alert validate ]*/
.alert-validate .btn-show-pass {
  visibility: hidden;
}

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  z-index: 1000;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 14px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 10px;
  pointer-events: none;

  font-family: Oswald-Regular;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: '\f06a';
  font-family: FontAwesome;
  display: block;
  position: absolute;
  z-index: 1100;
  color: #c80000;
  font-size: 16px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 16px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}

/*//////////////////////////////////////////////////////////////////
[ Responsive ]*/
@media (max-width: 576px) {
  .wrap-login100 {
    padding-top: 20px
  }
}
        </style>
	<title>Oqqy</title>
	<meta charset='UTF-8'>
	<link rel='icon' type='image/png' href='components/ring.png'/>
	</head>
<body style='background-color:#FFD80E;'>
	<div class='limiter'>
		<div class='container-login100' style='position:absolute;top:5%;'>
		<img src='components/ring.png' style='position:absolute;top:7%;width:6%;'>
			<div class='wrap-login100 p-t-90 p-b-30'>
				<form class='login100-form validate-form' name='enterform' onSubmit='../components/Login.php' method='post'>
					<span class='login100-form-title p-b-40' style='position:absolute; right:-70%; top:0;'>
						Oggy's students test
					</span>
					<br>

					<div class='wrap-input100 validate-input m-b-16' data-validate='Please enter email: ex@abc.xyz' style='margin-top:45%;'>
						<input class='input100' type='email' name='email' placeholder='Логин' required/>
						<span class='focus-input100'></span>
					</div>
					<br>

					<div class='wrap-input100 validate-input m-b-20' data-validate = 'Please enter password'>
						<span class='btn-show-pass'>
							<i class='fa fa fa-eye'></i>
						</span>
						<input class='input100' type='password' name='passw' placeholder='Пароль' required/>
						<span class='focus-input100'></span>
					</div>
					<br>
					<div class='container-login100-form-btn'>
						<input type='submit' class='login100-form-btn' value='Вход'/>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</body>
        ";
    }
}


?>