<?php
session_start();
include("../common/db.php");
ini_set('display_errors', 1);
error_reporting(E_ALL);


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
        header("location: /discuss-website");
        exit();

    }else{
        echo "not executed" ;
    }
} else if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) { // Verify hashed password
            $_SESSION["user"] = [
                "username" => $row['username'],
                "email" => $email,
                "user_id" => $row['uid']
            ];
            header("Location: /discuss-website");
            exit();
        } else {
            echo "Invalid credentials.";
        }
    } else {
        echo "Invalid credentials.";
    }
} else if (isset($_GET['logOut'])) {
    session_unset();
    header("Location: /discuss-website");
    exit();
} else if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $user_id = $_SESSION['user']['user_id'];

    // Use prepared statement to insert question data
    $question = $conn->prepare("INSERT INTO `questions` (`title`, `description`, `category_id`, `user_id`) 
                                VALUES (?, ?, ?, ?)");
    $question->bind_param("ssii", $title, $description, $category_id, $user_id);

    if ($question->execute()) {
        header("Location: /discuss-website");
        exit();
    } else {
        echo "Question not added to website";
    }
} else if (isset($_POST["answer"])) {
    $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $user_id = $_SESSION['user']['user_id'];

    // Use prepared statement to insert answer data
    $query = $conn->prepare("INSERT INTO `answers` (`answers`, `question_id`, `user_id`) 
                             VALUES (?, ?, ?)");
    $query->bind_param("sii", $answer, $question_id, $user_id);

    if ($query->execute()) {
        header("Location: /discuss-website?q-id=$question_id");
        exit();
    } else {
        echo "Answer is not submitted";
    }
} else if (isset($_GET["delete"])) {
    $qid = $_GET["delete"];

    // Use prepared statement to delete question
    $query = $conn->prepare("DELETE FROM questions WHERE id = ?");
    $query->bind_param("i", $qid);
    if ($query->execute()) {
        header("Location: /discuss-website");
        exit();
    } else {
        echo "Question not deleted";
    }
}
?>
