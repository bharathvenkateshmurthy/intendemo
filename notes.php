<?php 
// printing a php 
echo "Hello World";

//array
$fruits = array('mango','apple','orange','strawberry');

//to print one array
echo $fruits[0];

//loop that entire array using foreach to print

foreach($fruits as $fruit){
    echo $fruit ."<br>";
}

//session that can be used till the browser closes
$name = 'rahul'; //declaring the variable

$_SESSION['name'] = $name; //stroing in the session variable so can be used later.

echo $_SESSION['name']; // to print the session variable;


require_once "./config.php"; //this is the configuration file where your database cred is store and will be using in the CRUD operations;

include('./includes/footer.php'); //used to include the footer and any code can be imported;

$read = "SELECT * FROM tablename";

$readwhere = "SELECT * FROM tablename WHERE id = 1";

$insert = "INSERT INTO tablename(column1,column2) values('value1','value2')";

$update = "UPDATE tablename SET(column1,column2) values('value1','value2') WHERE id = 1";

$delete = "DELETE FROM tablename WHERE id = 1";


$test = "none";




























?>


