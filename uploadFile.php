<?php
    extract($_POST);
    require_once('dbconn.php');
    $CountArray = count(explode(".",$_FILES["files"]["name"][$index]));
    if(trim($personal_email) == ''){
        $email = trim($work_email);
    }else{
        $email = trim($personal_email);
    }

    switch($index){
        case 0://laboratory animal welfare training certificate
            $filename = $email . '.pdf';
            $upload_dir = 'LabAnimalWelfareTraining'; 
            break;
        case 1://curriculum viatae
            $filename = $email . '.pdf';
            $upload_dir = 'CurriculumVitae'; 
            break;
        case 2://animal welfare certificate
            $filename = $email . '.pdf';
            $upload_dir = 'AnimalWelfareTraining'; 
            break;
        case 3://representative publications 1
            $filename = $email . '.pdf';
            $upload_dir = 'RepresentativePublications1'; 
            break;                        
        case 4://representative publications 2
            $filename = $email . '.pdf';
            $upload_dir = 'RepresentativePublications2'; 
            break;
        default:
            break;                        
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
    if(move_uploaded_file($_FILES['files']['tmp_name'][$index], $targetFile)){//uploads the file in the directory
        // return true;
    }else{
        echo -1;//-2 is unable to upload file
    }
?>