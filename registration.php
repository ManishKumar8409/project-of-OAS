<?php
session_start();


if(isset($_SESSION['username'])){



}

else{

    header('Location: http://localhost/project/login.html');


}










?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div id="R"> 
    <div class="registration-container">
        <h2>Registration Form</h2>
        <form action="" method="post" class="registration-form">
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" placeholder="Full Name" required>
            </div>
            
            <div class="form-group">
                <label for="fatherName">Father's Name:</label>
                <input type="text" id="fatherName" name="fatherName" placeholder="Father's Name" required>
            </div>
            <div class="form-group">
                <label for="motherName">Mother's Name:</label>
                <input type="text" id="motherName" name="motherName" placeholder="Mother's Name" required>
            </div>
            <div class="form-group">
                <label for="marks10th">10th Marks (%):</label>
                <input type="number" id="marks10th" name="marks10th" placeholder="10th Marks" min="0" max="100" required>
            </div>
            <div class="form-group">
                <label for="marks12th">12th Marks (%):</label>
                <input type="number" id="marks12th" name="marks12th" placeholder="12th Marks" min="0" max="100">
            </div>
            <div class="form-group">
                <label for="department">Department (Optional):</label>
                <select id="department" name="department">
                    <option value="" disabled selected>Select Department</option>
                    <option value="science">Science</option>
                    <option value="commerce">Commerce</option>
                    <option value="arts">Arts</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <!-- <h3>Full Address</h3>
            <div class="form-group">
                <label for="village">Village:</label>
                <input type="text" id="village" name="village" placeholder="Village" required>
            </div>
            <div class="form-group">
                <label for="postOffice">Post Office:</label>
                <input type="text" id="postOffice" name="postOffice" placeholder="Post Office" required>
            </div>
            <div class="form-group">
                <label for="pincode">Pincode:</label>
                <input type="text" id="pincode" name="pincode" placeholder="Pincode" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" id="state" name="state" placeholder="State" required>
            </div> -->
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" placeholder="Country" required>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
































<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="parent">

        <div id="addheading">
            <h1>Registration form </h1>


            <div id="input-data">

                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">



                        <label style="color: rgb(12, 119, 207); font-size: 20px;">Select Photo</label>
                        <input type="file" name="pdf" class="form-control" placeholder="photo" required>

                        <br>
                        <br>
                        <input type="text" name="Name" class="form-control" placeholder="First Name" required>

                        <br>
                        <br>
                        <input type="text" name="Name" class="form-control" placeholder="Last Name" required>
                        <br>
                        <br>
                        <input type="text" name="Name" class="form-control" placeholder="10th Mark in %" required>
                        <br>
                        <br>
                        <input type="text" name="Name" class="form-control" placeholder="12th Mark in %" required>




                        <br>
                        <br>

                        <h3>Choose Department</h3>
                        <select id="course">

                            <option value="B.tech">B.TECH
                            </option>
                            <option value="BCA">BCA</option>
                            <option value="MCA">MCA</option>
                            <option value="MBA">MBA</option>
                            <option value="BBA">BBA</option>
                            <option value="AGRICULTURE">AGRICULTURE</option>




                        </select>









                        <br>
                        <br>
                        <input type="text" name="Name" class="form-control" placeholder="Address" required>
                        <br>
                        <br>
                        <input type="text" name="Name" class="form-control" placeholder="Pin code " required>
                        <br>
                        <br>
                        <input type="text" name="Name" class="form-control" placeholder="State" required>

                        <br>
                        <br>
                        <br>




                    </div>
                    <input type="submit" id="save-btn" value="upload" required />
                </form>





            </div>





        </div>
    </div>

    <!-- <?php


if(isset($_POST['upload'])) {

$file_name = $_FILES['myfile']['name'];

$file_tmp_name = $_FILES['myfile']['tmp_name'];

if(move_uploaded_file($file_tmp_name, "upload/".$file_name)){

echo "File uploaded successfully.";

}

else{

echo "Error.... Please try again.";

}

}

 ?><br> -->







</body>

</html> -->