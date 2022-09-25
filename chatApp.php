<?php
    session_start(); //start seesion

    if (isset($_SESSION['loggedIn'])) {
        require './conn.php';

        //Collect data from global session variable
    
        $userId = $_SESSION['userId'];
        $uName = $_SESSION['username'];

    }else{
        header('location: ./');

    }
 

?>

<!DOCTYPE html>

<html lang="en" class="ios device-pixel-ratio-1 device-desktop device-windows">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <title>DreamsChatApp</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="./src/framework7.bundle.min.css">
    <link rel="stylesheet" href="./src/framework7-icons.css">

    <link rel="stylesheet" href="./src/fontawesome.min.css">
    <link rel="stylesheet" href="./src/all.min.css">

    <link rel="stylesheet" href="./src/style.css">
    <link href="./src/css2" rel="stylesheet">
    <style>
      
        .hide{
            display: none;
        }
        .pending{
            position: relative;
            bottom: 1.5rem;
            left: 3.5rem;
            background: #b600ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            /* padding-left: 5px; */
            text-align: center;
            color: #ffffff;
            font-size:12px;
        }
        .chat-list-new .list .item-content {
            /* padding-left: 0px; */
        }
        .item-media .pending{

            margin-left: -1.3rem;
        }
    </style>
</head>

<body>
    <div id="app" class="framework7-root ">
        <div class="splash-screen hide-screen">
            <div class="splash-logo">
                <img src="./src/logo.png" alt="">
            </div>
        </div>
        <div class="view view-main view-init ios-edges" data-url="/">

            <div class="page chat-bg page-previous" data-name="status" aria-hidden="true">
                <div class="page-content">

                    <div class="header">
                        <div class="top-profile">
                            <a href="#!" class="profile">
                                <span class="avatar"><img src="./src/avatar-3.jpg"
                                        alt=""></span>
                                Hi, Jessica
                            </a>
                            <div class="search call-action">
                                <a class="link popover-open"
                                    href="#!"
                                    data-popover=".popover-links">
                                    <img src="./src/hamburger-icon.svg" alt="">                                       
                                </a>

                                <div class="hide showLogout" style="position:relative;top: 1.2rem;right: 1.6rem;" >
                                    <a class="logout" href="./logout" style="color:white;text-decoration: underline;">
                                        Logout
                                    </a>
                                </div>

                                <div class="popover popover-links">
                                    <div class="popover-inner">
                                        <div class="list">
                                            <ul>
                                                <li><a class="list-button item-link popover-close"
                                                        href="#!">New
                                                        Group</a></li>
                                                <li><a class="list-button item-link popover-close"
                                                        href="#!">Contacts</a>
                                                </li>
                                                <li><a class="list-button item-link popover-close"
                                                        href="#!">Settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar">
                            <li class="nav-item">
                                <a class="nav-link camera-icon"
                                    href="#!"><img
                                        src="./src/camera.png" alt=""></a>
                                <input type="file" name="photo" class="custom-file-upload">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="#!">Chat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="#!">Group</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"
                                    href="#!">Status</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="#!">Call</a>
                            </li>
                        </ul>
                    </div>


                   

                </div>
            </div>
            <div class="page chat-bg page-current" data-name="chat">
                <div class="page-content">

                    <div class="header">
                        <div class="top-profile">
                            <a href="#!" class="profile">
                                <span class="avatar"><img src="./src/avatar-3.jpg"
                                        alt="" style="width: 100%;height: 50px">

                                </span>
                                <span class="username" style="background:transparent;color:black">
                                    <?php echo 'Hi, ' .$uName?>
                                </span>
                                
                            </a>
                            <div class="search">
                                <a href="#!"
                                    class="search-icon"><img src="./src/search.png"
                                        alt=""></a>
                                <a class="link popover-open"
                                    href="#!"
                                    data-popover=".popover-links"><img
                                        src="./src/hamburger-icon.svg" alt=""></a>
                                <div class="popover popover-links">
                                    <div class="popover-inner">
                                        <div class="list">
                                            <ul>
                                                <li><a class="list-button item-link popover-close"
                                                        href="#!">New
                                                        Group</a></li>
                                                <li><a class="list-button item-link popover-close"
                                                        href="#!">Contacts</a>
                                                </li>
                                                <li><a class="list-button item-link popover-close"
                                                        href="#!">Settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        <ul class="navbar">
                            <li class="nav-item">
                                <a class="nav-link camera-icon"
                                    href="#!">
                                    <img src="./src/camera.png" alt="">
                                </a>
                                <input type="file" name="photo" class="custom-file-upload">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"
                                    href="#!">Chat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="#!">Group</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="#!">Status</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="#!">Call</a>
                            </li>
                        </ul>
                        
                    </div>

                    <div class="chat-list-new">
                        <div class="container">
                            <div class="list no-hairlines media-list chat-list searchbar-found">
                                <ul id="users">
                                    <?php
                                         //count how many messages are unread from the selected user
                                        // $res6 = $link->query("SELECT * FROM `users` WHERE id != $userId");
                                        $res6 = $link->query("select users.id, users.username,users.mobile,users.country, count(seen_status) as unread from users LEFT JOIN chats ON users.id = chats.sender and seen_status = 0 and chats.receiver = " . $userId . " where users.id != " . $userId . " group by users.id, users.mobile, users.country, users.username  ORDER by count(seen_status) desc");
                                        $nmRws6 = $res6->num_rows;
                                        // echo '<div class="">' . mysqli_error($link) . '</div>';
                                        if ($nmRws6) {
                                            
                                            while($row = $res6->fetch_assoc()){
                                                # code...
                                                
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
                                                                <div class="offline user-icon-'.($row['id']).' "></div>
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

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popover-backdrop"></div>

    </div>

    <script src="./src/jquery-3.5.1.min.js"></script>
    <!-- <script src="./src/framework7.bundle.min.js"></script> -->
    <!-- <script src="./src/routes.js"></script> -->
    <!-- <script src="./src/app.js"></script> -->
    <script src="assets/js/socket.io.js"></script>
    <script src="assets/js/socketApp.js"></script>

</body>
</html>