// "use strict";
/*
Template Name: DreamsChatApp
Author: I.G Chiemelie
Version: 1.1
*/

var $$ = Dom7;
var app = new Framework7({
    root: '#app',
    id: 'com.myapp.test',
    name: 'Framework7',
    theme: 'ios',
    methods: {
        helloWorld: function () {
            app.dialog.alert('Hello World!');
        },
    },
    view: {
        iosDynamicNavbar: false,
        xhrCache: false,
    },
    photoBrowser: {
        type: 'popup',
    },
    popup: {
        closeByBackdropClick: false,
    },
    actions: {
        convertToPopover: false,
        grid: true,
    },
    routes: routes,
    popup: {
        closeOnEscape: true,
    },
    sheet: {
        closeOnEscape: true,
    },
    popover: {
        closeOnEscape: true,
    },
    actions: {
        closeOnEscape: true,
    },
});
var mainView = app.views.create('.view-main', {
    url: '/'
});