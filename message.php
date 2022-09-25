<?php
    session_start(); //start seesion

    if (isset($_SESSION['loggedIn'])) {
        require './conn.php';

        //Collect data from global session variable
    
        $userId = $_SESSION['userId'];
        $uName = $_SESSION['username'];

        if(isset($_GET['userId'])){    
            $friendId = $_GET['userId'];
            // print_r($friendId);
        
            // $res =  $db->query('SELECT fileuploads.id, users.username, fileuploads.mediaType,fileuploads.fileName,fileuploads.datePosted, fileuploads.title, fileuploads.userId FROM users,fileuploads WHERE users.id =  '.$userId.' AND fileuploads.userId = '.$userId.' ORDER BY fileuploads.datePosted DESC');

            $res =  $link->query('SELECT * FROM users WHERE id = '.$friendId);
            $nmRws = $res->num_rows;
      

            if($nmRws > 0){
                while($row = $res->fetch_assoc()){
                     $uName = $row['username'];     
                     $mobile = $row['mobile'];     
                    
                }
               
            }else {
               echo  'no data';
            }
        }

       
        $resUpdate = $link->query('UPDATE chats SET seen_status = 1 WHERE sender = '.$friendId.' AND receiver = '.$userId);
        // echo '<div class="">' . mysqli_error($link) . '</div>';
        $updated = $link->affected_rows;

        if ($updated > 0) {
            // echo 200;
        }
        else {
            // echo 501;
        }

        //get all mesaage for the selected user
        //getting those message which is from = Auth::id() = user_id OR from = user_id and to = Auth::id();
    

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
    <title>DreamsChatsApp</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <link rel="stylesheet" href="./src/framework7.bundle.min.css">
    <link rel="stylesheet" href="./src/framework7-icons.css">

    <link rel="stylesheet" href="./src/fontawesome.min.css">
    <link rel="stylesheet" href="./src/all.min.css">

    <link rel="stylesheet" href="./src/style.css">
    <link href="./src/css2" rel="stylesheet">
   
</head>

<body onload="pageScroll()">
    <div id="app" class="framework7-root">
        
        
            <div class="page chat-bg page-current" data-name="chat-view">
                <div class="page-content messages-content">

                    <div class="header header-small">
                        <div class="top-profile">
                            <div class="profile">
                                <a href="./chatApp"
                                    class="back-btn back">
                                    <img src="./src/arrow.png" alt="">
                                </a>
                                <a href="#!" class="profile">
                                    <span class="avatar">
                                    <?php
                                                echo '
                                                        <div class="offline user-icon-'.($friendId).' ">
                                                    </div>';
                                                // echo 'Last seen';
                                            ?>
                                        <img src="./src/avatar-1.jpg" alt="">
                                        
                                </span>
                                   
                                   <?php echo $uName;?>
                                   <div style="margin-left: -1.4rem;">
                                    <br>
                                       <small>
                                          
                                        </small>
                                   </div>
                                </a>
                            </div>
                            <div class="search call-action">
                                <a href="#!"><img
                                        src="./src/video.png" alt=""></a>
                                <a href="#!"><img
                                        src="./src/call.png" alt=""></a>
                            </div>
                        </div>
                    </div>

                    <div class="messages">
                        <?php
                            // $res =  $link->query('SELECT * FROM users WHERE id = '.$friendId);
                            $res =  $link->query('SELECT * FROM chats WHERE receiver = '.$userId.' AND sender = '.$friendId.' OR receiver = '.$friendId.' and sender = '.$userId);
                            $nmRws = $res->num_rows;
                      
                
                            if($nmRws > 0){
                                while($row = $res->fetch_assoc()){
                              
                                    if($row['sender'] == $userId){
                                        echo '
                                            <div class="message message-sent message-first">
                                                <div class="message-content">
                                                    <div class="message-bubble">
                                                        <div class="message-text">'.$row['message'].'</div>
                                                    </div>
                                                    <div class="message-footer">'.(date('d M y, h:i a', strtotime($row['dateCreated']))).'<img src="./src/green-tick.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }else{
                                        echo '
                                            <div class="message message-received message-first message-last message-tail">
                                                <div class="message-content">
                                                    <div class="message-bubble">
                                                        <div class="message-text">'.$row['message'].'</div>
                                                    </div>
                                                    <div class="message-footer">'.(date('d M y, h:i a', strtotime($row['dateCreated']))).'</div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                               
                            }else {
                               echo  '
                                <div class="today-col">
                                    <span>Today</span>
                                </div>
                               ';
                            }
                        ?>
                  

                    </div>

                    <form id="sendMessage"  method="post">
                        <input type="hidden" id="userId" value="<?php echo $userId;?>">
                        <input type="hidden" id="receiverId" value="<?php echo $friendId;?>">
                        <div class="toolbar messagebar">
                            <div class="toolbar-inner">
                                <div class="messagebar-area">
                                    <textarea id="messageChat" name="message" placeholder="Type your message"></textarea>
                                </div>
                                <div class="media-buttons">
                                    <ul>
                                        <li>
                                            <a href="#!"><img
                                                    src="./src/attachment.png" alt=""></a>
                                            <input type="file" name="photo" class="custom-file-upload">
                                        </li>
                                        <li>
                                            <a href="#!"><img
                                                    src="./src/camera-gray.png" alt=""></a>
                                            <input type="file" name="photo" class="custom-file-upload">
                                        </li>
                                        <li>
                                            <a href="#!"><img
                                                    src="./src/voice-record.png" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="messagebar-sheet"></div>
                        </div>
                    </form>
                </div>
            </div>
    </div>

    <script src="./src/jquery-3.5.1.min.js"></script>
    <script src="assets/js/socket.io.js"></script>
    <script src="assets/js/socketApp.js"></script>
    <script src="assets/js/instance.js"></script>

    <script>
        function pageScroll() {
            
            window.scrollBy(0, 150);
        }

        socket.on('updateUserStatus', (data) => { 
            // console.log(data);
            $.each(data, function (key, val) {
                if(val !== null && val !== 0){
                    // alert(val);
                    let $userIcon = $('.user-icon-'+key);
                    $userIcon.removeClass('offline');
                    $userIcon.addClass('online');
                    $userIcon.attr('title', 'Online');
                }
            });
            
        });

        // scrollToButtonFunc();
        // function scrollToButtonFunc() {
        //     alert('hrer');
        //     $('.messages').animate({
        //         scrollTop:$('.messages').get(0).scrollHeight
        //     }, 100);
        // }
        // window.scrollTo(0, document.querySelector(".messages").scrollHeight);

        // sendMessage
        // $('.messagebar-area').keyup(function(e){
        //     // e.preventDefault();
        //     let message = $(this).html();
        //     if(e.which == 13 && !e.shiftKey){
        //         alert('here');
        //         sendMessage(message);
        //     }
        //    let userId = $('#userId').val();
        //    let friendId = $('#receiverId').val();
        // //    console.log(messageChat);
        // //    console.log(friendId);

        // });
        // function sendMessage() {
        //     let formData = new FormData();
        //     let messageChat = $('#messageChat').val();


        //     formData.append('messageChat', messageChat);
        //     formData.append('receiver', friendId);
        //     formData.append('chatbtn', true);
        //     // formData.append('walletImg', walletImg);
        //     // console.log(formData);

        //     //send message to server
        //     socket.emit("send_message", {
        //         sender:userId,
        //         receiver:friendId,
        //         message:messageChat,
        //     });

        //     $.ajax({
        //         url: './controller/auth',
        //         type: 'POST',
        //         data: formData,
        //         processData: false,
        //         contentType: false,
        //         success: function (res) {
                            
        //             $('.messages').append(
        //                 '<div class="message message-sent message-first">\
        //                                 <div class="message-content">\
        //                                     <div class="message-bubble">\
        //                                         <div class="message-text">'+messageChat+'</div>\
        //                                     </div>\
        //                                     <div class="message-footer">00.31 AM <img src="./src/green-tick.png" alt="" class="">\
        //                                     </div>\
        //                                 </div>\
        //                             </div>'
        //             );
        //             $('#messageChat').val('');

                 
        //         },
        //         error: (err) => {
        //             alert('ajax call error');
        //         }
        //     });
            
        // }

        // //listen from server
        // socket.on("new_message", (data)=> {
        //     console.log(data);
           
        //     if(data.receiver == userId && data.sender == friendId){
        //         console.log(data.receiver);
        //         console.log(userId);
        //         console.log(data.sender);
        //         console.log(friendId);
        //         $('.messages').append(
        //             '<div class="message message-received message-first message-last message-tail">\
        //                     <div class="message-content">\
        //                         <div class="message-bubble">\
        //                             <div class="message-text">'+data.message+'</div>\
        //                         </div>\
        //                         <div class="message-footer">Sep 20, 05:03 PM </div>\
        //                     </div>\
        //                 </div>'
        //         );

        //         let seen_status = 1;
        //         let formData = new FormData();

        //         formData.append('seen_status', seen_status);
        //         formData.append('receiver', friendId);
        //         formData.append('seenBtn', true);
        //         $.ajax({
        //             url: './controller/auth',
        //             type: 'POST',
        //             data: formData,
        //             processData: false,
        //             contentType: false,
        //             success: function (res) {
                    
        //             },
        //             error: (err) => {
        //                 alert('ajax call error');
        //             }
        //         });
        //     }else{

        //         alert('err');
        //     }

            
        // });



    </script>

</body>

</html>