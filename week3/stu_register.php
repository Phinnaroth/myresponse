<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apply Form</title>
</head>
<style>
  *{ 
        margin:0px;
    }
    
    ul{
        list-style: none;
    }
    ul li{
        float:left;
        padding: 5px 20px;
        background: darkblue;
        cursor: pointer;
        color: #fff;
    }
    ul li:hover{
        background: lightblue;
        color: black;
    }
    ul.sub-menu{
        display:none;
        position: absolute;
    }
    ul.sub-menu li{
        float: none;
    }
    ul li:hover ul.sub-menu{
        display:block;
    }
    header,nav{
        width: 100%;
    }

  .container,
  footer {
    width: 100%;
    padding: 5%;
    padding-left: 10%;
  }
</style>

<body>
  <?php include 'header.php'; ?>
  <div class="container">

    <h2>Student Registration</h2>
    <form action="process_reg.php" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td>
            <label for="full_name">Full Name:</label>
          </td>
          <td>
            <input type="text" id="full_name" name="full_name" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="email">Email:</label>
          </td>
          <td>
            <input type="email" id="email" name="email" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="dob">Date of Birth:</label>
          </td>
          <td>
            <input type="date" id="dob" name="dob" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="course">Course:</label>
          </td>
          <td>
            <select id="course" name="course" required>
              <option >Computer Science</option>
              <option >Digital Business</option>
              <option >Telecoms and Networking</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label for="profile_image">Profile Image:</label>
          </td>
          <td>
            <input type="file" id="profile_image" name="profile_image" accept="image/*" required>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="Register">
          </td>
        </tr>
      </table>
    </form>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>