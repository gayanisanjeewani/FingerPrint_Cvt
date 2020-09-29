
<?php

include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>fingerprint convertor</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Welcome to SMI Fingerprint Convertor</h2>
                </div>
                <div class="card-body">
                   <!-- <form method="POST">-->
				   <form enctype="multipart/form-data" action="index.php" method="POST">
                        <div class="form-row">
              <!--              <div class="name">Full name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="full_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="example@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder="Message sent to the employer"></textarea>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-row">
						  
                            <div class="name">Upload txt file</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file" name="chosen">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload relevant file for process to the fingerprints. Max file size 100 MB</div>
                            </div>
                        </div>
                    
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit" name="sendfile" id="">Send file</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <button class="btn btn--radius-2 btn--blue-2" type="submit" name="process" >Process file</button>
                </form>
<?php
if(isset($_POST['sendfile'])){
 if(!empty($_FILES['file_cv']))
  {
    $path = "fingerpr/";
    $path = $path . basename( $_FILES['file_cv']['name']);

    if(move_uploaded_file($_FILES['file_cv']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['file_cv']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file or already existing file, please try again!";
    }
  }	
	
	
	
	
	
	
	
	
	
/*$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
 if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
} 
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "txt" && $imageFileType != "doc" && $imageFileType != "docx"
 ) {
    echo "Sorry, only txt, doc  & docx files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
 
 */
 
/* 
  $name = $_FILES['file']['name'];  
    $temp_name= $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = '../fingerpr/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
 */
// $filenm=$_POST['file_cv'];
 
 //echo $filenm;
//$target = "fingerpr/";

//$target_file = $target . basename( $_FILES['$filenm']['name']) ;
//echo $target_file;
//$ok=1;

/* $uploaded_type ='data.TXT';

$ext = $target_file['extension'];

if($ext !== 'txt' && $uploaded_type =="text/php"){

  //don't upload

  echo "No PHP files<br>";

 $ok=0;

 } 

 //Here we check that $ok was not set to 0 by an error

 if ($ok==0)

 {

 Echo "Sorry your file was not uploaded";

 }
*/
// Check if file already exists
//if (file_exists($target_file)) {
    ///echo "Sorry, file already exists.";
    //$ok = 0;
//}  

 //If everything is ok we try to upload it

 // else

 // {

 // if(move_uploaded_file($_FILES['$filenm']['tmp_name'], $target_file))

 // {

 // echo "The file ". basename( $_FILES['$filenm']['name']). " has been uploaded";

 // }

 // else

 // {

 // echo "Sorry, there was a problem uploading your file.";

 // }

 // }  

/*
$uploaddir = "fingerpr/";;
$uploadfile = $uploaddir . basename($_FILES['file_cv']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['file_cv']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";
*/



}

















	
if(isset($_POST['process'])){

/*file name finding code*/
$result="";
$dir = "fingerpr/";
/* Hide this */
$hideName = array('.','..','.DS_Store');   

/* While this to there no more files are */
$files = scandir($dir);
foreach($files as $filename) {
    if(!in_array($filename, $hideName)){
    	$findfiles=$filename;
		

/*find already have*/
 $result3="";
 $name="";
$sql3="SELECT `file_name` FROM `attendancefile` WHERE `file_name`='$findfiles'";
  $result3 = mysqli_query($con,$sql3);
  while ($row3=mysqli_fetch_array($result3)) {
    $name = $row3['file_name'];
  }

  if($name<>""){
          $err_message = "all ready convert this files...";
   		  echo $err_message;
      }

else
{
	//filepath
$findpath=$dir.$findfiles;
//echo $findpath;
$myfile = fopen($findpath, "r+") or die("Unable to open file!");
 //Output one line until end-of-file
 $filenameinset="INSERT INTO attendancefile(file_name)VALUES('".$findfiles."')";
 $RES=mysqli_query($con,$filenameinset);     

 $name="";
 $userid="";
 $clock="";
 $time="";
 $i=0;
while(!feof($myfile)) {
  $line_of_text = fgets($myfile);
  ////lines spilt
  $parts = preg_split('/\s+/', $line_of_text);

  $name = $parts[0];
  $userid = $parts[1];
  $clock = $parts[6];
  $time = $parts[7];

  
 // $parts[0] = "";
// echo $findfiles;
///attendance detail insert
if (!empty($clock)&&($i<>0))
{
$in_attend="INSERT INTO student_attendence
(finAct,status,transaction_no,present_date,stu_key,start_time,data_type,cansel,center_key) VALUES
(0,'A','1','".$clock."','1','".$time."','T','0','1')";
$result=mysqli_query($con,$in_attend);
}
  $i++;	
}

fclose($myfile);



}


 
    }
} 



if($result){
			$maxdate="";
      		$success_message = "Insert successfully...";
      		echo $success_message;
			$groupq=mysqli_query($con,"SELECT max(`present_date`)as maxdate FROM `student_attendence`  where center_key = '1'");
            while($row=mysqli_fetch_array($groupq)){
			$maxdate=$row['maxdate'];
			}
			echo "last processed attendence date is $maxdate";
			
			
			
			
			
			
			
			
			
      	}
        else{
        	
          $error_message = "Not insert values...";
          echo $error_message;

        }


 

/*end file name find*/


}					
				
?>	
					
				
				
				
				
				</div>
            </div>
        </div>
    </div>


	
	
	
	

	
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>


	



	
	
	
	
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->