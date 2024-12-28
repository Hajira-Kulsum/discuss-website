<?php
    session_start();
    include("../common/db.php");
    

    if(isset($_POST['signUp'])){
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        $user=$conn->prepare("Insert into `users` 
                        (`uid`,`fullname`,`email`,`username`,`password`) 
                        values (NULL,'$fullname','$email','$username','$password')");

        $result=$user->execute();
        if($result){
            $_SESSION["user"]=["username"=>$username,"email"=>$email,"user_id"=>$conn->insert_id];
            header("location: /test/index.php");
            exit();

        }else{
            echo "not executed" ;
        }
    }else if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $username="";
        $user_id=0;

        $query="select * from users where email='$email' and password='$password'";
        $result=$conn->query($query);
        if($result->num_rows==1){
            foreach($result as $row){
                $username=$row['username'];
                $user_id=$row['uid'];
            }
            $_SESSION["user"]=["username"=> $username, "email" => $email,"user_id"=>$user_id];
            header("Location: /test");
        }else{
            echo "Invalid credentials.";
        }

    } else if(isset($_GET['logOut'])){
        session_unset();
        header("Location: /test/index.php");
    }else if(isset($_POST['submit'])) {
        $title=$_POST['title'];
        $description=$_POST['description'];
        $category_id=$_POST['category'];
       
        $user_id = $_SESSION['user']['user_id']; 
        
        $question=$conn->prepare("Insert into `question`
        (`id`,`title`,`description`,`category_id`,`user_id`) 
        values (NULL,'$title','$description','$category_id','$user_id');");

        $result=$question->execute();
        
        if($result){
            header("location: /test");
        }
    }else {
        echo "Question is added to website";
    }
?>