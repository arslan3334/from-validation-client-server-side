<!DOCTYPE html>
<html>
<head>
	<title> CLIENT SIDE FORM </title>

	<style type="text/css">
		
span{
	color: red;
}
 li{

  list-style: none;
  color: red;
 }

	</style>
</head>
<body>
<center>

  <h1 style="background-color: red; color: white;"> REGISTER YOUR ACCOUNT HERE</h1>
	
<fieldset style="background-color: yellow;">
	<legend> Client Registeration Form</legend>


	<h1 style="color: red;"> FILEDS WITH (*) SIGN ARE MANDATORY</h1>
<form action="formdata.php" method="POST">
  <p style="color: red;"><?php echo$_REQUEST['msg']??''; ?></p>
  <br>
<br>
<br>
Firstname <span>*</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="firstname" value="" type="text" name="firstname"  placeholder="Enter firstname"> <span id="enterfirstname" style="display: none;"> PLEASE ENTER FIRST NAME IT IS REQUIRED</span>

 <span id="enterfirstname1" style="display:none;"> write first name like => Arsal</span>

	<br>
	<br>
    Middlename &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="middlename" value="" type="text" name="middlename" placeholder="Enter Middlename">  <span id="entermiddlename1" style="display: none;">  write middle name like => Jhonremy</span>
    <br>
    <br>
    Lastname<span>*</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input value="" id="lastname" type="text" name="Lastname" placeholder="Enter Lastname">  <span id="enterlastname" style="display: none;"> PLEASE ENTER LAST NAME IT IS REQUIRED</span>

    <span id="enterlastname1" style="display: none;"> write last name like => Ahmed </span>
      <br>
    <br>
    Email <span>*</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id="email" type="text" name="email"  placeholder="Enter Email"> <span id="enteremail" style="display: none;"> PLEASE ENTER FIRST NAME IT IS REQUIRED</span>

     <span id="enteremail1" style="display: none;"> write email like => arsal123@gmail.com </span>
       <br>
    <br>
   phone <span>*</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id="phone" type="text" name="phone"  placeholder="Enter Mobile num"> <span id="entermobilenum" style="display: none;"> PLEASE ENTER MOBILE NUM IT IS REQUIRED</span>

   <span id="entermobilenum1" style="display: none;"> write mobile num like => 92312-030130-9 </span>
       <br>
    <br>
  <p>GENDER<span>*</span></p>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Male
  <input id="male" class="gender1" type="radio" value="male" name="gender">
     Female<input id="female" class="gender1" type="radio" value="female" name="gender"> <span id="entergender" style="display: none;"> PLEASE SELECT GENDER IT IS REQUIRED</span>

      <br>
      <br>
     CNIC# <span>*</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id="cnic" type="text" name="cnic"  placeholder="Enter Cnic Num"> <span id="entercnic" style="display: none;"> PLEASE ENTER CNIC IT IS REQUIRED</span>

     <span id="entercnic1" style="display: none;"> write cnic like => 41504-0549919-5</span>
       <br>
    <br>

 ABOUT YOU <span>*</span>
  <br> <textarea id="textarea" name="textarea"></textarea>
<span id="entertextarea" style="display: none;"> PLEASE ENTER SOME THING ABOUT YOU IT IS REQUIRED</span>

     <br>
    <br>
    
    COUNTRY<span>*</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

    <select id="country"name="country">
      	<option value="">--SELECT COUNTRY--</option>
        <option value="India">India</option>
        <option value="PKISTAN">PKISTAN</option>
        <option value="CHINA">CHINA</option>
      </select>

      <span id="entercountry" style="display: none;"> PLEASE ENTER COUNTRY IT IS REQUIRED</span>
<br>
    <br>
    <p> POLICIIES<span>*</span></p>
      Attendence<input id="POLICIIES" class="POLICIIES" value="Attndence" type="checkbox" name="policies[]">
       Assignment<input id="POLICIIES" class="POLICIIES" value="Assignment" type="checkbox" name="policies[]">
        Discipline<input id="POLICIIES" class="POLICIIES" value="Discipline" type="checkbox" name="policies[]">
         Punctuality<input id="POLICIIES" class="POLICIIES" value="punctuality" type="checkbox" name="policies[]"> <span id="policy" style="display: none;"> CHECK ALL PROPERTIES  IT IS REQUIRED</span>
<br>
<br>

<input type="submit" onclick="return validate1()" name="Registeration" value="Register">

</fieldset>
</form>

</center>

<script type="text/javascript">


	
function validate1() {
 var flag=true;

 var textarea = document.getElementById('textarea').value

var alpha_pattern=/^[A-Z]{1}[a-z]{2,}$/;//Arsal
 var email_pattern=/^[a-z]{3,}[0-9]{2,}[@][a-z]{3,}[.][a-z]{3,}$/  //arsal123@gmail.com

var phone_num_pattern=/^[0-9]{2}[0-9]{3}-[0-9]{6}-[0-9]{1}$/  //92312-030130-9
 

 var cnic_pattern=/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/    //41504-0549919-5
	
 var firstname=document.getElementById('firstname').value
var middlename=document.getElementById('middlename').value
var Lastname=document.getElementById('lastname').value

var email=document.getElementById('email').value

var phone=document.getElementById('phone').value

var cnic=document.getElementById('cnic').value
  
var country=document.getElementById('country').value
 var male= document.getElementById('male')
var female= document.getElementById('female')

var policies=document.getElementsByClassName('POLICIIES')
var gender= null
 if(male.checked) gender=male.value;
  if(female.checked) gender=female.value;


if (firstname=="") {
	  flag=false

	document.getElementById("enterfirstname").style.display="block";
}
else{

	 
if (alpha_pattern.test(firstname)) {

document.getElementById("enterfirstname").style.display="none";

document.getElementById("enterfirstname1").style.display="none";
}

else{

flag=false
document.getElementById("enterfirstname1").style.display="block";
}

}



if (!middlename=="") {

if (!alpha_pattern.test(middlename)) {
 flag=false

  document.getElementById("entermiddlename1").style.display="block";
}

else{
document.getElementById("entermiddlename1").style.display="none";


}

}




 // if(country==""){
 //  flag=false;
 //   document.getElementById("entercountry").style.display="block";

 //  }else {
    
 //    document.getElementById("entercountry").style.display="none";
 //  }

if (country === "") {
  flag = false;
  document.getElementById("entercountry").style.display = "block";
} else {
 
  document.getElementById("entercountry").style.display = "none";
}

if (textarea === "") {
  flag = false;
  document.getElementById("entertextarea").style.display = "block";
} else {
 
  document.getElementById("entertextarea").style.display = "none";
}







// if (!middlename=="") {

//  if () {}

//   document.getElementById("entermiddlename1").style.display="block";
// }

// else{

// if (alpha_pattern.test(middlename)) {
  
// document.getElementById("entermiddlename1").style.display="none";

// }
// else{
//   flag=false
// document.getElementById("entermiddlename1").style.display="block";


// }


// }




if (Lastname=="") {
    flag=false

  document.getElementById("enterlastname").style.display="block";
}
else{

   
if (alpha_pattern.test(Lastname)) {

document.getElementById("enterlastname").style.display="none";

document.getElementById("enterlastname1").style.display="none";
}

else{

flag=false
document.getElementById("enterlastname1").style.display="block";
}

}


if (email=="") {
    flag=false

  document.getElementById("enteremail").style.display="block";
}
else{

   
if (email_pattern.test(email)) {

document.getElementById("enteremail").style.display="none";

document.getElementById("enteremail1").style.display="none";
}

else{

flag=false
document.getElementById("enteremail1").style.display="block";
}

}


if (phone=="") {
    flag=false

  document.getElementById("entermobilenum").style.display="block";
}
else{

   
if (phone_num_pattern.test(phone)) {

document.getElementById("entermobilenum").style.display="none";

document.getElementById("entermobilenum1").style.display="none";
}

else{

flag=false
document.getElementById("entermobilenum1").style.display="block";
}

}

if (cnic=="") {
    flag=false

  document.getElementById("entercnic").style.display="block";
}
else{

   
if (cnic_pattern.test(cnic)) {

document.getElementById("entercnic").style.display="none";

document.getElementById("entercnic1").style.display="none";
}

else{

flag=false
document.getElementById("entercnic1").style.display="block";
}

}


if (!gender) {
  flag=false
document.getElementById("entergender").style.display="block";

}
else{

if (gender) {
  document.getElementById("entergender").style.display="none";
}
  
}


for(i=0; i<policies.length; i++){



if (policies[i].checked==false) {

flag=false
document.getElementById("policy").style.display="block";

}
else{
document.getElementById("policy").style.display="none";
}

}


if(flag) {return true;}

  else {return false};
}






</script>

</body>
</html>