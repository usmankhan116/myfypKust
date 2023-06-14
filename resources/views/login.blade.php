
<html lang="en">
    <head>
 
    </head>
    <title>Login</title>
<style>
body{margin: 0;padding: 0;
background: #dddddd;
height: 100vh;font-family: sans-serif;
background-size: cover;
background-repeat: no-repeat;
background-position: center;
overflow: hidden;
}

@media screen and (max-width: 600px)
{body{background-size: cover;}

}

#particles-js{height: 100%}
.loginBox{
position: absolute;top: 60%;
left: 50%;transform: translate(-50%,-50%);
width: 350px;min-height: 200px;
background: rgba(0,0,0,.7);
border-radius: 10px;
padding: 40px;
box-sizing: border-box}

.user{
    margin: 0 auto;display: block;
margin-bottom: 20px}

h3{margin: 0;
    padding: 0 0 20px;
    color: #fff;
    text-align: center}

.loginBox input
{
    width: 100%;margin-bottom: 20px

}
select  {
    width: 100%;
    border: none;
    border-bottom: 2px solid #262626;
    outline: none;
    height: 40px;
    color: #fff;
    background: transparent;
    font-size: 16px;
    padding-left: 20px;
    box-sizing: border-box
}
select option
{  background:rgba(0,0,0,.7);
}
.loginBox input[type="text"], .loginBox input[type="password"]
   {  border: none;
    border-bottom: 2px solid #262626;
    outline: none;
    height: 40px;
    color: #fff;
    background: transparent;
    font-size: 16px;
    padding-left: 20px;
    box-sizing: border-box
}
.loginBox input[type="text"]:hover, .loginBox input[type="password"]:hover{
    color: #42F3FA;
    border: 1px solid #42F3FA;
    box-shadow: 0 0 5px rgba(0,255,0,.3), 0 0 10px rgba(0,255,0,.2), 0 0 15px rgba(0,255,0,.1), 0 2px 0 black
}

.loginBox input[type="text"]:focus, .loginBox input[type="password"]:focus{
    border-bottom: 2px solid #42F3FA
}
.inputBox{
    position: relative
}
.inputBox span{
    position: absolute;
    top: 10px;
    color: #262626}
.loginBox input[type="submit"]{
    border: none;outline: none;
    height: 40px;font-size: 16px;
    background: #544bac;
    color: #fff;
    border-radius: 20px;
    cursor: pointer
}
.loginBox a{color: #262626;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    text-align: center;
    display: block
}
a:hover{color: #00ffff}
p{color: #0000ff}
::placeholder{
    color: #979090;
}
</style>

</head>
<body>
    <div id="wrapper">
        <div id="page-inner">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="background: #156674">
            
                <h1 style="color:#fff;padding:40px;text-align:center">KPK Medicine Agencey</h1>
            <img class="user" src="KP_logo.png" height="100px" width="100px"
             style="position: absolute;left:10px;top:5px;" >
            </div>

    
        </nav>

<div id="alertmessage" class="alert" style=" width:600px;margin:5% 20%;position:fixed;z-index:1" >
  <span class="closebtn" onclick="this.parentElement.style.display='none';" >
 <h3 id="Alertmessagetext" style="padding:12px 16px"></h3> 
</div>


<div class="loginBox"> 
   
    <img class="user" src="KP_logo.png" height="100px" width="100px">
        <h3 style="color:#fff">Log in </h3></span> 
        <form action="login" method="post">
            @csrf

            <div class="inputBox">
                
    <input id="uname" type="text" name="username" placeholder="Email">
     <input id="pass" type="password" name="password" placeholder="Password"> 
    
</div> <input type="submit" name="submit" value="Login">
        </form> 
        
 
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->



</body>
</html>

<script>
        var y=document.getElementById("hide1");
        var z=document.getElementById("hide2");
        var x=document.getElementById("pass123");

        
        function myfun2()
    {
        if(x.type=="password")
        { 
             x.type="text";
            y.style.display="none";
            z.style.display="initial";
        }
        else 

        if(x.type="text")
        {    x.type="password"
            z.style.display="none";
            y.style.display="initial";
        }

        
    }
</script>



