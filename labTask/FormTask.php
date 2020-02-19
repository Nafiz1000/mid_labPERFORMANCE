<!DOCTYPE html>
<html>
<head>
</head>
<body>


	<form method="POST" action="check.php">
	
		
	<table border="1" width="100%" height="300%" align="center">
		<tr>
			<td colspan="5">
				<h2><center><STRONG>PERSON PROFILE</STRONG></center></h2>
			</td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="uname" value="" ></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td> <input type="text" name="email" value=""></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
		</tr>
		
		<tr>
			<td>DOB:</td>
			<td><input type="date" name="" value=""/></td>
		</tr>
		
		<tr>
			<td>Degree:</td>
			<td>
				<input type="checkbox" name="degree">SSE
				<input type="checkbox" name="degree">HSE
				<input type="checkbox" name="degree">BSC
			</td>
		</tr>
		<tr>
			<td>BG:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td> Photo: </td>
			<td>
				<input type="file" name="">
			</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="5" align="right">
				<input type="submit" name="" value="Submit">
				<input type="reset" name="" value="Reset">
			</td>
		</tr>
	</table>
	
	
	</form>
</body>
</html>