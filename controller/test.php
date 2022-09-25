<?php
    session_start();//start seesion
    require '../../conn.php';
    $userId = $_SESSION['userId'];
    //count how many messages are unread from the selected user
    // $res6 = $link->query("SELECT * FROM `users` WHERE id != $userId");
    $res6 = $link->query("select users.id, users.username,users.mobile,users.country, count(seen_status) as unread from users LEFT JOIN chats ON users.id = chats.sender and seen_status = 0 and chats.receiver = " . $userId . " where users.id != " . $userId . " group by users.id, users.mobile, users.country, users.username  ORDER by count(seen_status) desc");
    $nmRws6 = $res6->num_rows;
    // echo '<div class="">' . mysqli_error($link) . '</div>';
    if ($nmRws6) {

    while($row = $res6->fetch_assoc()){
    # code...
    // array_push($res6_array, $row);
    if($row['unread']){
        echo '<span class="pending">'.($row['unread']).'</span>';
    }
   
    }

    }                    
?>
 