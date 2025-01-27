<!doctype html>
<html lang="en">
   
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Web Sample</title>
      <!-- Favicon -->
      <!-- <link rel="shortcut icon" href="assets/images/favicon.ico" /> -->
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body>
       <style>
            /* #header {
               border: 1px solid black;
               
               padding:5px 5px 5px 5px;
            } */

            body{
               background-image: url("assets/images/2.jpg");
              
               /* background: linear-gradient(to top, rgba(4, 4, 5, 0.7), rgba(5, 2, 2, 0.7)),url("assets/images/2.jpg"); */
               background-size: 10cm;
              
            }
       </style>
      <!-- loader Start -->
      <!-- <div id="loading">
         <div id="loading-center">
         </div>
      </div> -->
      <div class="wrapper">
         <div id="content-page" class="content-page">
            <div class="container-fluid" >
               <div class="row">
                
                  <div class="col-sm-12 col-lg-12" >                
                    <div class="iq-card"  style = "border: solid 3px #1e1840; box-shadow : 0px 0px 10px #090606;">
                    <div class="iq-card-header d-flex justify-content-between">
                        
                    </div>

                    <div>
                        <h3 style = "text-align:center;margin-top:30px;font-weight:bold;color:black;">FILL UP THE FORM</h3>
                    </div>
                    <div class="iq-card-body">
                        
                        <form id = "ProcessUserInput" class= "ProcessUserInput">
                            <div class="form-row">
                                <input type="hidden" id="picture_hidden_tag" name="picture_hidden_tag" value="F">
                                <div class="col-lg-6" style = "margin-top:17    0px">
                                    <label>Add Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="userfile" name="files[]" onchange="preveiwImage(this)">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img id="userimage" name="userimage" src="assets/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user" width="150px" height="70px" style = "float:right;margin-top:20px">      
                                </div>
                                </div>

                            <br><br><div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label>Select Membership Type</label>
                                    <select class="form-control form-control-sm mb-3" id = "memebership_type" name = "memebership_type">
                                        <option selected=""></option>
                                        <option value="Student">Student</option>
                                        <option value="Ordinary">Ordinary</option>
                                        <option value="Associate">Associate</option>
                                        <option value="Institutional">Institutional</option>
                                    </select>
                                    </div>
                                </div>
                            <div>
                                <h3 style = "text-align:center;margin-top:30px;font-weight:bold;color:black">PERSONAL INFORMATION</h3>
                            </div>
                            <br><br><div class="form-row">           
                                <div class="col-md-6 mb-3">
                                    <label>First/Given Name</label>
                                    <input type="text" class="form-control" id = "given_name" name = "given_name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Surname.</label>
                                    <input type="text" class="form-control" id ="sur_name" name = "sur_name" required>
                                </div> 
                            </div> 

                            <br><br><div class="form-row"> 
                                <div class="col-md-6 mb-3">
                                    <label>Initials.</label>
                                    <input type="text" class="form-control" id ="initials" name = "initials" required>
                                </div> 
                                <div class="col-md-6 mb-3">
                                    <label>Maiden Name</label>
                                    <input type="text" class="form-control" id = "maiden_name" name = "maiden_name" required>
                                </div>
                            </div> 

                            <div class="iq-card-body">
                                <p>Gender</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                
                                <input type="radio" id="male" name="gender" class="custom-control-input" value = "male">
                                <!-- id="blind" name="specialapplicant" value=     "blind" -->
                                <label class="custom-control-label" for="male"> Male </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="female" name="gender" class="custom-control-input" value = "female">
                                <label class="custom-control-label" for="female"> 
                                    Female </label>
                                </div>
                                
                            </div>

                            <div class="form-row">
                            <div class="col-md-6 md-3">
                                <label for="exampleInputdate">Date of Birth</label>
                                <input type="date" class="form-control" id="date_of_birth"  name = "date_of_birth"/>
                                </div>
                                <div class="col-md-6 md-3" >
                                <label>Nationality</label>
                                <select class="form-control form-control-sm mb-3" style = "height:40px" id = "nationality" name = "nationality">
                                    <option selected=""></option>
                                    <option value="nigeria">Nigeria</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="col-md-6 md-3">
                                <label>Country of residence</label>
                                <select class="form-control form-control-sm mb-3" style = "height:40px" id = "country_of_residence" name = "country_of_residence">
                                    <option selected=""></option>
                                    <option value="nigeria">Nigeria</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Title.</label>
                                <input type="text" class="form-control" id ="title" name = "title" required>
                            </div> 
                            </div>
                            <div class="form-row">
                            <div class="col-md-6 md-3">
                                <label>Institution or Company.</label>
                                <input type="text" class="form-control" id ="institution" name = "institution" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Position.</label>
                                <input type="text" class="form-control" id ="position" name = "position" required>
                            </div> 
                            </div>


                            <div class="form-row">
                            <div class="col-md-6 md-3">
                                <label>Address 1.</label>
                                <input type="text" class="form-control" id ="address1" name = "address1" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Address 2.</label>
                                <input type="text" class="form-control" id ="address2" name = "address2" required>
                            </div> 
                            </div>

                            <div class="form-row">
                            <div class="col-md-6 md-3">
                                <label>City.</label>
                                <input type="text" class="form-control" id ="city" name = "city" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Town.</label>
                                <input type="text" class="form-control" id ="town" name = "town" required>
                            </div> 
                            </div>

                            <div class="form-row">
                            <div class="col-md-6 md-3">
                                <label>Zip or Postal Code.</label>
                                <input type="text" class="form-control" id ="zip_code" name = "zip_code" required>
                            </div>

                            <div class="col-md-6 md-3">
                                <label>Country</label>
                                <select class="form-control form-control-sm mb-3" style = "height:40px" name = "country" id = "country">
                                    <option selected=""></option>
                                    <option value="nigeria">Nigeria</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            </div>

                            <br><div>
                                <h3 style = "text-align:center;margin-top:30px;color:black;font-weight:bold">ADDRESS</h3>
                            </div>

                            <br><br><div class="form-row">
                            <div class="col-md-6 md-3">
                                <label>Mobile.</label>
                                <input type="text" class="form-control" id ="mobile" name = "mobile" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Home.</label>
                                <input type="text" class="form-control" id ="home" name = "home" required>
                            </div> 
                            </div>

                            <div class="form-row">
                            <div class="col-md-12 md-3">
                                <label>Work.</label>
                                <input type="text" class="form-control" id ="work" name = "work" required>
                            </div>
                            </div>
                            
                            <div>
                                <h4 style = "text-align:center;margin-top:30px;font-weight:bold;color:black">EMAIL ADDRESS <span style  = "color:red;font-weight:normal">(We'll never share your email with anyone else)</span></h4>
                            </div>

                            
                            <br><br><div class="form-row">
                            <div class="col-md-6 md-3">
                                <label>Personal email.</label>
                                <input type="text" class="form-control" id ="personal_email" name = "personal_email" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Work email.</label>
                                <input type="text" class="form-control" id ="work_email" name = "work_email" required>
                            </div> 
                            </div>

                            <div>
                                <h4 style = "text-align:center;margin-top:30px;font-weight:bold;color:black">ABOUT YOUR INTEREST IN LABORATORY ANIMAL WELFARE</h4>
                                <br><p style = "text-align:center;color:red;font-size:15px;font-weight:bold">Education: For each degree obtained, please provide:</p>
                            </div>
                            <div class="form-row">
                            <div class="col-md-6 md-3">
                                <label>Institution.</label>
                                <input type="text" class="form-control" id ="institutionDegree1" name = "institutionDegree[]" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Place.</label>
                                <input type="text" class="form-control" id ="place1" name = "place[]" required>
                            </div> 
                            </div>

                            <br><br><div class="form-row">
                            <div class="col-md-6 md-3">
                                <label>Country.</label>
                                <input type="text" class="form-control" id ="student_country1" name = "student_country[]" required>
                            </div>

                            <div class="col-md-6 md-3">
                                <label for="exampleInputdate">Year of Graduation</label>
                                <input type="date" class="form-control" id="yearOfGraduation1" name = "yearOfGraduation[]"/>
                                </div>
                            </div>

                            <div class="add" id = "add">
                            
                            </div>

                            <br><div class="form-row">
                                <div class="col"><br>
                                    <button type="button" name="save" class="btn btn-success" onclick = "addEducation()" style = "margin-top:-60px;width:80px">Add</button>

                                    <!-- <div class="delete" id = "delete">
                                    </div> -->

                                </div>                                    
                            </div>
                            <br><br><div class="form-row">
                                <div class="col-md-12 md-3">
                                    <label>Other Qualifications and/or Fellowship.</label>
                                    <input type="text" class="form-control" id ="other_qualifications" name = "other_qualifications" required>
                                </div>

                                <div class="col-md-12 md-3">
                                    <br><label>Are you currently undertaking study/training?</label>
                                    <select class="form-control form-control-sm mb-3" style = "height:40px" id = "current_undertaking_status" name = "current_undertaking_status">
                                        <option selected="Yes/No"></option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>

                                <div class="form-row" id = "undertaken_form">
                                
                                </div>

                                <div class="col-md-12 md-3">
                                    <br><label>Do you use/care for animals as part of your current daily work schedule?</label>
                                    <select class="form-control form-control-sm mb-3" style = "height:40px" id = "animal_care" name = "animal_care">
                                        <option selected="Yes/No"></option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>

                                <div class="form-row" id = "show_animal_care">
                                
                                </div>

                                <div class="form-row" id = "show_statement_of_interest">
                                
                                </div>
                            </div>
                            
                            <!-- <div class="iq-card-body" id = "currently_undertaking">
                                
                            </div> -->
                                
                            


                            <br><br><div class="form-row">
                            
                            </div>

                            <!-- </div> -->
                            <div class="form-row">
                                <div class="col-md-12 md-3">
                                    <label>Have you used/cared for laboratory animals as part of your daily work schedule in the 
                                    past?</label>
                                    <select class="form-control form-control-sm mb-3" style = "height:40px" id = "care_laboratory_animals" name = "care_laboratory_animals">
                                        <option selected="Yes/No"></option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                
                            </div>

                            <div class="form-row" id = "care_laboratory_animals_form">
                                
                                
                            </div>

                            <br><br><div class="form-row">
                                <div class="col-md-12 md-3">
                                    <label>Have attended any laboratory animal welfare training?</label>
                                    <select class="form-control form-control-sm mb-3" style = "height:40px" id = "attended_laboratory_animal" name = "attended_laboratory_animal">
                                        <option selected="Yes/No"></option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row" id = "used_care_laboratory_form">
                                
                                
                            </div>

                            <br><br><div class="form-row">
                                <div class="col-md-12 md-3">
                                    <label>Does your Institution have an animal facility?</label>
                                    <select class="form-control form-control-sm mb-3" style = "height:40px" id = "institution_animal_facitlity" name = "institution_animal_facitlity">
                                        <option selected="Yes/No"></option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <h4 style = "text-align:center;margin-top:30px;font-size:30px;font-style:italic;text-decoration: underline;font-weight:bold">SUPPORTING DOCUMENTS</h4>
                                <p style = "font-size:18px;font-style:bold;margin-top:15px;">(a) *Please provide full names, email address and telephone of two (2) referees</p>
                            </div>
                            <div class="form-row">
                                <ul class="list-group" style = "margin-left:30px;font-weight:bold;color:black">
                                    <li >i.  A current member of ACURET</li>
                                    <li >ii. Someone who knows about your work with animals</li>
                                    <li>iii. If you are a student, HOD/Faculty Advisor/Supervisor should be the second 
                                    referee.</li>
                                </ul>
                            </div>
                            <br><div class="form-row">
                                <div class="col-md-4 md-3">
                                    <label>Full Names.</label>
                                    <input type="text" class="form-control" id ="fullNames1" name = "fullNames1" required>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Email Address.</label>
                                    <input type="text" class="form-control" id ="emailAddress1" name = "emailAddress1" required>
                                </div> 

                                <div class="col-md-4 mb-3">
                                    <label>Telephone.</label>
                                    <input type="text" class="form-control" id ="telephone1" name = "telephone1" required>
                                </div> 

                            </div>

                            <div class="form-row">
                                <div class="col-md-4 md-3">
                                    <label>Full Names.</label>
                                    <input type="text" class="form-control" id ="fullNames2" name = "fullNames2" required>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Email Address.</label>
                                    <input type="text" class="form-control" id ="emailAddress2" name = "emailAddress2" required>
                                </div> 

                                <div class="col-md-4 mb-3">
                                    <label>Telephone.</label>
                                    <input type="text" class="form-control" id ="telephone2" name = "telephone2" required>
                                </div> 

                            </div>


                            <div>
                            
                                <p style = "font-size:18px;font-style:bold;margin-top:15px;">(b) *Please attach the following supporting documents (pdf)</p>
                            </div>
                            <div class="form-row">
                                <ul class="list-group">
                                    
                                        <!-- <li ></li>
                                        <li></li> -->
                                </ul>
                            </div>

                            <br><div class="form-row">
                                <div class="col">
                                    
                                    <!-- <label>Choose a file</label> -->
                                    <p style = "font-weight:bold;color:black">Current and updated Curriculum Vitae <span style = "color:red">(required)</span></p>
                                    <div class="custom-file">
                                    <input type="hidden" id="curriculum_hidden_tag" name="curriculum_hidden_tag" value="F">
                                    <input type="file" class="custom-file-input" id="curriculum_vitae_file" name="files[]" onchange= "addCurriculumVitae()">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                </div>
                                <div class="col">
                                    <!-- <p></p> -->
                                    <!-- <label>Choose a file</label> -->
                                    <p style = "font-weight:bold;color:black">Animal welfare training certificates<span style = "color:red"> (not required)</span></p>
                                    <div class="custom-file">
                                    <input type="hidden" id="animal_welfare_hidden_tag" name="animal_welfare_hidden_tag">
                                    <input type="file" class="custom-file-input" id="animal_welfare_file" name="files[]" onchange = "addWelfareTraining()">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                </div>   
                            </div> 

                            <br><div class="form-row">
                                <div class="col">
                                    <p style = "font-weight:bold;color:black">Representative publications 1 <span style = "color:red">(not required)</span></p>
                                    <!-- <label>Choose a file</label> -->
                                    <div class="custom-file">
                                    <input type="hidden" id="publication_hidden_tag1" name="publication_hidden_tag1" value="F">
                                    <input type="file" class="custom-file-input" id="representative_file1" name="files[]" onchange = "representativePublications1()">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                </div>
                                <div class="col">
                                    <p style = "font-weight:bold;color:black">Representative publications 2<span style = "color:red"> (not required)</span></p>
                                    <!-- <label>Choose a file</label> -->
                                    <div class="custom-file">
                                    <input type="hidden" id="publication_hidden_tag2" name="publication_hidden_tag2">
                                    <input type="file" class="custom-file-input" id="representative_file2" name="files[]" onchange = "representativePublications2()">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                </div>   
                            </div> 

                            <div>
                                <h3 style = "text-align:center;margin-top:20px;font-size:30px;font-style:italic;font-weight:bold;margin-top:50px">DECLARATION AND SUBMISSION</h3>
                                <p style = "font-weight:bold;color:black">*Your Application Declaration</p>
                            </div>
                            <br><div class="form-row">
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <p style = "display:inline;font-size:20px;color:black;font-style:uppercase">I</p>
                                        <input type="text"  id ="declaration" name = "declaration" required style = "border-style:none;border-bottom:solid 1px black;width:340px">
                                    
                                    </div>
                                </div>
                                
                                <br><br><div class="form-row">
                                <div class="col">
                                    <div class="custom-file">
                                    <p style = "margin-top:20px">(the applicant) declare that the 
                                    information that I have provided in this application is truthful and correct to the best of my 
                                    knowledge. I are not aware of any circumstances which I have not disclosed which might 
                                    influence your decision. I understand that inaccurate, misleading or untrue statements or 
                                    knowingly withheld information may result in termination of my membership with this 
                                    organization</p>
                                </div>
                                </div>
                            
                            </div>
                            </div> 

                            <br><br><div class="form-row">
                                <div class="col"><br>
                                <button type="button" name="save" class="btn btn-success submitform">SUBMIT</button>
                                </div>                                    
                            </div>
                        </form>
                    </div>
                    </div>
                     
                  </div> 
               </div>
            </div>
         </div>
      </div>
        

      <!-- <form>
    <label for="countries">Select a Country:</label>
    <select id="countryDropdown">
  <option value="">Select a Country</option>
</select>
  </form> -->

    <?php 
        require_once("js.php");
    ?>
        
    <script>
        // fetch('https://restcountries.com/v3.1/region/europe')
        //     .then(response => response.json())
        //     .then(data => {
        //       const dropdown = document.getElementById('countryDropdown');
        //       data.forEach(country => {
        //         const option = document.createElement('option');
        //         option.value = country.cca2; // ISO Code
        //         option.textContent = country.name.common; // Country Name
        //         dropdown.appendChild(option);
        //       });
        //     })
        //     .catch(error => console.error('Error fetching countries:', error));


        // fetchCountries();
         
        $(document).ready(function(){
           changElement();
           $("#animal_welfare_hidden_tag").val('F');
           $("#publication_hidden_tag1").val('F');
           $("#publication_hidden_tag2").val('F');
           $("#curriculum_hidden_tag").val('F');
           
           
        });
         
        $(".submitform").on('click', function(){
            MaleStatus              = (document.getElementById("male").checked);
            FemaleStatus            = (document.getElementById("female").checked);
            GenderStatus            = '';
            $programmeNameStatus = '';
            emailPattern            = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
            curriculumVitaeFile     = $('#curriculum_vitae_file');
            curriculumVitaeFileAttr = curriculumVitaeFile[0].files[0];
            animalWelfareCert       = $("#animal_welfare_file");
            animalWelfareCertAttr   = animalWelfareCert[0].files[0];
            representativePub1      = $("#representative_file1");
            representativePub1Attr  = representativePub1[0].files[0];
            representativePub2      = $("#representative_file2");
            representativePub2Attr  = representativePub2[0].files[0];
            

            if($("#memebership_type").val() == ''){
                alert('Membership type is required');
                $("#memebership_type").focus();
                return false;
            } 
            if($("#given_name").val() == ''){
                alert('Given name is required');
                $("#given_name").focus();
                return false;
            }    
            if($("#sur_name").val() == ''){
                alert('Surname is required');
                $("#sur_name").focus();
                return false;
            }     
            if($("#initials").val() == ''){
                alert('Initials is required');
                $("#initials").focus();
                return false;
            }        
            if($("#maiden_name").val() == ''){
                alert('Maidenname is required');
                $("#maiden_name").focus();
                return false
            }     
            if(MaleStatus == true){
                GenderStatus = 'male';
            }        
            if(FemaleStatus == true){
                GenderStatus = 'female';
            }  
            if(GenderStatus == ''){
                alert('Please choose male or female');
                $("#male").focus();
                return false;
            }

            if($("#date_of_birth").val() == ''){
                alert('Date of birth is required');
                $("#date_of_birth").focus();
                return false;
            }
            if($("#nationality").val() == ''){
                alert('Nationality is required');
                $("#nationality").focus();
                return false;
            }
            if($("#country_of_residence").val() == ''){
                alert('Country of residence is required');
                $("#country_of_residence").focus();
                return false;
            }       
            if($("#title").val() == ''){
                alert('Title is required');
                $("#title").focus();
                return false;
            }
            if($("#institution").val() == ''){
                alert('Institution is required');
                $("#institution").focus();
                return false;
            }
            if($("#position").val() == ''){
                alert('Position is required');
                $("#position").focus();
                return false;
            }
            if($("#address1").val() == ''){
                alert('Address is required');
                $("#address1").focus();
                return false;
            }
            if($("#address2").val() == ''){
                alert('Address is required');
                $("#address2").focus();
                return false;
            }
            if($("#city").val() == ''){
                alert('City is required');
                $("#city").focus();
                return false;
            }
            if($("#town").val() == ''){
                alert('Town is required');
                $("#town").focus();
                return false;
            }
            if($("#zip_code").val() == ''){
                alert('Zip code is required');
                $("#zip_code").focus();
                return false;
            }
            if($("#country").val() == ''){
                alert('Country is required');
                $("#country").focus();
                return false;
            }
            if($("#mobile").val() == ''){
                alert('Mobile is required');
                $("#mobile").focus();
                return false;
            }
            if($("#home").val() == ''){
                alert('Home is required');
                $("#home").focus();
                return false;
            }
            if($("#work").val() == ''){
                alert('Work is required');
                $("#work").focus();
                return false;
            }
            if($("#country").val() == ''){
                alert('Country is required');
                $("#country").focus();
                return false;
            }
            if($("#personal_email").val() == '' || !emailPattern.test($("#personal_email").val())){
                alert('Valid personal email is required');
                $("#personal_email").focus();
                return false;
            }
            if($("#work_email").val() == '' || !emailPattern.test($("#work_email").val())){
                alert('Valid work email is required');
                $("#work_email").focus();
                return false;
            }
            var allDegreeObtained = true;
            $('input[name="institutionDegree[]"], input[name="place[]"], input[name="student_country[]"], input[name="yearOfGraduation[]"]').each(function(){
                if(!$(this).val()) {
                    alert('Please fill degree obtained informations!');
                    $(this).focus();
                    allDegreeObtained = false; 
                    return false; 
                }
            });
            if(!allDegreeObtained) {
                return false; 
            }
            if($("#other_qualifications").val() == ''){
                alert('Please choose other qualification or fellowship');
                $("#other_qualifications").focus();
                return false;
            }
            
            
            if($("#current_undertaking_status").val() == ''){
                alert('Are you currently undertaking study/training?');
                $("#current_undertaking_status").focus();
                return false;  
            }  
            if($("#current_undertaking_status").val() == 'yes'){
                if((document.getElementById("fulltime").checked) == true){
                   
                    $programmeNameStatus = 'fulltime';
                   
                    }if((document.getElementById("parttime").checked) == true){
                        $programmeNameStatus = 'parttime';
                    }if((document.getElementById("distance").checked) == true){
                        $programmeNameStatus = 'distance';
                    }if((document.getElementById("others").checked) == true){
                        $programmeNameStatus = 'others';
                    }
                if($programmeNameStatus == ''){
                    alert('choose a programme name');
                    $("#fulltime").focus(); 
                    return false;
                
                }      
            }  
        
            if($("#animal_care").val() == ''){
                alert('Do you use/care for animals as part of your current daily work schedule?');
                $("#animal_care").focus();
                return false;  
            }
    
            if($("#animal_care").val() == 'yes'){
                if($("#animal_type").val() == ''){
                    alert('Please indicate type(s) of animals.');
                    $("#animal_type").focus();
                    return false;  
                }
            }

            if($("#animal_care").val() == 'no'){
                if($("#statement_of_interest").val() == ''){
                    alert('If NO, please provide a statement of your interest in laboratory animals.');
                    $("#statement_of_interest").focus();
                    return false;  
                }
            }

            if($("#care_laboratory_animals").val() == ''){
                alert('Have you used/cared for laboratory animals as part of your daily work?');
                $("#care_laboratory_animals").focus();
                return false;    
                }   
                if($("#care_laboratory_animals").val() == 'yes'){
                    if($("#animal_care_details").val() == ''){
                        alert('please state Institution, Place and dates for animal care');
                        $("#animal_care_details").focus();
                        return false;
                    }   
                }   
                if($("#attended_laboratory_animal").val() == ''){
                    alert('Have attended any laboratory animal welfare training?');
                    $("#attended_laboratory_animal").focus();
                    return false;
                    
                }   
                if($("#attended_laboratory_animal").val() == 'yes'){
                    if($("#animal_welfare_training_details").val() == ''){
                        alert('please state below event,date and place');
                        $("#animal_welfare_training_details").focus();
                        return false;
                    }
                    
                }   
                if($("#institution_animal_facitlity").val() == ''){
                    alert('Does your Institution have an animal facility?');
                    $("#institution_animal_facitlity").focus();
                    return false;
                    
                } 
                if($("#fullNames1").val() == ''){
                    alert('Referee fullname is required');
                    $("#fullNames1").focus();
                    return false;
                }
                if($("#emailAddress1").val() == '' ||  !emailPattern.test($("#emailAddress1").val())){
                    alert('Referee email must be valid');
                    $("#emailAddress1").focus();
                    return false;
                }
                if($("#telephone1").val() == ''){
                    alert('Referee telephone is required');
                    $("#telephone1").focus();
                    return false;
                }
                if($("#fullNames2").val() == ''){
                    alert('Referee fullname is required');
                    $("#fullNames2").focus();
                    return false;
                }
                if($("#emailAddress2").val() == '' || !emailPattern.test($("#emailAddress2").val())){
                    alert('Referee email must be valid');
                    $("#emailAddress2").focus();
                    return false;
                }
                if($("#telephone2").val() == ''){
                    alert('Referee telephone is required');
                    $("#telephone2").focus();
                    return false;
                }
                if($("#curriculum_vitae_file")[0].files.length == 0){
                alert('Curriculum vitae file is required');
                $("#curriculum_vitae_file").focus();
                return false;
                }
                if(curriculumVitaeFileAttr.type !== 'application/pdf'){
                    alert('Only PDF files are allowed for curriculum vitae.');
                    $("#curriculum_vitae_file").focus();
                    return false;
                }
                if($("#animal_welfare_file")[0].files.length == 1){
                    if(animalWelfareCertAttr.type !== 'application/pdf'){
                        alert('Only PDF files are allowed for animal welfare.');
                        $("#animal_welfare_file").focus();
                        return false;
                    }
                }
                if($("#representative_file1")[0].files.length == 1){
                    if(representativePub1Attr.type !== 'application/pdf'){
                        alert('Only PDF files are allowed for representative publication 1.');
                        $("#representative_file1").focus();
                        return false;
                    }
                }
                
                if($("#representative_file2")[0].files.length == 1){
                    if(representativePub2Attr.type !== 'application/pdf'){
                        alert('Only PDF files are allowed for representative publication 2.');
                        $("#representative_file2").focus();
                        return false;
                    }
                }
                if($("#declaration").val() == ''){
                    alert('Your Application Declaration.');
                    $("#declaration").focus();
                    return false;
                }
                feedback = confirm("You can send us your information now");
                if(feedback == true){
                    var data = $("form#ProcessUserInput")[0]; 	
                    var formData = new FormData(data); 
                    $.ajax({                                
                        url: "processMemberInput.php",
                        type: 'POST',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(e){
                            if(e == 1){
                                alert("Record sent succesfully");
                                clearFields();
                            }else if(e == -1){
                                alert("Unable to send records");
                            }else if(e == -2){
                                alert("Record exist with this email already");
                            }else{
                                "Error occured sending file";
                            }
                        }
                    });	 
                }
            });
        
        function changElement(){

            $("#animal_care").on("change",function(){
                if(($("#animal_care").val()) === "yes") {
                    // $("#show_statement_of_interest").remove();
                    var newField =
                    `<div class="col-md-12 md-3" id = "used_care_form">
                        <label>If YES, please indicate type(s) of animals.</label>
                        <select class="form-control form-control-sm mb-3" style = "height:40px" id = "animal_type" name = "animal_type">
                            <option selected=""></option>
                            <option value="Laboratory animals">Laboratory animals</option>
                            <option value=" Farm animals"> Farm animals</option>
                            <option value="Companion animals">Companion animals</option> 
                             <option value="Sports animals">Sports animals</option> 
                        </select>
                    </div>`
                    $("#show_animal_care").append(newField);
                    $("#uncare_for_animal").remove();
                }else if(($("#animal_care").val()) === "no"){
                    var newField = `
                        <div class="col-md-12 mb-3" id = "uncare_for_animal" style = "margin-top:25px">
                            <label>If NO, please provide a statement of your interest in laboratory animals.</label>
                            <input type="text" class="form-control" id ="statement_of_interest" name = "statement_of_interest"  required>
                        </div> `;  
                        $("#show_statement_of_interest").append(newField);
                        $("#used_care_form").remove();
                }else{
                    $("#uncare_for_animal").remove();
                    $("#used_care_form").remove();
                }
            });
            $("#current_undertaking_status").on("change", function () {
                var current_undertaken = $(this).val(); 
                if(current_undertaken === "yes") {
                    $("#uncurrently_undertaking").remove();
                    var newField = `
                        <div class="col-md-12 md-3" style = "margin-top:25px" id = "currently_undertaking">
                            <label>If YES, Course/Programme name</label>
                            <div class="iq-card-body">
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="fulltime" name="programme_name" class="custom-control-input" value = "Full time">
                                    <label class="custom-control-label" for="fulltime"> Full Time</label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="parttime" name="programme_name" class="custom-control-input" value = "part time">
                                    <label class="custom-control-label" for="parttime"> 
                                       Part time </label>
                                 </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="distance" name="programme_name" class="custom-control-input" value = "Distance">
                                    <label class="custom-control-label" for="distance"> 
                                       Distance </label>
                                </div>

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="others" name="programme_name" class="custom-control-input" value = "Others">
                                    <label class="custom-control-label" for="others"> 
                                       Others </label>
                                </div>
                            </div>
                        </div>`;  
                        $("#undertaken_form").append(newField);
                }else{
                    $("#uncurrently_undertaking").remove();
                    $("#currently_undertaking").remove();
                }
            });

            $("#care_laboratory_animals").on("change", function () {
                var care_laboratory_animals_status = $(this).val();
                if(care_laboratory_animals_status == 'yes'){
                    var newField = `
                    <div class="col-md-12 md-3" id = "used_care_laboratory">
                        <label>If yes, please state Institution, Place and dates</label>
                        <select class="form-control form-control-sm mb-3" style = "height:40px" id = "animal_care_details" name = "animal_care_details">
                            <option selected=""></option>
                            <option value="Institution">Institution</option>
                            <option value="Place"> Place</option>
                            <option value="Duration">Duration</option>
                        </select>
                    </div>`;
                    $("#care_laboratory_animals_form").append(newField);
                }else{
                    $("#used_care_laboratory").remove();
                }
               
            });

            $("#attended_laboratory_animal").on("change", function(){
                var attended_laboratory_animal = $(this).val();
                if(attended_laboratory_animal == 'yes'){
                    var newField =
                    `<div class="col-md-12 md-3" id = "used_care_laboratory">
                        <label>If YES, please state below and upload your Certificate as supporting document.</label>
                        <select class="form-control form-control-sm mb-3" style = "height:40px" id = "animal_welfare_training_details" name = "animal_welfare_training_details">
                            <option selected=""></option>
                            <option value="Event">Event</option>
                            <option value="Date"> Date</option>
                            <option value="Place">Place</option> 
                        </select>
                    </div>`
                    $("#used_care_laboratory_form").append(newField);
                }else if(attended_laboratory_animal == 'no'){
                    $("#used_care_laboratory").remove();
                }else{
                    $("#used_care_laboratory").remove();
                }
                
            });                                         
        }
        function addCurriculumVitae(){
            $("#curriculum_hidden_tag").val('T');
        }
        function addWelfareTraining(){
            $("#animal_welfare_hidden_tag").val('T');
        }
        function representativePublications1(){
            $("#publication_hidden_tag1").val('T');
        }
        function representativePublications2(){
            $("#publication_hidden_tag2").val('T');

        }
        var counter = 1; 
        function addEducation() {
            var allFilled = true;
            $('input[name="institutionDegree[]"], input[name="place[]"], input[name="student_country[]"], input[name="yearOfGraduation[]"]').each(function(){
                if(!$(this).val()){ 
                    alert('Please fill in all required fields!');
                    $(this).focus();
                    allFilled = false;
                    return false; 
                }
            });
            if(allFilled) {
                counter++; // Increment the counter for new inputs
                const newFields = `<div id = "educationField${counter}">
                    <hr style="border: 1px solid black;"><br><br><div class="form-row">
                        <div class="col-md-6 md-3">
                       
                            <label>Institution.</label>
                            <input type="text" class="form-control" id="institutionDegree${counter}" name="institutionDegree[]" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Place.</label>
                            <input type="text" class="form-control" id="place${counter}" name="place[]" required>
                        </div> 
                    </div>
                    <br><br><div class="form-row">
                        <div class="col-md-6 md-3">
                            <label>Country.</label>
                            <input type="text" class="form-control" id="student_country${counter}" name="student_country[]" required>
                        </div>
                        <div class="col-md-6 md-3">
                            <label for="exampleInputdate">Year of Graduation</label>
                            <input type="date" class="form-control" id="yearOfGraduation${counter}" name="yearOfGraduation[]"/>
                        </div>
                        
                    </div>
                     <button type="button" name="save" class="btn btn-danger" style = "margin-top:17px" onclick = "deleteEducation(${counter})">Remove</button>
                     </div>`;
                $("#add").append(newFields);
            }
        }
        
        function deleteEducation(counter){
            $(`#educationField${counter}`).remove();
        }
        function clearFields(){
            $("#courseTitle").val("");
            // $("#courseDesc").val("");
            // $("#audio_hidden_tag").val("F");
            // $("#video_hidden_tag").val("F"); 
            // $("#audiofile").val(""); 
            // $("#videofile").val(""); 
        }
          
          
       
        function preveiwImage(getImage){
            var fileType = document.getElementById('userfile').files[0].type;
            var fileSize = document.getElementById('userfile').files[0].size;

            /CONVERT IMAGE FILE TO KILOBYTE/
            var fileSize = Math.floor(fileSize/(1024));
            if(getImage.files && getImage.files[0]){
                //ensure that only one image is uploaded at a time
                if(fileType == 'image/jpg' || fileType == 'image/jpeg' || fileType == 'image/png'){
                    //ensure that file is jpg/jpeg
                    /*IMAGE SIZE MUST NOT BE MORE THAN 1 MB*/
                    if(fileSize<=5000){
                        var imgReader = new FileReader();// keyword NEW is used to create an instance of a class FileReader
                        imgReader.onload = function(e){
                            //returning a value [e]
                            $('#userimage').attr('src', e.target.result);// append the uploaded image to the img tag
                            $("#picture_hidden_tag").val("T");
                        }
                        imgReader.readAsDataURL(getImage.files[0]);       
                    }else{
                        alert("Image Size too large for Upload!");
                        $("#userfile").val('');
                    }
                }else{
                    alert("File format not Supported/Allowed for Upload!, Please Choose another.");
                    $("#userfile").val('');
                }
            }
        }	


      </script>

   </body>
</html>