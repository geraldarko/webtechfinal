<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/confirmresult.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
    </div>
    <form>
        <?php 
        require_once("../controllers/criminals_controller.php");

        if (isset($_GET['nationalid'])) {
            $s = $_GET['nationalid'];

            $result = select_criminal($s);
        if ($result) {
        ?>
        <?php
            $row = $result;
                echo "<form action='index.php'>";
                    echo "<h3>";
                    echo "Background Check Results";
                    echo "</h3>";
                    echo "<label for='FName'>";
                    echo "First Name:";
                    echo "<input type='text' value=".$row['firstname']." readonly>";
                    echo "</label>";
                    echo "<label for='SName'>";
                    echo "SurName:";
                    echo "<input type='text' value=".$row['surname']." readonly>";
                    echo "</label>";
                    echo "<label for='OName'>";
                    echo "Other Name(s):";
                    echo "<input type='text' value=".$row['othernames']." readonly>";
                    echo "</label>";
                    echo "<label for='DOB'>";
                    echo "Date of Birth:";
                    echo "<input type='text' value=".$row['dob']." readonly>";
                    echo "</label>";
                    echo "<label for='NationalId'>";
                    echo "National Identification:";
                    echo "<input type='text' value=".$row['nationalid']." readonly>";
                    echo "</label>";
                    echo "<label for='Crime'>";
                    echo "Crime:";
                    echo "<input type='text' value= ".$row['crime']." readonly>";
                    echo "</label>";
                    echo "<label for='DOC'>";
                    echo "Date Of Conviction:";
                    echo "<input type='text' value=".$row['doc']." readonly>";
                    echo "</label>";
                    echo "<div class='buttons'>";
                      echo "<a href='../index.php'><button class='button2' type='button'>";
                        echo "Done";
                      echo "</button></a>";
                    echo "</div>";
                echo "</form>";
                }

            }
     ?>

    </form>
</body>
</html>    

     
                
  
    <!-- <form>
        <h3>Background Check Results</h3>
        <label for="FName">First Name:</label>
        <label for="LName">Last Name:</label>
        <label for="DOB">Date Of Birth:</label>
        <label for="LName">National Identification:</label>
        <label for="Crime">Crime:</label>
        <label for="Date">Date Of Conviction:</label>
        <div class="buttons">
          <button class="button2">Done</button>
        </div>
    </form> -->
 