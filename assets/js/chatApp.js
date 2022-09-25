$('#toRegister').on('click', (e)=> {
    e.preventDefault();
    $('.reg-div').removeClass('hide');
    $('.login-div').addClass('hide');
});

$('#toLogin').on('click', (e)=> {
    e.preventDefault();

    $('.reg-div').addClass('hide');
    $('.login-div').removeClass('hide');
});




// console.log('chatApp');
// message = [];
// USER = [];

// function setupApp() {
//     users = getUsersInfo();
//     // console.log(users);
//     userInfo();
    
// }
// setupApp();

// function getUsersInfo() {
//     // users data();
//     return localStorage.getItem('users') ? JSON.parse(localStorage.getItem('users')) : []; //TINERAY STATEMENT IF/ELSE

// }

// function userInfo() {
//     console.log(users[0]); 
//     let username = users[0];
//     $('.username').text('Hi, ' + username);
// }

// //on dom load
// document.addEventListener("DOMContentLoaded", () => {
//     // setupApp();
//     getUsersInfo();
    
//     users = JSON.parse(window.localStorage.getItem('users'));
//     // console.log(users);
// });




// //create instance
// appURL = "http://localhost:4000";
// let socket = io.connect(appURL, { transports : ['websocket'] });
// // var io = io("http://localhost:4000");  //error to throw
// var receiver = "";
// var sender = "";

// socket.emit('user_connected', users);
// //save name to global variable
// sender = users;

// //listen from server
// socket.on('user_connected', (username) => {
//     // console.log(username);
//     var html = "";
//     // html += "<li><button onclick='onUserSelected(this.innerHTML);'>" + username + "</button></li>";
//     // // $('#users').html(html);
//     // document.getElementById('users').innerHTML += html;

//      html += `<li class='swipeout'>
//                     <a href='./message.html' class='item-link item-content swipeout-content link'>
//                         <div class='item-media'>
//                             <img src='./src/avatar-1.jpg' width='48' alt=''>
//                             <div class='online'></div>
//                         </div>
//                         <div class='item-inner'>
//                             <div class='item-title-row'>
//                                 <div class='item-title'>${username}</div>
//                                 <div class='item-after'>09:25 AM</div>
//                             </div>
//                             <div class='item-text read'>Wich charachter do</div>
//                         </div>
//                     </a>
//                     <div class='swipeout-actions-right'>
//                         <a href='#!' data-confirm='Are you sure you want to delete this item?'
//                             class='swipeout-delete'><i class='f7-icons'>multiply_circle</i></a>
//                     </div>
//                 </li>`;




//     document.getElementById('users').innerHTML += html;

// });