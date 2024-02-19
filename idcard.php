<?php include "header.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>Student ID Card</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
     
    }

    .id-card {
      width: 300px;
      height: 180px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
	  margin: 4% auto;
	  padding:4% 5% 12% 5%;
    }

    .id-card-header {
      background-color: #5cb5b5;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    .id-card-header h2 {
      font-size: 18px;
      margin: 0;
    }

    .id-card-info {
      padding: 10px;
    }

    .id-card-info p {
      margin: 5px 0;
    }

    .id-card-photo {
      text-align: center;
      padding: 10px;
    }

    .id-card-photo img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      border: 2px solid #5cb5b5;
    }

    .id-card-footer {
      background-color: #5cb5b5;
      color: #fff;
      padding: 3px;
      text-align: center;
      margin-top:20px;
    }

    .id-card-footer p {
   
    }
  </style>
</head>
<body>
  <div class="id-card">
    <div class="id-card-header">
      <h2>Student ID Card</h2>
    </div>
    <?php
          
	  $sid=$_GET['stid'];
      $sql1="SELECT * FROM addstudent WHERE id='$sid'";
      
  
      $result1=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result1)>0){
                  $i=1;
              while($row=mysqli_fetch_assoc($result1))
              {		
                  $fullname=$row['fullname'];
                  $address=$row['address'];
                  $rollnumber=$row['rollnumber'];
                  $class=$row['class'];      
                  $imagePath =$row['studentimg'];
                      $i++;
              }
              }
    ?>
    <div class="id-card-info">
	<div class="id-card-photo">
      <img src="upload_img/<?php echo $imagePath;?>" alt="Student Photo">
    </div>
      <p><strong>Name:</strong> <?php echo $fullname;?></p>
      <p><strong>Student rollnumber:</strong>  <?php echo $rollnumber;?></p>
      <p><strong>class:</strong> <?php echo $class;?></p>
      <p><strong>address:</strong>  <?php echo $address;?></p>
    </div>
    
    <div class="id-card-footer">
     
    </div>
  </div>
</body>
</html>
