
    $('.popover-open').on('click', function(e){
        e.preventDefault();
        if(confirm('Logout ?')){
            window.location.href = './logout.php';
        }else{
            // alert('Request aborted!!');
        }
    });


    // kiss no flog by lucky dube

    ///create instance
    appURL = "http://localhost:4000";
    let socket = io.connect(appURL, { transports : ['websocket'] });
    // var socket = io("http://localhost:4000");  //error to throw
    let userId = $('#userId').val();
    let friendId = $('#receiverId').val();
    console.log(userId);
    console.log(friendId);
    

    // //listen from server
    socket.on('connect', () => {
        // alert('here');
        socket.emit('user_connected', userId);
    });



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


    //listen from server
    socket.on("new_message", (datae)=> {
        // console.log(datae);

        
        countRead();
    
    });

  


    function countRead() {
        console.log('mma');
        $.ajax({
            url: './controller/unread',
            type: 'GET',
            success: function (res) {
                // console.log(res);
                $('#users').html(res);
                // item-inner
                // $('.item-media').html(res);
                
            },
            error: (err) => {
                alert('ajax call error');
            }
        });
    }





    socket.on('updateUserStatusChat', (data) => { 
        console.log(data);
        let $userIcon = $('.user-icon-'+key);
                 console.log($userIcon);
        //  $.each(data, function (key, val) {
        //      if(val !== null && val !== 0){
        //          // alert(val);
        //          let $userIcon = $('.user-icon-'+key);
        //          console.log($userIcon);
        //         //  $('.user-icon-'+key).hide();
        //         //  $userIcon.removeClass('offline');
        //         //  $userIcon.addClass('online');
        //         //  $userIcon.attr('title', 'Online');
        //      }
        //  });
         
     });
