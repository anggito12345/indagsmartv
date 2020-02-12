<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/img/basic/favicon.ico') ?>" type="image/x-icon">
    <script src="<?php echo base_url('assets/js/utilities.js') ?>" ></script>
    <title>Paper</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css') ?>">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }

        .select2-container--default .select2-search--dropdown::before {
            content: "" !important;
        }

        .user_avatar {
            width: 80px !important;
            height: 80px !important;
        }


        /* sikpd theme */
        .sikpd-bg {
            background: #1B9BFC !important;             
        }

        .sikpd-bg * {
            color: white !important;
        }

        /* giss theme */

        .giis-bg {
            background: url('<?php echo base_url('assets/img/apps/giis.png') ?>') center center;
        }

        .giis-bg * {
            color: white !important;
        }


        .siki-bg {
            background: #394263;
        }

        .siki-bg * {
            color: white !important;
        }


        .sipermen-bg {
            background: url('<?php echo base_url('assets/img/apps/sipermen.png') ?>') center bottom;
            background-size: cover;
        }

        .sipermen-bg * {
            color: white !important;
        }


        .pepi-bg {
            background: url('<?php echo base_url('assets/img/apps/pepi.png') ?>') center bottom;
            background-size: cover;
        }

        .pepi-bg * {
            color: white !important;
        }

        .link-app {
            font-weight: 600;
            cursor:pointer;
        }

    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>