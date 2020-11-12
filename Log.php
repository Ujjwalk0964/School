<!DOCTYPE>
<html>    
<head>    
    <title>Login Form</title> 


    <style>
body  
{  
    margin: 0;  
    padding: 0;  
    background-color:pink;

    font-family: 'Arial';  
}  
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: #ffbf00;
         
        border-radius: 15px ;  
          
}  
h2{  
    text-align: center;  
    color: #277582;  
    padding: 30px;  
}  
label{  
    color: #08ffd1;  
    font-size: 17px;  
}  
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: red;  
  
  
 
a{  
    float: right;  
    background-color: Red;  
}   
  
    </style>
     
</head>    
<body> 
  <form action="log2.php" method="POST">     
    <h2>LOGIN PAGE</h2><br>    
    <div class="login">    
    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="id" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="pwd" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="submit" name="save" id="log" value="Login">       
         <br><br>    
         <a href="#">Forgot Password</a>    
    </form>     
</div>    
</body>    
</html> 
     
