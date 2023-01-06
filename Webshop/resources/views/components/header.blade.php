<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Webshop</title>
</head>

<body class="text-lg tracking-wide text-black bg-gray-200" >

    {{ $slot }}

</body>
<script>
    // Burger menus
    // document.addEventListener('DOMContentLoaded', function() {
    //     // open
    //     const burger = document.querySelectorAll('.navbar-burger');
    //     const menu = document.querySelectorAll('.navbar-menu');
    
    //     if (burger.length && menu.length) {
    //         for (var i = 0; i < burger.length; i++) {
    //             burger[i].addEventListener('click', function() {
    //                 for (var j = 0; j < menu.length; j++) {
    //                     menu[j].classList.toggle('hidden');
    //                 }
    //             });
    //         }
    //     }
    
    //     // close
    //     const close = document.querySelectorAll('.navbar-close');
    //     const backdrop = document.querySelectorAll('.navbar-backdrop');
    
    //     if (close.length) {
    //         for (var i = 0; i < close.length; i++) {
    //             close[i].addEventListener('click', function() {
    //                 for (var j = 0; j < menu.length; j++) {
    //                     menu[j].classList.toggle('hidden');
    //                 }
    //             });
    //         }
    //     }
    
    //     if (backdrop.length) {
    //         for (var i = 0; i < backdrop.length; i++) {
    //             backdrop[i].addEventListener('click', function() {
    //                 for (var j = 0; j < menu.length; j++) {
    //                     menu[j].classList.toggle('hidden');
    //                 }
    //             });
    //         }
    //     }
    // });
    </script>
</html>