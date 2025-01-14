<?php
    require_once('dbconn.php');
	// $personalEmail = $_GET['email'];
	$personalEmail = 'abimbolaoladunni8429@gmail.com';
    $sql = "SELECT * FROM member_info WHERE personal_email = '$personalEmail'";
    $result = mysqli_query($conn, $sql) or die(mysql_error());
    
	$row = mysqli_fetch_assoc($result);  

    // header('Location:vendor/reports/response.php?email=abimbolaoladunni8429@gmail.com');
    // header('Location:vendor/fpdf186/response.php');
    // exit;

    $membership_type = $row['membership_type'];
    $fullname = $row['title'] . ' ' . $row['surname'] . ' ' . $row['given_name']; 
    if($row['maiden_name'] == ''){
        $maiden_name = 'nil';
    }else{
        $maiden_name = $row['maiden_name'];
    }

    $gender = $row['gender'];
    $date_of_birth = explode(" ", $row['date_of_birth']);
    $date_of_birth = $date_of_birth[0];
    $nationality = $row['nationality'];
    $country_of_residence = $row['country_of_residence'];
    $institution = $row['institution'];
    $position = $row['position'];
    $address1 = $row['address1'];
    $address2 = $row['address2'];
    $city = $row['city'];
    $town = $row['town'];
    $zip_code = $row['zip_code'];

    $country = $row['country'];
    $sql = "SELECT * FROM countries WHERE iso = '$country'";
    $result = mysqli_query($conn, $sql) or die(mysql_error());
	$country = mysqli_fetch_assoc($result);  
    $country = $country['nicename'];

    $mobile = $row['mobile'];
    $home = $row['home'];
    $member_info_work = $row['member_info_work'];
    $personal_email = $row['personal_email'];
    $work_email = $row['work_email'];
    $institution_degree_output = explode("~", $row['institution_degree_output']);
	$place_output = explode("~", $row['place_output']);  
	$country_output = explode("~", $row['country_output']);      
	$year_of_graduation_output  = explode("~", $row['year_of_graduation_output']);      
	$degree  = explode("~", $row['degree']);      
	$other_qualifications  = $row['other_qualifications'];    

    $current_undertaking_status = $row['current_undertaking_status'];
    if($current_undertaking_status == 'yes'){
        $current_undertaking_programme_mode = $row['current_undertaking_programme_mode'];
    }else{
        $current_undertaking_programme_mode = 'nil';
    }

    $animal_care_status = $row['animal_care_status'];
    if($animal_care_status == 'yes'){
        $animal_type = $row['animal_type'];
    }else{
        $statement_of_interest = $row['statement_of_interest'];
    }

    $care_laboratory_animals = $row['care_laboratory_animals'];
    if($care_laboratory_animals == 'yes'){
        $animal_care_institution = $row['animal_care_institution'];
        $animal_care_place = $row['animal_care_place'];
		$duration = 'From: ' . $row['animal_care_from'] . ' To: ' . $row['animal_care_to'];
    }else{
        $animal_care_institution = 'nil';
        $animal_care_place = 'nil';
		$duration = 'nil';
    }

    $attended_laboratory_animal  = $row['attended_laboratory_animal'];
    if($attended_laboratory_animal  == 'yes'){
        $animal_welfare_training_details_event = $row['animal_welfare_training_details_event'];
        $animal_welfare_training_details_date = $row['animal_welfare_training_details_date'];
        $animal_welfare_training_details_place = $row['animal_welfare_training_details_place'];
		$animal_welfare_training_details_hidden_tag = $row['animal_welfare_training_details_hidden_tag'];
    }else{
        $animal_welfare_training_details_event = 'nil';
        $animal_welfare_training_details_date = 'nil';
        $animal_welfare_training_details_place = 'nil';
		$animal_welfare_training_details_hidden_tag = 'nil';
    }

    $institution_animal_facility = $row['institution_animal_facility'];
    $full_name1 = $row['full_name1'];
    $email_address1 = $row['email_address1'];
    $telephone1 = $row['telephone1'];
    $full_name2 = $row['full_name2'];
    $email_address2 = $row['email_address2'];
    $telephone3 = $row['telephone2'];
    $curriculum_image_status = $row['curriculum_image_status'];
    $animal_welfare_image_status = $row['animal_welfare_image_status'];
    $representative_publication1_image_status = $row['representative_publication1_image_status'];
    $representative_publication2_image_status = $row['representative_publication2_image_status'];




?>
<!doctype html>
<html lang="en">
   
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Membership Form Preview</title>
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
               <div class="row" >
                  <div class="col-sm-12 col-lg-8">                
                     <div class="iq-card" style = "">
                        <div class="iq-card-body" style="background-image: url('acuret-logo.png');background-repeat:no-repeat;background-size:100%">

                            <!-- <h3 style = "text-align:center;margin-top:30px;font-weight:bold;">
                                ACURET Membership 
                            </h3>  
                            <p style = "text-align:center;font-weight:bold;color:black">
                                Form Preview
                            </p> -->

                            

                            <!-- <form id = "ProcessUserInput" class= "ProcessUserInput"> -->

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

                                <div class="form-row" style='margin-top:30px;margin-bottom:30px;'>  
                                    <div class="col-md-3 mb-3">
                                        <img src='vendor/reports/acuret-logo.jpg' height='' width='' alt='' class='' style='border-radius:70%'>
                                    </div>                                              
                                    <div class="col-md-7 mb-3 offset-1">
                                        <p style = "margin-left:-50px;font-size:25px;font-weight:bold;color:black">
                                            ACURET Membership Form Preview
                                        </p>
                                    </div>                                              

                                </div> 
                                
                                

                                <div class="form-row">           
                                    <div class="col-md-12 mb-3">
                                        <h4 style='text-decoration:underline'>Personal Information</h4>
                                        
                                    </div>
                                </div> 

                                <div class="form-row">           
                                    <div class="col-md-6">
                                        <label>Membership type: <?= $membership_type; ?> </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <label>City/Town: <?= $city; ?></label>
                                    </div>
                                </div> 

                                <div class="form-row">           
                                    <div class="col-md-6">
                                        
                                        <label>Fullname: <?= $fullname; ?> </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <label>Gender: <?= $gender; ?> </label>                                        
                                    </div>
                                </div>                                

                                <!-- <div class="form-row">  
                                    <div class="col-md-6">
                                        <label>Town: <?= $town; ?></label>
                                    </div>                                             
                                    <div class="col-md-6">
                                        <label>Maiden name: <?= $maiden_name; ?></label>                                        
                                    </div>
                                </div>  -->
                                

                                <div class="form-row"> 
                                    <div class="col-md-6">
                                        <label>Maiden name: <?= $maiden_name; ?></label>                                           
                                    </div>                                              
                                    <div class="col-md-6">
                                        <label>Date of birth: <?= $date_of_birth; ?> </label>
                                    </div>
                                </div> 

                                <div class="form-row"> 
                                    <div class="col-md-6">
                                        <label>Country: <?= $country; ?></label>
                                    </div>                                              
                                    <div class="col-md-6">
                                        <label>Nationality: <?= $nationality; ?> </label>
                                    </div>
                                </div> 

                                <div class="form-row">           
                                    <div class="col-md-6">
                                        <label>Mobile phone: <?= $mobile; ?></label>
                                    </div>                                    
                                    <div class="col-md-6">
                                        <label>Country of residence: <?= $country_of_residence; ?> </label>
                                    </div>
                                </div> 

                                <div class="form-row"> 
                                    <div class="col-md-6">
                                        <label>Home phone: <?= $home; ?></label>
                                    </div>                                              
                                    <div class="col-md-6">
                                        <label>Zipcode: <?= $zip_code; ?></label>                                        
                                    </div>
                                </div> 

                                <div class="form-row">           
                                    <div class="col-md-6">
                                        <label>Work phone: <?= $member_info_work; ?></label>
                                    </div>                                    
                                    <div class="col-md-6">
                                        <label>Position: <?= $position; ?> </label>
                                    </div>
                                </div> 

                                <div class="form-row">  
                                    <div class="col-md-6">
                                        <label>Personal email: <?= $personal_email; ?> </label>
                                    </div>                                             
                                    <div class="col-md-6">
                                        <label>Work email: <?= $work_email; ?></label>                                        
                                    </div>
                                </div> 

                                <div class="form-row">                                             
                                    <div class="col-md-12">
                                        <label>Institution/Company: <?= $institution; ?> </label>
                                    </div>
                                </div> 

                                <div class="form-row">                                             
                                    <div class="col-md-12">
                                    <label>Address 1: <?= $address1; ?> </label>
                                    </div>
                                </div> 

                                <div class="form-row">                                
                                    <div class="col-md-6">
                                        <label>Address 2: <?= $address2; ?> </label>
                                    </div>
                                </div> 
                              


                                <hr>

                                <div class="form-row">           
                                    <div class="col-md-12 mb-3">
                                        <h4 style='text-decoration:underline'>About your Interest in Laboratory Animal Welfare</h4>
                                    </div>
                                </div> 

                                <div class="form-row">           
                                    <div class="col-md-12 mb-3">
                                        <h6 style='text-decoration:underline'>Education</h6>
                                    </div>
                                </div> 

                                <?php

                                    if(count($institution_degree_output) > 0){
                                        for($i = 0; $i < count($institution_degree_output); $i++){?>

                                            <div class="form-row">           
                                                <div class="col-md-6">
                                                    <label>Institution: <?= $institution_degree_output[$i]; ?> </label>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Year of graduation: <?= $year_of_graduation_output[$i]; ?></label>
                                                </div>
                                            </div>                                 

                                            <div class="form-row">           
                                                <div class="col-md-6">
                                                    <label>Place: <?= $place_output[$i]; ?> </label>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Degree: <?= $degree[$i]; ?></label>
                                                </div>
                                            </div>                                 

                                            <div class="form-row">           
                                                <div class="col-md-6">
                                                    <label>Country: <?= $country_output[$i]; ?> </label>
                                                </div>
                                            </div>   
                                                                                     
                                        <?php 
                                        if($i < count($institution_degree_output)){
                                            echo "<hr>";
                                        }
                                    }
                                    }

                                ?>
                                


                                <!-- <hr> -->

                                <div class="form-row">           
                                    <div class="col-md-6">
                                        <label>Other Qualifications and/or Fellowship: <?= $other_qualifications; ?></label>
                                    </div>
                                </div>

                                <div class="form-row">           
                                    <div class="col-md-6">
                                        <label>Are you currently undertaking study/training: <?= $current_undertaking_status; ?> </label>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                            if($current_undertaking_status == 'yes'){?>
                                                <label>Course/programme name: <?= $current_undertaking_programme_mode; ?></label>
                                            <?php }else{
                                                
                                            }                                          
                                        ?>
                                    </div>
                                </div>  

                                <div class="form-row">           
                                    <div class="col-md-6">
                                        <label>Do you use/care for animals as part of your current daily work schedule?: <?= $animal_care_status; ?> </label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                            if($animal_care_status == 'yes'){?>
                                                <label>Animal type: <?= $animal_type; ?></label>                                                
                                            <?php }else{?>
                                                <label>statement of your interest: <?= $statement_of_interest; ?></label>
                                            <?php }
                                        ?>
                                    </div>
                                </div> 
                                
                                
                                <div class="form-row">           
                                    <div class="col-md-12">
                                        <label>Have you used/cared for laboratory animals as part of your daily work schedule in the past?: <?= $care_laboratory_animals; ?> </label>
                                    </div>
                                    
                                </div>   

                                <?php 
                                    if($care_laboratory_animals == 'yes'){?>

                                        <div class="form-row">           
                                            <div class="col-md-12">
                                                <label>If yes, please state Institution, Place and Dates </label>
                                            </div>
                                        </div>                                     

                                        <div class="form-row">           
                                            <div class="col-md-12">
                                                <label>Institution: <?= $animal_care_institution; ?> </label>
                                            </div>
                                        </div>  
                                    
                                        <div class="form-row">           
                                            <div class="col-md-6">
                                                <label>Place: <?= $animal_care_place; ?> </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><?= $duration; ?> </label>
                                            </div>
                                        </div>

                                    <?php }else{

                                    }

                                  
                                ?>  
                                
                                

                                <div class="form-row">           
                                    <div class="col-md-12">
                                        <label>Have you attended any laboratory animal welfare training?: <?= $attended_laboratory_animal; ?> </label>
                                    </div>
                                </div>   
                                
                                <?php 
                                    if($attended_laboratory_animal  == 'yes'){?>

                                        <div class="form-row">           
                                            <div class="col-md-6">
                                                <label>Event: <?= $animal_welfare_training_details_event; ?> </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Date: <?= $animal_welfare_training_details_date; ?> </label>
                                            </div>
                                        </div>                                  
                                        
                                        <div class="form-row">           
                                            <div class="col-md-6">
                                                <label>Place: <?= $animal_welfare_training_details_place; ?> </label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php
                                                    if($animal_welfare_training_details_hidden_tag == 'T'){?>
                                                        <label>
                                                            Supporting document: 
                                                            <a href='AnimalWelfareTraining/<?= $personalEmail; ?>.pdf' target='_blank'>download</a>
                                                        </label>
                                                    <?php }else{?>
                                                        <label>Supporting document: nil </label>
                                                    <?php }
                                                ?>
                                            </div>
                                        </div>                                         


                                    <?php }else{
                                        
                                    }
                                ?>
                                
                                <div class="form-row">           
                                    <div class="col-md-12">
                                        <label>Does your Institution have an animal facility?: <?= $institution_animal_facility; ?> </label>
                                    </div>
                                </div> 

                                <hr>
                                
                                <div class="form-row">           
                                    <div class="col-md-12 mb-3">
                                        <h4 style='text-decoration:underline'>Supporting documents</h4>
                                    </div>
                                </div>  

                                <div class="form-row">           
                                    <div class="col-md-12 mb-3">
                                        <h6 style='text-decoration:underline'>Referee 1</h6>
                                    </div>
                                </div>   
                                
                                <div class="form-row">           
                                    <div class="col-md-4">
                                        <label>Fullname: <?= $full_name1; ?> </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email address: <?= $email_address1; ?> </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Telephone: <?= $telephone1; ?> </label>
                                    </div>
                                </div> 
                                
                                <div class="form-row">           
                                    <div class="col-md-12 mb-3">
                                        <h6 style='text-decoration:underline'>Referee 2</h6>
                                    </div>
                                </div>                                           
                                
                                <div class="form-row">           
                                    <div class="col-md-4">
                                        <label>Fullname: <?= $full_name2; ?> </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email address: <?= $email_address2; ?> </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Telephone: <?= $telephone3; ?> </label>
                                    </div>
                                </div> 
                                
                                <div class="form-row">           
                                    <div class="col-md-12 mb-3">
                                        <h6 style='text-decoration:underline'>PDF(s)</h6>
                                    </div>
                                </div>                                           
                                
                                <div class="form-row">           
                                    <div class="col-md-4">
                                        <?php
                                            if($animal_welfare_training_details_hidden_tag == 'T'){?>
                                                <label>
                                                    Current and updated Curriculum Vitae: 
                                                    <a href='CurriculumVitae/<?= $personalEmail; ?>.pdf' target='_blank'>download</a>
                                                </label>
                                            <?php }else{?>
                                                <label>Current and updated Curriculum Vitae: nil </label>
                                            <?php }
                                        ?>    
                                    </div>
                                    <div class="col-md-4">
                                        <?php
                                            if($animal_welfare_training_details_hidden_tag == 'T'){?>
                                                <label>
                                                    Animal welfare training certificates: 
                                                    <a href='LabAnimalWelfareTraining/<?= $personalEmail; ?>.pdf' target='_blank'>download</a>
                                                </label>
                                            <?php }else{?>
                                                <label>Animal welfare training certificates: nil </label>
                                            <?php }
                                        ?>                        
                                    </div>
                                </div>                                 
                                
                                <div class="form-row">           
                                    <div class="col-md-4">
                                        <?php
                                            if($animal_welfare_training_details_hidden_tag == 'T'){?>
                                                <label>
                                                    Representative publications 1: 
                                                    <a href='RepresentativePublications1/<?= $personalEmail; ?>.pdf' target='_blank'>download</a>
                                                </label>
                                            <?php }else{?>
                                                <label>Representative publications 1: nil </label>
                                            <?php }
                                        ?>                          
                                    </div>
                                    <div class="col-md-4">
                                        <?php
                                            if($animal_welfare_training_details_hidden_tag == 'T'){?>
                                                <label>
                                                    Representative publications 2: 
                                                    <a href='RepresentativePublications2/<?= $personalEmail; ?>.pdf' target='_blank'>download</a>
                                                </label>
                                            <?php }else{?>
                                                <label>Representative publications 2: nil </label>
                                            <?php }
                                        ?>                         
                                    </div>
                                </div>                                 

                                <!-- <div class="form-row">
                                 <div class="col"><br>
                                    <button type="button" name="save" class="btn btn-success submitform">SUBMIT</button>
                                 </div>                                    
                                </div> -->

                           <!-- </form> -->
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
        
    </body>
</html>