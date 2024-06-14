<?php
    $error = Array();

    // if($_SERVER["REQUEST_METHOD"] == 'GET'){
    //     echo "GET REQUEST";
    // }
    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        // echo "Form submitted successfully";
    
    
      $crn = $_POST['crn'];
      $program = $_POST['program'];
      $semester = $_POST['semester'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];
      $gender = $_POST['gender'];
    
      //Crn number validation
      
         $crn = trim($crn);
         $crn_pattern = "/^[78][0-9]{4}$/";
         if(!strlen($crn) > 0){
          $error['crn_error'] = "CRN number must be of 5 degit.<br> ";
         }
         else{
          if(!preg_match($crn_pattern,$crn)) {
           $error['crn_error'] = "CRN Number is not valid.<br>";
          }
         }

         //program validation 
         if(empty($program)){
           $error['program_error'] = "Please select the program.<br>";
         }

         //semster validation
         if(empty($semester)){
          $error['semester_error'] = "Please select the program.<br>";
        }
  
        //Name Validation 
      $name = trim($name);
      if(!strlen($name) > 0){
          echo "<br>";

          $errors['name_error'] = "Name is required ";
          echo "<br>";

      }
      $pattern = "/^[a-zA-Z ]+$/";//it includes more than one alphabet with space
      if(!preg_match($pattern,$name)){
          echo "<br>";
          echo "<br>";

          $errors['name_error'] = "Name can't contain digits and special characters<br>";
          echo "<bR>";

      }

       //Email validation
       $email = trim($email);
       if(!strlen($email) > 0){
           $errors['email_error'] = "Email can't be blank<br>";
 
       }else{
           $pattern ="/^[a-z0-9\.-_]+@[a-z]+[\.][a-z]+([\.][a-z]{2})?$/";
           if(!preg_match($pattern,$email))
           {
               $errors['email_error'] = "Email address is not valid<br>";
           }
       }
     
     
       //Phone validation
       $phone = trim($phone);
       $phone_pattern = "/^9[87][0-9]{8}$/";
       if(!strlen($phone) > 0){
           $errors['phone_error'] = "Phone number is required.<br>";
         
       }else
       if(!preg_match($phone_pattern,$phone))   {
           $errors['phone_error'] = "Phone number is not valid.<br>";
       }

          
                //password validation
                $password = trim($password);
                if(!strlen($password) > 0){
                    $errors['password_error'] = "password is  required<br>";
            
                }else{
                if(strlen($password) <= 8){
                    $errors['password_error'] = "password should be greater than 8 digits<br>";
                   
                }else{
                    $pattern ="/^[a-zA-Z0-9@\.#]+$/";
                    if(!preg_match($pattern,$password))
                    {
                        $errors['password_error'] = "password is not valid<br>";
                    }
                }
            }

                //confirm password validation
                $confirm_password = trim($confirm_password);
                if(!strlen($confirm_password) > 0){
                    $errors['confirm_password_error'] = "Re enter your password is  required<br>";
            
                }else{
                    
                    if($confirm_password !== $password)
                    {
                        $errors['confirm_password_error'] = "confirm password and password should be same<br>";
                    }
                }

                //Gender validation
                if(empty($gender)){
                    $errors['gender_error']="Please select your gender<br>";
                }
     
         if(!empty($error)){
           
            // header("Location: login.php");
            // header('Location : Login.php');
         }

        //  echo $crn." ".$program." ".$semester." ".$name." ".$email." ".$phone." ".$password." ".$confirm_password." ".$gender;
     //        echo "<pre>";
     //        print_r($errors);
     //        echo "</pre>";
     //  
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="website.css">
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <form method='POST' action="" >
        <!-- <div class="img1">
            <img src="male.jpg" alt="">
        </div> -->
    <div class="wrapper">
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label> CRN Number</label>
                <input type="number" class="input" name="crn" id="crn" ><br>
                <div class="error">
                <?php
                    if(isset($error['crn_error'])){
                        echo $error['crn_error'];
                    }
                ?>
                </div>   
            </div>
            <div class="input_field">
                <label> Program</label>
                <!-- <input type="text" class="input"> -->
               <select name="program" id="program">
                 <option value="">BIM</option>
                 <option value="">BCA</option>
                 <option value="">BHM</option>
                 <option value="">BSc.CSIT</option>
                 <option value="">BBS</option>
               </select><br>
               <div class="error">
               <?php
                 if(isset($error['program_error'])){
                    echo $error['program_error'];
                 }
                ?> 
                </div>   

            </div>
            <div class="input_field">
                <label > Semester</label>
                <select name="semester" id="semester">
                    <option value="">I Sem</option>
                    <option value="">II Sem</option>
                    <option value="">III Sem</option>
                    <option value="">IV Sem</option>
                    <option value="">V Sem</option>
                    <option value="">VI Sem</option>
                    <option value="">VII Sem</option>
                    <option value="">VIII Sem</option>
                    <option value=" ">1st Year</option>
                    <option value=" ">2nd Year</option>
                    <option value=" ">3rd Year</option>
                    <option value=" ">4th Year</option>
                  </select><br>
                <div class="error">

                  <?php
                 if(isset($error['semester_error'])){
                    echo $error['semester_error'];
                 }
                ?> 
                </div>   

            </div>
            <div class="input_field">
                <label> Full Name</label>
                <input type="text" class="input" id="name" name="name"><br>
                <div class="error">

                <?php
                   if(isset($error['name_error'])){
                     echo $error['name_error'];
                   }
                ?>   
            </div>
            </div>   

            <div class="input_field">
                <label> Email</label>
                <input type="text" class="input" id="email" name="email" ><br>
                <div class="error">

                <?php
                   if(isset($error['email_error'])){
                     echo $error['email_error'];
                   }
                ?> 
            </div>
            </div>   

            <div class="input_field">
                <label> Phone no</label>
                <input type="number" class="input" maxlength="10" id="phone" name="phone"><br>
                <div class="error">

                <?php
                   if(isset($error['phone_error'])){
                     echo $error['phone_error'];
                   }
                ?> 
                </div>   

            </div>
            <div class="input_field">
                <label> Password</label>
                <input type="password" class="input" id="passwprd" name="password"  ><br>
                <div class="error">

                <?php
                   if(isset($error['password_error'])){
                     echo $error['password_error'];
                   }
                ?> 
                </div>   

            </div>
            <div class="input_field">
                <label> Confirm Psw</label>
                <input type="password" class="input" id="confirm_password" name = "confirm_password"><br>
                <div class="error">

                <?php
                   if(isset($error['confirm_password_error'])){
                     echo $error['confirm_password_error'];
                   }
                ?>
                </div>   

            </div>
            <div class="input_field">
                <label> Gender</label>
                <div class="custom_select" >
                        <input type="radio" name="gender" id="male" checked>Male
                        <input type="radio" name="gender" id="female">Female
                        <input type="radio" name="gender" id="others" >Other  
                <div class="error">

                        <?php
                   if(isset($error['gender_error'])){
                     echo $error['gender_error'];
                   }
                ?>  
                </div>
            </div> 
            <br>
            <div class="input_field term">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>I agree  to all the  terms and conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn">
            </div>
        </div>
    </div>
 </form>
    
  </body>
</html>