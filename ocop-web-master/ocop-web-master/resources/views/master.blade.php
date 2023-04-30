<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="active-menu" content=" ">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x80" href="{{ asset('images/ocop-2.png') }}">
<title>OCOP | Chủ thể và bộ sản phẩm</title>
<!-- This page CSS -->
<!-- chartist CSS -->
<link href="{{ asset('css/morris.css') }}" rel="stylesheet">
<!--Toaster Popup message CSS -->
<link href="{{ asset('css/jquery.css') }}" rel="stylesheet">

<!-- Dashboard 1 Page CSS -->
<link href="{{ asset('css/topbar-head.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard1.css') }}" rel="stylesheet">
<link href="{{ asset('css/footable.css') }}" rel="stylesheet">
<link href="{{ asset('css/footable-page.css') }}" rel="stylesheet">
<link href="{{ asset('css/other-pages.css') }}" rel="stylesheet">
<link href="{{ asset('css/ecommerce.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontcssText.css') }}" rel="stylesheet">

<link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('css/switchery.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
<link href="{{ asset('css/jquery_002.css') }}" rel="stylesheet">
<link href="{{ asset('css/multi-select.css') }}" rel="stylesheet" type="text/css">
<!-- <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap&subset=latin-ext,vietnamese" rel="stylesheet"> -->
<link href="{{ asset('css/css2.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @media only screen and (max-width: 600px) {
        .dark-logo {
            margin-left: -12px;
        }

        .light-logo {
            margin-left: -12px;
        }
    }
    #swal2-content{
      font-family: sans-serif;
    }
    h1,h2,h3,h4,h5,h6,p,span,label{
        font-family: 'Quicksand', sans-serif;
    }

</style>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


  <link rel="stylesheet" type="text/css" href="{{ asset('css/dropzone.css') }}">
  <link href="{{ asset('css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">

  <style>
    .dropzone {
      min-height: 150px;
      border: 1px solid rgba(0, 0, 0, 0.3);
      background: white;
      padding: 20px 20px;
    }
    .dropzone.dz-clickable{
      padding: 0px;
      margin:0px
    }
    .dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message *{
      margin: 0px;
    }
    #addcoucil {
      top: 20px !important;
      left: -142px !important
    }

    .dropdown-toggle::after {
      display: none;
    }

    .role {
      padding: 9px;
      position: absolute;
      background-color: #049252;
      font-weight: 600;
      border-radius: 10px;
      font-family: sans-serif;
      right: 16%;
      bottom: 12px;
    }

    .role>a {
      color: white;
    }

    .role>a:hover {
      color: #fb9678;
    }

    .Ch-tch {
      font-weight: 700;
    }

    .page-titles {
      padding-left: 42px;
    }

    #swal2-content {
      font-family: sans-serif;
    }

    .page-titles {
      margin-bottom: 9px;
    }

    .form-control {
      border-radius: 8px;
      background-color: #eff0f1;
      margin-top: 4px;
    }
    .dropzone .dz-preview .dz-image img{
      width: 100%;
    }
    @media only screen and (min-width: 1500px) and (max-width: 1600px) {
      .nameproduct{
        width: 76%;
      }
    }
  </style>
<style>@-webkit-keyframes swal2-show {
  0% {
    -webkit-transform: scale(0.7);
            transform: scale(0.7); }
  45% {
    -webkit-transform: scale(1.05);
            transform: scale(1.05); }
  80% {
    -webkit-transform: scale(0.95);
            transform: scale(0.95); }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes swal2-show {
  0% {
    -webkit-transform: scale(0.7);
            transform: scale(0.7); }
  45% {
    -webkit-transform: scale(1.05);
            transform: scale(1.05); }
  80% {
    -webkit-transform: scale(0.95);
            transform: scale(0.95); }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1); } }

@-webkit-keyframes swal2-hide {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; }
  100% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
    opacity: 0; } }

@keyframes swal2-hide {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; }
  100% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
    opacity: 0; } }

@-webkit-keyframes swal2-animate-success-line-tip {
  0% {
    top: 1.1875em;
    left: .0625em;
    width: 0; }
  54% {
    top: 1.0625em;
    left: .125em;
    width: 0; }
  70% {
    top: 2.1875em;
    left: -.375em;
    width: 3.125em; }
  84% {
    top: 3em;
    left: 1.3125em;
    width: 1.0625em; }
  100% {
    top: 2.8125em;
    left: .875em;
    width: 1.5625em; } }

@keyframes swal2-animate-success-line-tip {
  0% {
    top: 1.1875em;
    left: .0625em;
    width: 0; }
  54% {
    top: 1.0625em;
    left: .125em;
    width: 0; }
  70% {
    top: 2.1875em;
    left: -.375em;
    width: 3.125em; }
  84% {
    top: 3em;
    left: 1.3125em;
    width: 1.0625em; }
  100% {
    top: 2.8125em;
    left: .875em;
    width: 1.5625em; } }

@-webkit-keyframes swal2-animate-success-line-long {
  0% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  65% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  84% {
    top: 2.1875em;
    right: 0;
    width: 3.4375em; }
  100% {
    top: 2.375em;
    right: .5em;
    width: 2.9375em; } }

@keyframes swal2-animate-success-line-long {
  0% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  65% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  84% {
    top: 2.1875em;
    right: 0;
    width: 3.4375em; }
  100% {
    top: 2.375em;
    right: .5em;
    width: 2.9375em; } }

@-webkit-keyframes swal2-rotate-success-circular-line {
  0% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  5% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  12% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); }
  100% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); } }

@keyframes swal2-rotate-success-circular-line {
  0% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  5% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  12% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); }
  100% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); } }

@-webkit-keyframes swal2-animate-error-x-mark {
  0% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  50% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  80% {
    margin-top: -.375em;
    -webkit-transform: scale(1.15);
            transform: scale(1.15); }
  100% {
    margin-top: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; } }

@keyframes swal2-animate-error-x-mark {
  0% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  50% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  80% {
    margin-top: -.375em;
    -webkit-transform: scale(1.15);
            transform: scale(1.15); }
  100% {
    margin-top: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; } }

@-webkit-keyframes swal2-animate-error-icon {
  0% {
    -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
    opacity: 0; }
  100% {
    -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
    opacity: 1; } }

@keyframes swal2-animate-error-icon {
  0% {
    -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
    opacity: 0; }
  100% {
    -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
    opacity: 1; } }

body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast {
  flex-direction: column;
  align-items: stretch; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-actions {
    flex: 1;
    align-self: stretch;
    justify-content: flex-end;
    height: 2.2em; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-loading {
    justify-content: center; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-input {
    height: 2em;
    margin: .3125em auto;
    font-size: 1em; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-validationerror {
    font-size: 1em; }

body.swal2-toast-shown > .swal2-container {
  position: fixed;
  background-color: transparent; }
  body.swal2-toast-shown > .swal2-container.swal2-shown {
    background-color: transparent; }
  body.swal2-toast-shown > .swal2-container.swal2-top {
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-top-end, body.swal2-toast-shown > .swal2-container.swal2-top-right {
    top: 0;
    right: 0;
    bottom: auto;
    left: auto; }
  body.swal2-toast-shown > .swal2-container.swal2-top-start, body.swal2-toast-shown > .swal2-container.swal2-top-left {
    top: 0;
    right: auto;
    bottom: auto;
    left: 0; }
  body.swal2-toast-shown > .swal2-container.swal2-center-start, body.swal2-toast-shown > .swal2-container.swal2-center-left {
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-center {
    top: 50%;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%); }
  body.swal2-toast-shown > .swal2-container.swal2-center-end, body.swal2-toast-shown > .swal2-container.swal2-center-right {
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-bottom-start, body.swal2-toast-shown > .swal2-container.swal2-bottom-left {
    top: auto;
    right: auto;
    bottom: 0;
    left: 0; }
  body.swal2-toast-shown > .swal2-container.swal2-bottom {
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-bottom-end, body.swal2-toast-shown > .swal2-container.swal2-bottom-right {
    top: auto;
    right: 0;
    bottom: 0;
    left: auto; }

.swal2-popup.swal2-toast {
  flex-direction: row;
  align-items: center;
  width: auto;
  padding: 0.625em;
  box-shadow: 0 0 0.625em #d9d9d9;
  overflow-y: hidden; }
  .swal2-popup.swal2-toast .swal2-header {
    flex-direction: row; }
  .swal2-popup.swal2-toast .swal2-title {
    justify-content: flex-start;
    margin: 0 .6em;
    font-size: 1em; }
  .swal2-popup.swal2-toast .swal2-close {
    position: initial; }
  .swal2-popup.swal2-toast .swal2-content {
    justify-content: flex-start;
    font-size: 1em; }
  .swal2-popup.swal2-toast .swal2-icon {
    width: 2em;
    min-width: 2em;
    height: 2em;
    margin: 0; }
    .swal2-popup.swal2-toast .swal2-icon-text {
      font-size: 2em;
      font-weight: bold;
      line-height: 1em; }
    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em; }
    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      top: .875em;
      width: 1.375em; }
      .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: .3125em; }
      .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: .3125em; }
  .swal2-popup.swal2-toast .swal2-actions {
    height: auto;
    margin: 0 .3125em; }
  .swal2-popup.swal2-toast .swal2-styled {
    margin: 0 .3125em;
    padding: .3125em .625em;
    font-size: 1em; }
    .swal2-popup.swal2-toast .swal2-styled:focus {
      box-shadow: 0 0 0 0.0625em #fff, 0 0 0 0.125em rgba(50, 100, 150, 0.4); }
  .swal2-popup.swal2-toast .swal2-success {
    border-color: #a5dc86; }
    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
      position: absolute;
      width: 2em;
      height: 2.8125em;
      -webkit-transform: rotate(45deg);
              transform: rotate(45deg);
      border-radius: 50%; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.25em;
        left: -.9375em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
        -webkit-transform-origin: 2em 2em;
                transform-origin: 2em 2em;
        border-radius: 4em 0 0 4em; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.25em;
        left: .9375em;
        -webkit-transform-origin: 0 2em;
                transform-origin: 0 2em;
        border-radius: 0 4em 4em 0; }
    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em; }
    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
      top: 0;
      left: .4375em;
      width: .4375em;
      height: 2.6875em; }
    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
      height: .3125em; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 1.125em;
        left: .1875em;
        width: .75em; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
        top: .9375em;
        right: .1875em;
        width: 1.375em; }
  .swal2-popup.swal2-toast.swal2-show {
    -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s; }
  .swal2-popup.swal2-toast.swal2-hide {
    -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards; }
  .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
    -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s; }
  .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
    -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s; }

@-webkit-keyframes showSweetToast {
  0% {
    -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
    opacity: 0; }
  33% {
    -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
    opacity: .5; }
  66% {
    -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
    opacity: .7; }
  100% {
    -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
    opacity: 1; } }

@keyframes showSweetToast {
  0% {
    -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
    opacity: 0; }
  33% {
    -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
    opacity: .5; }
  66% {
    -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
    opacity: .7; }
  100% {
    -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
    opacity: 1; } }

@-webkit-keyframes hideSweetToast {
  0% {
    opacity: 1; }
  33% {
    opacity: .5; }
  100% {
    -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
    opacity: 0; } }

@keyframes hideSweetToast {
  0% {
    opacity: 1; }
  33% {
    opacity: .5; }
  100% {
    -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
    opacity: 0; } }

@-webkit-keyframes animate-toast-success-tip {
  0% {
    top: .5625em;
    left: .0625em;
    width: 0; }
  54% {
    top: .125em;
    left: .125em;
    width: 0; }
  70% {
    top: .625em;
    left: -.25em;
    width: 1.625em; }
  84% {
    top: 1.0625em;
    left: .75em;
    width: .5em; }
  100% {
    top: 1.125em;
    left: .1875em;
    width: .75em; } }

@keyframes animate-toast-success-tip {
  0% {
    top: .5625em;
    left: .0625em;
    width: 0; }
  54% {
    top: .125em;
    left: .125em;
    width: 0; }
  70% {
    top: .625em;
    left: -.25em;
    width: 1.625em; }
  84% {
    top: 1.0625em;
    left: .75em;
    width: .5em; }
  100% {
    top: 1.125em;
    left: .1875em;
    width: .75em; } }

@-webkit-keyframes animate-toast-success-long {
  0% {
    top: 1.625em;
    right: 1.375em;
    width: 0; }
  65% {
    top: 1.25em;
    right: .9375em;
    width: 0; }
  84% {
    top: .9375em;
    right: 0;
    width: 1.125em; }
  100% {
    top: .9375em;
    right: .1875em;
    width: 1.375em; } }

@keyframes animate-toast-success-long {
  0% {
    top: 1.625em;
    right: 1.375em;
    width: 0; }
  65% {
    top: 1.25em;
    right: .9375em;
    width: 0; }
  84% {
    top: .9375em;
    right: 0;
    width: 1.125em; }
  100% {
    top: .9375em;
    right: .1875em;
    width: 1.375em; } }

body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
  overflow-y: hidden; }

body.swal2-height-auto {
  height: auto !important; }

body.swal2-no-backdrop .swal2-shown {
  top: auto;
  right: auto;
  bottom: auto;
  left: auto;
  background-color: transparent; }
  body.swal2-no-backdrop .swal2-shown > .swal2-modal {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); }
  body.swal2-no-backdrop .swal2-shown.swal2-top {
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-top-start, body.swal2-no-backdrop .swal2-shown.swal2-top-left {
    top: 0;
    left: 0; }
  body.swal2-no-backdrop .swal2-shown.swal2-top-end, body.swal2-no-backdrop .swal2-shown.swal2-top-right {
    top: 0;
    right: 0; }
  body.swal2-no-backdrop .swal2-shown.swal2-center {
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-center-start, body.swal2-no-backdrop .swal2-shown.swal2-center-left {
    top: 50%;
    left: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-center-end, body.swal2-no-backdrop .swal2-shown.swal2-center-right {
    top: 50%;
    right: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-bottom {
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-bottom-start, body.swal2-no-backdrop .swal2-shown.swal2-bottom-left {
    bottom: 0;
    left: 0; }
  body.swal2-no-backdrop .swal2-shown.swal2-bottom-end, body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
    right: 0;
    bottom: 0; }

.swal2-container {
  display: flex;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  padding: 10px;
  background-color: transparent;
  z-index: 1060;
  overflow-x: hidden;
  -webkit-overflow-scrolling: touch; }
  .swal2-container.swal2-top {
    align-items: flex-start; }
  .swal2-container.swal2-top-start, .swal2-container.swal2-top-left {
    align-items: flex-start;
    justify-content: flex-start; }
  .swal2-container.swal2-top-end, .swal2-container.swal2-top-right {
    align-items: flex-start;
    justify-content: flex-end; }
  .swal2-container.swal2-center {
    align-items: center; }
  .swal2-container.swal2-center-start, .swal2-container.swal2-center-left {
    align-items: center;
    justify-content: flex-start; }
  .swal2-container.swal2-center-end, .swal2-container.swal2-center-right {
    align-items: center;
    justify-content: flex-end; }
  .swal2-container.swal2-bottom {
    align-items: flex-end; }
  .swal2-container.swal2-bottom-start, .swal2-container.swal2-bottom-left {
    align-items: flex-end;
    justify-content: flex-start; }
  .swal2-container.swal2-bottom-end, .swal2-container.swal2-bottom-right {
    align-items: flex-end;
    justify-content: flex-end; }
  .swal2-container.swal2-grow-fullscreen > .swal2-modal {
    display: flex !important;
    flex: 1;
    align-self: stretch;
    justify-content: center; }
  .swal2-container.swal2-grow-row > .swal2-modal {
    display: flex !important;
    flex: 1;
    align-content: center;
    justify-content: center; }
  .swal2-container.swal2-grow-column {
    flex: 1;
    flex-direction: column; }
    .swal2-container.swal2-grow-column.swal2-top, .swal2-container.swal2-grow-column.swal2-center, .swal2-container.swal2-grow-column.swal2-bottom {
      align-items: center; }
    .swal2-container.swal2-grow-column.swal2-top-start, .swal2-container.swal2-grow-column.swal2-center-start, .swal2-container.swal2-grow-column.swal2-bottom-start, .swal2-container.swal2-grow-column.swal2-top-left, .swal2-container.swal2-grow-column.swal2-center-left, .swal2-container.swal2-grow-column.swal2-bottom-left {
      align-items: flex-start; }
    .swal2-container.swal2-grow-column.swal2-top-end, .swal2-container.swal2-grow-column.swal2-center-end, .swal2-container.swal2-grow-column.swal2-bottom-end, .swal2-container.swal2-grow-column.swal2-top-right, .swal2-container.swal2-grow-column.swal2-center-right, .swal2-container.swal2-grow-column.swal2-bottom-right {
      align-items: flex-end; }
    .swal2-container.swal2-grow-column > .swal2-modal {
      display: flex !important;
      flex: 1;
      align-content: center;
      justify-content: center; }
  .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right) > .swal2-modal {
    margin: auto; }
  @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .swal2-container .swal2-modal {
      margin: 0 !important; } }
  .swal2-container.swal2-fade {
    transition: background-color .1s; }
  .swal2-container.swal2-shown {
    background-color: rgba(0, 0, 0, 0.4); }

.swal2-popup {
  display: none;
  position: relative;
  flex-direction: column;
  justify-content: center;
  width: 32em;
  max-width: 100%;
  padding: 1.25em;
  border-radius: 0.3125em;
  background: #fff;
  font-family: inherit;
  font-size: 1rem;
  box-sizing: border-box; }
  .swal2-popup:focus {
    outline: none; }
  .swal2-popup.swal2-loading {
    overflow-y: hidden; }
  .swal2-popup .swal2-header {
    display: flex;
    flex-direction: column;
    align-items: center; }
  .swal2-popup .swal2-title {
    display: block;
    position: relative;
    max-width: 100%;
    margin: 0 0 0.4em;
    padding: 0;
    color: #595959;
    font-size: 1.875em;
    font-weight: 600;
    text-align: center;
    text-transform: none;
    word-wrap: break-word; }
  .swal2-popup .swal2-actions {
    align-items: center;
    justify-content: center;
    margin: 1.25em auto 0; }
    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
      opacity: .4; }
    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
      background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)); }
    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)); }
    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
      width: 2.5em;
      height: 2.5em;
      margin: .46875em;
      padding: 0;
      border: .25em solid transparent;
      border-radius: 100%;
      border-color: transparent;
      background-color: transparent !important;
      color: transparent;
      cursor: default;
      box-sizing: border-box;
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
              animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      -webkit-user-select: none;
         -moz-user-select: none;
          -ms-user-select: none;
              user-select: none; }
    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
      margin-right: 30px;
      margin-left: 30px; }
    .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
      display: inline-block;
      width: 15px;
      height: 15px;
      margin-left: 5px;
      border: 3px solid #999999;
      border-radius: 50%;
      border-right-color: transparent;
      box-shadow: 1px 1px 1px #fff;
      content: '';
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
              animation: swal2-rotate-loading 1.5s linear 0s infinite normal; }
  .swal2-popup .swal2-styled {
    margin: 0 .3125em;
    padding: .625em 2em;
    font-weight: 500;
    box-shadow: none; }
    .swal2-popup .swal2-styled:not([disabled]) {
      cursor: pointer; }
    .swal2-popup .swal2-styled.swal2-confirm {
      border: 0;
      border-radius: 0.25em;
      background: initial;
      background-color: #3085d6;
      color: #fff;
      font-size: 1.0625em; }
    .swal2-popup .swal2-styled.swal2-cancel {
      border: 0;
      border-radius: 0.25em;
      background: initial;
      background-color: #aaa;
      color: #fff;
      font-size: 1.0625em; }
    .swal2-popup .swal2-styled:focus {
      outline: none;
      box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4); }
    .swal2-popup .swal2-styled::-moz-focus-inner {
      border: 0; }
  .swal2-popup .swal2-footer {
    justify-content: center;
    margin: 1.25em 0 0;
    padding-top: 1em;
    border-top: 1px solid #eee;
    color: #545454;
    font-size: 1em; }
  .swal2-popup .swal2-image {
    max-width: 100%;
    margin: 1.25em auto; }
  .swal2-popup .swal2-close {
    position: absolute;
    top: 0;
    right: 0;
    justify-content: center;
    width: 1.2em;
    height: 1.2em;
    padding: 0;
    transition: color 0.1s ease-out;
    border: none;
    border-radius: 0;
    background: transparent;
    color: #cccccc;
    font-family: serif;
    font-size: 2.5em;
    line-height: 1.2;
    cursor: pointer;
    overflow: hidden; }
    .swal2-popup .swal2-close:hover {
      -webkit-transform: none;
              transform: none;
      color: #f27474; }
  .swal2-popup > .swal2-input,
  .swal2-popup > .swal2-file,
  .swal2-popup > .swal2-textarea,
  .swal2-popup > .swal2-select,
  .swal2-popup > .swal2-radio,
  .swal2-popup > .swal2-checkbox {
    display: none; }
  .swal2-popup .swal2-content {
    justify-content: center;
    margin: 0;
    padding: 0;
    color: #545454;
    font-size: 1.125em;
    font-weight: 300;
    line-height: normal;
    word-wrap: break-word; }
  .swal2-popup #swal2-content {
    text-align: center; }
  .swal2-popup .swal2-input,
  .swal2-popup .swal2-file,
  .swal2-popup .swal2-textarea,
  .swal2-popup .swal2-select,
  .swal2-popup .swal2-radio,
  .swal2-popup .swal2-checkbox {
    margin: 1em auto; }
  .swal2-popup .swal2-input,
  .swal2-popup .swal2-file,
  .swal2-popup .swal2-textarea {
    width: 100%;
    transition: border-color .3s, box-shadow .3s;
    border: 1px solid #d9d9d9;
    border-radius: 0.1875em;
    font-size: 1.125em;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
    box-sizing: border-box; }
    .swal2-popup .swal2-input.swal2-inputerror,
    .swal2-popup .swal2-file.swal2-inputerror,
    .swal2-popup .swal2-textarea.swal2-inputerror {
      border-color: #f27474 !important;
      box-shadow: 0 0 2px #f27474 !important; }
    .swal2-popup .swal2-input:focus,
    .swal2-popup .swal2-file:focus,
    .swal2-popup .swal2-textarea:focus {
      border: 1px solid #b4dbed;
      outline: none;
      box-shadow: 0 0 3px #c4e6f5; }
    .swal2-popup .swal2-input::-webkit-input-placeholder,
    .swal2-popup .swal2-file::-webkit-input-placeholder,
    .swal2-popup .swal2-textarea::-webkit-input-placeholder {
      color: #cccccc; }
    .swal2-popup .swal2-input:-ms-input-placeholder,
    .swal2-popup .swal2-file:-ms-input-placeholder,
    .swal2-popup .swal2-textarea:-ms-input-placeholder {
      color: #cccccc; }
    .swal2-popup .swal2-input::-ms-input-placeholder,
    .swal2-popup .swal2-file::-ms-input-placeholder,
    .swal2-popup .swal2-textarea::-ms-input-placeholder {
      color: #cccccc; }
    .swal2-popup .swal2-input::placeholder,
    .swal2-popup .swal2-file::placeholder,
    .swal2-popup .swal2-textarea::placeholder {
      color: #cccccc; }
  .swal2-popup .swal2-range input {
    width: 80%; }
  .swal2-popup .swal2-range output {
    width: 20%;
    font-weight: 600;
    text-align: center; }
  .swal2-popup .swal2-range input,
  .swal2-popup .swal2-range output {
    height: 2.625em;
    margin: 1em auto;
    padding: 0;
    font-size: 1.125em;
    line-height: 2.625em; }
  .swal2-popup .swal2-input {
    height: 2.625em;
    padding: 0.75em; }
    .swal2-popup .swal2-input[type='number'] {
      max-width: 10em; }
  .swal2-popup .swal2-file {
    font-size: 1.125em; }
  .swal2-popup .swal2-textarea {
    height: 6.75em;
    padding: 0.75em; }
  .swal2-popup .swal2-select {
    min-width: 50%;
    max-width: 100%;
    padding: .375em .625em;
    color: #545454;
    font-size: 1.125em; }
  .swal2-popup .swal2-radio,
  .swal2-popup .swal2-checkbox {
    align-items: center;
    justify-content: center; }
    .swal2-popup .swal2-radio label,
    .swal2-popup .swal2-checkbox label {
      margin: 0 .6em;
      font-size: 1.125em; }
    .swal2-popup .swal2-radio input,
    .swal2-popup .swal2-checkbox input {
      margin: 0 .4em; }
  .swal2-popup .swal2-validationerror {
    display: none;
    align-items: center;
    justify-content: center;
    padding: 0.625em;
    background: #f0f0f0;
    color: #666666;
    font-size: 1em;
    font-weight: 300;
    overflow: hidden; }
    .swal2-popup .swal2-validationerror::before {
      display: inline-block;
      width: 1.5em;
      min-width: 1.5em;
      height: 1.5em;
      margin: 0 .625em;
      border-radius: 50%;
      background-color: #f27474;
      color: #fff;
      font-weight: 600;
      line-height: 1.5em;
      text-align: center;
      content: '!';
      zoom: normal; }

@supports (-ms-accelerator: true) {
  .swal2-range input {
    width: 100% !important; }
  .swal2-range output {
    display: none; } }

@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .swal2-range input {
    width: 100% !important; }
  .swal2-range output {
    display: none; } }

@-moz-document url-prefix() {
  .swal2-close:focus {
    outline: 2px solid rgba(50, 100, 150, 0.4); } }

.swal2-icon {
  position: relative;
  justify-content: center;
  width: 5em;
  height: 5em;
  margin: 1.25em auto 1.875em;
  border: .25em solid transparent;
  border-radius: 50%;
  line-height: 5em;
  cursor: default;
  box-sizing: content-box;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  zoom: normal; }
  .swal2-icon-text {
    font-size: 3.75em; }
  .swal2-icon.swal2-error {
    border-color: #f27474; }
    .swal2-icon.swal2-error .swal2-x-mark {
      position: relative;
      flex-grow: 1; }
    .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      display: block;
      position: absolute;
      top: 2.3125em;
      width: 2.9375em;
      height: .3125em;
      border-radius: .125em;
      background-color: #f27474; }
      .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: 1.0625em;
        -webkit-transform: rotate(45deg);
                transform: rotate(45deg); }
      .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: 1em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg); }
  .swal2-icon.swal2-warning {
    border-color: #facea8;
    color: #f8bb86; }
  .swal2-icon.swal2-info {
    border-color: #9de0f6;
    color: #3fc3ee; }
  .swal2-icon.swal2-question {
    border-color: #c9dae1;
    color: #87adbd; }
  .swal2-icon.swal2-success {
    border-color: #a5dc86; }
    .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
      position: absolute;
      width: 3.75em;
      height: 7.5em;
      -webkit-transform: rotate(45deg);
              transform: rotate(45deg);
      border-radius: 50%; }
      .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.4375em;
        left: -2.0635em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
        -webkit-transform-origin: 3.75em 3.75em;
                transform-origin: 3.75em 3.75em;
        border-radius: 7.5em 0 0 7.5em; }
      .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.6875em;
        left: 1.875em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
        -webkit-transform-origin: 0 3.75em;
                transform-origin: 0 3.75em;
        border-radius: 0 7.5em 7.5em 0; }
    .swal2-icon.swal2-success .swal2-success-ring {
      position: absolute;
      top: -.25em;
      left: -.25em;
      width: 100%;
      height: 100%;
      border: 0.25em solid rgba(165, 220, 134, 0.3);
      border-radius: 50%;
      z-index: 2;
      box-sizing: content-box; }
    .swal2-icon.swal2-success .swal2-success-fix {
      position: absolute;
      top: .5em;
      left: 1.625em;
      width: .4375em;
      height: 5.625em;
      -webkit-transform: rotate(-45deg);
              transform: rotate(-45deg);
      z-index: 1; }
    .swal2-icon.swal2-success [class^='swal2-success-line'] {
      display: block;
      position: absolute;
      height: .3125em;
      border-radius: .125em;
      background-color: #a5dc86;
      z-index: 2; }
      .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 2.875em;
        left: .875em;
        width: 1.5625em;
        -webkit-transform: rotate(45deg);
                transform: rotate(45deg); }
      .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
        top: 2.375em;
        right: .5em;
        width: 2.9375em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg); }

.swal2-progresssteps {
  align-items: center;
  margin: 0 0 1.25em;
  padding: 0;
  font-weight: 600; }
  .swal2-progresssteps li {
    display: inline-block;
    position: relative; }
  .swal2-progresssteps .swal2-progresscircle {
    width: 2em;
    height: 2em;
    border-radius: 2em;
    background: #3085d6;
    color: #fff;
    line-height: 2em;
    text-align: center;
    z-index: 20; }
    .swal2-progresssteps .swal2-progresscircle:first-child {
      margin-left: 0; }
    .swal2-progresssteps .swal2-progresscircle:last-child {
      margin-right: 0; }
    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
      background: #3085d6; }
      .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progresscircle {
        background: #add8e6; }
      .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progressline {
        background: #add8e6; }
  .swal2-progresssteps .swal2-progressline {
    width: 2.5em;
    height: .4em;
    margin: 0 -1px;
    background: #3085d6;
    z-index: 10; }

[class^='swal2'] {
  -webkit-tap-highlight-color: transparent; }

.swal2-show {
  -webkit-animation: swal2-show 0.3s;
          animation: swal2-show 0.3s; }
  .swal2-show.swal2-noanimation {
    -webkit-animation: none;
            animation: none; }

.swal2-hide {
  -webkit-animation: swal2-hide 0.15s forwards;
          animation: swal2-hide 0.15s forwards; }
  .swal2-hide.swal2-noanimation {
    -webkit-animation: none;
            animation: none; }

[dir='rtl'] .swal2-close {
  right: auto;
  left: 0; }

.swal2-animate-success-icon .swal2-success-line-tip {
  -webkit-animation: swal2-animate-success-line-tip 0.75s;
          animation: swal2-animate-success-line-tip 0.75s; }

.swal2-animate-success-icon .swal2-success-line-long {
  -webkit-animation: swal2-animate-success-line-long 0.75s;
          animation: swal2-animate-success-line-long 0.75s; }

.swal2-animate-success-icon .swal2-success-circular-line-right {
  -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
          animation: swal2-rotate-success-circular-line 4.25s ease-in; }

.swal2-animate-error-icon {
  -webkit-animation: swal2-animate-error-icon 0.5s;
          animation: swal2-animate-error-icon 0.5s; }
  .swal2-animate-error-icon .swal2-x-mark {
    -webkit-animation: swal2-animate-error-x-mark 0.5s;
            animation: swal2-animate-error-x-mark 0.5s; }

@-webkit-keyframes swal2-rotate-loading {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

@keyframes swal2-rotate-loading {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body class="skin-default fixed-layout">
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader" style="display: none;">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"><img src="{{ asset('images/tgtext-min.png') }}" alt="homepage" class="dark-logo" style="height: 15px;"></p>
        </div>
</div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('leftsidebar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->

    <!-- ============================================================== -->
    @yield('content')

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        <!-- © 2020 Kyc.net.vn. All Rights Reserved. -->
</footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="{{ asset('js/bundle.js') }}" crossorigin="anonymous">
</script>
<script>
  S3_URL = '{{ env('AWS_BUCKET') }}';
</script>
<script src="{{ asset('js/jquery-3.js') }}"></script>
<script>
  let accontInformation = null
  let translateMemberType = (memberType) => {
    let returnResult = 'Không rõ';
    switch (memberType) {
      case 'Manager':
        returnResult = 'Quản lý'
        break;
      case 'Examiner':
        returnResult = 'Người chấm'
        break;
      case 'Member':
        returnResult = 'Chủ thể'
        break;
      case 'HelpTeam':
        returnResult = 'Tổ tư vấn'
        break;
    }
    return returnResult;
  }
/*
  $.ajax({
    type: `GET`,
    url: `/getAccountBasicInfo`,
    success: (data) => {
      if (data.userName) {
        accontInformation = data
        if (data.type === 'Member') {
          $('#notify-bell-li').css({ "display": "" })
        }
        if(data.type === 'Manager'){
          $('#notify-bell-li').css({ "display": "" })
        }
        if (data.helpTeam) {
          data.type = "HelpTeam"
        }
        if ($(`#accountUserName`)[0]) {
          $(`#accountUserName`)[0].innerHTML =`
            <span style="font-weight: 600;">${data.userName}</span>
            <br>
            <span style="color: #6d7182">${translateMemberType(data.type)} ${data.type !=='Member' ? `- cấp ${data.level == 0 ? 'Trung ương' : (data.level == 1 ? 'Tỉnh' : 'Huyện')}` : ''}</span>`;

          if (data.avatarUrl) {
            $(`#accountAvartar`).attr('src', data.avatarUrl);
          }
          $(`#accountDropdown`).show();
        }
      }
    },
    error: (jqXHR, textStatus, errorThrown) => {
      console.warn(errorThrown);
    }
  });
  */
  const logout = () => {
    deleteCookie('NAC0B')
    $.ajax({
      type: 'GET',
      url: '/logout',
      success: (data) => {
        window.location = '/login';
      },
      error: (error) => {
        console.log(error);
      }
    });

  }
  function setCookie(name, value, days) {
    var d = new Date;
    d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
  }
  function deleteCookie(name) { setCookie(name, '', -1); }
</script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('js/perfect-scrollbar.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('js/sidebarmenu.js') }}"></script>
<!--stickey kit -->
<script src="{{ asset('js/sticky-kit.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>

<!--Custom JavaScript -->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/jquery_003.js') }}"></script>


<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{ asset('js/raphael-min.js') }}"></script>
<script src="{{ asset('js/morris.js') }}"></script>
<!-- Popup message jquery -->
<script src="{{ asset('js/jquery_005.js') }}"></script>
<!-- Chart JS -->

<!-- Sweet-Alert  -->
<script src="{{ asset('js/sweetalert.js') }}"></script>

<script src="{{ asset('js/jquery_004.js') }}"></script>
<!-- Footable -->
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/footable.js') }}"></script>

<script src="{{ asset('js/switchery.js') }}"></script>
{{--<script src="{{ asset('js/select2.js') }}" type="text/javascript"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap-select.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('js/jquery_002.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dff.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/jquery_006.js') }}" type="text/javascript"></script>
<!--Menu topbar -->
<script src="{{ asset('js/topbar-head.js?v=1') }}"></script>

<script src="{{ asset('js/lodash.js') }}"></script>
<script src="{{ asset('js/utils.js') }}" type="text/javascript"></script>
<script>
	let listNotif = []
  $(document).ready(() => {
    //getNotify()
    // notifyForManager()
  })
  const getNotify = () => {
    if (document.getElementById('notify-data')) {
      document.getElementById('notify-data').innerHTML = ''
    }
    $.ajax({
      type: "GET",
      url: "getNotify",
      success: (ret) => {
        if (ret.succes) {
          viewNotify(ret.data)
        }
      }
    })
  }
  const viewNotify = (data) => {
    if (data.length > 0) {
			listNotif = data
      let isBell = []
      for (let i = 0; i < data.length; i++) {
        let img = false
        if (data[i].product.length > 0) {
          img = _.get(data[i], 'product[0].imgUrl[0]')
        }
        if (!data[i].isSee) {
          isBell.push(i)
        }
        if (document.getElementById('notify-data')) {
          document.getElementById('notify-data').innerHTML += `
              <a onclick="isWatching(\'${data[i]._id}\')" href="${data[i].href ? data[i].href : "#"}" class="${data[i].isSee ? '' : "isSee"}" >
                  <img  src="${img ? img : 'img/noavatar.png'} " style="border-radius: 100%;width: 35px;height: 35px;" />
                      <div class="mail-contnet" style="    width: 86%;">
                        <div class="mail-desc" style="white-space: break-spaces;"><span>${data[i].content ? data[i].content : ""}!</span></div>
                        <span class="time" style="color:#2196f3">${time_ago(data[i].createdAt)}</span>
                     </div>
                </a>
            `
        }
      }
      if (isBell.length === 0) {
        $('#notify-bell').css({ "display": "none" })
      }
    } else {
      if (document.getElementById('notify-data')) {
        document.getElementById('notify-data').innerHTML = '<p style="margin: 20px;font-size: 13px;font-style: italic;margin-top: 10px;">Chưa có thông báo!</p>'
        $('#notify-bell').css({ "display": "none" })
      }

    }
  }
  const isWatching = (id) => {
    $.ajax({
      type: "POST",
      url: "changeIsSeeNotify",
      data: {
        notifyId: id
      },
      success: (ret) => {
      }

    })
  }

	const seenAll = async () => {
		console.log('listNotif: ', listNotif);
		let arrayPromise = []

		for (let i = 0; i < listNotif.length; i++) {
			let promise = $.ajax({
				type: "POST",
				url: "changeIsSeeNotify",
				data: {
					notifyId: listNotif[i]._id
				}
			})

			arrayPromise.push(promise)
		}

		await Promise.all(arrayPromise)

		getNotify()
	}

  const time_ago = (time) => {
    console.log(time,987)
    switch (typeof time) {
      case 'number':
        break;
      case 'string':
        time = +new Date(time);
        break;
      case 'object':
        if (time.constructor === Date) time = time.getTime();
        break;
      default:
        time = +new Date();
    }
    var time_formats = [
      [60, 'giây', 1], // 60
      [120, '1 phút trước', '1 phút kể từ bây giờ'], // 60*2
      [3600, 'phút', 60], // 60*60, 60
      [7200, '1 giờ trước', '1 giờ kể từ bây giờ'], // 60*60*2
      [86400, 'giờ', 3600], // 60*60*24, 60*60
      [172800, 'hôm qua', 'ngày mai'], // 60*60*24*2
      [604800, 'ngày', 86400], // 60*60*24*7, 60*60*24
      [1209600, 'tuần trước', 'tuần tiếp theo'], // 60*60*24*7*4*2
      [2419200, 'tuần', 604800], // 60*60*24*7*4, 60*60*24*7
      [4838400, 'tháng trước', 'tháng tiếp theo'], // 60*60*24*7*4*2
      [29030400, 'tháng', 2419200], // 60*60*24*7*4*12, 60*60*24*7*4
      [58060800, 'năm trước', 'năm tiếp theo'], // 60*60*24*7*4*12*2
      [2903040000, 'năm', 29030400], // 60*60*24*7*4*12*100, 60*60*24*7*4*12
      [5806080000, 'thế kỷ trước', 'thế kỷ tiếp theo'], // 60*60*24*7*4*12*100*2
      [58060800000, 'centuries', 2903040000] // 60*60*24*7*4*12*100*20, 60*60*24*7*4*12*100
    ];
    var seconds = (+new Date() - time) / 1000,
      token = 'trước',
      list_choice = 1;

    if (seconds == 0) {
      return 'vừa xong'
    }
    if (seconds < 0) {
      seconds = Math.abs(seconds);
      token = 'hiện tại';
      list_choice = 2;
    }
    var i = 0,
      format;

    while (format = time_formats[i++])
      if (format.length > 0 && seconds < format[0]) {
        if (typeof format[2] == 'string')
          return format[list_choice];
        else
          return Math.floor(seconds / format[2]) + ' ' + format[1] + ' ' + token;
      }
    return time;
  }
</script>
<style>
  .topbar .top-navbar .mailbox {
    width: 382px;
  }
</style>

  <!-- This is data table -->
  <script src="{{ asset('js/datatables.js') }}"></script>
  <script>
      var awsBucket = '{{ env('AWS_BUCKET') }}';
  </script>
  <!-- start - This is for export functionality only -->
  <script src="{{ asset('js/dropzone.js') }}"></script>
  <script src="{{ asset('js/dataTables.js') }}"></script>
  <script src="{{ asset('js/buttons_002.js') }}"></script>
  <script src="{{ asset('js/jszip.js') }}"></script>
  <script src="{{ asset('js/pdfmake.js') }}"></script>
  <script src="{{ asset('js/vfs_fonts.js') }}"></script>
  <script src="{{ asset('js/buttons.js') }}"></script>
  <script src="{{ asset('js/buttons_003.js') }}"></script>
  <script src="{{ asset('js/raphael-min.js') }}"></script>
  <script src="{{ asset('js/morris.js') }}"></script>
  <script src="{{ asset('js/lodash.js') }}"></script>


    <!-- Flot Charts JavaScript -->
    <script src="{{ asset('assets/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <!-- <script src="dict/flot-data.js"></script> -->
    <script src="{{ asset('js/xlsx.full.min.js') }}"></script>

  <script src="{{ asset('js/Chart.js') }}"></script>
  <script src="{{ asset('js/echarts-all.js') }}"></script>
  <script src="{{ asset('js/dashboard.js?v=1') }}"></script>
  <script src="{{ asset('js/client.js') }}"></script>
  <!--Xử lý image khi upload avatar-->
  <script src="https://cdn.jsdelivr.net/npm/screw-filereader@1.4.3/index.min.js"></script>

  {{-- <script src="{{ asset('js/recordManagenment.js') }}"></script> --}}
  {{-- <script src="{{ asset('js/councils.js') }}"></script> --}}
  <script src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>
  {{-- <script src="{{ asset('js/accountmanagenment.js') }}"></script> --}}
  @if(Request::path() == 'submitproof')
  <script src="{{ asset('js/formImg.js') }}"></script>
  <script src="{{ asset('js/submitproof.js?v=7') }}"></script>
  @endif
  @if(Request::path() == 'councils')
  <script src="{{ asset('js/councils.js?v=1') }}"></script>
  @endif
  @if(Request::path() == 'detailcouncils')
  <script src="{{ asset('js/addcouncils.js?v=3') }}"></script>
  @endif
  @if(Request::path() == 'evaluation')
  <script src="{{ asset('js/evaluation.js?v=6') }}"></script>
  @endif
  @if(Request::path() == 'evaluationhelpteam')
  <script src="{{ asset('js/evaluationhelpteam.js?v=2') }}"></script>
  @endif
  @if(Request::path() == 'evaluationresult')
  <script src="{{ asset('js/evaluationresult.js?v=6') }}"></script>
  @endif
  @if(Request::path() == 'evaluationset')
  <script src="{{ asset('js/formImg.js') }}"></script>
  <script src="{{ asset('js/evaluation_set.js?v=7') }}"></script>
  @endif
  @if(Request::path() == 'evaluationsethelpteam')
  <script src="{{ asset('js/formImg.js') }}"></script>
  <script src="{{ asset('js/evaluation_set_help_team.js?v=4') }}"></script>
  @endif
  @if(Request::path() == 'filemanagement')
    <script src="{{ asset('js/filemanagenment.js?v=6') }}"></script>
  @endif
  @if(Request::path() == 'approvemember')
  <script src="{{ asset('js/approvemember.js?v=2') }}"></script>
  @endif
  @if(Request::path() == 'evaluatefileresult')
  <script src="{{ asset('js/evaluation_file_result.js?v=7') }}"></script>
  @endif
  @if(Request::path() == 'account')
  <script src="{{ asset('js/accountSetting.js') }}"></script>
  @endif
  @if(Request::path() == 'invitemember')
  <script src="{{ asset('js/invitemember.js') }}"></script>
  @endif
  @if(Request::path() == 'helpteam')
  <script src="{{ asset('js/helpteam.js?v=1') }}"></script>
  @endif
  @if(Request::path() == 'viewmarkedbyuser')
  <script src="{{ asset('js/formImg.js') }}"></script>
  <script src="{{ asset('js/view_marked_by_user.js?v=1') }}"></script>
  @endif
  <script src="{{ asset('js/jquery.multi-select.js?v=1') }}"></script>
  <!-- <script src="/javascripts/getadressprovicial.js"></script> -->
  <!-- end - This is for export functionality only -->



</body></html>
