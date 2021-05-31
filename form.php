<!DOCTYPE html>
<html>
<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="../admin/dist/css/anima.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<style>

    
    body{
    margin:10;
    padding: 10;
    background: url(images/candle.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;
    background-color:#1c8adb;
    font-family: serif;

    }
   
      
    .navbar {
      overflow: hidden;
      background-color: #ffff;
      position: fixed;
      bottom: 0;
      top :0; 
      width: 100%;
          } 

    
.container {
  position: absolute;
  left: 0%;
  top: 14%;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: transparent;
}
   
    
  
.heading{
  position: absolute;
  top: 0%;
  max-height: 2%;
  width: 100%;

  padding: 50px;

  background: url(images/bg.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;
    background-color:#1c8adb;  
}
    

    .login-box input[type="submit"]
    {
    border: none;
    outline: none;
    height: 30px;
    background: #1c8adb;
    color: #fff;
    font-size: 50x;
    border-radius: 40px;
    
    
    }

    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    }   
    h4 {text-align: center;}

   </style>
    



</head>

<body>    
    <table >
      <thr >
  <div class="heading">
  <h4>Admin Login</h4>

  </div>
  </tr>
<tr>
    <div class="container"  >   <!-- new modified log in box -->
        <h4>Admin Login</h4>



        <form  method="post" action="form.php">
<label for="name">Enter your Name:</label><br>
  <input type="text" id="name" name="name"placeholder="Name" ><br>

  
  <label for="email">Enter your email:</label><br>
  <input type="email" id="email" name="email" placeholder="Email"> <br>
  

  <label >Enter your number:</lable></br>
  <input type="number" id="quantity" name="quantity" min="1" max="10" ><br>
  
<lablel >Sex: </lable><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br>

  <label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday"><br>


  <input type="submit" value="Submit" >




</form>

  </tr> 
        




            
    <?php
        if(isset($_POST['save']))
       






        
            
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>    
</body>
</html>