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
			<p class = "subh1">(Under Department of Industrial Policy & Promotion Ministry of Commerce & Industry, Govt. of India)</p>
			<strong><p class = "heading2">APPLICATION PROFORMA FOR EMPANELMENT OF CONSULTANTS, EXPERTS & TRAINERS</p></strong>
			
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
									<td><input type = "date" name = "dob" required></input></td>
								</tr>
								<tr>
									<th>Gender<span style="color:red">  *</span></th>
									<td><select id = "gender"><option value = "Male">Male</option><option value = "Female">Female</option><option value = "Others">Others</option></select></td>
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
									<td><input name = "contact" maxlength="10" minlength="10"></input></td>
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
			                  <th>Marks Obtained(in Percentage)</th>
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
			                    <td><input name = "et31" placeholder = "First Degree*" required></input></td>
			                    <td><input name = "et32" size = "8" required></input></td>
			                    <td><input name = "et33" size = "36" required></input></td>
			                    <td><input name = "et34" size = "27" required></input></td>
			                    <td><input name = "et35" size = "17"></input></td>
			                  <tr>
			                  <tr id = "et4" name = "et4">
			                    <td><input name = "et41"  placeholder = "Other Degree"</input></td>
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
			        	<div class = "h"><label><h3>KEY SKILL SET</h3></label></div>
			        	<div class = "skilldiv"><h3>Skill Names:<span style="color:red">  *</span></h3></div><input type = "text" id = "skill" name = "skill" required placeholder = "Ex. Lean Management, 5s, Six Sigma, Energy Audit"></input>
			        </div>
		        </fieldset>

		        <fieldset>
			        <div class = "previous">
	          			<div class = "h"><label><h3>PREVIOUS EXPERIENCE</h3></label></div>
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
			                    <td><input name = "pet11" size = "4" required placeholder = "1*"></input></td>
			                    <td><input name = "pet12" size = "24" required></input></td>
			                    <td><input name = "pet13" size = "24" required></input></td>
			                    <td><input type = "date" name = "pet14" size = "20" required></input></td>
			                    <td><input type = "date" name = "pet15" size = "20" required></input></td>
			                    <td><input name = "pet16" size = "24"></input></td>
			                  <tr>
			                  <tr id = "pet2" name = "pet2">
			                    <td><input name = "pet21" size = "4"></input></td>
			                    <td><input name = "pet22" size = "24"></input></td>
			                    <td><input name = "pet23" size = "24"></input></td>
			                    <td><input type = "date" name = "pet24" size = "20"></input></td>
			                    <td><input type = "date" name = "pet25" size = "20"></input></td>
			                    <td><input name = "pet26" size = "24"></input></td>
			                   <tr>
			                  <tr id = "pet3" name = "pet3">
			                    <td><input name = "pet31" size = "4"></input></td>
			                    <td><input name = "pet32" size = "24"></input></td>
			                    <td><input name = "pet33" size = "24"></input></td>
			                    <td><input type = "date" name = "pet34" size = "20"></input></td>
			                    <td><input type = "date" name = "pet35" size = "20"></input></td>
			                    <td><input name = "pet36" size = "24"></input></td>
			                  <tr>
			                  <tr id = "pet4" name = "pet4">
			                    <td><input name = "pet41" size = "4"></input></td>
			                    <td><input name = "pet42" size = "24"></input></td>
			                    <td><input name = "pet43" size = "24"></input></td>
			                    <td><input type = "date" name = "pet44" size = "20"></input></td>
			                    <td><input type = "date" name = "pet45" size = "20"></input></td>
			                    <td><input name = "pet46" size = "24"></input></td>
			                  <tr>
			                  <tr id = "pet5" name = "pet5">
			                    <td><input name = "pet51" size = "4"></input></td>
			                    <td><input name = "pet52" size = "24"></input></td>
			                    <td><input name = "pet53" size = "24"></input></td>
			                    <td><input type = "date" name = "pet54" size = "20"></input></td>
			                    <td><input type = "date" name = "pet55" size = "20"></input></td>
			                    <td><input name = "pet56" size = "24"></input></td>
			                  <tr>
			                </tbody>
			            </table>
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
			                  <th>Impact Factor</th>
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
			        </div>
		        </fieldset>

		        
		        <fieldset>
			        <div class = "divison">
			        	<div class = "h"><label><h3>ANY OTHER INFORMATION (Give Details) </h3></label></div><input type = "textarea" id = "skill" name = "details"></input>
			        	<div class = "h"><label><h3>SELECT THE DIVISON INTERESTED TO WORK WITH (Maximum 3) <span style="color:red">  *</span></h3></label></div>
			        	<div class = "fr1">
			        		<input type="checkbox" class = "sc" name="check_list[]" value="Agribusiness Division">Agribusiness Division<br/>
							<input type="checkbox" class = "sc" name="check_list[]" value="Energy Management">Energy Management<br/>
			        		<input type="checkbox" class = "sc" name="check_list[]" value="Human Resource Management">Human Resource Management<br/>
							<input type="checkbox" class = "sc" name="check_list[]" value="Productivity Awareness">Productivity Awareness<br/>
						</div>
						<div class = "fr2">
			        		<input type="checkbox" class = "sc" name="check_list[]" value="Economics Services">Economics Services<br/>
							<input type="checkbox" class = "sc" name="check_list[]" value="Environment Management">Environment Management<br/>							
			        		<input type="checkbox"  class = "sc" name="check_list[]" value="Industrial Engineering">Industrial Engineering<br/>
							<input type="checkbox" class = "sc" name="check_list[]" value="Technology Management">Technology Management<br/>
						</div>
						<div class = "fr5">
							<input type="checkbox" class = "sc" name="check_list[]" value="Employee Development & Legal Cell">Employee Development & Legal Cell<br/>
							<input type="checkbox" class = "sc" name="check_list[]" value="Finance Division">Finance Division<br/>
							<input type="checkbox" class = "sc" name="check_list[]" value="Information Technology">Information Technology<br/>
						</div>
			        </div>

			    </br>
			        <div class = "location">
			        	<div>
			        	</br></br>
			        	</div>
			        	<div class = "h"><label><h3>SELECT THE LOCATION INTERESTED TO WORK AT (Maximum 3) <span style="color:red">  *</span></h3></label></div>
			        	<div class = "fr1">
			        		<input type="checkbox" class = "c" name="check_list1[]" value="Bengaluru">Bengaluru<br/>
			        		<input type="checkbox" class = "c" name="check_list1[]" value="Gandhinagar">Gandhinagar<br/>
							<input type="checkbox" class = "c" name="check_list1[]" value="Kolkata">Kolkata<br/>
						</div>
						<div class = "fr2">
			        		<input type="checkbox" class = "c" name="check_list1[]" value="Bhubaneswar">Bhubaneswar<br/>
			        		<input type="checkbox" class = "c" name="check_list1[]" value="Guwahati">Guwahati<br/>
							<input type="checkbox" class = "c" name="check_list1[]" value="Mumbai">Mumbai<br/>
						</div>
						<div class = "fr3">
							<input type="checkbox" class = "c" name="check_list1[]" value="Chandigarh">Chandigarh<br/>
							<input type="checkbox" class = "c" name="check_list1[]" value="Hyderabad">Hyderabad<br/>
			        		<input type="checkbox" class = "c" name="check_list1[]" value="Patna">Patna<br/>
						</div>
						<div class = "fr4">
							<input type="checkbox" class = "c" name="check_list1[]" value="Chennai">Chennai<br/>
							<input type="checkbox" class = "c" name="check_list1[]" value="Jaipur">Jaipur<br/>
						</div>
						<div class = "fr5">
							<input type="checkbox" class = "c" name="check_list1[]" value="Delhi">Delhi<br/>
							<input type="checkbox" class = "c" name="check_list1[]" value="Kanpur">Kanpur<br/>
						</div>
			        </div>
		        </fieldset>
		     <center><div id="tc"><p>Next</p></div></center>
		    <!--<fieldset>-->
				<div id = "terms" class = "terms">
					<div class = "t"><label><h3>TERMS & CONDITIONS</h3></label></div>
					<p class = "hangingindent">1. The Applicants fulfilling eligibility criteria may submit their complete details in the prescribed Application Porforma titled at <strong>"Application Proforma for Empanelment of Consultants, Experts & Trainers"</strong> that is available on NPC website on or before Jan 31/ July 31.</p>
					<p class = "hangingindent">2. The Application recieved online shall be treated as signed application by the applicant.</p>
					<p class = "hangingindent">3. Any false statement in the application shall be taken extremely seriously and will liable applicant to rejection and legal action.</p>
					<p class = "hangingindent">4. No documents need to be attached to the application. Documents shall be verified at the time of interview, if required.</p>
					<p class = "hangingindent">5. This is <strong>NOT</strong> an offer for permanent employment in NPC and is purely a contractual engagement on project basis on mutually agreed terms and conditions.</p>
					<p class = "hangingindent">6. The engagement <strong>DOES NOT</strong> confirm any right to the engaged consultant/expert/trainer to any position or job in NPC or any other wing of the Government on any preference in employment after the tenure of engagement or anytime in future.</p>
					<p class = "hangingindent">7. NPC reserves its right <strong>NOT TO ENGAGE</strong> any consultant/expert/trainer in response to the advertisement and this is only an invitation to apply for engagement. NPC shall not be liable for any action taken by any person in response to this Rolling Advertisement.</p>
					<p class = "hangingindent">8. All the applications shall be screened for qualification and completeness. Complete applications shall be sorted and shortlisted for calling suitable candidates for interview. <strong>Not all applicants will be called for interview</strong>.</p>
					<p class = "hangingindent">9. Selection of the candidates shall be made on the basis of interviews taken by a selection committee. Only short listed candidates shall be invited for the interview.</p>
					<p class = "hangingindent2">10. The Applicant will be offered a contractual engagement on project basis as per availability and as per mutually agreed terms and conditions.</p>
					<p class = "hangingindent2">11. The selected candidate is expected to maintain highest standards of behaviour and show politeness in dealings with NPC or its clients's officials during or after the termination of the engagement with NPC.</p>
					<p class = "hangingindent2">12. The candidate will undertake & execute the assigned tasks with all sincerity and as per communicated timelines. The failure in commitments and duty by the candidate will be viewed seriously and his engagement/empanelment will be terminated and <strong>NO FURTHER PROJECT ENGAGEMENTS WILL BE OFFERED</strong></p>
					<p class = "hangingindent2">13. After the culmination of tenure/project engagement, if the engaged consultant/expert/trainer is found to be involved in demeaning the brand/image of NPC, <strong>a legal action will be taken against him and he will be blacklisted from offering his services to NPC</strong>.</p>
					<p class = "hangingindent2">14. The candidate will carry his own laptop to undertake the assigned tasks whereas other facilities like internet, printing etc will be provided while working at NPC premises.</p>
					<p class = "hangingindent2">15. The applicants are advised to provide e-mail address for communication of interview call and selection & no communication will be made by post, the candidates are advised to regularly check the provided email as well as NPC website.</p>
					<p class = "hangingindent2">16. The candidate should be willing to work at any location as the projects are based on client specific locations.</p> 

					<div class = "accept">
						</br>
						</br>
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
		$(document).ready(function()
		{
    		$("#tc").click(function()
			{

				var cnt = $("input[name='check_list[]']:checked").length;
				var cnt1 = $("input[name='check_list1[]']:checked").length;
				var limit = 1;
	        	if (cnt < 1) 
	        	{
	            	$(this).prop("checked", "");
	            	alert('You need to select atleast ' + limit + ' Division to work with');
	        	}
	        	else if(cnt1 < 1)
	        	{
	        		$(this).prop("checked", "");
	            	alert('You need to select atleast ' + limit + ' Location to work at');
	        	}
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
		      
		      if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
		      
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
		      
		      if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
		      
		        e.preventDefault();
		        
		      }

		    }
		    
		  });
		  
		});
</script>

	<script type = "text/javascript" src = "js/index.js"> </script>

	</body>

</html>