
<?php
include('database1.php');
$allowedExtensions = array('gif', 'avif', 'jpg', 'png', 'jpeg','svg');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $logoType = $_POST['logoType'];
 /* $logoFile = $_FILES['logoFile'];*/
  $logoText = $_POST['logoText'];
  $navItem1 = $_POST['navItem1'];
  $navItem2 = $_POST['navItem2'];
  $navItem3 = $_POST['navItem3'];
  $navItem4 = $_POST['navItem4'];
  $navItem5 = $_POST['navItem5'];
  $navItem6 = $_POST['navItem6'];
 /* $navItem7 = $_FILES['navItem7'];
  $navItem8 = $_FILES['navItem8'];*/
  $anchor1 = $_POST['anchor1'];
  $anchor2 = $_POST['anchor2'];
  $section1heading1 = $_POST['section1heading1'];
  $section1heading2 = $_POST['section1heading2'];
  $section1para = $_POST['section1para'];
  $section2heading = $_POST['section2heading'];
  $section2para = $_POST['section2para'];
  $anchor3 = $_POST['anchor3'];
 /* $section2img1 = $_FILES['section2img1'];*/
  $section2img1heading = $_POST['section2img1heading'];
  $section2img1para = $_POST['section2img1para'];
  /*$section2img2 = $_FILES['section2img2'];*/
  $section2img2heading = $_POST['section2img2heading'];
  $section2img2para = $_POST['section2img2para'];
 /* $section2img3 = $_FILES['section2img3'];*/
  $section2img3heading = $_POST['section2img3heading'];
  $section2img3para = $_POST['section2img3para'];

  $logoFile = '';
  if (isset($_FILES['logoFile'])) {
      $logoFile = $_FILES['logoFile']['name'];
      $file_tmp1 = $_FILES['logoFile']['tmp_name'];
      $file_extension1 = strtolower(pathinfo($logoFile, PATHINFO_EXTENSION));

      if (!in_array($file_extension1, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp1, "assets/uploads/" . $logoFile);
  }

  $navItem7 = '';
  if (isset($_FILES['navItem7'])) {
      $navItem7 = $_FILES['navItem7']['name'];
      $file_tmp2 = $_FILES['navItem7']['tmp_name'];
      $file_extension2 = strtolower(pathinfo($navItem7, PATHINFO_EXTENSION));

      if (!in_array($file_extension2, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp2, "assets/uploads/" . $navItem7);
  }

  $navItem8 = '';
  if (isset($_FILES['navItem8'])) {
      $navItem8 = $_FILES['navItem8']['name'];
      $file_tmp3 = $_FILES['navItem8']['tmp_name'];
      $file_extension3 = strtolower(pathinfo($navItem8, PATHINFO_EXTENSION));

      if (!in_array($file_extension3, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp3, "assets/uploads/" . $navItem8);
  }

  $section2img1 = '';
  if (isset($_FILES['section2img1'])) {
      $section2img1 = $_FILES['section2img1']['name'];
      $file_tmp4 = $_FILES['section2img1']['tmp_name'];
      $file_extension4 = strtolower(pathinfo($section2img1, PATHINFO_EXTENSION));

      if (!in_array($file_extension4, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp4, "assets/uploads/" . $section2img1);
  }

  $section2img2 = '';
  if (isset($_FILES['section2img2'])) {
      $section2img2 = $_FILES['section2img2']['name'];
      $file_tmp5 = $_FILES['section2img2']['tmp_name'];
      $file_extension5 = strtolower(pathinfo($section2img2, PATHINFO_EXTENSION));

      if (!in_array($file_extension5, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp5, "assets/uploads/" . $section2img2);
  }

  $section2img3 = '';
  if (isset($_FILES['section2img3'])) {
      $section2img3 = $_FILES['section2img3']['name'];
      $file_tmp6 = $_FILES['section2img3']['tmp_name'];
      $file_extension6 = strtolower(pathinfo($section2img3, PATHINFO_EXTENSION));

      if (!in_array($file_extension6, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp6, "assets/uploads/" . $section2img3);
  }

  $section1img = '';
  if (isset($_FILES['section1img'])) {
      $section1img = $_FILES['section1img']['name'];
      $file_tmp7 = $_FILES['section1img']['tmp_name'];
      $file_extension7 = strtolower(pathinfo($section1img, PATHINFO_EXTENSION));

      if (!in_array($file_extension7, $allowedExtensions)) {
       echo "Error: Only GIF, AVIF, JPG, PNG, and JPEG files are allowed.";
       exit();
   }

      move_uploaded_file($file_tmp7, "assets/uploads/" . $section1img);
  }


$sql="SELECT * from websitedata";
$result = $conn->query($sql);

if($result->num_rows >0){
    $row = $result->fetch_assoc();

    if(!empty($logoFile) || !empty($logoText) || !empty($row['logoFile']) || !empty($row['logoText'])) {

    if(!empty($logoFile))
    {
        $sql="UPDATE websitedata SET logoType='$logoType',
         logoFile='$logoFile',
         logoText=' '";
         mysqli_query($conn, $sql);

         if(isset($navItem1)){
            $sql="UPDATE websitedata SET navItem1='$navItem1'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem2)){
            $sql="UPDATE websitedata SET navItem2='$navItem2'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem3)){
            $sql="UPDATE websitedata SET navItem3='$navItem3'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem4)){
            $sql="UPDATE websitedata SET navItem4='$navItem4'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem5)){
            $sql="UPDATE websitedata SET navItem5='$navItem5'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem6)){
            $sql="UPDATE websitedata SET navItem6='$navItem6'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem7)){
            $sql="UPDATE websitedata SET navItem7='$navItem7'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem8)){
            $sql="UPDATE websitedata SET navItem8='$navItem8'";
            mysqli_query($conn, $sql);
         }
         if(isset($anchor1)){
            $sql="UPDATE websitedata SET  anchor1='$anchor1'";
            mysqli_query($conn, $sql);
         }
         if(isset($anchor2)){
            $sql="UPDATE websitedata SET  anchor2='$anchor2'";
            mysqli_query($conn, $sql);
         }
         if(isset($section1heading1)){
            $sql="UPDATE websitedata SET  section1heading1='$section1heading1'";
            mysqli_query($conn, $sql);
         }
         if(isset($section1heading2)){
            $sql="UPDATE websitedata SET  section1heading2='$section1heading2'";
            mysqli_query($conn, $sql);
         }
         if(isset($section1para)){
            $sql="UPDATE websitedata SET  section1para='$section1para'";
            mysqli_query($conn, $sql);
         }
         if(isset($section1img)){
            $sql="UPDATE websitedata SET  section1img='$section1img'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2heading)){
            $sql="UPDATE websitedata SET  section2heading='$section2heading'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2para)){
            $sql="UPDATE websitedata SET  section2para='$section2para'";
            mysqli_query($conn, $sql);
         }
         if(isset($anchor3)){
            $sql="UPDATE websitedata SET  anchor3='$anchor3'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img1)){
            $sql="UPDATE websitedata SET  section2img1='$section2img1'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img1heading)){
            $sql="UPDATE websitedata SET  section2img1heading='$section2img1heading'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img1para)){
            $sql="UPDATE websitedata SET   section2img1para='$section2img1para'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img2)){
            $sql="UPDATE websitedata SET   section2img2='$section2img2'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img2heading)){
            $sql="UPDATE websitedata SET   section2img2heading='$section2img2heading'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img2para)){
            $sql="UPDATE websitedata SET    section2img2para='$section2img2para'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img3)){
            $sql="UPDATE websitedata SET  section2img3='$section2img3'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img3heading)){
            $sql="UPDATE websitedata SET  section2img3heading='$section2img3heading'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img3para)){
            $sql="UPDATE websitedata SET  section2img3para='$section2img3para'";
            mysqli_query($conn, $sql);
         }
        
          echo "inserted 1";
    }
    else{
        $sql="UPDATE websitedata SET logoType='$logoType',
        logoFile=' ',
        logoText='$logoText'";
        mysqli_query($conn, $sql);

        if(isset($navItem1)){
            $sql="UPDATE websitedata SET navItem1='$navItem1'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem2)){
            $sql="UPDATE websitedata SET navItem2='$navItem2'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem3)){
            $sql="UPDATE websitedata SET navItem3='$navItem3'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem4)){
            $sql="UPDATE websitedata SET navItem4='$navItem4'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem5)){
            $sql="UPDATE websitedata SET navItem5='$navItem5'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem6)){
            $sql="UPDATE websitedata SET navItem6='$navItem6'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem7)){
            $sql="UPDATE websitedata SET navItem7='$navItem7'";
            mysqli_query($conn, $sql);
         }
         if(isset($navItem8)){
            $sql="UPDATE websitedata SET navItem8='$navItem8'";
            mysqli_query($conn, $sql);
         }
         if(isset($anchor1)){
            $sql="UPDATE websitedata SET  anchor1='$anchor1'";
            mysqli_query($conn, $sql);
         }
         if(isset($anchor2)){
            $sql="UPDATE websitedata SET  anchor2='$anchor2'";
            mysqli_query($conn, $sql);
         }
         if(isset($section1heading1)){
            $sql="UPDATE websitedata SET  section1heading1='$section1heading1'";
            mysqli_query($conn, $sql);
         }
         if(isset($section1heading2)){
            $sql="UPDATE websitedata SET  section1heading2='$section1heading2'";
            mysqli_query($conn, $sql);
         }
         if(isset($section1para)){
            $sql="UPDATE websitedata SET  section1para='$section1para'";
            mysqli_query($conn, $sql);
         }
         if(isset($section1img)){
            $sql="UPDATE websitedata SET  section1img='$section1img'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2heading)){
            $sql="UPDATE websitedata SET  section2heading='$section2heading'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2para)){
            $sql="UPDATE websitedata SET  section2para='$section2para'";
            mysqli_query($conn, $sql);
         }
         if(isset($anchor3)){
            $sql="UPDATE websitedata SET  anchor3='$anchor3'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img1)){
            $sql="UPDATE websitedata SET  section2img1='$section2img1'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img1heading)){
            $sql="UPDATE websitedata SET  section2img1heading='$section2img1heading'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img1para)){
            $sql="UPDATE websitedata SET   section2img1para='$section2img1para'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img2)){
            $sql="UPDATE websitedata SET   section2img2='$section2img2'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img2heading)){
            $sql="UPDATE websitedata SET   section2img2heading='$section2img2heading'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img2para)){
            $sql="UPDATE websitedata SET    section2img2para='$section2img2para'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img3)){
            $sql="UPDATE websitedata SET  section2img3='$section2img3'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img3heading)){
            $sql="UPDATE websitedata SET  section2img3heading='$section2img3heading'";
            mysqli_query($conn, $sql);
         }
         if(isset($section2img3para)){
            $sql="UPDATE websitedata SET  section2img3para='$section2img3para'";
            mysqli_query($conn, $sql);
         }
        
          echo "done"; 
    }}
    else if(empty($row['logoFile']) && empty($row['logoText']) && empty($logoFile) && empty($logoText)){
      echo "select either image to add or logo to add for the header.";
    }
   
   
  
}
else if(empty($logoType) && empty($logoFile) && empty($logoText) && empty($navItem1) && empty($navItem2) && empty($navItem3) && empty($navItem4) && empty($navItem5) && empty($navItem6) && empty($navItem7) && empty($navItem8) && empty($anchor1) && empty($anchor2) && empty($section1heading1) && empty($section1heading2) && empty($section1para) && empty($section1img) && empty($section2heading) && empty($section2para) && empty($anchor3) && empty($section2img1) && empty($section2img1heading) && empty($section2img1para) && empty($section2img2) && empty($section2img2heading) && empty($section2img2para) && empty($section2img3) && empty($section2img3heading) && empty($section2img3para)) 
{echo "kindly insert data";}
else{
    
    $sql = "INSERT INTO websitedata (logoType, logoFile, logoText, navItem1, navItem2, navItem3, navItem4, navItem5, navItem6, navItem7, navItem8, anchor1, anchor2,section1heading1,section1heading2,section1para, section1img, section2heading, section2para, anchor3, section2img1, section2img1heading, section2img1para, section2img2, section2img2heading, section2img2para, section2img3, section2img3heading, section2img3para) 
  VALUES ('$logoType', '$logoFile', '$logoText', '$navItem1', '$navItem2', '$navItem3', '$navItem4', '$navItem5', '$navItem6', '$navItem7', '$navItem8', '$anchor1', '$anchor2','$section1heading1','$section1heading2','$section1para', '$section1img', '$section2heading', '$section2para', '$anchor3', '$section2img1', '$section2img1heading', '$section2img1para', '$section2img2', '$section2img2heading', '$section2img2para', '$section2img3', '$section2img3heading', '$section2img3para')";
  mysqli_query($conn, $sql);
  echo "inserted 3";
}

}
?>