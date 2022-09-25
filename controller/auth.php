<?php
if(isset($_POST['reg'])){//register

    session_start();//start seesion
    require '../conn.php';
    
    
    // $userId = time();
    $username = $_POST['username'];
    $country = $_POST['country'];
    $mobile = $_POST['mobile'];
    $date = date("Y-m-d");

    // if sqlName exists in the user table print error
    $sqlName = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($link, $sqlName);
    if (!$result) {
        echo '<div class="error">Error running the query!</div>';
        exit;
    }
    $results = mysqli_num_rows($result);
    if ($results) {
        echo '401';
        exit;
    }


    $sql = $link->query('INSERT INTO users (username, country, phone, date) VALUES ("' . $username . '","' . $country . '","' . $mobile . '","' . $date . '","' . $date . '")');
    // echo '<div class="">' . mysqli_error($link) . '</div>';
    $inserted = $link->affected_rows;
  

    if ($inserted) {
        //LOGIN SECTION
        // session_start();//start seesion

        $userId = $link->insert_id;
        // $_SESSION["id"] = $userId;
        $_SESSION["loggedIn"] = true;
        $_SESSION["userId"] = $userId;
        $_SESSION["username"] = $username;

        // $_SESSION["email"] = $email;

        echo 200;

    }
    else {
        // echo 'error';
        echo 501;
    }


} elseif(isset($_POST['login'])){
    session_start();//start seesion
    require '../conn.php';

    $uName = $_POST['uName'];
    $mobileNo = $_POST['mobileNo'];
    
    $res = $link->query('SELECT * FROM users WHERE username = "'.$uName.'"  AND mobile = "' . $mobileNo . '"');
    $nmRws = $res->num_rows;
    // echo '<div class="">' . mysqli_error($link) . '</div>';


    //LOGIN SECTION
    if ($nmRws == 1) {
    

        $row = $res->fetch_assoc();

        $_SESSION["loggedIn"] = true;
        $_SESSION["userId"] = $row['id'];
        // $_SESSION["userId"] = $row['userId'];
        $_SESSION["username"] = $row['username'];
        // $_SESSION["userType"] = $row['userType'];
        // $_SESSION["user_status"] = $row['user_status'];
        echo 200;


    }
    else {
        echo 501;
    }

} elseif(isset($_POST['chatbtn'])){
    session_start();//start seesion
    require '../conn.php';
    $userId = $_SESSION['userId'];
    $messageChat = $_POST['messageChat'];
    $receiver = $_POST['receiver'];
    // $mobileNo = $_POST['mobileNo'];
    
    $sql = $link->query('INSERT INTO chats (sender, receiver, message) VALUES ("' . $userId . '","' . $receiver . '","' . $messageChat . '")');
    // echo '<div class="">' . mysqli_error($link) . '</div>';
    $inserted = $link->affected_rows;
  

    if ($inserted) {
        echo 200;
    }
    else {
        // echo 'error';
        echo 501;
    }





} elseif(isset($_POST['seenBtn'])){
    session_start();//start seesion
    require '../conn.php';
    $userId = $_SESSION['userId'];
    $seen_status = $_POST['seen_status'];
    $receiver = $_POST['receiver'];
    // $receiver = $_POST['receiver'];
    // $mobileNo = $_POST['mobileNo'];
   
    $resUpdate = $link->query('UPDATE chats SET seen_status = 1 WHERE sender = '.$receiver.' AND receiver = '.$userId);
    echo '<div class="">' . mysqli_error($link) . '</div>';
    $updated = $link->affected_rows;

    if ($updated > 0) {
        // echo 200;
    }
    else {
        // echo 501;
    }

} 
else {
    // echo 401;//unauthorized access
    header('location: ../index');

}
?>
