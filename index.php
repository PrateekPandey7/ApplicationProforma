<?php include "main.php" ?>

<html lang="en">
	  
	<head>
	    
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	    <link rel="icon" href="npc.jpg">
	   	<link href="css/style.css" rel="stylesheet">
	   	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">


	    <title>Empanelment</title>

	</head>
  
	<body>

		<div class = "mainHeading">
			<img src = "npc.jpg">
			<p class = "heading1"><strong>National Productivity Council</strong><p>
			<p class = "subh1">(Under Department of Industrial Policy & Promotion, Ministry of Commerce & Industry, Govt. of India)</p>
			<strong><p class = "heading2">APPLICATION PROFORMA FOR EMPANELMENT OF CONSULTANTS, EXPERTS & TRAINERS</p></strong>
			</br>
      </br>
			
		</div>

		<?php echo $error ?>
		<!--<div id="download"><p>Next</p></div>-->
		<div class = "container">

			<form method = "post" enctype="multipart/form-data">
				
				<fieldset>
					<p>All fields marked with <span style="color:red">  *</span> are compulsory</p>
					<div class = "personal">
						<div class = "h"><label><h3>PERSONAL DETAILS</h3></label></div>
							<table id = "personaldetails">
								<tr>
									<th>Name<span style="color:red">  *</span></th>
									<td><input id = "name" name = "name" onkeyup="myname(this.value)" required></input></td>
								</tr>
								<tr>
									<th>Father's Name<span style="color:red">  *</span></th>
									<td><input id = "fname" name = "fname" onkeyup="myfname(this.value)" required></input></td>
								</tr>
								<tr>
									<th>Date of Birth<span style="color:red">  *</span></th>
									<td><input id = "datePickerId" type = "date" name = "dob" required></input></td>
								</tr>
								<tr>
									<th>Gender<span style="color:red">  *</span></th>
									<td><select id = "gender" name = "gender"><option value = "Male">Male</option><option value = "Female">Female</option><option value = "Others">Others</option></select></td>
								</tr>
								<tr>
									<th>Nationality<span style="color:red">  *</span></th>
									<td><input id = "nationality" name = "nationality" required></input></td>
								</tr>
								<tr>
									<th>Address</th>
									<td><textarea name = "address" placeholder = "Street Address, Apartment/Building"></textarea></td>
								</tr>
								<tr>
									<th>City<span style="color:red">  *</span></th>
									<td><input name = "city" required></input></td>
								</tr>
								<tr>
									<th>State<span style="color:red">  *</span></th>
									<td><input name = "state" required></input></td>
								</tr>
								<tr>
									<th>Pin Code<span style="color:red">  *</span></th>
									<td><input name = "pincode" required></input></td>
								</tr>
								<tr>
									<th>Contact Number</th>
									<td><input name = "contact"></input></td>
								</tr>
								<tr>
									<th>Email<span style="color:red">  *</span></th>
									<td><input type = "email" name = "email" required></input></td>
								</tr>
								<tr>
									<th>Mobile Number<span style="color:red">  *</span></th>
									<td><input name = "mobile" maxlength="10" minlength="10" required></input></td>
								</tr>
								<tr>
									<th>Photo<span style="color:red">  *</span></th>
								<td><input type="file" name = "PhotoToUpload" id = "PhotoToUpload" accept="image/*" onChange="readURL(this);" required></input></td>
		            		</table>
	          		</div>
          		</fieldset>

          		<fieldset>
	          		<div class = "educational">
	          			<div class = "h"><label><h3>EDUCATIONAL QUALIFICATION</h3></label></div>
	          			<table id = "educationalqualification">
	          				<thead>
			                  <th>Qualification</th>
			                  <th width = "4">Year</th>
			                  <th>Institution</th>
			                  <th>Marks Obtained(in % / CGPA)</th>
			                  <th>Remarks</th>
			                </thead>
			                <tbody>
			                  <tr id = "et1" name = "et1">
			                    <td><input name = "et11" placeholder = "High School*" required></input></td>
			                    <td><input name = "et12" size = "8" required></input></td>
			                    <td><input name = "et13" size = "36" required></input></td>
			                    <td><input name = "et14" size = "27" required></input></td>
			                    <td><input name = "et15" size = "17"></input></td>
			                  <tr>
			                  <tr id = "et2" name = "et2">
			                    <td><input name = "et21" placeholder = "Senior Secondary School*" required></input></td>
			                    <td><input name = "et22" size = "8" required></input></td>
			                    <td><input name = "et23" size = "36" required></input></td>
			                    <td><input name = "et24" size = "27" required></input></td>
			                    <td><input name = "et25" size = "17"></input></td>
			                   <tr>
			                  <tr id = "et3" name = "et3">
			                    <td><input name = "et31" placeholder = "Under Graduation*" required></input></td>
			                    <td><input name = "et32" size = "8" required></input></td>
			                    <td><input name = "et33" size = "36" required></input></td>
			                    <td><input name = "et34" size = "27" required></input></td>
			                    <td><input name = "et35" size = "17"></input></td>
			                  <tr>
			                  <tr id = "et4" name = "et4">
			                    <td><input name = "et41"  placeholder = "Post Graduation"</input></td>
			                    <td><input name = "et42" size = "8"></input></td>
			                    <td><input name = "et43" size = "36"></input></td>
			                    <td><input name = "et44" size = "27" ></input></td>
			                    <td><input name = "et45" size = "17"></input></td>
			                  <tr>
			                  <tr id = "et5" name = "et5">
			                    <td><input name = "et51" placeholder = "Other Degree"></input></td>
			                    <td><input name = "et52" size = "8"></input></td>
			                    <td><input name = "et53" size = "36"></input></td>
			                    <td><input name = "et54" size = "27" ></input></td>
			                    <td><input name = "et55" size = "17"></input></td>
			                  <tr>
			                </tbody>
			            </table>
			            <span style="color:red">  *</span> If you want to add more information you may add in the same order in "Any Other Information" field below
			        </div>
		        </fieldset>

		        <fieldset>
			        <div class = "computer">
			        	<div class = "h"><label><h3>COMPUTER PROFICIENCY</h3></label></div>
			        	<div class = "skilldiv"><h3></h3></div><input type = "textarea" id = "skill" name = "computer" placeholder = "Name of Degree/ Diploma/ Certificate & name of Institute"></input>
			        </div>
		        </fieldset>

		        <fieldset>
			        <div class = "keyskill">
			        	<div class = "h"><label><h3>KEY SKILLS</h3></label></div>
			        	<div class = "skilldiv"><h3>Skill Type:<span style="color:red">  *</span></h3></div><input type = "text" id = "skill" name = "skill" required placeholder = "Ex. Lean Management, 5s, Six Sigma, Energy Audit"></input>
			        </div>
		        </fieldset>

		        <fieldset>
			        <div class = "previous">
	          			<div class = "h"><label><h3>WORK EXPERIENCE</h3></label></div>
	          			<table id = "previousexperience">
	          				<thead>
			                  <th width = "4">S.No.</th>
			                  <th>Designation</th>
			                  <th>Organization</th>
			                  <th>Period ( From )</th>
			                  <th>Period ( To )</th>
			                  <th>Salary/month</th>
			                </thead>
			                <tbody>
			                  <tr id = "pet1" name = "pet1">
			                    <td><input name = "pet11" size = "4" required></input></td>
			                    <td><input name = "pet12" size = "24" required></input></td>
			                    <td><input name = "pet13" size = "24" required></input></td>
			                    <td><input id = "datePickerId1" type = "date" name = "pet14" size = "20" required></input></td>
			                    <td><input id = "datePickerId11" type = "date" name = "pet15" size = "20" required></input></td>
			                    <td><input name = "pet16" size = "24"></input></td>
			                  <tr>
			                  <tr id = "pet2" name = "pet2">
			                    <td><input name = "pet21" size = "4"></input></td>
			                    <td><input name = "pet22" size = "24"></input></td>
			                    <td><input name = "pet23" size = "24"></input></td>
			                    <td><input id = "datePickerId2" type = "date" name = "pet24" size = "20"></input></td>
			                    <td><input id = "datePickerId21" type = "date" name = "pet25" size = "20"></input></td>
			                    <td><input name = "pet26" size = "24"></input></td>
			                   <tr>
			                  <tr id = "pet3" name = "pet3">
			                    <td><input name = "pet31" size = "4"></input></td>
			                    <td><input name = "pet32" size = "24"></input></td>
			                    <td><input name = "pet33" size = "24"></input></td>
			                    <td><input id = "datePickerId3" type = "date" name = "pet34" size = "20"></input></td>
			                    <td><input id = "datePickerId31" type = "date" name = "pet35" size = "20"></input></td>
			                    <td><input name = "pet36" size = "24"></input></td>
			                  <tr>
			                  <tr id = "pet4" name = "pet4">
			                    <td><input name = "pet41" size = "4"></input></td>
			                    <td><input name = "pet42" size = "24"></input></td>
			                    <td><input name = "pet43" size = "24"></input></td>
			                    <td><input id = "datePickerId4" type = "date" name = "pet44" size = "20"></input></td>
			                    <td><input id = "datePickerId41" type = "date" name = "pet45" size = "20"></input></td>
			                    <td><input name = "pet46" size = "24"></input></td>
			                  <tr>
			                  <tr id = "pet5" name = "pet5">
			                    <td><input name = "pet51" size = "4"></input></td>
			                    <td><input name = "pet52" size = "24"></input></td>
			                    <td><input name = "pet53" size = "24"></input></td>
			                    <td><input id = "datePickerId5" type = "date" name = "pet54" size = "20"></input></td>
			                    <td><input id = "datePickerId51" type = "date" name = "pet55" size = "20"></input></td>
			                    <td><input name = "pet56" size = "24"></input></td>
			                  <tr>
			                </tbody>
			            </table>
			            <span style="color:red">  *</span> If you want to add more information you may add in the same order in "Any Other Information" field below
			        </div>
		        </fieldset>
		        
		        <fieldset>
			        <div class = "publications">
	          			<div class = "h"><label><h3>PUBLICATIONS</h3></label></div>
	          			<table id = "publications">
	          				<thead>
			                  <th width = "4">S.No.</th>
			                  <th>Name of Research Article/Paper</th>
			                  <th>Details of Publication</th>
			                  <th>ISSN No./UGC No.</th>
			                  <th>Impact Factor of Publications</th>
			                </thead>
			                <tbody>
			                  <tr id = "pt1" name = "pt1">
			                    <td><input name = "pt11" size = "4"></input></td>
			                    <td><input name = "pt12" size = "40"></input></td>
			                    <td><input name = "pt13" size = "27"></input></td>
			                    <td><input name = "pt14" size = "27"></input></td>
			                    <td><input name = "pt15" size = "17"></input></td>
			                  <tr>
			                  <tr id = "pt2" name = "pt2">
			                    <td><input name = "pt21" size = "4"></input></td>
			                    <td><input name = "pt22" size = "40"></input></td>
			                    <td><input name = "pt23" size = "27"></input></td>
			                    <td><input name = "pt24" size = "27"></input></td>
			                    <td><input name = "pt25" size = "17"></input></td>
			                  <tr>
			                  <tr id = "pt3" name = "pt3">
			                    <td><input name = "pt31" size = "4"></input></td>
			                    <td><input name = "pt32" size = "40"></input></td>
			                    <td><input name = "pt33" size = "27"></input></td>
			                    <td><input name = "pt34" size = "27"></input></td>
			                    <td><input name = "pt35" size = "17"></input></td>
			                  <tr>
			                  <tr id = "pt4" name = "pt4">
			                    <td><input name = "pt41" size = "4"></input></td>
			                    <td><input name = "pt42" size = "40"></input></td>
			                    <td><input name = "pt43" size = "27"></input></td>
			                    <td><input name = "pt44" size = "27"></input></td>
			                   	<td><input name = "pt45" size = "17"></input></td>
			                  <tr>
			                  <tr id = "pt5" name = "pt5">
			                    <td><input name = "pt51" size = "4"></input></td>
			                    <td><input name = "pt52" size = "40"></input></td>
			                    <td><input name = "pt53" size = "27"></input></td>
			                    <td><input name = "pt54" size = "27"></input></td>
			                    <td><input name = "pt55" size = "17"></input></td>
			                  <tr>
			                </tbody>
			            </table>
			            <span style="color:red">  *</span> If you want to add more information you may add in the same order in "Any Other Information" field below
			        </div>
		        </fieldset>

		        
		        <fieldset>
			        <div class = "divison">
			        	<div class = "h"><label><h3>ANY OTHER INFORMATION WITH RESPECT TO WORK EXPERIENCE AND PUBLICATIONS </h3></label></div><input type = "textarea" id = "skill" name = "details"></input>
			        	<div class = "hh"><label><h3>SELECT THE DISCIPLINE INTERESTED TO WORK IN <span style="color:red">  *</span><br>(Choose any three in order of preference):</h3></label></div>
			        	<div class = "divisiondetails">
				        	<table class = "personaldetails">
				        		<tr>
									<th>Choice No. 1<span style="color:red">  *</span></th>
									<td><select id = "div1" name = "div1" required>
										<option disabled selected>Select the discipline</option>
										<option value = "Agri-Business Services">Agri-Business Services</option>
										<option value = "Economics Services">Economics Services</option>
										<option value = "Energy Management">Energy Management</option>
										<option value = "Environment Management">Environment Management</option>
										<option value = "Finance">Finance</option>
										<option value = "HR, Employee Development and Legal">HR, Employee Development & Legal</option>
										<option value = "Human Resource Management">Human Resource Management</option>
										<option value = "Industrial Engineering">Industrial Engineering</option>
										<option value = "Information Technology">Information Technology</option>
										<option value = "Productivity Awareness">Productivity Awareness</option>
										<option value = "Technology Management">Technology Management</option>
										<option value = "Training Services">Training Services</option>
										</select></td>
								</tr>
								<tr>
									<th>Choice No. 2</th>
									<td><select id = "div2" name = "div2">
										<option disabled selected>Select the discipline</option>
										<option value = "Agri-Business Services">Agri-Business Services</option>
										<option value = "Economics Services">Economics Services</option>
										<option value = "Energy Management">Energy Management</option>
										<option value = "Environment Management">Environment Management</option>
										<option value = "Finance">Finance</option>
										<option value = "HR, Employee Development and Legal">HR, Employee Development & Legal</option>
										<option value = "Human Resource Management">Human Resource Management</option>
										<option value = "Industrial Engineering">Industrial Engineering</option>
										<option value = "Information Technology">Information Technology</option>
										<option value = "Productivity Awareness">Productivity Awareness</option>
										<option value = "Technology Management">Technology Management</option>
										<option value = "Training Services">Training Services</option>
										</select></td>
								</tr>
								<tr>
									<th>Choice No. 3</th>
									<td><select id = "div3" name = "div3">
										<option disabled selected>Select the discipline</option>
										<option value = "Agri-Business Services">Agri-Business Services</option>
										<option value = "Economics Services">Economics Services</option>
										<option value = "Energy Management">Energy Management</option>
										<option value = "Environment Management">Environment Management</option>
										<option value = "Finance">Finance</option>
										<option value = "HR, Employee Development and Legal">HR, Employee Development & Legal</option>
										<option value = "Human Resource Management">Human Resource Management</option>
										<option value = "Industrial Engineering">Industrial Engineering</option>
										<option value = "Information Technology">Information Technology</option>
										<option value = "Productivity Awareness">Productivity Awareness</option>
										<option value = "Technology Management">Technology Management</option>
										<option value = "Training Services">Training Services</option>
										</select></td>
								</tr>
				      		</table>
			        	</div>
			    </br>
			        <div class = "location">
			        	<div>
			        	</br></br>
			        	</div>
			        	<div class = "hh"><label><h3>SELECT THE LOCATION INTERESTED TO WORK AT <span style="color:red">  *</span><br>(Choose any three in order of preference. Please note, your interview/selection would be conducted as per your indicated preference):</h3>
			        	</label>
			     		</div>
			        	<div class = "locationdetails">
				        	<table class = "personaldetails">
				        		<tr>
									<th>Choice No. 1<span style="color:red">  *</span></th>
									<td><select id = "loc1" name = "loc1" required>
										<option disabled selected>Select the location</option>
										<option value = "Bengaluru">Bengaluru</option>
										<option value = "Bhubaneswar">Bhubaneswar</option>
										<option value = "Chandigarh">Chandigarh</option>
										<option value = "Chennai">Chennai</option>
										<option value = "Delhi">Delhi</option>
										<option value = "Gandhinagar">Gandhinagar</option>
										<option value = "Guwahati">Guwahati</option>
										<option value = "Hyderabad">Hyderabad</option>
										<option value = "Jaipur">Jaipur</option>
										<option value = "Kanpur">Kanpur</option>
										<option value = "Kolkata">Kolkata</option>
										<option value = "Mumbai">Mumbai</option>
										<option value = "Patna">Patna</option>
										</select></td>
								</tr>
								<tr>
									<th>Choice No. 2</th>
									<td><select id = "loc2" name = "loc2">
										<option disabled selected>Select the location</option>
										<option value = "Bengaluru">Bengaluru</option>
										<option value = "Bhubaneswar">Bhubaneswar</option>
										<option value = "Chandigarh">Chandigarh</option>
										<option value = "Chennai">Chennai</option>
										<option value = "Delhi">Delhi</option>
										<option value = "Gandhinagar">Gandhinagar</option>
										<option value = "Guwahati">Guwahati</option>
										<option value = "Hyderabad">Hyderabad</option>
										<option value = "Jaipur">Jaipur</option>
										<option value = "Kanpur">Kanpur</option>
										<option value = "Kolkata">Kolkata</option>
										<option value = "Mumbai">Mumbai</option>
										<option value = "Patna">Patna</option>
										</select></td>
								</tr>
								<tr>
									<th>Choice No. 3</th>
									<td><select id = "loc3" name = "loc3">
										<option disabled selected>Select the location</option>
										<option value = "Bengaluru">Bengaluru</option>
										<option value = "Bhubaneswar">Bhubaneswar</option>
										<option value = "Chandigarh">Chandigarh</option>
										<option value = "Chennai">Chennai</option>
										<option value = "Delhi">Delhi</option>
										<option value = "Gandhinagar">Gandhinagar</option>
										<option value = "Guwahati">Guwahati</option>
										<option value = "Hyderabad">Hyderabad</option>
										<option value = "Jaipur">Jaipur</option>
										<option value = "Kanpur">Kanpur</option>
										<option value = "Kolkata">Kolkata</option>
										<option value = "Mumbai">Mumbai</option>
										<option value = "Patna">Patna</option>
										</select></td>
								</tr>							
				      		</table>
			        	</div>
			        </div>
		        </fieldset>
		     <center><div id="tc"><p>Next</p></div></center>
		    <!--<fieldset>-->
				<div id = "terms" class = "terms">
					<div class = "t"><label><h3>TERMS & CONDITIONS</h3></label></div>
					<p class = "hangingindent">1. The Applicants fulfilling eligibility criteria may submit their complete details in the prescribed <strong>Online Application for Empanelment of Consultants, Experts & Trainers</strong> that is available on NPC website .</p>
					<p class = "hangingindent">2. Any incomplete application shall be summarily rejected.</p>
					<p class = "hangingindent">3. Any false statement in the application shall be taken extremely seriously and will liable applicant to rejection and legal action.</p>
					<p class = "hangingindent">4. No documents need to be attached to the application. Documents shall be verified at the time of interview, if required.</p>
					<p class = "hangingindent">5. This is <strong>NOT</strong> an offer for permanent employment in NPC and is purely a contractual engagement on project/program basis on mutually agreed terms and conditions.</p>
					<p class = "hangingindent">6. The engagement <strong>DOES NOT</strong> confirm any right to the engaged consultant/expert/trainer to any position or job in NPC or any other wing of the Government on any preference in employment after the tenure of engagement or anytime in future.</p>
					<p class = "hangingindent">7. NPC reserves its right <strong>NOT TO ENGAGE</strong> any consultant/expert/trainer in response to the advertisement and this is only an invitation to apply for engagement. NPC shall not be liable for any action taken by any person in response to this Rolling Advertisement.</p>
					<p class = "hangingindent">8. All the applications shall be screened for qualification and completeness. Complete applications shall be sorted and shortlisted for calling suitable candidates for interview. <strong>Not all applicants will be called for interview</strong>.</p>
					<p class = "hangingindent">9. Selection of the candidates shall be made on the basis of interviews taken by a selection committee. Only short listed candidates shall be invited for the interview.</p>
					<p class = "hangingindent2">10. The Applicant will be offered a contractual engagement on project/program basis as per availability and as per mutually agreed terms and conditions.</p>
					<p class = "hangingindent2">11. The selected candidate is expected to maintain highest standards of behaviour and show politeness in dealings with NPC or its clients's officials during or after the termination of the engagement with NPC.</p>
					<p class = "hangingindent2">12. The candidate will undertake & execute the assigned tasks with all sincerity and as per communicated timelines. The failure in commitments and duty by the candidate will be viewed seriously and his engagement/empanelment will be terminated and <strong>NO FURTHER PROJECT/PROGRAM ENGAGEMENTS WILL BE OFFERED</strong></p>
					<p class = "hangingindent2">13. After the culmination of tenure of project/program engagement, if the engaged consultant/expert/trainer is found to be involved in demeaning the brand/image of NPC, <strong>a legal action will be taken against him and he will be blacklisted from offering his services to NPC</strong> and it will be displayed on NPC website.</p>
					<p class = "hangingindent2">14. The candidate will carry his own laptop to undertake the assigned tasks whereas other facilities like internet, printing etc will be provided while working at NPC premises.</p>
					<p class = "hangingindent2">15. The applicants are advised to provide e-mail address for communication of interview call and selection & no communication will be made by post, the candidates are advised to regularly check the provided email as well as NPC website.</p>
					<p class = "hangingindent2">16. The candidate should be willing to work at any location as the projects or programs are based on client specific locations.</p> 

					<div class = "accept">
						</br>
						</br>
						<p class = "hangingindent1"><input type="checkbox" name="accept" value="accept" required>I <span id="myname"></span> <span id ="mygender"></span> of <span id="myfname"></span> hereby verify that the information provided by me above is true and correct and my application can be summarily rejected if it is found incorrect. I shall further be liable to other legal action. Further, I have read through the terms and conditions and understood them. I agree to these terms and conditions.<br></p>
						Date: &nbsp;&nbsp;&nbsp; <span id = "date"></span><br>
						Place: &nbsp;&nbsp;&nbsp; <input name = "place" required></input>
						<div class = "form-group button">
		            		<center><input type="submit" id = "submit" class = "btn btn-primary" name = "submit" value = "Submit"></center>
		          		</div>
					</div>
				</div>
			<!--</fieldset>-->
		</form>

	<div class="footer">
  		<p>Copyright &copy; 2018,
  		 National Productivity Council, All Rights Reserved</p>
 	</div>		

	</div>

	<script>
	function myname(val)
	{ 

    	document.getElementById("myname").innerHTML = val; 
    }

	function myfname(val)
	{ 

    	document.getElementById("myfname").innerHTML = val; 
    }
    function mygender(val)
    {
    	if(val == 'Male' || val == 'male')
    		document.getElementById("mygender").innerHTML = 'son';
    	if(val == 'Female' || val == 'female')
    		document.getElementById("mygender").innerHTML = "daughter";
    	if(val == 'Others')
    		document.getElementById("mygender").innerHTML = "son/daughter";
    }
    </script>
	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>

		datePickerId.max = new Date().toISOString().split("T")[0];
		datePickerId1.max = new Date().toISOString().split("T")[0];
		datePickerId2.max = new Date().toISOString().split("T")[0];
		datePickerId3.max = new Date().toISOString().split("T")[0];
		datePickerId4.max = new Date().toISOString().split("T")[0];
		datePickerId5.max = new Date().toISOString().split("T")[0];
		datePickerId11.max = new Date().toISOString().split("T")[0];
		datePickerId21.max = new Date().toISOString().split("T")[0];
		datePickerId31.max = new Date().toISOString().split("T")[0];
		datePickerId41.max = new Date().toISOString().split("T")[0];
		datePickerId51.max = new Date().toISOString().split("T")[0];

		$(document).ready(function()
		{
			var utc = new Date().toJSON().slice(0,10).replace(/-/g,'/');
			document.getElementById("date").innerHTML = utc;
    		$("#tc").click(function()
			{
				var l1 = document.getElementById("loc1").value;
				var l2 = document.getElementById("loc2").value;
				var l3 = document.getElementById("loc3").value;
				var d1 = document.getElementById("div1").value;
				var d2 = document.getElementById("div2").value;
				var d3 = document.getElementById("div3").value;
				if(((l1 == l2) && l1!='Select the location') || ((l1 == l3) && l1!='Select the location') || ((l2 == l3) && l2!='Select the location'))
					alert("Cannot choose duplicate Locations");
				else if(((d1 == d2) && d1!='Select the discipline') || ((d1 == d3) && d1!='Select the discipline') || ((d3 == d2) && d2!='Select the discipline'))
					alert("Cannot choose duplicate Discipline");
				else
				{
					$(".terms").show();
		        	mygender( document.getElementById("gender").value);
			   		$("#tc").hide();	
				}
				
	        			
			});
    	});
		$(document).ready(function()
		{
    		$(".t").click(function()
    		{
        		$(".terms").hide();
        		$("#tc").show();
    	});
		});

		$(function() {

		  $('#name').keydown(function (e) {
		  
		    if (e.ctrlKey || e.altKey) {
		    
		      e.preventDefault();
		      
		    } else {
		    
		      var key = e.keyCode;
		      
		      if (!((key == 8) || (key == 9) || (key == 190) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
		      
		        e.preventDefault();
		        
		      }

		    }
		    
		  });
		  
		});


		$(function() {

		  $('#fname').keydown(function (e) {
		  
		    if (e.ctrlKey || e.altKey) {
		    
		      e.preventDefault();
		      
		    } else {
		    
		      var key = e.keyCode;
		      
		      if (!((key == 8) || (key == 9) || (key == 190) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
		      
		        e.preventDefault();
		        
		      }

		    }
		    
		  });
		  
		});
</script>

	<script type = "text/javascript" src = "js/index.js"> </script>

	</body>

</html>