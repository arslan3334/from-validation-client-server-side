<!DOCTYPE html>
<html>
<head>
	<title> FORM DATA</title>
</head>
<body>
	<center>
<h1 style="background-color: green;color: white;"> CONGARTUALTIONS...!! YOUR ACCOUNT HAS BEEN REGISTERED SUCCESSFULLY THANKYOU FOR REGISTERATION</h1>

</center>
<?php

if(isset($_REQUEST["Registeration"])){
    // echo "<pre>";
    //   print_r($_REQUEST);
    // echo "</pre>";
  

extract($_REQUEST);

// echo $firstname;
// echo $textarea;
// echo"</br>";
// echo $Lastname;
// echo"</br>";
// echo $email;
// echo"</br>";
// echo $phone;
// echo"</br>";
// echo $gender;
// echo"</br>";
// echo $cnic;
// echo"</br>";
// echo $country;
// echo"</br>";
 $alpha_pattern="/^[A-Z]{1}[a-z]{2,}$/";//Arsal
 $email_pattern="/^[a-z]{3,}[0-9]{2,}[@][a-z]{3,}[.][a-z]{3,}$/";  //arsal123@gmail.com
 $phone_num_pattern="/^[0-9]{2}[0-9]{3}-[0-9]{6}-[0-9]{1}$/"; //92312-030130-9
 
$cnic_pattern="/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/";   //41504-0549919-5

$error_msg=null;
 
 $length=0;

 if ($textarea=="") {
 	$error_msg.="<li> PLEASE ENTER SOME THING ABOUT YOU IT IS REQUIRED</li>";

header("location:FORM.php?msg=$error_msg");
 	
 }


if ($firstname=="") {
	  
$error_msg.="<li>enter firstname it is required</li>";

header("location:FORM.php?msg=$error_msg");
	
}
else{

	 
if (!preg_match($alpha_pattern,$firstname)) {
$error_msg.="<li>enter firstname like Arsal</li>";

header("location:FORM.php?msg=$error_msg");

}

}



if ($Lastname=="") {
	  
$error_msg.="<li>enter Lastname it is required</li>";

header("location:FORM.php?msg=$error_msg");
	
}
else{

	 
if (!preg_match($alpha_pattern,$Lastname)) {
$error_msg.="<li>enter Lastname like Jhon</li>";

header("location:FORM.php?msg=$error_msg");

}

}



if ($email=="") {
	  
$error_msg.="<li>enter email it is required</li>";

header("location:FORM.php?msg=$error_msg");
	
}
else{

	 
if (!preg_match($email_pattern,$email)) {
$error_msg.="<li>enter Lastname like Jhon</li>";

header("location:FORM.php?msg=$error_msg");

}

}


if ($phone=="") {
	  
$error_msg.="<li>enter phone number it is required</li>";

header("location:FORM.php?msg=$error_msg");
	
}
else{

	 
if (!preg_match($phone_num_pattern,$phone)) {
$error_msg.="<li>enter phone number like 92312-030130-9</li>";

header("location:FORM.php?msg=$error_msg");

}

}


if ($cnic=="") {
	  
$error_msg.="<li>enter CNIC it is required</li>";

header("location:FORM.php?msg=$error_msg");
	
}
else{

	 
if (!preg_match($cnic_pattern,$cnic)) {
$error_msg.="<li>enter cnic like 41504-0549919-5</li>";

header("location:FORM.php?msg=$error_msg");

}

}

if ($country=="") {
	  
$error_msg.="<li>enter Country it is required</li>";

header("location:FORM.php?msg=$error_msg");
	
}



if (!$middlename=="") {
	  	 
if (!preg_match($alpha_pattern,$middlename)) {
$error_msg.="<li>enter middlname LIke Jhon</li>";

header("location:FORM.php?msg=$error_msg");

}

}


if (!isset($gender)) {
	
	$error_msg.="<li>select Gender it is required</li>";

header("location:FORM.php?msg=$error_msg");
}


if (!isset($policies)) {
	
	$error_msg.="<li>select  policies it is required</li>";

header("location:FORM.php?msg=$error_msg");
}
else {
     for($a=0; isset($policies[$a]); $a++)
          $length=$length+1;
          if($length!=4){

$error_msg.="<li>select All policies it is required</li>";

header("location:FORM.php?msg=$error_msg");

          }

        }
        








}





?>

<center>
<table border="2">
	
<tr style="background-color:blue;color: white; ">
	<th> FIRST NAME </th>
    <th> LAST NAME</th>
    <?php if (!$middlename=="") {
    	

?>

<th> MIDDLE NAME</th>
<?php

    }   ?>
    
    <th> PHONE</th>
    <th>EMAIL</th>
    <th>CNIC</th>
    <th>GENDER</th>
    <th>COUNTRY</th>
    <th>POLICIES</th>
    <th>ABOUT USER</th>

</tr>
<tr style="background-color: gray;color: white;">
	
 <td align="center"><?php echo $firstname ?></td>
<td align="center"><?php echo $Lastname ?></td>
<?php 
 if (!$middlename=="") {

?>

<td align="center"> <?php echo $middlename ?></td>
<?php


 	
 }

// echo $middlename 



?>
<td align="center"><?php echo $phone ?></td>
 <td align="center"><?php echo $email;?></td>
  <td align="center"><?php echo $cnic ?></td>
   <td align="center"><?php echo $gender ?></td>
  <td align="center"><?php echo $country ?></td>
  
  <td align="center"><?php 

for($i=0; isset($policies[$i]); $i++){

	echo $policies[$i]."</br>";
}


   ?></td>

   <td align="center"><?php echo $textarea ?></td>

</tr>



</table>
</center>

</body>
</html>