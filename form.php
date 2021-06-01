<!DOCTYPE html>
<html>
<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM</title>
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
    background: url(images/6.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;
    background-color:#1c8adb;
    font-family: serif;
  }
   
  .container {
    left: 5%;
    top: 14%;
    margin: 50px;
    max-width: 95%;
    padding: 30px;
    background-color: transparent ;

  } 
.sub{
  left: 5%;
  margin: 50px;
}
  
  .heading{
    position: absolute;
    top: 0%;
    max-height: 2%;
    width: 100%;
    padding: 50px;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;
    background-color:#606060;  
  }
    



    img {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }   

    h4 {text-align: center;}

    p {  font-size: 40px;
      color: white;}

    h1 {text-align: center;}

   

    
.transbox {
  background-color:#595959;
  border: 2px solid black;
  opacity: 0.6;
  
}

#navbar {
  overflow: hidden;
  background-color:#080808;  
  padding: 90px 10px;
  transition: 0.4s;
  position: fixed;
  width: 100%;
  top: 0;
}


#navbar #logo {
  font-size: 35px;
  font-weight: bold;
  transition: 0.4s;
}

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
  }


  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
}




   </style>
    
</head>

<body >    
  <table >
    <th>
       <div id="navbar">
       <a href="#default" style="color: white" id="logo">Autism Spectrum Disorder Diagnosis Tool</a>
    </th>
    <script>
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.getElementById("navbar").style.padding = "30px 10px";
      document.getElementById("logo").style.fontSize = "25px";
      } else {
      document.getElementById("navbar").style.padding = "80px 10px";
      document.getElementById("logo").style.fontSize = "35px";
      }
     }
   </script>

   =
      <br><br><br><br><br><br><br><br><br><br>
   
      <h1><b><i><u>Fill the form</b></i></u></h1>
   
    <div class="container transbox ">   
      <form  method="post" action="radio.php">
      <p  ><b>1. Does your child look at you when you call his/her name? </b></p>

      <h1>
        0% &nbsp&nbsp<input type="radio" name="radio" value="1">&nbsp&nbsp
        <input type="radio" name="RATE" value="2">&nbsp&nbsp
        <input type="radio" name="RATE" value="3">&nbsp&nbsp 
        <input type="radio" name="RATE" value="4">&nbsp&nbsp
        <input type="radio" name="RATE" value="5">&nbsp&nbsp
        <input type="radio" name="RATE" value="6">&nbsp&nbsp
        <input type="radio" name="RATE" value="7">&nbsp&nbsp
        <input type="radio" name="RATE" value="8">&nbsp&nbsp
        <input type="radio" name="RATE" value="9">&nbsp&nbsp
        <input type="radio" name="RATE" value="1o">&nbsp&nbsp 100%

      </h1>
      </form>
    </div>

    <div class="container transbox ">  
      <form  method="post" action="form.php">
        <p  ><b>2. How easy is it for you to get eye contact with your child? </b></p>

        <h1>
        0% &nbsp&nbsp<input type="radio" name="radio" value="1">&nbsp&nbsp
        <input type="radio" name="RATE" value="2">&nbsp&nbsp
        <input type="radio" name="RATE" value="3">&nbsp&nbsp 
        <input type="radio" name="RATE" value="4">&nbsp&nbsp
        <input type="radio" name="RATE" value="5">&nbsp&nbsp
        <input type="radio" name="RATE" value="6">&nbsp&nbsp
        <input type="radio" name="RATE" value="7">&nbsp&nbsp
        <input type="radio" name="RATE" value="8">&nbsp&nbsp
        <input type="radio" name="RATE" value="9">&nbsp&nbsp
        <input type="radio" name="RATE" value="1o">&nbsp&nbsp 100%
        </h1>
        </form></div>
  


  
    <div class="container transbox ">   
      <form  method="post" action="form.php">
        <p  ><b>3. Does your child point to indicate that s/he wants something?</b></p>

        <h1>
        0% &nbsp&nbsp<input type="radio" name="radio" value="1">&nbsp&nbsp
        <input type="radio" name="RATE" value="2">&nbsp&nbsp
        <input type="radio" name="RATE" value="3">&nbsp&nbsp 
        <input type="radio" name="RATE" value="4">&nbsp&nbsp
        <input type="radio" name="RATE" value="5">&nbsp&nbsp
        <input type="radio" name="RATE" value="6">&nbsp&nbsp
        <input type="radio" name="RATE" value="7">&nbsp&nbsp
        <input type="radio" name="RATE" value="8">&nbsp&nbsp
        <input type="radio" name="RATE" value="9">&nbsp&nbsp
        <input type="radio" name="RATE" value="1o">&nbsp&nbsp 100%

        </h1>
      </form></div>

    <div class="container transbox ">  
      <form  method="post" action="form.php">
         <p  ><b>4. Does your child point to share an interest with you? </b></p>

        <h1>
        0% &nbsp&nbsp<input type="radio" name="radio" value="1">&nbsp&nbsp
        <input type="radio" name="RATE" value="2">&nbsp&nbsp
        <input type="radio" name="RATE" value="3">&nbsp&nbsp 
        <input type="radio" name="RATE" value="4">&nbsp&nbsp
        <input type="radio" name="RATE" value="5">&nbsp&nbsp
        <input type="radio" name="RATE" value="6">&nbsp&nbsp
        <input type="radio" name="RATE" value="7">&nbsp&nbsp
        <input type="radio" name="RATE" value="8">&nbsp&nbsp
        <input type="radio" name="RATE" value="9">&nbsp&nbsp
        <input type="radio" name="RATE" value="1o">&nbsp&nbsp 100%

        </h1>
        </form></div>

    <div class="container transbox ">  
      <form  method="post" action="form.php">
        <p  ><b>5. Does your child pretend? e.g. care for dolls, talk on a toy phone?</b></p>

        <h1>
        0% &nbsp&nbsp<input type="radio" name="radio" value="1">&nbsp&nbsp
        <input type="radio" name="RATE" value="2">&nbsp&nbsp
        <input type="radio" name="RATE" value="3">&nbsp&nbsp 
        <input type="radio" name="RATE" value="4">&nbsp&nbsp
        <input type="radio" name="RATE" value="5">&nbsp&nbsp
        <input type="radio" name="RATE" value="6">&nbsp&nbsp
        <input type="radio" name="RATE" value="7">&nbsp&nbsp
        <input type="radio" name="RATE" value="8">&nbsp&nbsp
        <input type="radio" name="RATE" value="9">&nbsp&nbsp
        <input type="radio" name="RATE" value="1o">&nbsp&nbsp 100%

        </h1>
     </form></div>


    <div class="container transbox ">  
      <form  method="post" action="form.php">
        <p  ><b>6. Does your child follow where you are looking? </b></p>

        <h1>
        0% &nbsp&nbsp<input type="radio" name="radio" value="1">&nbsp&nbsp
        <input type="radio" name="RATE" value="2">&nbsp&nbsp
        <input type="radio" name="RATE" value="3">&nbsp&nbsp 
        <input type="radio" name="RATE" value="4">&nbsp&nbsp
        <input type="radio" name="RATE" value="5">&nbsp&nbsp
        <input type="radio" name="RATE" value="6">&nbsp&nbsp
        <input type="radio" name="RATE" value="7">&nbsp&nbsp
        <input type="radio" name="RATE" value="8">&nbsp&nbsp
        <input type="radio" name="RATE" value="9">&nbsp&nbsp
        <input type="radio" name="RATE" value="1o">&nbsp&nbsp 100%

        </h1>
     </form>
    </div>

    <div class="container transbox ">  
      <form  method="post" action="form.php">
        <p  ><b>7. If you or someone else in the family is visibly upset, does your child show signs of wanting to comfort them? e.g. stroking hair, hugging them)</b></p>

        <h1>
        0% &nbsp&nbsp<input type="radio" name="radio" value="1">&nbsp&nbsp
        <input type="radio" name="RATE" value="2">&nbsp&nbsp
        <input type="radio" name="RATE" value="3">&nbsp&nbsp 
        <input type="radio" name="RATE" value="4">&nbsp&nbsp
        <input type="radio" name="RATE" value="5">&nbsp&nbsp
        <input type="radio" name="RATE" value="6">&nbsp&nbsp
        <input type="radio" name="RATE" value="7">&nbsp&nbsp
        <input type="radio" name="RATE" value="8">&nbsp&nbsp
        <input type="radio" name="RATE" value="9">&nbsp&nbsp
        <input type="radio" name="RATE" value="1o">&nbsp&nbsp 100%

        </h1>
     </form></div>


    <div class="container transbox ">  
      <form  method="post" action="form.php">
        <p  ><b>8. Does your child use simple gestures (e.g.wave goodbye)? </b></p>

        <h1>
        0% &nbsp&nbsp<input type="radio" name="radio" value="1">&nbsp&nbsp
        <input type="radio" name="RATE" value="2">&nbsp&nbsp
        <input type="radio" name="RATE" value="3">&nbsp&nbsp 
        <input type="radio" name="RATE" value="4">&nbsp&nbsp
        <input type="radio" name="RATE" value="5">&nbsp&nbsp
        <input type="radio" name="RATE" value="6">&nbsp&nbsp
        <input type="radio" name="RATE" value="7">&nbsp&nbsp
        <input type="radio" name="RATE" value="8">&nbsp&nbsp
        <input type="radio" name="RATE" value="9">&nbsp&nbsp
        <input type="radio" name="RATE" value="1o">&nbsp&nbsp 100%
        </h1>
     </form></div>


    <div class="container transbox ">  
      <form  method="post" action="form.php">
        <p  ><b>9. Does your child stare at nothing with no apparent purpose? </b></p>

        <h1>
        0% &nbsp&nbsp<input type="radio" name="radio" value="1">&nbsp&nbsp
        <input type="radio" name="RATE" value="2">&nbsp&nbsp
        <input type="radio" name="RATE" value="3">&nbsp&nbsp 
        <input type="radio" name="RATE" value="4">&nbsp&nbsp
        <input type="radio" name="RATE" value="5">&nbsp&nbsp
        <input type="radio" name="RATE" value="6">&nbsp&nbsp
        <input type="radio" name="RATE" value="7">&nbsp&nbsp
        <input type="radio" name="RATE" value="8">&nbsp&nbsp
        <input type="radio" name="RATE" value="9">&nbsp&nbsp
        <input type="radio" name="RATE" value="1o">&nbsp&nbsp 100%

        </h1>
     </form></div>


    <div class="container transbox ">  
      <form  method="post" action="form.php">
        <p  ><b>10. Does your child have unusual or sometimes intense reactions to way things smell, taste, seen, or look. </b></p>

        <h1>
        0% &nbsp&nbsp<input type="radio" name="radio" value="1">&nbsp&nbsp
        <input type="radio" name="RATE" value="2">&nbsp&nbsp
        <input type="radio" name="RATE" value="3">&nbsp&nbsp 
        <input type="radio" name="RATE" value="4">&nbsp&nbsp
        <input type="radio" name="RATE" value="5">&nbsp&nbsp
        <input type="radio" name="RATE" value="6">&nbsp&nbsp
        <input type="radio" name="RATE" value="7">&nbsp&nbsp
        <input type="radio" name="RATE" value="8">&nbsp&nbsp
        <input type="radio" name="RATE" value="9">&nbsp&nbsp
        <input type="radio" name="RATE" value="1o">&nbsp&nbsp 100%
        </h1>
     </form></div>

  
 

  
  <div class="sub"  >  
    <form  method="post" action="form.php" >
    <p align="right"> 
    <input type="submit" value="Submit" >

</p> 
         
    </form>

    </div>

  
  

  <tr>
     <br><br><br>
  </tr>



</table>
  </div>

            
    <?php

        include " init.php";
        $rate =$_POST['rate'];



            
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>    
</body>
</html>