<?php
  $kaust = "uploads/";
  $ylespilt = $kaust . basename($_FILES["suurpilt"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($ylespilt, PATHINFO_EXTENSION);
  if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["suurpilt"]["tmp_name"]);
	if($check !== false) {
	  echo "File is an image - " . $check["mime"] . ".";
	  $uploadOk = 1;
	} else {
		echo "File not an image.";
		$uploadOk = 0;
	}
  }
  
  
  //kontrolli kas sama nimega fail on juba olemas (hiljem tee nii,
  //et server määrab ise failinimed)
  
  if(file_exists($ylespilt)){
	echo "File exists.";
	$uploadOk = 0;
  }
  
  
  //kontrolli pildi suurust
  
  if ($_FILES["suurpilt"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  
  //luba ainult teatud formaadid
  
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  
  //lae fail yles
  
  if ($uploadOk == 0) {
	echo "File was not uploaded";
  } else {
	if (move_uploaded_file($_FILES["suurpilt"]["tmp_name"], $ylespilt)) {
      echo "Uploaded";
	} else {
	  echo "Upload error";
	}
  }
 

?>