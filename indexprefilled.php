<?php
    require_once('dbconn.php');
    $sql = "SELECT * FROM countries";
    $result = mysqli_query($conn, $sql) or die(mysql_error());
    $row_count = mysqli_num_rows($result);
    $countries = [];
    if($row_count > 0){
        while($row=mysqli_fetch_array($result)){
            $countries[] = $row;
        }        
    }

    // header('Location:vendor/reports/response.php?email=abimbolaoladunni8429@gmail.com');
    // header('Location:vendor/fpdf186/response.php');
    // header('Location:printpreview.php?email=abimbolaoladunni8429@gmail.com');
    // exit;


    



?>
<!doctype html>
<html lang="en">
   
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Membership form</title>
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
            #header {
               border: 1px solid black;
               
               padding:5px 5px 5px 5px;
            }

            body{
               background-image: url("assets/images/body.jpg");
            }
       </style>

      <div class="wrapper">
         <div id="content-page" class="content-page" style='width:100%'>
            <div class="container-fluid" style = "margin-top:-50px;">
               <div class="row">
                  <div class="col-sm-12 col-lg-8">                
                     <div class="iq-card" style = "">
                        <div class="iq-card-body">

                            <h3 style = "text-align:center;margin-top:30px;margin-bottom:20px;font-weight:bold;color:red">ACURET Membership Application FORM </h3>  

                            <form id = "ProcessUserInput" class= "ProcessUserInput">

                                <!-- <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label>Select Membership Type<span style='color:red'>*</span></label>
                                        <select class="form-control form-control-sm mb-3" id = "memebership_type" name = "memebership_type" style = "height:45px;" required>
                                            <option selected=""></option>
                                            <option value="Student">Student</option>
                                            <option value="Ordinary">Ordinary</option>
                                            <option value="Associate">Associate</option>
                                            <option value="Institutional">Institutional</option>
                                        </select>
                                        </div>
                                    </div>
                                <div> -->

                                <div class="form-row">  
                                    <div class="col-md-6 mb-3">
                                        <img src='vendor/reports/acuret-logo.jpg' height='' width='' alt='' class='' style='border-radius:70%'>
                                    </div>                                              

                                </div> 

                                <h3 style = "text-align:center;margin-bottom:20px;font-weight:bold;color:black">PERSONAL INFORMATION</h3>  

                                <div class="form-row">           
                                    <div class="col-md-4 mb-3">
                                        <label>Select Membership Type<span style='color:red'>*</span></label>
                                        <select class="form-control form-control-sm mb-3" id = "memebership_type" name = "memebership_type" style = "height:45px;" required>
                                            <option selected="" >neutral</option>
                                            <option value="Student">Student</option>
                                            <option value="Ordinary">Ordinary</option>
                                            <option value="Associate">Associate</option>
                                            <option value="Institutional">Institutional</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>First/Given Name<span style='color:red'>*</span></label>
                                        <input type="text" class="form-control" id = "given_name" name = "given_name" value='Abimbola' required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Surname<span style='color:red'>*</span></label>
                                        <input type="text" class="form-control" id ="sur_name" name = "sur_name" required value='Oladunni'>
                                    </div> 
                                </div> 

                                
                                <div class="form-row"> 
                                    <div class="col-md-6 mb-3">
                                        <label>Initials</label>
                                        <input type="text" class="form-control" id ="initials" name = "initials"  value='AB'>
                                    </div> 
                                    <div class="col-md-6 mb-3">
                                        <label>Maiden Name (if any)</label>
                                        <input type="text" class="form-control" id = "maiden_name" name = "maiden_name"  value='felicia'>
                                    </div>
                                </div> 

                              <div class="iq-card-body" style='margin-top:-15px'>
                                 <p style='margin-bottom:5px;'>Gender <span style='color:red'>*</span></p>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="male" name="gender" class="custom-control-input" value = "male">
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
                                    <label for="exampleInputdate">Date of Birth<span style='color:red'>*</span></label>
                                    <input type="date" class="form-control" id="date_of_birth"  name = "date_of_birth" style = "height:45px;margin-bottom:10px;" required/>
                                 </div>

                                 <div class="col-md-6 md-3" >
                                    <label>Nationality<span style='color:red'>*</span></label>
                                    <input type="text" id="nationality" name='nationality' style = "height:45px;margin-bottom:10px;" class="form-control" value='Nigeria' required>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label>Country of residence <span style='color:red'>*</span></label>
                                    <input type="text" id="country_of_residence" name='country_of_residence' style = "height:45px;margin-bottom:10px;" value='Nigeria' class="form-control" required>    
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Title <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id ="title" name = "title" required value='Mr.'>
                                </div> 
                              </div>
                              <div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label>Institution or Company <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id ="institution" name = "institution" required style = "height:45px;" value='AAUA'>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Position <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id ="position" name = "position" required value='software engineer'>
                                </div> 
                              </div>


                              <div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label>Address 1 <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id ="address1" name = "address1" required value='FUTA northgate'>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Address 2 <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id ="address2" name = "address2" required value='Ire akari estate'>
                                </div> 
                              </div>

                              <div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label>City <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id ="city" name = "city" required value='Ondo'>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Town <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id ="town" name = "town" required value='Akure'>
                                </div> 
                              </div>

                              <div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label>Zip or Postal Code <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id ="zip_code" name = "zip_code" required value='38933'>
                                </div>

                                <div class="col-md-6 md-3">
                                    <label>Country <span style='color:red'>*</span></label>
                                    <select class="form-control form-control-sm mb-3" style = "height:45px" name = "country" id = "country" required>
                                        
                                        <?php
                                                echo "<option value=''></option>";
                                            foreach($countries as $row){
                                                echo "<option value='" . $row[1] . "'> "  . $row[3] . "</option>";
                                            }
                                        ?>

                                    </select>
                                </div>
                              </div>


                              <div class="" style='margin-top:10px;margin-bottom:10px'>
                                <h5 style='font-weight:bold'>Telephone (<span style='color:red'>at least one of the three</span>)</h5>
                              </div>                              
                              <div class="form-row">
                                <div class="col-md-4 md-3">
                                    <label>Mobile.</label>
                                    <input type="text" class="form-control" id ="mobile" name = "mobile" value='38383'>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Home.</label>
                                    <input type="text" class="form-control" id ="home" name = "home" value='akure'>
                                </div> 

                                <div class="col-md-4 md-3">
                                    <label>Work.</label>
                                    <input type="text" class="form-control" id ="work" name = "work" value='developer'>
                                </div>

                              </div>
                              
                              <div class="" style='margin-top:15px;margin-bottom:15px'>
                                <h5 style='font-weight:bold'>Email address (<span style='color:red;'>we'll never share your email with anyone else</span>).</h5>
                              </div>                               
                              <div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label>Personal email.</label>
                                    <input type="text" class="form-control" id ="personal_email" name = "personal_email"  value='abimbolaoladunni8429@gmail.com'>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Work email.</label>
                                    <input type="text" class="form-control" id ="work_email" name = "work_email"  value='abimbolaoladunni8429@gmail.com'>
                                </div> 
                              </div>

                                <div>
                                    <h4 style = "text-align:center;margin-top:20px;font-weight:bold;color:black">ABOUT YOUR INTEREST IN LABORATORY ANIMAL WELFARE</h4>
                                    <br><p style = "text-align:center;color:red;font-size:15px;font-weight:bold">Education: For each degree obtained, please provide:</p>
                                </div>
                                
                                

                              <div class="form-row" style='margin-bottom:15px'>
                                <div class="col-md-12 md-3">
                                    <label>Institution <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id ="institutionDegree1" name = "institutionDegree[]" required >
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label>Place <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id ="place1" name = "place[]" required>
                                </div> 
                                <div class="col-md-6 md-3">
                                    <label>Country <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id ="student_country1" name = "student_country[]" required>
                                </div>
                              </div>

                              
                              <div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label for="exampleInputdate">Year of Graduation <span style='color:red'>*</span></label>
                                    <input type="date" class="form-control" id="yearOfGraduation1" name = "yearOfGraduation[]" required/>
                                 </div>
                                <div class="col-md-6 md-3">
                                    <label for="exampleInputdate">Degree <span style='color:red'>*</span></label>
                                    <input type="text" class="form-control" id="degree1" name = "degree[]" required/>
                                 </div>
                              </div>

                              <div class="add" id = "add">
                                
                              </div>

                                <br><div class="form-row">
                                    <div class="col"><br>
                                        <button type="button" name="save" class="btn btn-success" onclick = "addEducation()" style = "margin-top:-60px;width:80px">Add</button>
                                    </div>                                    
                                </div>
                              
                                <div class="form-row">
                                    <div class="col-md-12 md-3">
                                        <label>Other Qualifications and/or Fellowship.</label>
                                        <input type="text" class="form-control" id ="other_qualifications" name = "other_qualifications" required value='gdg'>
                                    </div>

                                    <div class="col-md-12 md-3">
                                        <br><label>Are you currently undertaking study/training?<span style='color:red'>*</span></label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px" id = "current_undertaking_status" name = "current_undertaking_status" required>
                                            <option selected=""></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>

                                    <div class="form-row" id = "undertaken_form">
                                    
                                    </div>

                                    <div class="col-md-12 md-3" style='margin-top:10px'>
                                        <label>Do you use/care for animals as part of your current daily work schedule?<span style='color:red'>*</span></label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px" id = "animal_care" name = "animal_care" required>
                                            <option selected=""></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>

                                    <div class="form-row" id = "show_animal_care">
                                    
                                    </div>

                                    <div class="form-row" id = "show_statement_of_interest">
                                    
                                    </div>
                                </div>
                              

                                <div class="form-row">
                                
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 md-3">
                                        <label>Have you used/cared for laboratory animals as part of your daily work schedule in the 
                                        past?<span style='color:red'>*</span></label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px" id = "care_laboratory_animals" name = "care_laboratory_animals" required>
                                            <option selected=""></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                    
                                </div>

                                <div id = "care_laboratory_animals_form">
                                  
                                    
                                </div>
                                <div class="form-row">

                                    <div class="col-md-12 md-3">
                                        <label>Have you attended any laboratory animal welfare training?<span style='color:red'>*</span></label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px" id = "attended_laboratory_animal" name = "attended_laboratory_animal" required>
                                            <option selected=""></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>

                                </div>
                                
                                <div class="" id = "used_care_laboratory_form">
                                    
                                    
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 md-3">
                                        <label>Does your Institution have an animal facility? <span style='color:red'>*</span></label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px" id = "institution_animal_facitlity" name = "institution_animal_facitlity" required>
                                            <option selected="">yes</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <h4 style = "text-align:center;margin-top:20px;font-size:30px;font-style:italic;text-decoration: underline;font-weight:bold">SUPPORTING DOCUMENTS</h4>
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
                                        <label>Full Names<span style='color:red'>*</span></label>
                                        <input type="text" class="form-control" id ="fullNames1" name = "fullNames1" required value='abimbola oladunni'>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>Email Address <span style='color:red'>*</span></label>
                                        <input type="text" class="form-control" id ="emailAddress1" name = "emailAddress1" required value='abimbolaoladunni8429@gmail.com'>
                                    </div> 

                                    <div class="col-md-4 mb-3">
                                        <label>Telephone <span style='color:red'>*</span></label>
                                        <input type="text" class="form-control" id ="telephone1" name = "telephone1" required value='3939393'>
                                    </div> 

                                </div>

                                <div class="form-row">
                                    <div class="col-md-4 md-3">
                                        <label>Full Names <span style='color:red'>*</span></label>
                                        <input type="text" class="form-control" id ="fullNames2" name = "fullNames2" required value='abimboa'>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>Email Address <span style='color:red'>*</span></label>
                                        <input type="text" class="form-control" id ="emailAddress2" name = "emailAddress2" required value='abimbolaoladunni8429@gmail.com'>
                                    </div> 

                                    <div class="col-md-4 mb-3">
                                        <label>Telephone <span style='color:red'>*</span></label>
                                        <input type="text" class="form-control" id ="telephone2" name = "telephone2" required value='39933'>
                                    </div> 

                                </div>


                                <div>
                                
                                    <p style = "font-size:18px;font-style:bold;margin-top:15px;">(b) *Please attach the following supporting documents (pdf)</p>
                                </div>
                                <div class="form-row">
                                    <ul class="list-group">
                                        
                                    </ul>
                                </div>

                                <br><div class="form-row">
                                    <div class="col">
                                       <p style = "font-weight:bold;color:black">Current and updated Curriculum Vitae <span style = "color:red">(required)</span></p>
                                       <div class="custom-file">
                                       <input type="hidden" id="curriculum_hidden_tag" name="curriculum_hidden_tag" value="F">
                                       <input type="file" class="custom-file-input" id="curriculum_vitae_file" name="files[]" onchange= "addCurriculumVitae()">
                                       <label class="custom-file-label">Choose file</label>
                                    </div>
                                 </div>
                                 <div class="col">
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
                                       <div class="custom-file">
                                       <input type="hidden" id="publication_hidden_tag1" name="publication_hidden_tag1" value="F">
                                       <input type="file" class="custom-file-input" id="representative_file1" name="files[]" onchange = "representativePublications1()">
                                       <label class="custom-file-label">Choose file</label>
                                    </div>
                                 </div>
                                 <div class="col">
                                        <p style = "font-weight:bold;color:black">Representative publications 2<span style = "color:red"> (not required)</span></p>
                                       <div class="custom-file">
                                       <input type="hidden" id="publication_hidden_tag2" name="publication_hidden_tag2">
                                       <input type="file" class="custom-file-input" id="representative_file2" name="files[]" onchange = "representativePublications2()">
                                       <label class="custom-file-label">Choose file</label>
                                    </div>
                                 </div>   
                                </div> 

                                <div>
                                 <h3 style = "text-align:center;margin-top:20px;font-size:30px;font-style:italic;font-weight:bold;">DECLARATION AND SUBMISSION</h3>
                                 <p style = "font-weight:bold;color:black;margin-bottom:20px;"><span style='color:red'>*</span>Your Application Declaration</p>
                                </div><div class="form-row">
                                    <div class="col-md-12">
                                       <div class="custom-file">
                                            <p style = "display:inline;font-size:20px;color:black">I</p>
                                            <input type="text"  id ="declaration" name = "declaration" required value='' style = "border-style:none;border-bottom:solid 1px black;width:800px">
                                        </div>
                                    </div>
                                    
                                    <br><br>
                                    <div class="form-row">
                                        <div class="col">
                                        <div class="custom-file">
                                                <p>(the applicant) declare that the 
                                                information that I have provided in this application is truthful and correct to the best of my 
                                                knowledge. I are not aware of any circumstances which I have not disclosed which might 
                                                influence your decision. I understand that inaccurate, misleading or untrue statements or 
                                                knowingly withheld information may result in termination of my membership with this 
                                                organization.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="custom-file">
                                                <p><b>How ACURET.ORG will use your personal data</b></p>
                                                <p>
                                                    ACURET.ORG is required to adhere to and comply with the requirements outlined in the General Data Protection Regulation regarding the personal data we hold, process and store. The individual completing and submitting this application form hereby warrants that all of the above information is true and correct in every aspect.
                                                </p>

                                                <p>
                                                    The individual completing and submitting this application form hereby authorizes ACURET.ORG to gather and use, from time to time, any and all information relating to the individual that is the subject of this application that can be obtained from any source whatsoever including, but not limited to, Institutions, trade associates and Organizations.  
                                                </p>

                                                <p>
                                                    The undersigned also hereby authorizes ACURET.ORG to utilize credit reference agencies in order to detect and prevent fraud and money laundering which may involve conducting personal credit searches and electronically validating name and address details.
                                                </p>

                                                <p>
                                                    <input type='checkbox' id='agree'> <b style='color:red'>T/C,  I agree </b> to submitting this online application form and I am responsible for the completion of the information in it and specifically with regard to all personal data that I have supplied to ACURET.ORG herein.
                                                </p>

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
        

    <?php 
        require_once("js.php");
    ?>
        
    <script>

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

            if($("#mobile").val() == '' || $("#home").val() == '' || $("#work").val() == ''){
                alert('At least one of the telephone number field is required');
                $("#mobile").focus();
                return false;
            }      

            if($("#personal_email").val() == '' || $("#work_email").val() == ''){
                alert('At least one of the email address field is required');
                $("#personal_email").focus();
                return false;
            }

            if(!$("#personal_email").val() == ''){
                if(!emailPattern.test($("#personal_email").val())){
                    alert('Valid personal email is required');
                    $("#personal_email").focus();
                    return false;
                }
            }

            if(!$("#work_email").val() == ''){
                if(!emailPattern.test($("#work_email").val())){
                    alert('Valid work email is required');
                    $("#work_email").focus();
                    return false;
                }
            }

            var allDegreeObtained = true;
            $('input[name="institutionDegree[]"], input[name="place[]"], input[name="student_country[]"], input[name="yearOfGraduation[]"], input[name="degree[]"]').each(function(){
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
                if($("#animal_care_institution").val() == ''){
                    alert('please state the institution you used/care for laboratory animals');
                    $("#animal_care_institution").focus();
                    return false;
                }  

                if($("#animal_care_place").val() == ''){
                    alert('please state the place you used/care for laboratory animals');
                    $("#animal_care_place").focus();
                    return false;
                }   

                if($("#animal_care_from").val() == ''){
                    alert('please state the date from when you used/care for laboratory animals');
                    $("#animal_care_from").focus();
                    return false;
                }   

                if($("#animal_care_to").val() == ''){
                    alert('please state the date to when you used/care for laboratory animals');
                    $("#animal_care_to").focus();
                    return false;
                }   
            }  

            if($("#attended_laboratory_animal").val() == ''){
                alert('Have you attended any laboratory animal welfare training field is required?');
                $("#attended_laboratory_animal").focus();
                return false;
                
            }   

            if($("#attended_laboratory_animal").val() == 'yes'){
                if($("#animal_welfare_training_details_event").val() == ''){
                    alert('please state below the event you had the training');
                    $("#animal_welfare_training_details_event").focus();
                    return false;
                }

                if($("#animal_welfare_training_details_date").val() == ''){
                    alert('please state below the date you had the training');
                    $("#animal_welfare_training_details_date").focus();
                    return false;
                }

                if($("#animal_welfare_training_details_place").val() == ''){
                    alert('please state below the place you had the training');
                    $("#animal_welfare_training_details_place").focus();
                    return false;
                }

                if($("#animal_welfare_training_details_hidden_tag").val() == 'F'){
                    alert('please you have to upload the supporting document');
                    $("#animal_welfare_training_details_file").focus();
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

            if(document.getElementById("agree").checked == false){
                alert('You have agree to terms and condition.');
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
                        // alert(e);
                        console.log(e);
                        // if(e == 1){
                        //     alert("Record sent succesfully");
                        //     clearFields();
                        //     location.href='index.php';
                        // }else if(e == -1){
                        //     alert("Unable to send records");
                        // }else if(e == -2){
                        //     alert("Record exist with this email already");
                        // }else{
                        //     "Error occured sending file";
                        // }
                    }
                });	 
            }
            
        });
        
        function changElement(){

            $("#animal_care").on("change",function(){
                if(($("#animal_care").val()) === "yes") {
                    var newField =
                    `<div class="col-md-12 md-3" id = "used_care_form">
                        <label>If YES, please indicate type(s) of animals <span style='color:red'>*</span></label>
                        <select class="form-control form-control-sm mb-3" style = "height:40px" id = "animal_type" name = "animal_type" required>
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
                        <div class="col-md-12 mb-3" id = "uncare_for_animal" style = "margin-top:10px">
                            <label>If NO, please provide a statement of your interest in laboratory animals <span style='color:red'>*</span></label>
                            <input type="text" class="form-control" id ="statement_of_interest" name = "statement_of_interest" required>
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
                    <div class="col-md-12 md-3" style = "margin-top:10px" id = "currently_undertaking">
                        <p>If YES, Course/Programme name <span style='color:red'>*</span></p>

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
                            <label class="custom-control-label" for="distance"> Distance </label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="others" name="programme_name" class="custom-control-input" value = "Others">
                            <label class="custom-control-label" for="others"> Others </label>
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
                    <div class="" id = "used_care_laboratory_animal">
                        <label>If yes, please state Institution, Place and dates (duration)</label>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Institution <span style='color:red'>*</span></label>
                                <input type="text" class="form-control" id="animal_care_institution" name="animal_care_institution" required>
                            </div> 
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label>Place <span style='color:red'>*</span></label>
                                <input type="text" class="form-control" id="animal_care_place" name="animal_care_place" required>
                            </div> 

                            <div class="col-md-4 md-3">
                                <label>From <span style='color:red'>*</span></label>
                                <input type="date" class="form-control" id="animal_care_from" name="animal_care_from" required>
                            </div>

                            <div class="col-md-4 md-3">
                                <label>To <span style='color:red'>*</span></label>
                                <input type="date" class="form-control" id="animal_care_to" name="animal_care_to" required>
                            </div>
                        </div>
                    </div>`;
                    $("#care_laboratory_animals_form").append(newField);
                }else{
                    $("#used_care_laboratory_animal").remove();
                }
            });

            $("#attended_laboratory_animal").on("change", function(){
                var attended_laboratory_animal = $(this).val();
                if(attended_laboratory_animal == 'yes'){
                    var newField =
                    `<div class="" id = "used_care_laboratory">
                        <p>If YES, please state below and upload your Certificate as supporting document <span style='color:red'>*</span></p>  
                        
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Event <span style='color:red'>*</span></label>
                                <input type="text" class="form-control" id="animal_welfare_training_details_event" name="animal_welfare_training_details_event" required>
                            </div> 

                            <div class="col-md-6 md-3">
                                <label>Date <span style='color:red'>*</span></label>
                                <input type="date" class="form-control" id="animal_welfare_training_details_date" name="animal_welfare_training_details_date" required>
                            </div>
                        </div>     

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Place <span style='color:red'>*</span></label>
                                <input type="text" class="form-control" id="animal_welfare_training_details_place" name="animal_welfare_training_details_place" required>
                            </div> 

                            <div class="col-md-6 md-3">
                                <p style = "font-weight:bold;color:black">Supporting document <span style = "color:red">(required)</span></p>
                                <div class="custom-file">
                                    <input type="hidden" id="animal_welfare_training_details_hidden_tag" name="animal_welfare_training_details_hidden_tag" value="F">
                                    <input type="file" class="custom-file-input" id="animal_welfare_training_details_file" name="files[]" onchange= "addLabAnimalWelfareTraining()">
                                    <label class="custom-file-label">Choose file</label>
                                </div>

                            </div>
                        </div>
                    </div>`
                    $("#used_care_laboratory_form").append(newField);
                }else if(attended_laboratory_animal == 'no'){
                    $("#used_care_laboratory").remove();
                }else{
                    $("#used_care_laboratory").remove();
                }
            });                                         
        }

        function addLabAnimalWelfareTraining(){
            var fileType = document.getElementById('animal_welfare_training_details_file').files[0].type;
            if(fileType == 'application/pdf'){
                $("#animal_welfare_training_details_hidden_tag").val('T');
                var formData = new FormData($("#ProcessUserInput")[0]);
                formData.append('index', 0);
                $.ajax({
                    url: "uploadFile.php",
                    type: 'POST',
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(data)
                    { 
                        console.log(data);
                    },
                    error:function(data)
                    {
                        alert("Unable to upload laboratory animal welfare training certificate");                             
                    } 
                }); 
            }else{
                alert("File must be a pdf.");
                $("#animal_welfare_training_details_file").val('');
            }
        } 

        function addCurriculumVitae(){
            var fileType = document.getElementById('curriculum_vitae_file').files[0].type;
            if(fileType == 'application/pdf'){
                $("#curriculum_hidden_tag").val('T');
                var formData = new FormData($("#ProcessUserInput")[0]);
                formData.append('index', 1);
                $.ajax({
                    url: "uploadFile.php",
                    type: 'POST',
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(data)
                    { 
                        console.log(data);
                    },
                    error:function(data)
                    {
                        alert("Unable to upload curriculum vitae");                             
                    } 
                }); 
            }else{
                alert("File must be a pdf.");
                $("#curriculum_vitae_file").val('');
            }
        }

        function addWelfareTraining(){
            var fileType = document.getElementById('animal_welfare_file').files[0].type;
            if(fileType == 'application/pdf'){
                $("#animal_welfare_hidden_tag").val('T');
                var formData = new FormData($("#ProcessUserInput")[0]);
                formData.append('index', 2);
                $.ajax({
                    url: "uploadFile.php",
                    type: 'POST',
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(data)
                    { 
                        console.log(data);
                    },
                    error:function(data)
                    {
                        alert("Unable to upload animal welfare training certificate");                             
                    } 
                }); 
            }else{
                alert("File must be a pdf.");
                $("#animal_welfare_file").val('');
            }          
        }
        
        function representativePublications1(){
            var fileType = document.getElementById('representative_file1').files[0].type;
            if(fileType == 'application/pdf'){
                $("#publication_hidden_tag1").val('T');
                var formData = new FormData($("#ProcessUserInput")[0]);
                formData.append('index', 3);
                $.ajax({
                    url: "uploadFile.php",
                    type: 'POST',
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(data)
                    { 
                        console.log(data);
                    },
                    error:function(data)
                    {
                        alert("Unable to upload representative publication 1 certificate");                             
                    } 
                }); 
            }else{
                alert("File must be a pdf.");
                $("#representative_file1").val('');
            }            
        }

        function representativePublications2(){
            var fileType = document.getElementById('representative_file2').files[0].type;
            if(fileType == 'application/pdf'){
                $("#publication_hidden_tag2").val('T');
                var formData = new FormData($("#ProcessUserInput")[0]);
                formData.append('index', 4);
                $.ajax({
                    url: "uploadFile.php",
                    type: 'POST',
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(data)
                    { 
                    },
                    error:function(data)
                    {
                        alert("Unable to upload representative publication 2 certificate");   
                    } 
                }); 
            }else{
                alert("File must be a pdf.");
                $("#representative_file2").val('');
            }
        }
       
        
        var counter = 1; 
        function addEducation() {
            var allFilled = true;
            $('input[name="institutionDegree[]"], input[name="place[]"], input[name="student_country[]"], input[name="yearOfGraduation[]"], input[name="degree[]"]').each(function(){
                if(!$(this).val()){ 
                    alert('Please fill in all required fields in the education section!');
                    $(this).focus();
                    allFilled = false;
                    return false; 
                }
            });

            if(allFilled) {
                counter++; // Increment the counter for new inputs
                const newFields = `<div id = "educationField${counter}">
                    <hr style="border: 1px solid black;"><div class="form-row" style="margin-bottom:15px">
                        <div class="col-md-12 md-3">
                       
                            <label>Institution</label>
                            <input type="text" class="form-control" id="institutionDegree${counter}" name="institutionDegree[]">
                        </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>Place</label>
                            <input type="text" class="form-control" id="place${counter}" name="place[]">
                        </div> 

                        <div class="col-md-6 md-3">
                            <label>Country</label>
                            <input type="text" class="form-control" id="student_country${counter}" name="student_country[]">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 md-3">
                            <label for="exampleInputdate">Year of Graduation</label>
                            <input type="date" class="form-control" id="yearOfGraduation${counter}" name="yearOfGraduation[]"/>
                        </div>

                        <div class="col-md-6 md-3">
                            <label>Degree</label>
                            <input type="text" class="form-control" id="degree${counter}" name="degree[]">
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
        }

      </script>

   </body>
</html>