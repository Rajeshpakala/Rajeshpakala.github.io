


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	
<style type="text/css">
#chinna{
	border: 2px solid;
	
}

tr
{  background-color: cyan;
	
}

</style>
 </head>
 <body>

 <?php 


echo "using html in php\n";

 echo "print post variables from client\n";

echo $_POST['username']."<br>";
echo $_POST['password']."<br>";

echo $_POST['password']."<br>";
echo $_POST['retypepassword']."<br>";
echo $_POST['mobile']."<br>";
echo $_POST['gender']."<br>";

 echo "print post variables from client  and concatenating ( dot operator)  html code\n";

echo "<b>".$_POST['username']."</b><br>";



 ?>

<h1> using php in html </h1>
 <table id="chinna">
	<thead width="500px"height="400">
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Mobile</th>
		</tr>

</thead>
<tbody>
	<tr>
		<td><?php echo $_POST['username'] ?></td>
<td>19</td>
	<td><?php echo $_POST['mobile'] ?></td>	
	</tr>



</tbody>





</table>
 
 </body>
 </html>

