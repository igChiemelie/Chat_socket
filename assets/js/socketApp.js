
    $('.popover-open').click(function(e){
        // e.preventDefault();
        alert('ddd');
        // $(this).append(
        //     '<div style="position: relative;top: 1.2rem;right: 1.6rem;">\
        //         <a class="logout" href="#!" style="color:white;text-decoration: underline;">\
        //             Logout\
        //         </a>\
        //     </div>'
        // );
            // <div style="position: relative;top: 1.2rem;right: 1.6rem;">
            //     <a class="logout" href="#!" style="color:white;text-decoration: underline;">
            //         Logout
            //     </a>
            // </div>
            // $('#toLogin').on('click', (e)=> {
            //     e.preventDefault();
            
            //     $('.reg-div').addClass('hide');
            //     $('.login-div').removeClass('hide');
            // });
            
            // $('.showLogout').removeClass('hide');
            console.log($('.showLogout'));
            $('.showLogout').removeClass('hide');

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