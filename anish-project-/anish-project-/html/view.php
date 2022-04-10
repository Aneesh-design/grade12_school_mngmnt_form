<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Speaker Submission</title>
    <link rel="stylesheet" href="../css/view.css" />
  </head>
  <body>
    <nav>
      <div class="logo"><a href="#">Anish</a></div>

      <div class="navItems">
        <li>
          <a href="register.php">Add </a>
        </li>
        <li>
          <a href="view.php">View  </a>
        </li>
        <li>
          <a href="index.html">Logout </a>
        </li>
      

        <div class="image">
          <img src="../img/logo.png" alt="">
        </div>
        
      </div>
    </nav>
      <form action="" method="get">
    <header class="speaker-form-header">
      <h1 >View student details here</h1>
      <p><em>You can view student details here by searching them.</em></p>
      <div class="search">
        <input placeholder="Search more here ! " name="getId" type="text">
        <button type="submit" name="S">search</button>
        </form>
      </div>
    
    
<?php
      $server = "127.0.0.1";
      $sername = "root";
      $password = "";
      $database = "student_reg";

      $conn =  mysqli_connect($server, $sername, $password, $database);
        if (!empty($_GET['getId'])) {
          $name = $_GET['getId'];
          $query = "SELECT * FROM `register` WHERE username like '%$name%' ";
          $query_run = mysqli_query($conn, $query);

          if ($row = mysqli_fetch_assoc($query_run))
          {
            ?>
            <div class="results">

            
            
              <p style="border: 3px solid black; background-color: black; color: white; border-top-width: 15px; border-bottom-width: 15px;">
                <?php echo "Username: " .$row['username']?></p>
              <p style="border: 3px solid black; background-color: black; color: white; border-top-width: 15px; border-bottom-width: 15px;">
              <?php echo "Email:  " . $row['email'] ?>
            </p><br>
              <p style="border: 3px solid black; background-color: black; color: white; border-top-width: 15px; border-bottom-width: 15px;">
              <?php echo "location :  " . $row['location1'] ?>
            </p><br>
              <p style="border: 3px solid black; background-color: black; color: white; border-top-width: 15px; border-bottom-width: 15px;">
              <?php echo "phone number: " . $row['phnumber'] ?>
            </p><br>
              <p style="border: 3px solid black; background-color: black; color: white; border-top-width: 15px; border-bottom-width: 15px;">
              <?php echo "father name:  " . $row['fname1'] ?>
            </p><br>
              <p style="border: 3px solid black; background-color: black; color: white; border-top-width: 15px; border-bottom-width: 15px;">
              <?php echo "mother name:  " . $row['mname1'] ?>
            </p><br>
              <p style="border: 3px solid black; background-color: black; color: white; border-top-width: 15px; border-bottom-width: 15px;">
              <?php echo "dob:  " . $row['dob1'] ?>
            </p><br>
              <p style="border: 3px solid black; background-color: black; color: white; border-top-width: 15px; border-bottom-width: 15px;">
             
            </p><br>
            
            </div>
            <input type="button" value ="edit "id="edit">
            <?php
          }
          else{
            echo "NO DATA AVAILABLE";
          }
        }

    ?>
    </header>

   <script>
      let edit_btn = document.querySelector('#edit');
      console.log(edit_btn);
      const urls = window.location.search;
      
      const url = `http://localhost/anish-project-/anish-project-/html/edit.php${urls}`;
    
      edit_btn.addEventListener('click',()=> window.location.href = url)
   </script>
  </body>
</html>
