<?php
    extract($_POST);
    require_once('dbconn.php');
    require_once('customemailsender.php');
    // session_start();

    //instantiating an object of the class
    $customemailsenderobj = new customemailsender();

    $institutionDegreeOutput = ""; 
    for ($i = 0; $i < count($institutionDegree); $i++) { 
        $x = $i + 1;
        $institutionDegreeOutput .= $institutionDegree[$i]; 
        if ($i < count($institutionDegree) - 1) {
            $institutionDegreeOutput .= '~';
        }
    }

    $placeOutput = ""; 
    for ($i = 0; $i < count($place); $i++) { 
        $x = $i + 1;
        $placeOutput .= $place[$i]; 
        
        if ($i < count($place) - 1) {
            $placeOutput .= '~';
        }
    }

    $countryOutput = ""; 
    for ($i = 0; $i < count($student_country); $i++) { 
        $x = $i + 1;
        $countryOutput .=  $student_country[$i]; 
        
        if ($i < count($student_country) - 1) {
            $countryOutput .= '~';
        }
    }
    
    $yearOfGraduationOutput = ""; 
    for ($i = 0; $i < count($yearOfGraduation); $i++) { 
        $x = $i + 1;
        $yearOfGraduationOutput .=  $yearOfGraduation[$i]; 
        
        if ($i < count($yearOfGraduation) - 1) {
            $yearOfGraduationOutput .= '~';
        }
    }
    
    $degreeOutput = ""; 
    for ($i = 0; $i < count($degree); $i++) { 
        $x = $i + 1;
        $degreeOutput .=  $degree[$i]; 
        
        if ($i < count($degree) - 1) {
            $degreeOutput .= '~';
        }
    }

    $memebershipType                = ucwords(trim($memebership_type));
    $givenName                      = ucwords(trim($given_name));
    $surnName                       = ucwords(trim($sur_name));
    $initials                       = strtoupper(trim($initials));
    $maidenName                     = ucwords(trim($maiden_name));
    $gender                         = $gender;
    $dateOfBirth                    = $date_of_birth;
    $nationality                    = $nationality; 
    $countryOfResidence             = $country_of_residence;
    $title                          = ucwords(trim($title));
    $institution                    = ucwords(trim($institution));
    $position                       = ucwords(trim($position));
    $address1                       = ucwords(trim($address1));
    $address2                       = ucwords(trim($address2));
    $city                           = ucwords(trim($city));
    $town                           = ucwords(trim($town));
    $zip_code                       = ucwords(trim($zip_code));
    $country                        = $country;
    $mobile                         = ucwords(trim($mobile));
    $home                           = ucwords(trim($home));
    $work                           = ucwords(trim($work));

    if(trim($personal_email) == ''){
        $personalEmail = trim($work_email);
    }else{
        $personalEmail = trim($personal_email);
    }

    $workEmail                      = trim($work_email);
    $other_qualifications           = ucwords(trim($other_qualifications));
    $institutionDegreeOutput        = ucwords(trim($institutionDegreeOutput));
    $placeOutput                    = ucwords(trim($placeOutput));
    $countryOutput                  = ucwords(trim($countryOutput));
    $yearOfGraduationOutput         = ucwords(trim($yearOfGraduationOutput));
    $currentUndertakingStatus       = $current_undertaking_status;

    if($currentUndertakingStatus == 'yes'){
        $programme_name            = $programme_name;  
    }else{
        $programme_name            =  '';
    }

    $animalCareStatus               = $animal_care;
    if($animalCareStatus == 'yes'){
        $animal_type            = $animal_type;  
        $statementOfInterest            = '';  
    }else{
        $animal_type            =  '';
        $statementOfInterest            = ucwords(trim($statement_of_interest));  
    }

    $careLaboratoryAnimals          = $care_laboratory_animals;

    if($careLaboratoryAnimals == 'yes'){
        $animal_care_institution            = trim($animal_care_institution);
        $animal_care_place            = trim($animal_care_place);
        $animal_care_from            = trim($animal_care_from);
        $animal_care_to            = trim($animal_care_to);
    }else{
        $animal_care_institution            = '';
        $animal_care_place            = '';
        $animal_care_from            = '';
        $animal_care_to            = '';
    }    

    $attendedLaboratoryAnimal       = $attended_laboratory_animal;

    if($attendedLaboratoryAnimal == 'yes'){
        $animal_welfare_training_details_event            = trim($animal_welfare_training_details_event);
        $animal_welfare_training_details_date            = $animal_welfare_training_details_date;
        $animal_welfare_training_details_place            = trim($animal_welfare_training_details_place);
        $animal_welfare_training_details_hidden_tag            = $animal_welfare_training_details_hidden_tag;
    }else{
        $animal_welfare_training_details_event            = '';
        $animal_welfare_training_details_date            = '';
        $animal_welfare_training_details_place            = '';
        $animal_welfare_training_details_hidden_tag            = '';
    } 

    $institutionAnimalFacility      = ucwords(trim($institution_animal_facitlity));
    $fullName1                      = ucwords(trim($fullNames1));
    $emailAddress1                  = trim($emailAddress1);
    $telephone1                     = ucwords(trim($telephone1));
    $fullNames2                     = ucwords(trim($fullNames2));
    $emailAddress2                  = trim($emailAddress2);
    $telephone2                     = ucwords(trim($telephone2));
    $declaration                     = ucwords(trim($declaration));

    $sql = "SELECT * FROM member_info WHERE personal_email = '$personalEmail' || personal_email = '$workEmail'";
    $result = mysqli_query($conn, $sql) or die(mysql_error());
    $row_count = mysqli_num_rows($result);
    if($row_count == 0){
        $sql = "INSERT INTO member_info(members_id,membership_type, given_name, surname, initials, maiden_name, gender, date_of_birth,nationality, country_of_residence, title, institution, position, address1, address2,city,town,zip_code,country, mobile,home,member_info_work,personal_email,work_email,other_qualifications,institution_degree_output,place_output, country_output, year_of_graduation_output, degree, current_undertaking_status, current_undertaking_programme_mode, animal_care_status, animal_type, statement_of_interest, care_laboratory_animals, animal_care_institution, animal_care_place, animal_care_from, animal_care_to, attended_laboratory_animal, animal_welfare_training_details_event, animal_welfare_training_details_date, animal_welfare_training_details_place, animal_welfare_training_details_hidden_tag, institution_animal_facility,
        full_name1, email_address1, telephone1,full_name2,email_address2,telephone2,declaration,
        curriculum_image_status,animal_welfare_image_status,representative_publication1_image_status,representative_publication2_image_status
        )VALUES(NULL,'$memebershipType','$givenName','$surnName','$initials','$maidenName', '$gender','$dateOfBirth','$nationality','$countryOfResidence','$title', '$institution','$position','$address1','$address2','$city','$town','$zip_code', '$country','$mobile','$home','$work','$personalEmail','$workEmail','$other_qualifications', '$institutionDegreeOutput', '$placeOutput','$countryOutput', '$yearOfGraduationOutput','$degreeOutput','$currentUndertakingStatus', '$programme_name','$animalCareStatus', '$animal_type', '$statementOfInterest', '$careLaboratoryAnimals','$animal_care_institution', '$animal_care_place', '$animal_care_from', '$animal_care_to', '$attendedLaboratoryAnimal', '$animal_welfare_training_details_event', '$animal_welfare_training_details_date', '$animal_welfare_training_details_place', '$animal_welfare_training_details_hidden_tag', '$institutionAnimalFacility','$fullName1','$emailAddress1','$telephone1','$fullNames2','$emailAddress2', '$telephone2', '$declaration', '$curriculum_hidden_tag','$animal_welfare_hidden_tag','$publication_hidden_tag1','$publication_hidden_tag2')";
        $result = mysqli_query($conn, $sql);

        if($result == true){
            // Applicant section 
            $body = "<p>Dear $title $surnName,</p>";

            $body .= '<p><i>Thank you for submitting your application to join the membership of ACURET.ORG. Please be aware that your application has been deem complete and would be reviewed by the Membership Committee.</i></p>';

            $body .= '<p><i>You shall be notified on the outcome of this process within the next six weeks.</i></p>';

            $body .= '<p><i>We are delighted at your interest and look forward to the potential of welcoming you on board.</i></p>';

            $body .= '<p><i>Sincerely.</i></p>';

            $body .= '<p><b>ACURET Admin<br>For Chair, Membership Committee.</b></p>';
        
            $emaildata = array(
                'smtphost'=> 'mail.jaytec.com.ng',
                'username'=> 'acuret@jaytec.com.ng',
                'password'=> 'Acuret@2024',
                'from'=> 'acuret@jaytec.com.ng',
                'organization'=> 'Acuret',
                'to'=> $personalEmail,
                'toname'=> $surnName . ' ' . $givenName,
                'subject'=> 'Membership Form Application',
                'body'=> $body,
            );

            $mailsentstatus = $customemailsenderobj->emailSender($emaildata);

            // Acuret section 
            $body = '<h2>Membership Form Application</h2>';
            $body .= "<p>$title $surnName had successfully responded to the membership form</p>";
            $body .= '<p>click to <a href="http://project-form-main.test:9090/vendor/reports/response.php?email='. $personalEmail.'" target="_blank">view</a> applicant information</p>';
            // $body .= '<p>click to <a href="https://jaytec.com.ng/membership-form/vendor/reports/response.php?email='. $personalEmail.'" target="_blank">view</a> applicant information</p>';
            $emaildata = array(
                'smtphost'=> 'mail.jaytec.com.ng',
                'username'=> 'acuret@jaytec.com.ng',
                'password'=> 'Acuret@2024',
                'from'=> 'acuret@jaytec.com.ng',
                'organization'=> 'Acuret',
                'to'=> 'acuret.org@gmail.com',
                // 'to'=> 'abimbolaoladunni8429@gmail.com',
                'toname'=> 'Acuret Admin',
                'subject'=> 'Membership Form Application Acknowledgement',
                'body'=> $body,
            );
            $mailsentstatus = $customemailsenderobj->emailSender($emaildata);            
            echo $mailsentstatus;
            // header("Location:vendor/reports/response.php?email=$personalEmail");            
            // exit;
        }else{
            echo -1;
            exit;
        }
    }else{      
        echo -2;
    }

?>

    
   


    
    


   
    
