?php 

$databaseHost = 'localhost';

$databaseName = 'records'; 

$databaseUsername = 'root'; 

$databasePassword = '';  

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(isset($_POST['submit']))

{

$name = $_POST['name'];

$gender = $_POST['gender'];

$result = mysqli_query($mysqli,"insert into data values('','$name','$gender')");

if($result)

{

echo "Data inserted ";

}

else{

echo "Something wrong";

}

}