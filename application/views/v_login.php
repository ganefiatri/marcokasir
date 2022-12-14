<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login User</title>
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/') ?>/img/favicon.png"/>
<!--        <link rel="stylesheet" href="--><?php //echo base_url('assets/') ?><!--/login/style.css">-->

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');

            html {
                background: #fff;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Fredoka One', cursive;
                color: #149ad1;
            }

            *::selection{
                background: #149ad1;
                color: #FFF;
            }

            section {
                height: 60vh;
                width: 100%;
                background-color: #149ad1;
                position: relative;
                animation: left .75s ease-out;
            }

            section::after {
                background-color: #149ad1;
                width: 100%;
                height: 175px;
                position: absolute;
                content: " ";
                bottom: -75px;
                transform: skewY(3.5deg);
            }

            .card {
                background-color: #fff;
                width: 400px;
                height: 550px;
                position: absolute;
                right: 25%;
                top: 19%;
                z-index: 100;
                border-radius: 40px;
                box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.25),
                inset -5px -5px 20px rgba(0,0,0,.25),
                inset 5px 5px 20px rgba(255,255,255,.25);
                animation: right .75s ease-in;
            }

            .content {
                display : flex;
                flex-direction: column;
                padding: 2em;
                align-items: flex-center;
                height: 100%;
                justify-items: space-between;
            }

            .user, .pass {
                position: relative;

            }

            .content i {
                position: absolute;
                top: 50%;
                left: 20px;
                transform: translateY(-50%);
                color: #149ad1;
                font-size: 1.125rem;
            }

            input[type="text"], input[type="password"] {
                font-size: 1.125rem;
                margin: .75em 0;
                width: 100%;
                border-radius: 100px;
                border: none;
                padding: .8em 1.5em .8em 2.75em;
                color: #149ad1;
                box-shadow: 1px 3px 10px #00000020,
                inset -1px -3px 10px #00000020,
                inset 1px 3px 10px #ffffff20;
            }

            input[type="text"]::placeholder,
            input[type="password"]::placeholder{
                color: #0e4c6690;
                font-size: 1rem;
                margin-left: 1em;
            }

            input[type="text"]:focus, input[type="password"]:focus {
                outline: none;
            }

            h2 {
                margin: 1.5em;
                font-size: 2rem;
                text-align: center;
            }

            .else {
                display: flex;
                align-items: center;
                width: 85%;
                margin: .5em auto;
            }

            .else span {
                margin-left: auto;
            }

            .else span,
            .else label {
                font-size: .75rem;
                text-align: right;
                opacity: .65;
                cursor: pointer;
                transition: 250ms;
            }

            .else label {
                margin-left: .5em;
            }

            span:hover,
            label:hover{
                opacity: 100%;
                text-decoration: underline;
            }

            span:active,
            label:active{
                transform: scale(.99);
            }

            input[type="submit"] {
                background-color: #149ad1;
                border: none;
                color: #fff;
                padding: 1.1em 2.5em;
                border-radius: 100px;
                margin: 1.2em auto;
                cursor: pointer;
                box-shadow: 2px 3px 10px rgba(0,0,0,.25),
                inset -2px -3px 10px rgba(0,0,0,.35),
                inset 2px 3px 10px rgba(255,255,255,.5);
                letter-spacing: 1.25px;
            }

            input[type="submit"]:hover {
                background: #34a1ce;
            }

            input[type="submit"]:active {
                box-shadow: 2px 3px 10px rgba(0,0,0,.25),
                inset -2px -3px 10px rgba(255,255,255,.35),
                inset 2px 3px 10px rgba(0,0,0,.25);
            }

            input[type="submit"]:focus {
                outline: none;
            }


            section::before {
                background-color: #fff;
                width: 100%;
                height: 250px;
                position: absolute;
                content: " ";
                top: -100px;
                transform: skewY(-3.5deg);
            }

            .fa-instagram {
                position: absolute;
                color: #149ad1;
                bottom: 20%;
                left: 20%;
                font-size: 1.5rem;
                transition: 300ms;
            }

            .instagram:hover .fa-instagram {
                color: #149ad195;
            }

            @keyframes right{
                0% {
                    transform: translateX(700%)
                }
                100% {
                    transform: translateX(0)
                }
            }

            @keyframes left{
                0% {
                    transform: translateX(-100%)
                }
                100% {
                    transform: translateX(0)
                }
            }
        </style>
    </head>
    <body>
    <script src="https://kit.fontawesome.com/783b858c89.js" crossorigin="anonymous"></script>
    <section>
        <div class="card">
            <div class="content">
                <h2>Marendal.co</h2>
                <form action="<?php echo base_url('login/auth') ?>" method="post">
                    <div class="user">
                        <input type="text" required="required" name="username" id="username" placeholder="Username">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="pass">
                        <input type="password" id="password" name="password" type="password" required="required" placeholder="Password">
                        <i class="fas fa-lock"></i>
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
    </section>
    <div class="instagram">
        <a href="https://www.instagram.com/gudangkita.coffee/" target="_blank">
            <i class="fab fa-instagram"></i></a>
    </div>

<!--    script-->
    <script src="<?php echo base_url() ?>/assets/js/jquery-3.3.1.js"></script></script>
    <script  src="<?php echo base_url('assets/') ?>login/script.js"></script>
    <script  src="<?php echo base_url('assets/') ?>js/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){document.getElementById("username").focus()});
        $('form').attr('autocomplete', 'off');
        var error="<?php echo $this->session->flashdata('msg'); ?>";error&&swal(error,{buttons:!1,timer:2e3});
    </script>
    </body>
</html>