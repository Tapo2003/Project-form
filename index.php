<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/vito/html/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 13:37:14 GMT -->
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
            #header {
               border: 1px solid black;
               
               padding:5px 5px 5px 5px;
            }

            body{
               background-image: url("assets/images/body.jpg");
            }
       </style>
      <!-- loader Start -->
      <!-- <div id="loading">
         <div id="loading-center">
         </div>
      </div> -->
      <div class="wrapper">
         <div id="content-page" class="content-page">
            <div class="container-fluid" style = "width:900px">
               <div class="row">
                  <div class="col-sm-12 col-lg-12"  >                
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           
                        </div>
                        <div class="iq-card-body">
                           
                            <form id = "">
                                <div class="form-row">
                                    <div class="col-lg-6" style="float:right">
                                        <img id="userimage" name="userimage" src="assets/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user" width="150px" height="70px">      
                                    </div>
                                 </div>

                                <br><br><div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label>Select Membership Type</label>
                                        <select class="form-control form-control-sm mb-3">
                                            <option selected=""></option>
                                            <option value="Student">Student</option>
                                            <option value="Ordinary">Ordinary</option>
                                            <option value="Associate">Associate</option>
                                            <option value="Institutional">Institutional</option>
                                        </select>
                                        </div>
                                    </div>
                                <div>
                                    <h3 style = "text-align:center;margin-top:30px">PERSONAL INFORMATION</h3>
                                </div>
                                <br><br><div class="form-row">           
                                    <div class="col-md-6 mb-3">
                                        <label>First/Given Name</label>
                                        <input type="text" class="form-control" id = "giveName" name = "giveName">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Surname.</label>
                                        <input type="text" class="form-control" id ="surName" name = "surName" required>
                                    </div> 
                                </div> 

                                <br><br><div class="form-row"> 
                                    <div class="col-md-6 mb-3">
                                        <label>Initials.</label>
                                        <input type="text" class="form-control" id ="initials" name = "initials" required>
                                    </div> 
                                    <div class="col-md-6 mb-3">
                                        <label>Maiden Name</label>
                                        <input type="text" class="form-control" id = "maidenName" name = "maidenName" required>
                                    </div>
                                </div> 

                              <div class="iq-card-body">
                                 <p>Gender</p>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio6" name="customRadio-1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio6"> Male </label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio7" name="customRadio-1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio7"> 
                                       Female </label>
                                 </div>
                                 
                              </div>

                              <div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label for="exampleInputdate">Date of Birth</label>
                                    <input type="date" class="form-control" id="exampleInputdate" value="2019-12-18"/>
                                 </div>
                                 <div class="col-md-6 md-3" >
                                    <label>Nationality</label>
                                    <select class="form-control form-control-sm mb-3" style = "height:40px">
                                        <option selected=""></option>
                                        <option value="nigeria">Nigeria</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label>Country of residence</label>
                                    <select class="form-control form-control-sm mb-3" style = "height:40px">
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
                                    <input type="text" class="form-control" id ="courseDesc" name = "courseDesc" required>
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
                                    <input type="text" class="form-control" id ="zipCode" name = "zipCode" required>
                                </div>

                                <div class="col-md-6 md-3">
                                    <label>Country</label>
                                    <select class="form-control form-control-sm mb-3" style = "height:40px">
                                        <option selected=""></option>
                                        <option value="nigeria">Nigeria</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                              </div>

                              <br><div>
                                 <h3 style = "text-align:center;margin-top:30px">ADDRESS</h3>
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
                                 <h4 style = "text-align:center;margin-top:30px">EMAIL ADDRESS (We'll never share your email with anyone else)</h4>
                              </div>

                              
                              <br><br><div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label>Personal email.</label>
                                    <input type="text" class="form-control" id ="personEmail" name = "personEmail" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Work email.</label>
                                    <input type="text" class="form-control" id ="workEmail" name = "workEmail" required>
                                </div> 
                              </div>

                              <div>
                                 <h4 style = "text-align:center;margin-top:30px">ABOUT YOUR INTEREST IN LABORATORY ANIMAL WELFARE</h4>

                                 <br><p style = "text-align:center;color:red;font-size:15px">Education: For each degree obtained, please provide:</p>
                              </div>

                              <div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label>Institution.</label>
                                    <input type="text" class="form-control" id ="institution" name = "institution" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Place.</label>
                                    <input type="text" class="form-control" id ="place" name = "place" required>
                                </div> 
                              </div>

                              <br><br><div class="form-row">
                                <div class="col-md-6 md-3">
                                    <label>Country.</label>
                                    <input type="text" class="form-control" id ="country" name = "country" required>
                                </div>

                                <div class="col-md-6 md-3">
                                    <label for="exampleInputdate">Year of Graduation</label>
                                    <input type="date" class="form-control" id="yearOfGraduation" name = "yearOfGraduation" value="2019-12-18"/>
                                 </div>
                              </div>


                              <br><br><div class="form-row">
                                <div class="col-md-12 md-3">
                                    <label>Other Qualifications and/or Fellowship.</label>
                                    <input type="text" class="form-control" id ="otherQualifications" name = "otherQualifications" required>
                                </div>

                                <div class="col-md-12 md-3">
                                    <label>Are you currently undertaking study/training?</label>
                                    <select class="form-control form-control-sm mb-3" style = "height:40px">
                                        <option selected="Yes/No"></option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                              </div>
                              
                              <div class="iq-card-body">
                                 <p>If YES, Course/Programme name</p>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio8" name="customRadio-1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio8"> Full time </label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio9" name="customRadio-1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio9"> 
                                    part time </label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio8" name="customRadio-1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio8"> Distance </label>
                                 </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio9" name="customRadio-1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio9"> 
                                       Other </label>
                                 </div>
                                 <br><br><div class="form-row">
                                    <div class="col-md-12 md-3">
                                        <label>Do you use/care for animals as part of your current daily work schedule?</label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px">
                                            <option selected="Yes/No"></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                 
                                <div class="form-row">
                                    <div class="col-md-6 md-3" style = "margin-top:25px">
                                        <label>If YES, please indicate type(s) of animals</label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px">
                                            <option selected=""></option>
                                            <option value="nigeria">Laboratory animals</option>
                                            <option value="others"> Farm animals</option>
                                            <option value="nigeria">Companion animals</option>
                                            <option value="others"> Sports animals</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>If NO, please provide a statement of your interest in laboratory animals.</label>
                                        <input type="text" class="form-control" id ="courseDesc" name = "courseDesc" required>
                                    </div> 
                                </div>

                              </div>

                              <br><br><div class="form-row">
                                    <div class="col-md-12 md-3">
                                        <label>Have you used/cared for laboratory animals as part of your daily work schedule in the 
                                        past?</label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px">
                                            <option selected="Yes/No"></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 md-3">
                                        <label>If yes, please state Institution, Place and dates</label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px">
                                            <option selected=""></option>
                                            <option value="nigeria">Institution</option>
                                            <option value="others"> Place</option>
                                            <option value="nigeria">Duration</option>
                                            
                                        </select>
                                    </div>
                                    
                                </div>

                                <br><br><div class="form-row">
                                    <div class="col-md-12 md-3">
                                        <label>Have attended any laboratory animal welfare training?</label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px">
                                            <option selected="Yes/No"></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="col-md-12 md-3">
                                        <label>If YES, please state below and upload your Certificate as supporting document.</label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px">
                                            <option selected=""></option>
                                            <option value="nigeria">Event</option>
                                            <option value="others"> Date</option>
                                            <option value="nigeria">Place</option>
                                            
                                        </select>
                                    </div>
                                    
                                </div>

                                <br><br><div class="form-row">
                                    <div class="col-md-12 md-3">
                                        <label>Does your Institution have an animal facility?</label>
                                        <select class="form-control form-control-sm mb-3" style = "height:40px">
                                            <option selected="Yes/No"></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <h4 style = "text-align:center;margin-top:30px">SUPPORTING DOCUMENTS</h4>
                                    <p>(a) *Please provide full names, email address and telephone of two (2) referees</p>
                                </div>
                                <div class="form-row">
                                    <ul class="list-group">
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
                                
                                    <p>(b) *Please attach the following supporting documents (pdf)</p>
                                </div>
                                <div class="form-row">
                                    <ul class="list-group">
                                        <li >i.  Current and updated Curriculum Vitae</li>
                                        <li >ii. Animal welfare training certificates (if any)</li>
                                        <li>iii. Two representative publications (if any and relevant)</li>
                                    </ul>
                                </div>

                                <br><div class="form-row">
                                 <div class="col">
                                       <label>Choose a file</label>
                                       <div class="custom-file">
                                       <input type="hidden" id="audio_hidden_tag" name="audio_hidden_tag" value="F">
                                       <input type="file" class="custom-file-input" id="audiofile" name="files[]">
                                       <label class="custom-file-label">Choose file</label>
                                    </div>
                                 </div>
                                 <div class="col">
                                       <label>Choose a file</label>
                                       <div class="custom-file">
                                       <input type="hidden" id="video_hidden_tag" name="video_hidden_tag">
                                       <input type="file" class="custom-file-input" id="videofile" name="files[]">
                                       <label class="custom-file-label">Choose file</label>
                                    </div>
                                 </div>   
                                </div> 

                                <br><div class="form-row">
                                 <div class="col">
                                       <label>Choose a file</label>
                                       <div class="custom-file">
                                       <input type="hidden" id="audio_hidden_tag" name="audio_hidden_tag" value="F">
                                       <input type="file" class="custom-file-input" id="audiofile" name="files[]">
                                       <label class="custom-file-label">Choose file</label>
                                    </div>
                                 </div>
                                 <div class="col">
                                       <label>Choose a file</label>
                                       <div class="custom-file">
                                       <input type="hidden" id="video_hidden_tag" name="video_hidden_tag">
                                       <input type="file" class="custom-file-input" id="videofile" name="files[]">
                                       <label class="custom-file-label">Choose file</label>
                                    </div>
                                 </div>   
                                </div> 

                                <div>
                                 <h3 style = "text-align:center;margin-top:30px">DECLARATION AND SUBMISSION</h3>
                                 <p>*Your Application Declaration</p>
                                </div>

                                <br><div class="form-row">
                                    <div class="col-md-12">
                                       <div class="custom-file">
                                        <!-- <label>Email Address.</label> -->
                                            <p style = "display:inline;font-size:20px;color:black">I</p>
                                            <input type="text"  id ="declaration" name = "declaration" required style = "border-style:none;border-bottom:solid 1px black;width:800px">
                                            
                                        
                                        </div>
                                    </div>
                                    
                                    <br><br><div class="form-row">
                                 <div class="col">
                                       <div class="custom-file">
                                       <p>(the applicant) declare that the 
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
                                    <button type="button" name="save" class="btn btn-success">SUBMIT</button>
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
         $("#audio_hidden_tag").val("F");
         $("#video_hidden_tag").val("F");            
         $("#section_audio_hidden_tag").val("F");            
         $("#section_video_hidden_tag").val("F"); 
         $("#snippet_audio_hidden_tag").val("F");
         $("#snippet_video_hidden_tag").val("F");                        
         $("#courseTitle").focus();
         });

         function createCourse(){
            
            courseTitle   = $("#courseTitle").val();
            courseDesc    = $("#courseDesc").val();

            if(courseTitle == ""|| courseDesc == ""){
                  alert("Please Fill up the form");
            }else{
               // if(password == cpassword){
                  feedback = confirm("You are dropping or updating your course");
                  var data = $("form#processCreateCourse")[0]; 	
                  var formData = new FormData(data); //creating an instance of the class FormData using the keyword NEW
                  if(feedback == true){
                     $.ajax({                                
                     url: "processCreateCourse.php",
                     type: 'POST',
                     data: formData,
                     async: false,
                     cache: false,
                     contentType: false,
                     processData: false,
                     success: function (e) 
                     {  
                        if(e == 1){
                           alert("Course created Successfully");
                           clearCourse();
                        }else if (e == 2){
                           alert("course updated Successfully");
                           clearCourse();
                        }else if (e == -1){
                           alert("Error uploading/updating");
                        }else if (e == -2){
                           alert("Course added/updated successfully, but unable to upload media(s)");
                           clearCourse();
                        }else{
                           alert("Something went wrong, please contact the system admininstrator");
                        }
                     }
                  });	
               }
            }
         }
      

         function clearCourse(){
            $("#courseTitle").val("");
            $("#courseDesc").val("");
            $("#audio_hidden_tag").val("F");
            $("#video_hidden_tag").val("F"); 
            $("#audiofile").val(""); 
            $("#videofile").val(""); 
         }
          
          
       
      </script>

   </body>
</html>