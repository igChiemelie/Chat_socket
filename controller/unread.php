<?php
    session_start();//start seesion
    require '../conn.php';
    $userId = $_SESSION['userId'];
    //count how many messages are unread from the selected user
    // $res6 = $link->query("SELECT * FROM `users` WHERE id != $userId");
    $res6 = $link->query("select users.id, users.username,users.mobile,users.country, count(seen_status) as unread from users LEFT JOIN chats ON users.id = chats.sender and seen_status = 0 and chats.receiver = " . $userId . " where users.id != " . $userId . " group by users.id, users.mobile, users.country, users.username  ORDER by count(seen_status) desc");
    $nmRws6 = $res6->num_rows;
    if ($nmRws6) {

    while($row = $res6->fetch_assoc()){
    # code...
    // array_push($res6_array, $row);

    echo '

    <li class="swipeout">
    <input type="text" id="friendId" value="'.$row['id'].'">
    <input type="hidden" id="userId" value="'.$userId.'">

        <a 
            href="./message?userId='.$row['id'].'"
            class="item-link item-content swipeout-content link">
            <div class="item-media">';

                if($row['unread']){
                    echo '<span class="pending">'.($row['unread']).'</span>';
                }
                
                echo '<img src="./src/avatar-1.jpg"
                    width="48" alt="">
                <div class="offline user-icon-'.($row['id']).'"></div>
            </div>
            <div class="item-inner">
                <div class="item-title-row">
                    <div class="item-title">'.($row['username']).'</div>
                    <div class="item-after ">09:25 AM</div>
                </div>';

                $res =  $link->query('SELECT * FROM chats WHERE receiver = '.$userId.' AND sender = '.$row['id'].'  ORDER BY dateCreated desc LIMIT 1');
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
                    $message = $row['message'];
                    
                    echo'<div class="item-text read">'.$message.'</div>';
                }
                else {
                    echo'<div class="item-text read"><i>No chats yet!!</i></div>';
                }


            echo'</div>
        </a>
        <div class="swipeout-actions-right">
            <a href="#!"
                data-confirm="Are you sure you want to delete this item?"
                class="swipeout-delete"><i class="f7-icons">multiply_circle</i></a>
        </div>
    </li>
    ';
    }

    }                    
?>
