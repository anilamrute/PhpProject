
<?php
if(isset($_POST["name"])){

$servername="localhost";
$username="root";
$password="";
$database="phpass";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("failed toconnect".mysql_connect_error());
}else{
    echo"connection scuess";
}
// if(isset($_POST["name"],$_POST["Category"],$_POST["Image"],$_POST["Description"],$_POST["expectancy"])){
// $name=$_POST["name"];
// $Category=$_POST["Category"];
// $Image=$_POST["Image"];
// $Description=$_POST["Description"];
// $expectancy=$_POST["expectancy"];
// }

$name=$_POST["name"];
$Category=$_POST["Category"];
$Image=$_POST["Image"];
$Description=$_POST["Description"];
$expectancy=$_POST["expectancy"];



$sql="INSERT INTO `animalinformation`(`Name`, `Category`, `Description`, `Image`, `expectancy`) VALUES ('$name','$Category','$Image','$Description','$expectancy')";
echo $sql;

if(mysqli_query($conn, $sql)){
    echo"sucess";
}else{
    echo"eror".mysqli_error($conn);
}



mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="Style.css">
<div id="stylized" class="myform">
<body>
	<form action="index.php" method="POST">
		<p>Name of the animal</p> <input type="text" name="name">
		<p>Category</p>
<select name="Category" size="1">
<option value="herbivores,">herbivores</option>
<option value="omnivores">omnivores</option>
<option value="carnivores">carnivores</option>
</select><br />
<br />
<p>Image</p>
<input type="file" id="myFile" name="Image"><br /><br />

<p>Description:</p><textarea name="Description" rows="6" cols="25"></textarea><br />
<input type="reset" value="Clear">

<p>expectancy</p>
<select name="expectancy" size="1">
<option value="0-1 year">0-1 year</option>
<option value="1-5 years">1- years,</option>
<option value="5-10 years">5-10 years</option>
<option value="10+ years">10+ years</option>
</select><br />
<br />
<label id="ebcaptchatext"></label>
<input type="text" class="textbox" id="ebcaptchainput"/>
<button type="submit">Submit</button><br /><br />

<button type="submit">Submit</button><br /><br />
	</form>
</body>

</html>



