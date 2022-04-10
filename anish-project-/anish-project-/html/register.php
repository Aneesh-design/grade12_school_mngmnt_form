<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <link rel="stylesheet" href="../css/view.css" />
  </head>
  <body>
    <nav>
      <div class="logo"><a href="#">Aneesh</a></div>

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
          <img src="../img/logo.png" alt="logo loading here">
        </div>
        
      </div>
    </nav>
    <div class="container">
    <header class="speaker-form-header">
      <h1>ADD details of students</h1>
      <p><em>You can add details of student from heere</em></p>
     
      <form action="../db/db_conn.php" method="POST" class="speaker-form">
        <table>
          <tr class="tr">
            <td class="label"><label>Name  </label></td>
            <td class="input"><input id="name" name="user1" type="text"></td>
          </tr>
          <tr>
            <td class="label"><label>Email  </label></td>
            <td class="input"><input id="email" name="email" type="text"></td>
          </tr>
          <tr>
            <td class="label"><label >Phone no  </label></td>
            <td class="input"><input  id="phoneno" name="number" type="text"></td>
          </tr>
          <tr>
            <td class="label"><label>Location </label></td>
            <td class="input"><input id="locationn" name="location" type="text"></td>
          </tr>
          <tr>
            <td class="label"><label>FatherName  </label></td>
            <td class="input"><input id="father"  name="fathername" type="text"></td>
          </tr>
          <tr>
            <td class="label"><label>Mother Name   </label></td>
            <td class="input"><input id="mother"  name="mothername" type="text"></td>
          </tr>
          <tr >
            <td class="label"><label>Death of Birth   </label></td>
            <td class="input"><input id="birthday"  name="dob" type="date"></td>
          </tr>
        </table>
        <button style="text-align: center; " class="validateForm" id="add_btn"> Add </button>
        <!-- <input type="submit" value='add'> -->
      </form>
    </header>
</div>


    <script src="../js/app.js"></script>
  


    <script>
      const name = document.getElementById("name");
      const locationn = document.getElementById("locationn");
      const father = document.getElementById("father");
      const mother = document.getElementById("mother");
      const phoneno = document.getElementById("phoneno");
      const birthday = document.getElementById("birthday");
      const email = document.getElementById("email");
      const form = document.querySelector(".speaker-form");

      function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
      }

      function regexPhoneNumber(str) {
        const strNumber = str.toString();

        if (str.length <= 10 && str.length >= 10) {
          let data = strNumber.slice(0, 2);
          if (data !== "98") {
            return false;
          }
          return true
        } else {
          return false;
        }

      }

      form.addEventListener("submit", (e) => {
        // e.preventDefault();

        if (
          !name.value ||
          !locationn.value ||
          !mother.value ||
          !father.value ||
          !email.value ||
          !birthday.value ||
          !phoneno.value
        ) {
          return alert("listen !! all Fields are required. Please fill the form> ");
        }

        const isValidEmail = validateEmail(email.value);
        const isValidPhoneNumber = regexPhoneNumber(phoneno.value);
        if (!isValidEmail) {
          return alert("Unvalid email address entered !! ");
        }

        if (!isValidPhoneNumber) {
          return alert("Only valid numbers are accepted!! ");
        }
        if (new Date()<new Date(Date.parse(birthday.value))) {
          return alert("k vo ?? valid date hanlu pardaina ??? ??  !! ");
        }
        // alert('form submited')
        return true

      })

    </script>
  </body>
</html>
