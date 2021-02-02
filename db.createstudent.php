<?php
include "html/head.html";
include "html/createdstudent.html";

include "php/db.info.php";

//inserting data
if(isset($_POST['createrec'])){ 

    //data info
    $voornaam = $_POST['firstname'];
    $achternaam = $_POST['lastname'];
    
    //Data insertion
    $stmt = "INSERT INTO student (voornaam, achternaam) VALUES ('$voornaam', '$achternaam')";
    $sth = $con -> prepare($stmt);
    $sth-> execute();
}
header('Location: index.php');
include "html/footer.html";