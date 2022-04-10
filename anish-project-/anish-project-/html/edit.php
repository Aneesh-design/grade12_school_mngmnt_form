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
            <a href="index.html">logout</a>
          </li>
        

        <div class="image">
          <img src="../img/logo.png" alt="">
        </div>
        
      </div>
    </nav>
    <?php
      $server = "127.0.0.1";
      $sername = "root";
      $password = "";
      $database = "student_reg";
      if (!empty($_GET)){
        $name = $_GET['getId'];
      } else {
        $name = "none";
      }
      $conn =  mysqli_connect($server, $sername, $password, $database);
      if ($conn){
        $query = "SELECT * FROM register WHERE username like '%$name%'";
        $data = mysqli_query($conn, $query);
        // echo $data['username'];
        while ($row = mysqli_fetch_array($data)){
      

    ?>
    <header class="speaker-form-header">
      <h1>Update Student Details</h1>
      <p><em>You can edit or delete student details here</em></p>
      
      <form  method="POST" class="speaker-form">
        <p class="cross" id='delete_btn' >X</p>
        <table>
          <tr class="tr">
            <td class="label"><label>Name  </label></td>
            <td class="input"><input id="name" value="<?php echo $row['username']?>" name="name" type="text"></td>
          </tr>
          <tr>
            <td class="label"><label>Email  </label></td>
            <td class="input"><input id="email" name="email" value="<?php echo $row['email']?>"  type="email"></td>
          </tr>
          <tr>
            <td class="label"><label >Phone no  </label></td>
            <td class="input"><input  id="phoneno" name="phoneno" value="<?php echo $row['phnumber']?>" type="text"></td>
          </tr>
          <tr>
            <td class="label"><label>Location </label></td>
            <td class="input"><input id="location" name="location" value="<?php echo $row['location1']?>" type="text"></td>
          </tr>
          <tr>
            <td class="label"><label>FatherName  </label></td>
            <td class="input"><input id="father" name="father" value="<?php echo $row['fname1']?>" type="text"></td>
          </tr>
          <tr>
            <td class="label"><label>Mother Name   </label></td>
            <td class="input"><input id="mother" name="mother" value="<?php echo $row['mname1']?>" type="text"></td>
          </tr>
          <tr >
            <td class="label"><label>Death of Birth   </label></td>
            <td class="input"><input id="birthday" name="birthday" value="<?php echo $row['dob1']?>" type="date"></td>
          </tr>
        </table>
        <button style="text-align: center; " class="validateForm">Edit   </button>
      </form>
      <?php
      if ($_POST){
        $server = "127.0.0.1";
        $sername = "root";
        $password = "";
        $database = "student_reg";

        $username = $_POST['name'];
        $email = $_POST["email"];
        $phnumber = $_POST["phoneno"];
        $location1 = $_POST["location"];
        $fname1 = $_POST["father"];
        $mname1 = $_POST["mother"];
        $dob1 = $_POST["birthday"];
        $name =$_GET['getId'];
        $query = "UPDATE `register` SET username='$username', email='$email', phnumber='$phnumber',location1='$location1',fname1='$fname1',mname1='$mname1',dob1='$dob1' WHERE username='$name'";
        $conn =  mysqli_connect($server, $sername, $password, $database);
        
        if ($conn)
        {
          echo "DB SUCCESS";
          $d = mysqli_query($conn,$query);
          
          echo $row['email'];
          

        } else {
          header('location:../html/index.html');
        }
        
        
      }
      
      ?>
      <?php
      }
      }
      ?>
      <?php
      $server = "127.0.0.1";
      $sername = "root";
      $password = "";
      $database = "student_reg";
      if (!empty($_GET)){
        $name =$_GET['getId'];
      }
      
      $conn =  mysqli_connect($server, $sername, $password, $database);
        if (!empty($_GET['getId'])) {
          $name = $_GET['getId'];
          
          $query = "SELECT * FROM `register` WHERE username like '%$name%' ";
          $result = mysqli_query($conn, $query);
        }

          if ($row = mysqli_fetch_assoc($result))
          {
            echo "DB SUCCESS";
            echo $row['email'];
          }

            ?>
      
    </header>
    <script>
      let delete_btn = document.querySelector('#delete_btn');
      const urls = window.location.search;

      const url = `http://localhost/anish-project-/anish-project-/html/delete.php${urls}`
      console.log(url);
      delete_btn.addEventListener('click',()=> window.location.href = url)
    </script>
  </body>
</html>

