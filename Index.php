<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;

}

* {
margin:0;
 padding:0
 box-sizing: border-box;
}
span{
	color:  #4CAF50;

}
h1{
	background-color: #fff98c;
	text-align: center;
	color:#ff8a5c;
	font-size: 60px;
	height: 20%;
	line-height: 150px;
}
h2{
	font-size: 40px;
	text-align: center;
	color:#fff98c;
	margin-bottom: 10px;

}
input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #4CAF50;
  box-sizing: border-box;
  transition: width 0.5s;
}

input[type=text]:focus, input[type=password]:focus{
width: 80%;

}
button {
  border-radius:20px;
  background-color: #492540;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}
button:hover {
  opacity: 0.8;
}
.container{
	background-color: #ff8a5c;
	height: 80%;
	position: relative;


}
.contain{

	text-align: center;
	display: flex;
	flex-direction: column;
	align-items: center;
	width: 40%;
	height: 70%;
 margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
#button_c{

}
.psw{
	color: black;
}
</style>

</head>
<body>

	<h1>
		The Academia
	</h1>
	<div class ="container">

	<form action="connect.php" method="post">
	 
<div class="contain">


  	<h2>User Login</h2> 
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        

   

	<button type="submit">Login</button>
   
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>



    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
</div>
</form>

</div>
</body>
</html>