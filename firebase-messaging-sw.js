importScripts('https://www.gstatic.com/firebasejs/10.12.2/firebase-app-compat.js');

importScripts('https://www.gstatic.com/firebasejs/10.12.2/firebase-messaging-compat.js');

firebase.initializeApp({

apiKey: "AIzaSyAlOrIXWqq1XEe1ya6UYx_csH6ckvo_x84",

authDomain: "project-dashboard-ee104.firebaseapp.com",

projectId: "project-dashboard-ee104",

storageBucket: "project-dashboard-ee104.firebasestorage.app",

messagingSenderId: "462837501926",

appId: "1:462837501926:web:aed16fc192890d16115027",

measurementId: "G-0FDEWTYKB2"

});

const messaging = firebase.messaging();

messaging.onBackgroundMessage(function(payload) {

self.registration.showNotification(

payload.notification.title,

{
body: payload.notification.body,
icon: 'https://cdn-icons-png.flaticon.com/512/1827/1827392.png'
}

);

});
