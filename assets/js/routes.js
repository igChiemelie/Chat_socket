var routes = [{
    path: '/',
    url: './index.html',
    name: 'home',
    on: {
        pageInit: function (e, page) {
            setTimeout(function () {
                $('.splash-screen').addClass('hide-screen');
            }, 2000);
        },
        pageAfterOut: function (e, page) {},
    }

},
//  {
//     path: '/otp/',
//     url: './pages/otp.html',
//     name: 'otp',
// },

// {
//     path: '/chat/',
//     url: './chatApp.html',
//     name: 'chat',
//     on: {
//         pageInit: function (e, page) {
//             $('.search .search-icon').on('click', function (e) {
//                 $('.searchbar-custom').addClass('open-search');
//             });
//             $('.searchbar-disable-button').on('click', function (e) {
//                 $('.searchbar-custom').removeClass('open-search');
//             });
//         },
//         pageAfterOut: function (e, page) {},
//     }
// }, {
//     path: '/chat-view/',
//     url: './pages/chat-view.html',
//     name: 'chat-view',
// }, {
//     path: '/chat-view-group/',
//     url: './pages/chat-view-group.html',
//     name: 'chat-view-group',
// }, {
//     path: '/welcome-new-group/',
//     url: './pages/welcome-new-group.html',
//     name: 'welcome-new-group',
// }, {
//     path: '/call/',
//     url: './pages/call.html',
//     name: 'call',
//     on: {
//         pageInit: function (e, page) {
//             $$('.search .search-icon').on('click', function (e) {
//                 $$('.searchbar-custom').addClass('open-search');
//             });
//             $$('.searchbar-disable-button').on('click', function (e) {
//                 $$('.searchbar-custom').removeClass('open-search');
//             });
//         },
//         pageAfterOut: function (e, page) {},
//     }
// }, {
//     path: '/group/',
//     url: './pages/group.html',
//     name: 'group',
//     on: {
//         pageInit: function (e, page) {
//             $$('.search .search-icon').on('click', function (e) {
//                 $$('.searchbar-custom').addClass('open-search');
//             });
//             $$('.searchbar-disable-button').on('click', function (e) {
//                 $$('.searchbar-custom').removeClass('open-search');
//             });
//         },
//         pageAfterOut: function (e, page) {},
//     }
// }, {
//     path: '/status/',
//     url: './pages/status.html',
//     name: 'status',
//     on: {
//         pageInit: function (e, page) {
//             var myPhotoBrowserDark = app.photoBrowser.create({
//                 photos: ['assets/img/status/status-1.jpg', 'assets/img/status/status-2.jpg', 'assets/img/status/status-3.jpg', 'assets/img/status/status-4.jpg', 'assets/img/status/status-5.jpg', 'assets/img/status/status-6.jpg', 'assets/img/status/status-7.jpg', 'assets/img/status/status-8.jpg', 'assets/img/status/status-9.jpg', 'assets/img/status/status-10.jpg', ],
//                 theme: 'dark'
//             });
//             $$('.pb-standalone-dark').on('click', function () {
//                 myPhotoBrowserDark.open();
//             });
//         },
//         pageAfterOut: function (e, page) {},
//     }
// }, {
//     path: '/profile/',
//     url: './pages/profile.html',
//     name: 'profile',
//     on: {
//         pageInit: function (e, page) {
//             var myPhotoBrowserDark = app.photoBrowser.create({
//                 photos: ['assets/img/status/status-1.jpg', 'assets/img/status/status-2.jpg', 'assets/img/status/status-3.jpg', 'assets/img/status/status-4.jpg', 'assets/img/status/status-5.jpg', 'assets/img/status/status-6.jpg', 'assets/img/status/status-7.jpg', 'assets/img/status/status-8.jpg', 'assets/img/status/status-9.jpg', 'assets/img/status/status-10.jpg', ],
//                 theme: 'dark'
//             });
//             $$('.pb-standalone-dark').on('click', function () {
//                 myPhotoBrowserDark.open();
//             });
//             var toastWithButton = app.toast.create({
//                 text: 'Name Updated',
//                 closeButton: true,
//             });
//             $$('.open-toast-button').on('click', function () {
//                 toastWithButton.open();
//             });
//         },
//         pageAfterOut: function (e, page) {},
//     }
// }, {
//     path: '/create-group-profile/',
//     url: './pages/create-group-profile.html',
//     name: 'create-group-profile',
// }, {
//     path: '/chat-new/',
//     url: './pages/chat-new.html',
//     name: 'chat-new',
//     on: {
//         pageInit: function (e, page) {
//             $$('.search .search-icon').on('click', function (e) {
//                 $$('.searchbar-custom').addClass('open-search');
//             });
//             $$('.searchbar-disable-button').on('click', function (e) {
//                 $$('.searchbar-custom').removeClass('open-search');
//             });
//         },
//         pageAfterOut: function (e, page) {},
//     }
// }, {
//     path: '/add-group/',
//     url: './pages/add-group.html',
//     name: 'add-group',
//     on: {
//         pageInit: function (e, page) {
//             $$('.search .search-icon').on('click', function (e) {
//                 $$('.searchbar-custom').addClass('open-search');
//             });
//             $$('.searchbar-disable-button').on('click', function (e) {
//                 $$('.searchbar-custom').removeClass('open-search');
//             });
//         },
//         pageAfterOut: function (e, page) {},
//     }
// }, {
//     path: '/group-profile/',
//     url: './pages/group-profile.html',
//     name: 'group-profile',
//     on: {
//         pageInit: function (e, page) {
//             var myPhotoBrowserDark = app.photoBrowser.create({
//                 photos: ['assets/img/status/status-1.jpg', 'assets/img/status/status-2.jpg', 'assets/img/status/status-3.jpg', 'assets/img/status/status-4.jpg', 'assets/img/status/status-5.jpg', 'assets/img/status/status-6.jpg', 'assets/img/status/status-7.jpg', 'assets/img/status/status-8.jpg', 'assets/img/status/status-9.jpg', 'assets/img/status/status-10.jpg', ],
//                 theme: 'dark'
//             });
//             $$('.pb-standalone-dark').on('click', function () {
//                 myPhotoBrowserDark.open();
//             });
//         },
//         pageAfterOut: function (e, page) {},
//     }
// }, {
//     path: '/settings/',
//     url: './pages/settings.html',
//     name: 'settings',
// }, {
//     path: '/voice-call/',
//     url: './pages/voice-call.html',
//     name: 'voice-call',
// }, {
//     path: '/video-call/',
//     url: './pages/video-call.html',
//     name: 'video-call',
// }, {
//     path: '/account/',
//     url: './pages/account.html',
//     name: 'account',
// }, {
//     path: '/notifications/',
//     url: './pages/notifications.html',
//     name: 'notifications',
// }, {
//     path: '/chat-settings/',
//     url: './pages/chat-settings.html',
//     name: 'chat-settings',
// }, {
//     path: '/invite-friends/',
//     url: './pages/invite-friends.html',
//     name: 'invite-friends',
// }, {
//     path: '/about-help/',
//     url: './pages/about-help.html',
//     name: 'about-help',
// }, {
//     path: '/status-upload/',
//     url: './pages/status-upload.html',
//     name: 'status-upload',
// }, {
//     path: '/contacts/',
//     url: './pages/contacts.html',
//     name: 'contacts',
//     on: {
//         pageInit: function (e, page) {
//             $$('.search .search-icon').on('click', function (e) {
//                 $$('.searchbar-custom').addClass('open-search');
//             });
//             $$('.searchbar-disable-button').on('click', function (e) {
//                 $$('.searchbar-custom').removeClass('open-search');
//             });
//         },
//         pageAfterOut: function (e, page) {},
//     }
// }, {
//     path: '/add-call/',
//     url: './pages/add-call.html',
//     name: 'add-call',
//     on: {
//         pageInit: function (e, page) {
//             $$('.search .search-icon').on('click', function (e) {
//                 $$('.searchbar-custom').addClass('open-search');
//             });
//             $$('.searchbar-disable-button').on('click', function (e) {
//                 $$('.searchbar-custom').removeClass('open-search');
//             });
//         },
//         pageAfterOut: function (e, page) {},
//     }
// },
 ];