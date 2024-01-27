<?php
      session_start();
      include_once "config.php";
      $fname = mysqli_real_escape_string($conn, $_POST['fname']);
      $lname = mysqli_real_escape_string($conn, $_POST['lname']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        //chalo daak taa hai user email valid hai yaaa nhi???
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //chalo daak taa hai ya email koi aur na toh nhi liya hai???
            $sql =mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                // koi eamil pahala sa la liya haa toh
                echo "$email - This email already exist!";
            }else{
                //chalo dak ta hai user photo upload kiya ya nhi
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name']; // getting user uploaded img name
                    $tmp_name = $_FILES['image']['tmp_name']; //This temporary name is used to save filein our folder

                    //let explode image and get the last extension like png jpg
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); //here we get the extension of an user uplad

                    $extensions = ['png', 'jpg', 'jpeg','svg','heic']; // kuch file extension ka naamjo ki arry ma story kara gaa
                    if(in_array($img_ext, $extensions) === true){
                         $time = time(); // this will retur us current time
                         $new_img_name = $time.$img_name;

                         if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                         $status = "Active Now"; // ek baar user signed up uska staus active hoga ya bhai
                         $random_id = rand(time(), 100000000);// creating random id for user

                         //let insert all user data inside table
                         $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                VALUE ({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')");
                        if($sql2){
                                   $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email =  '{$email}'");
                                   if(mysqli_num_rows($sql3) >0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id']; //using this session we used user unique_id in other php file
                                    echo "success";
                                   }
                        } else{
                            echo "Something went wrong!";
                        }
                    } 
                    }else{
                        echo "Please select an Image file - jpeg, jpg, png";    
                    }

                }else{
                    echo "Please select an Image File!";
                }
            }

        }else{
            echo" $email -This is not a valid email!";
            
        }

      }else{
        echo"All input field are reqired!";
      }
?>