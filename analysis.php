<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>NSU Course Analysis System</title>
	<link rel="stylesheet" type="text/css" href="style1.css" /> 
</head>

<body>
	<div id="header">
		<h1>NORTH SOUTH UNIVERSITY</h1>
		<h2>COURSE ANALYSIS SYSTEM</h2>
	</div><!--header-->


	<div id="page-wrap">
		<h1 class="header">Welcome To Course Analysis System For  Department Of Electrical & Computer Engineering</h1>

			<h4 class="header">BS in Computer Science & Engineering (CSE)</h4>

		<div id="core">
			<h3>Core Courses (93 Credits)</h3>
			<table>
				<FORM METHOD="POST" ACTION="">
				
				  <tr>
					  	<th>Course</th>
					  	<th>Grade</th>
					  	<th>Grade Point</th>
					  	<th>Submit</th>
					  	<th>Total Grade Points</th>
				   </tr>
				  
				  <tr>
				     <td>CSE 115</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="gradep" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
					    
					    <?
					    	if(isset($_POST['B1'])){

					    		$grade=$_POST['gradep'];
					    		$gp=$grade*3;  
					    	}
					    ?>
					    <TD>Total : <?echo $gp ;?></TD>
					    
				  </tr>

				  <tr>
				     <td>CSE 115L</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 135</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 135L</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 173</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 225</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 225L</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				   <tr>
				     <td>CSE 373</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>


				  <tr>
				     <td>CSE 257</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 231</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 232</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>


				  <tr>
				     <td>CSE 323</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 331</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				   <tr>
				     <td>CSE 326</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>
				  <tr>
				     <td>CSE 327</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 311</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>		 

				  <tr>
				     <td>CSE 338</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 482</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 243</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 253</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				

				  <tr>
				     <td>CSE 283</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>	

				  <tr>
				     <td>CSE 351</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 353</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				 
				  <tr>
				     <td>CEG 413</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  

				  <tr>
				     <td>CSE 499A</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>CSE 499B</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>MAT 120</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>MAT 130</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>MAT 240</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>MAT 250</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>MAT 350</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>MAT 361</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>

				  <tr>
				     <td>PHY 107</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>
				
				<tr>
				     <td>PHY 108</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>
				
				<tr>
				     <td>CHE 101</td>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
				  </tr>
				
				
				</FORM>
			</table>
		</div><!--core-->
	
			<div class="clear"></div>
				

		<div id="open-elective">

			<h3>Open Elective(9 Credits) & Elective Courses(12 Credits)</h3>
			<table>
				<FORM METHOD="POST" ACTION="">
					  <tr>
					  	<th>Course</th>
					  	<th>Grade</th>
					  	<th>Credit Hour</th>
					  	<th>GPA</th>
					  	<th>Grade Points</th>
					   </tr>
		
					   <tr>
					     <TD><INPUT TYPE="TEXT" NAME="course" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
					  </tr>

					   <tr>
					     <TD><INPUT TYPE="TEXT" NAME="course" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
					  </tr>

					   <tr>
					     <TD><INPUT TYPE="TEXT" NAME="course" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
					  </tr>

					   <tr>
					     <TD><INPUT TYPE="TEXT" NAME="course" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
					  </tr>

					   <tr>
					     <TD><INPUT TYPE="TEXT" NAME="course" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
					  </tr>

					   <tr>
					     <TD><INPUT TYPE="TEXT" NAME="course" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
					  </tr>

					   <tr>
					     <TD><INPUT TYPE="TEXT" NAME="course" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="grade" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Credit Hour" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="GPA" SIZE="6"></TD>
					    <TD><INPUT TYPE="TEXT" NAME="Grade Points" SIZE="6"></TD>
					    <TD><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></TD>
					  </tr>
					
					</FORM>
			</table>

		</div><!--open-elective-->




		

		<div id="footer"></div><!--footer-->

	</div><!--page-wrap-->



</body>

</html>
