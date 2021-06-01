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
    margin: 0;
    padding: 0;
    background: url(images/7.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;
    background-color:#1c8adb;
    font-family: serif;

    }
   
      
          

    .login-box{
    width: 50%;
    height: 95%;
    background: rgba(0, 0, 0, 0.7);
    border-radius: 10%;
    color: #fff;
    top: 50%;
    left: 47%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;   
    padding: 70px 30px;     
    }

   


    
    .login-box input{
    width: 95%;
    margin-bottom: 20px;
    }
    
    .login-box input[type="text"],input[type="email"],input[type="number"],input[type="date"]
    {
    border: none;
    border-bottom: 1px solid #4caf50;
    background:transparent;
    outline: none;
    height:50%;
    color: #fff;
    font-size: 20px;
    
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
    h1 {text-align: center;}

   </style>
    



</head>

<body>    
    <div class="login-box"  >   <!-- new modified log in box -->
        <h1>Details..</h1>



        <form  method="post" action="form.php">
          
  

  <label >Age</label></br>
  <input type="number" id="age" name="age" placeholder="Month" required><br>


  <label  > Gender:</label><br>
  <input type="text" id="gender" name="gender" placeholder="Male or Female"required ><br>
  
  <label  >   Ethnicity:</label><br>
  <input type="text" id="ethnicit" name="ethnicity" placeholder="List of common ethnicities in text format " required><br>


  <label  > Born with jaundice:</label><br>
  <input type="text" id="jaundice" name="jaundice" placeholder="  YES OR NO"required><br>

  <label  >Family member with PDD</label><br>
  <input type="text" id="pdd" name="pddr" placeholder="  YES OR NO" required><br>

  <label for="name" >Who is completing the test</label><br>
  <input type="text" id="guardian" name="guardian" placeholder=" Parent, self, caregiver, medical staff, clinician ,etc." required><br>



  <label  >Country of residence</label><br>
  <input type="text" id="place" name="place" placeholder=" Name of the country" required><br>

  
  <label  >Used the screening app before</label><br>
  <input type="text" id="checked" name="checked" placeholder=" YES OR NO" required><br>

  
  <label  >Screening Method Type </label><br>
  <input type="number" id=" category" name=" category" required placeholder=" The type of screening methods chosen based on age category (0=toddler, 1=child, 2= adolescent, 3= adult)"><br>


  <input type="submit" value="Submit" >

</form>
</div>


        




            
    <?php
        if(isset($_POST['save']))
       






        
            
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>    
</body>
</html>