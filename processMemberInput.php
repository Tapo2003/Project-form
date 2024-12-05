<?php
    require_once('dbconn.php');
    extract($_POST);
   
    
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
   
    
    if(isset($statement_of_interest)){
        $statementOfInterest   = ucwords(trim($statement_of_interest));
    }else{
        $statementOfInterest   = '';
    }
    $memebershipType                = ucwords(trim($memebership_type));
    $givenName                      = ucwords(trim($given_name));
    $surnName                       = ucwords(trim($sur_name));
    $initials                       = ucwords(trim($initials));
    $maidenName                     = ucwords(trim($maiden_name));
    $gender                         = ucwords(trim($gender));
    $dateOfBirth                    = ucwords(trim($date_of_birth));
    $nationality                    = ucwords(trim($nationality)); 
    $countryOfResidence             = ucwords(trim($country_of_residence));
    $title                          = ucwords(trim($title));
    $institution                    = ucwords(trim($institution));
    $position                       = ucwords(trim($position));
    $address1                       = ucwords(trim($address1));
    $address2                       = ucwords(trim($address2));
    $city                           = ucwords(trim($city));
    $town                           = ucwords(trim($town));
    $zip_code                       = ucwords(trim($zip_code));
    $country                        = ucwords(trim($country));
    $mobile                         = ucwords(trim($mobile));
    $home                           = ucwords(trim($home));
    $work                           = ucwords(trim($work));
    $personalEmail                  = trim($personal_email);
    $workEmail                      = trim($work_email);
    $other_qualifications           = ucwords(trim($other_qualifications));
    $institutionDegreeOutput        = ucwords(trim($institutionDegreeOutput));
    $placeOutput                    = ucwords(trim($placeOutput));
    $countryOutput                  = ucwords(trim($countryOutput));
    $yearOfGraduationOutput         = ucwords(trim($yearOfGraduationOutput));
    $currentUndertakingStatus       = ucwords(trim($current_undertaking_status));
    $animalCareStatus               = ucwords(trim($animal_care));
    $animalType                     = ucwords(trim($animal_type));
    $careLaboratoryAnimals          = ucwords(trim($care_laboratory_animals));
    $attendedLaboratoryAnimal       = ucwords(trim($attended_laboratory_animal));
    $AnimalWelfareTrainingDetails   = ucwords(trim($animal_welfare_training_details));
    $animalCareDetails              = ucwords(trim($animal_care_details));
    $institutionAnimalFacility      = ucwords(trim($institution_animal_facitlity));
    $fullName1                      = ucwords(trim($fullNames1));
    $emailAddress1                  = trim($emailAddress1);
    $telephone1                     = ucwords(trim($telephone1));
    $fullNames2                     = ucwords(trim($fullNames2));
    $emailAddress2                  = trim($emailAddress2);
    $telephone2                     = ucwords(trim($telephone2));

    

    $sql = "SELECT * FROM member_info WHERE personal_email = '$personalEmail'";
    
    // $sql = "SELECT * FROM member_info";
    $result = mysqli_query($conn, $sql) or die(mysql_error());
    $row_count = mysqli_num_rows($result);
    if($row_count == 0){
        if($curriculum_hidden_tag == 'T' || $animal_welfare_hidden_tag == 'T' || $publication_hidden_tag1 == 'T' || $publication_hidden_tag2 == 'T' || $picture_hidden_tag == 'T'){
            $sql = "INSERT INTO member_info(members_id,membership_type, given_name, surname, initials, maiden_name, gender, date_of_birth,nationality, country_of_residence, title, institution, position, address1, address2,city,town,zip_code,country, mobile,home,work,personal_email,work_email,other_qualifications,institution_degree_output,place_output, country_output, year_of_graduation_output, current_undertaking_status, animal_type, statement_of_interest, care_laboratory_animals, attended_laboratory_animal, animal_welfare_training_details, animal_care_details, institution_animal_facility, full_name1, email_address1, telephone1,full_name2,email_address2,telephone2,profile_image_status,curriculum_image_status,animal_welfare_image_status,representative_publication1_image_status,representative_publication2_image_status
            )VALUES(NULL,'$memebershipType','$givenName','$surnName','$initials','$maidenName', '$gender','$dateOfBirth','$nationality','$countryOfResidence','$title', '$institution','$position','$address1','$address2','$city','$town','$zip_code', '$country','$mobile','$home','$work','$personalEmail','$workEmail','$other_qualifications', '$institutionDegreeOutput', '$placeOutput','$countryOutput', '$yearOfGraduationOutput','$currentUndertakingStatus', '$animalType', '$statementOfInterest', '$careLaboratoryAnimals', '$attendedLaboratoryAnimal', '$AnimalWelfareTrainingDetails','$animalCareDetails', '$institutionAnimalFacility', '$fullName1','$emailAddress1','$telephone1','$fullNames2','$emailAddress2', '$telephone2','$picture_hidden_tag','$curriculum_hidden_tag','$animal_welfare_hidden_tag','$publication_hidden_tag1','$publication_hidden_tag2')";
            $result = mysqli_query($conn, $sql);
            
            if($result == true){
                $i = 0;
                while($i < count($_FILES["files"]["name"])){
                    if($_FILES['files']['name'][$i] == ""){
      
                    }else{
                        $CountArray = count(explode(".",$_FILES["files"]["name"][$i]));
                        $filename = $_FILES['files']['name'][$i]; 
                        //gets the file name
                        $fileType = pathinfo($filename,PATHINFO_EXTENSION);
                        if ($CountArray>=2){
                            if($i == 0 && ($fileType == 'jpeg' || $fileType == 'jpg' || $fileType == 'png')){
                                $sql = "SELECT * FROM member_info WHERE personal_email = '$personalEmail'";
                                $result = mysqli_query($conn, $sql) or die(mysql_error());
                                $row = mysqli_fetch_assoc($result);  
                                $email = $row['personal_email'];
                                $filename = $email . '.'.$fileType ;
                                $upload_dir = 'memberProfile';
                            }else if($fileType == 'pdf'){
                                switch ($i) {
                                    //if $i is == to each of them
                                    case 1:
                                        $sql = "SELECT * FROM member_info WHERE personal_email = '$personalEmail'";
                                        $result = mysqli_query($conn, $sql) or die(mysql_error());
                                        $row = mysqli_fetch_assoc($result);  
                                        $email = $row['personal_email'];
                                        $filename = $email . '.pdf';
                                        $upload_dir = 'CurriculumVitae'; 
                                        break;
                                    case 2:
                                        $sql = "SELECT * FROM member_info WHERE personal_email = '$personalEmail'";
                                        $result = mysqli_query($conn, $sql) or die(mysql_error());
                                        $row = mysqli_fetch_assoc($result);  
                                        $email = $row['personal_email'];
                                        $filename = $email . '.pdf';
                                        $upload_dir = 'AnimalWelfareTraining'; 
                                        break;
                                    case 3:
                                        $sql = "SELECT * FROM member_info WHERE personal_email = '$personalEmail'";
                                        $result = mysqli_query($conn, $sql) or die(mysql_error());
                                        $row = mysqli_fetch_assoc($result);  
                                        $email = $row['personal_email'];
                                        $filename = $email . '.pdf';
                                        $upload_dir = 'RepresentativePublications1'; 
                                        break;
                                    case 4:
                                        $sql = "SELECT * FROM member_info WHERE personal_email = '$personalEmail'";
                                        $result = mysqli_query($conn, $sql) or die(mysql_error());
                                        $row = mysqli_fetch_assoc($result);  
                                        $email = $row['personal_email'];
                                        $filename = $email . '.pdf';
                                        $upload_dir = 'RepresentativePublications2'; 
                                        break;
                                    default:
                                        break;
                                }
                            }
                            if(is_dir($upload_dir)){
                                //Directory already exist
                            }else{//create the directory
                                mkdir($upload_dir);
                            }
                            $targetFile  = $upload_dir.'/'.$filename;
                            if(file_exists($targetFile))
                               {
                                unlink($targetFile);//unlink php function deletes the file
                            }
                            if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)){//uploads the file in the directory
                               
                                // return true;
                            }else{
                                echo -1;//-2 is unable to upload file
                            }
    
                           
                        }	
                    
                    }
                    $i++;
                }
                echo 1;
            }else{
                echo 'it is not true';
                // exit;
            }
        }else{
            $sql = "INSERT INTO member_info(members_id,membership_type, given_name, surname, initials, maiden_name, gender, date_of_birth,nationality, country_of_residence, title, institution, position, address1, address2,city,town,zip_code,country, mobile,home,work,personal_email,work_email,other_qualifications,institution_degree_output,place_output, country_output, year_of_graduation_output, current_undertaking_status, animal_type, statement_of_interest, care_laboratory_animals, attended_laboratory_animal, animal_welfare_training_details, animal_care_details, institution_animal_facility, full_name1, email_address1, telephone1,full_name2,email_address2,telephone2,profile_image_status,curriculum_image_status,animal_welfare_image_status,representative_publication1_image_status,representative_publication2_image_status
            )VALUES(NULL,'$memebershipType','$givenName','$surnName','$initials','$maidenName', '$gender','$dateOfBirth','$nationality','$countryOfResidence','$title', '$institution','$position','$address1','$address2','$city','$town','$zip_code', '$country','$mobile','$home','$work','$personalEmail','$workEmail','$other_qualifications', '$institutionDegreeOutput', '$placeOutput','$countryOutput', '$yearOfGraduationOutput','$currentUndertakingStatus', '$animalType', '$statementOfInterest', '$careLaboratoryAnimals', '$attendedLaboratoryAnimal', '$AnimalWelfareTrainingDetails','$animalCareDetails', '$institutionAnimalFacility', '$fullName1','$emailAddress1','$telephone1','$fullNames2','$emailAddress2', '$telephone2','$picture_hidden_tag','$curriculum_hidden_tag','$animal_welfare_hidden_tag','$publication_hidden_tag1','$publication_hidden_tag2')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo 1;
            }else{
                echo -1;
            }
        }

    }else{
        echo -2;
    }

    
   


    
    


   
    
