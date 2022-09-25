///create instance
appURL = "http://localhost:4000";
let sockets = io.connect(appURL, { transports : ['websocket'] });


$('.messagebar-area').keyup(function(e){
    // e.preventDefault();
    let message = $(this).html();
    if(e.which == 13 && !e.shiftKey){
        alert('here');
        sendMessage(message);
    }
   let userId = $('#userId').val();
   let friendId = $('#receiverId').val();
//    console.log(messageChat);
//    console.log(friendId);

});
function sendMessage() {
    let formData = new FormData();
    let messageChat = $('#messageChat').val();


    formData.append('messageChat', messageChat);
    formData.append('receiver', friendId);
    formData.append('chatbtn', true);
    // formData.append('walletImg', walletImg);
    // console.log(formData);

    //send message to server
    sockets.emit("send_message", {
        sender:userId,
        receiver:friendId,
        message:messageChat,
    });

    $('.messages').append(
        '<div class="message message-sent message-first">\
                        <div class="message-content">\
                            <div class="message-bubble">\
                                <div class="message-text">'+messageChat+'</div>\
                            </div>\
                            <div class="message-footer">00.31 AM <img src="./src/green-tick.png" alt="" class="">\
                            </div>\
                        </div>\
                    </div>'
    );
    $('#messageChat').val('');


    $.ajax({
        url: './controller/auth',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (res) {
         
        },
        error: (err) => {
            alert('ajax call error');
        }
    });
    
}

//listen from server
sockets.on("new_message", (data)=> {
    console.log(data);
   
    if(data.receiver == userId && data.sender == friendId){
        console.log(data.receiver);
        console.log(userId);
        console.log(data.sender);
        console.log(friendId);
        $('.messages').append(
            '<div class="message message-received message-first message-last message-tail">\
                    <div class="message-content">\
                        <div class="message-bubble">\
                            <div class="message-text">'+data.message+'</div>\
                        </div>\
                        <div class="message-footer">Sep 20, 05:03 PM </div>\
                    </div>\
                </div>'
        );

        let seen_status = 1;
        let formData = new FormData();

        formData.append('seen_status', seen_status);
        formData.append('receiver', friendId);
        formData.append('seenBtn', true);
        $.ajax({
            url: './controller/auth',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (res) {
            
            },
            error: (err) => {
                alert('ajax call error');
            }
        });
    }else{

        alert('err');
    }

    
});
