<html>
<head content-type="application/json">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>OCOP | Đăng ký</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- page css -->
    <link href="{{ asset('css/floating-label.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">

    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css);

        #progress_bar {
            margin: 10px 0;
            padding: 3px;
            border: 1px solid #000;
            font-size: 14px;
            clear: both;
            opacity: 0;
            -moz-transition: opacity 1s linear;
            -o-transition: opacity 1s linear;
            -webkit-transition: opacity 1s linear;
        }

        #progress_bar.loading {
            opacity: 1.0;
        }

        #progress_bar .percent {
            background-color: #99ccff;
            height: auto;
            width: 0;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }

        form {
            background-color: rgba(248, 248, 248, .9);
            padding: 3%;
            border-radius: 12px;
            background-color: #f5f5f3;
        }

        .form-material .form-control {
            background-color: #ffffff;
        }

        .form-control {
            min-height: 28px;
            border-style: solid;
            border-width: 0.5px;
            border-color: darkgrey;
            border-radius: 100px;
            border-color: transparent;
        }

        .form-control:focus {
            border-style: solid;
            border-color: #43cdbd;
            border-width: 1px
        }

        .form-group #html {
            padding: 0;
            height: initial;
            width: initial;
            margin-bottom: 0;
            display: none;
            cursor: pointer;
        }

        .form-group #htmlcheck {
            position: relative;
            cursor: pointer;
        }

        .form-group #htmlcheck:before {
            content: '';
            -webkit-appearance: none;
            background-color: transparent;
            border: 2px solid #0079bf;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
            padding: 10px;
            display: inline-block;
            position: relative;
            vertical-align: middle;
            cursor: pointer;
            margin-right: 5px;
        }

        .form-group input:checked + #htmlcheck:after {
            content: '';
            display: block;
            position: absolute;
            top: 2px;
            left: 9px;
            width: 6px;
            height: 14px;
            border: solid #5985f6;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .select2-container--default .select2-selection--single {
            height: 35px;
            border-style: solid;
            border-width: 0.5px;
            border-color: darkgrey;
            border-radius: 100px;
            border-color: transparent;
        }

        .select2-container--default.select2-container--open.select2-container--below .select2-selection--single,
        .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: 12px;
            margin-right: 5px;
            position: relative;
            z-index: 2;
            font-family: 'FontAwesome' !important;
        }

        .digit-group input {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px;
            width: 45px;
            height: 45px;
            border: none;
            line-height: 50px;
            text-align: center;
            font-size: 24px;
            background-color: #E5E5E5;
            font-family: 'Raleway', sans-serif;
            font-weight: bold;
            color: black;
            margin: 0 7px;
        }

        .digit-group .splitter {
            padding: 0 5px;
            color: black;
            font-weight: bold;
            font-size: 18px;
        }
    </style>

    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <style>@-webkit-keyframes swal2-show {
               0% {
                   -webkit-transform: scale(0.7);
                   transform: scale(0.7);
               }
               45% {
                   -webkit-transform: scale(1.05);
                   transform: scale(1.05);
               }
               80% {
                   -webkit-transform: scale(0.95);
                   transform: scale(0.95);
               }
               100% {
                   -webkit-transform: scale(1);
                   transform: scale(1);
               }
           }

        @keyframes swal2-show {
            0% {
                -webkit-transform: scale(0.7);
                transform: scale(0.7);
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }
            80% {
                -webkit-transform: scale(0.95);
                transform: scale(0.95);
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-webkit-keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            100% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
                opacity: 0;
            }
        }

        @keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            100% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
                opacity: 0;
            }
        }

        @-webkit-keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0;
            }
            54% {
                top: 1.0625em;
                left: .125em;
                width: 0;
            }
            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em;
            }
            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em;
            }
            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em;
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0;
            }
            54% {
                top: 1.0625em;
                left: .125em;
                width: 0;
            }
            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em;
            }
            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em;
            }
            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em;
            }
        }

        @-webkit-keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0;
            }
            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0;
            }
            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em;
            }
            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em;
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0;
            }
            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0;
            }
            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em;
            }
            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em;
            }
        }

        @-webkit-keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }

        @-webkit-keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                opacity: 0;
            }
            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                opacity: 0;
            }
            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
            }
            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                opacity: 0;
            }
            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                opacity: 0;
            }
            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
            }
            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @-webkit-keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0;
            }
            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0;
            }
            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast {
            flex-direction: column;
            align-items: stretch;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-actions {
            flex: 1;
            align-self: stretch;
            justify-content: flex-end;
            height: 2.2em;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-loading {
            justify-content: center;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-validationerror {
            font-size: 1em;
        }

        body.swal2-toast-shown > .swal2-container {
            position: fixed;
            background-color: transparent;
        }

        body.swal2-toast-shown > .swal2-container.swal2-shown {
            background-color: transparent;
        }

        body.swal2-toast-shown > .swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-top-end, body.swal2-toast-shown > .swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto;
        }

        body.swal2-toast-shown > .swal2-container.swal2-top-start, body.swal2-toast-shown > .swal2-container.swal2-top-left {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0;
        }

        body.swal2-toast-shown > .swal2-container.swal2-center-start, body.swal2-toast-shown > .swal2-container.swal2-center-left {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-center-end, body.swal2-toast-shown > .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-bottom-start, body.swal2-toast-shown > .swal2-container.swal2-bottom-left {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0;
        }

        body.swal2-toast-shown > .swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-bottom-end, body.swal2-toast-shown > .swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto;
        }

        .swal2-popup.swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: 0.625em;
            box-shadow: 0 0 0.625em #d9d9d9;
            overflow-y: hidden;
        }

        .swal2-popup.swal2-toast .swal2-header {
            flex-direction: row;
        }

        .swal2-popup.swal2-toast .swal2-title {
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em;
        }

        .swal2-popup.swal2-toast .swal2-close {
            position: initial;
        }

        .swal2-popup.swal2-toast .swal2-content {
            justify-content: flex-start;
            font-size: 1em;
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0;
        }

        .swal2-popup.swal2-toast .swal2-icon-text {
            font-size: 2em;
            font-weight: bold;
            line-height: 1em;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
            top: .875em;
            width: 1.375em;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
            left: .3125em;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
            right: .3125em;
        }

        .swal2-popup.swal2-toast .swal2-actions {
            height: auto;
            margin: 0 .3125em;
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 .3125em;
            padding: .3125em .625em;
            font-size: 1em;
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            box-shadow: 0 0 0 0.0625em #fff, 0 0 0 0.125em rgba(50, 100, 150, 0.4);
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
            position: absolute;
            width: 2em;
            height: 2.8125em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
            top: -.25em;
            left: -.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 2em 2em;
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
            top: -.25em;
            left: .9375em;
            -webkit-transform-origin: 0 2em;
            transform-origin: 0 2em;
            border-radius: 0 4em 4em 0;
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em;
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
            height: .3125em;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
            top: 1.125em;
            left: .1875em;
            width: .75em;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
            top: .9375em;
            right: .1875em;
            width: 1.375em;
        }

        .swal2-popup.swal2-toast.swal2-show {
            -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s;
        }

        .swal2-popup.swal2-toast.swal2-hide {
            -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards;
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s;
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s;
        }

        @-webkit-keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-0.625em) rotateZ(2deg);
                transform: translateY(-0.625em) rotateZ(2deg);
                opacity: 0;
            }
            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5;
            }
            66% {
                -webkit-transform: translateY(0.3125em) rotateZ(2deg);
                transform: translateY(0.3125em) rotateZ(2deg);
                opacity: .7;
            }
            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1;
            }
        }

        @keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-0.625em) rotateZ(2deg);
                transform: translateY(-0.625em) rotateZ(2deg);
                opacity: 0;
            }
            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5;
            }
            66% {
                -webkit-transform: translateY(0.3125em) rotateZ(2deg);
                transform: translateY(0.3125em) rotateZ(2deg);
                opacity: .7;
            }
            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes hideSweetToast {
            0% {
                opacity: 1;
            }
            33% {
                opacity: .5;
            }
            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0;
            }
        }

        @keyframes hideSweetToast {
            0% {
                opacity: 1;
            }
            33% {
                opacity: .5;
            }
            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0;
            }
            54% {
                top: .125em;
                left: .125em;
                width: 0;
            }
            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em;
            }
            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em;
            }
            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em;
            }
        }

        @keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0;
            }
            54% {
                top: .125em;
                left: .125em;
                width: 0;
            }
            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em;
            }
            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em;
            }
            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em;
            }
        }

        @-webkit-keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0;
            }
            65% {
                top: 1.25em;
                right: .9375em;
                width: 0;
            }
            84% {
                top: .9375em;
                right: 0;
                width: 1.125em;
            }
            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em;
            }
        }

        @keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0;
            }
            65% {
                top: 1.25em;
                right: .9375em;
                width: 0;
            }
            84% {
                top: .9375em;
                right: 0;
                width: 1.125em;
            }
            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em;
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow-y: hidden;
        }

        body.swal2-height-auto {
            height: auto !important;
        }

        body.swal2-no-backdrop .swal2-shown {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            background-color: transparent;
        }

        body.swal2-no-backdrop .swal2-shown > .swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top {
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-start, body.swal2-no-backdrop .swal2-shown.swal2-top-left {
            top: 0;
            left: 0;
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-end, body.swal2-no-backdrop .swal2-shown.swal2-top-right {
            top: 0;
            right: 0;
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-start, body.swal2-no-backdrop .swal2-shown.swal2-center-left {
            top: 50%;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-end, body.swal2-no-backdrop .swal2-shown.swal2-center-right {
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom {
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-start, body.swal2-no-backdrop .swal2-shown.swal2-bottom-left {
            bottom: 0;
            left: 0;
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-end, body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
            right: 0;
            bottom: 0;
        }

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
            -webkit-overflow-scrolling: touch;
        }

        .swal2-container.swal2-top {
            align-items: flex-start;
        }

        .swal2-container.swal2-top-start, .swal2-container.swal2-top-left {
            align-items: flex-start;
            justify-content: flex-start;
        }

        .swal2-container.swal2-top-end, .swal2-container.swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end;
        }

        .swal2-container.swal2-center {
            align-items: center;
        }

        .swal2-container.swal2-center-start, .swal2-container.swal2-center-left {
            align-items: center;
            justify-content: flex-start;
        }

        .swal2-container.swal2-center-end, .swal2-container.swal2-center-right {
            align-items: center;
            justify-content: flex-end;
        }

        .swal2-container.swal2-bottom {
            align-items: flex-end;
        }

        .swal2-container.swal2-bottom-start, .swal2-container.swal2-bottom-left {
            align-items: flex-end;
            justify-content: flex-start;
        }

        .swal2-container.swal2-bottom-end, .swal2-container.swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end;
        }

        .swal2-container.swal2-grow-fullscreen > .swal2-modal {
            display: flex !important;
            flex: 1;
            align-self: stretch;
            justify-content: center;
        }

        .swal2-container.swal2-grow-row > .swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center;
        }

        .swal2-container.swal2-grow-column {
            flex: 1;
            flex-direction: column;
        }

        .swal2-container.swal2-grow-column.swal2-top, .swal2-container.swal2-grow-column.swal2-center, .swal2-container.swal2-grow-column.swal2-bottom {
            align-items: center;
        }

        .swal2-container.swal2-grow-column.swal2-top-start, .swal2-container.swal2-grow-column.swal2-center-start, .swal2-container.swal2-grow-column.swal2-bottom-start, .swal2-container.swal2-grow-column.swal2-top-left, .swal2-container.swal2-grow-column.swal2-center-left, .swal2-container.swal2-grow-column.swal2-bottom-left {
            align-items: flex-start;
        }

        .swal2-container.swal2-grow-column.swal2-top-end, .swal2-container.swal2-grow-column.swal2-center-end, .swal2-container.swal2-grow-column.swal2-bottom-end, .swal2-container.swal2-grow-column.swal2-top-right, .swal2-container.swal2-grow-column.swal2-center-right, .swal2-container.swal2-grow-column.swal2-bottom-right {
            align-items: flex-end;
        }

        .swal2-container.swal2-grow-column > .swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center;
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right) > .swal2-modal {
            margin: auto;
        }

        @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
            .swal2-container .swal2-modal {
                margin: 0 !important;
            }
        }

        .swal2-container.swal2-fade {
            transition: background-color .1s;
        }

        .swal2-container.swal2-shown {
            background-color: rgba(0, 0, 0, 0.4);
        }

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
            box-sizing: border-box;
        }

        .swal2-popup:focus {
            outline: none;
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden;
        }

        .swal2-popup .swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

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
            word-wrap: break-word;
        }

        .swal2-popup .swal2-actions {
            align-items: center;
            justify-content: center;
            margin: 1.25em auto 0;
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4;
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));
        }

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
            user-select: none;
        }

        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
            margin-right: 30px;
            margin-left: 30px;
        }

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
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        }

        .swal2-popup .swal2-styled {
            margin: 0 .3125em;
            padding: .625em 2em;
            font-weight: 500;
            box-shadow: none;
        }

        .swal2-popup .swal2-styled:not([disabled]) {
            cursor: pointer;
        }

        .swal2-popup .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: 0.25em;
            background: initial;
            background-color: #3085d6;
            color: #fff;
            font-size: 1.0625em;
        }

        .swal2-popup .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: 0.25em;
            background: initial;
            background-color: #aaa;
            color: #fff;
            font-size: 1.0625em;
        }

        .swal2-popup .swal2-styled:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
        }

        .swal2-popup .swal2-styled::-moz-focus-inner {
            border: 0;
        }

        .swal2-popup .swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding-top: 1em;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em;
        }

        .swal2-popup .swal2-image {
            max-width: 100%;
            margin: 1.25em auto;
        }

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
            overflow: hidden;
        }

        .swal2-popup .swal2-close:hover {
            -webkit-transform: none;
            transform: none;
            color: #f27474;
        }

        .swal2-popup > .swal2-input,
        .swal2-popup > .swal2-file,
        .swal2-popup > .swal2-textarea,
        .swal2-popup > .swal2-select,
        .swal2-popup > .swal2-radio,
        .swal2-popup > .swal2-checkbox {
            display: none;
        }

        .swal2-popup .swal2-content {
            justify-content: center;
            margin: 0;
            padding: 0;
            color: #545454;
            font-size: 1.125em;
            font-weight: 300;
            line-height: normal;
            word-wrap: break-word;
        }

        .swal2-popup #swal2-content {
            text-align: center;
        }

        .swal2-popup .swal2-input,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-textarea,
        .swal2-popup .swal2-select,
        .swal2-popup .swal2-radio,
        .swal2-popup .swal2-checkbox {
            margin: 1em auto;
        }

        .swal2-popup .swal2-input,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-textarea {
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: 0.1875em;
            font-size: 1.125em;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
            box-sizing: border-box;
        }

        .swal2-popup .swal2-input.swal2-inputerror,
        .swal2-popup .swal2-file.swal2-inputerror,
        .swal2-popup .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important;
        }

        .swal2-popup .swal2-input:focus,
        .swal2-popup .swal2-file:focus,
        .swal2-popup .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: none;
            box-shadow: 0 0 3px #c4e6f5;
        }

        .swal2-popup .swal2-input::-webkit-input-placeholder,
        .swal2-popup .swal2-file::-webkit-input-placeholder,
        .swal2-popup .swal2-textarea::-webkit-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input:-ms-input-placeholder,
        .swal2-popup .swal2-file:-ms-input-placeholder,
        .swal2-popup .swal2-textarea:-ms-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input::-ms-input-placeholder,
        .swal2-popup .swal2-file::-ms-input-placeholder,
        .swal2-popup .swal2-textarea::-ms-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input::placeholder,
        .swal2-popup .swal2-file::placeholder,
        .swal2-popup .swal2-textarea::placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-range input {
            width: 80%;
        }

        .swal2-popup .swal2-range output {
            width: 20%;
            font-weight: 600;
            text-align: center;
        }

        .swal2-popup .swal2-range input,
        .swal2-popup .swal2-range output {
            height: 2.625em;
            margin: 1em auto;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em;
        }

        .swal2-popup .swal2-input {
            height: 2.625em;
            padding: 0.75em;
        }

        .swal2-popup .swal2-input[type='number'] {
            max-width: 10em;
        }

        .swal2-popup .swal2-file {
            font-size: 1.125em;
        }

        .swal2-popup .swal2-textarea {
            height: 6.75em;
            padding: 0.75em;
        }

        .swal2-popup .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            color: #545454;
            font-size: 1.125em;
        }

        .swal2-popup .swal2-radio,
        .swal2-popup .swal2-checkbox {
            align-items: center;
            justify-content: center;
        }

        .swal2-popup .swal2-radio label,
        .swal2-popup .swal2-checkbox label {
            margin: 0 .6em;
            font-size: 1.125em;
        }

        .swal2-popup .swal2-radio input,
        .swal2-popup .swal2-checkbox input {
            margin: 0 .4em;
        }

        .swal2-popup .swal2-validationerror {
            display: none;
            align-items: center;
            justify-content: center;
            padding: 0.625em;
            background: #f0f0f0;
            color: #666666;
            font-size: 1em;
            font-weight: 300;
            overflow: hidden;
        }

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
            zoom: normal;
        }

        @supports (-ms-accelerator: true) {
            .swal2-range input {
                width: 100% !important;
            }

            .swal2-range output {
                display: none;
            }
        }

        @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
            .swal2-range input {
                width: 100% !important;
            }

            .swal2-range output {
                display: none;
            }
        }

        @-moz-document url-prefix() {
            .swal2-close:focus {
                outline: 2px solid rgba(50, 100, 150, 0.4);
            }
        }

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
            zoom: normal;
        }

        .swal2-icon-text {
            font-size: 3.75em;
        }

        .swal2-icon.swal2-error {
            border-color: #f27474;
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1;
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474;
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
            left: 1.0625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
            right: 1em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86;
        }

        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee;
        }

        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd;
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86;
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%;
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
            top: -.4375em;
            left: -2.0635em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 3.75em 3.75em;
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em;
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
            top: -.6875em;
            left: 1.875em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 3.75em;
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0;
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            top: -.25em;
            left: -.25em;
            width: 100%;
            height: 100%;
            border: 0.25em solid rgba(165, 220, 134, 0.3);
            border-radius: 50%;
            z-index: 2;
            box-sizing: content-box;
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            z-index: 1;
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'] {
            display: block;
            position: absolute;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86;
            z-index: 2;
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
            top: 2.875em;
            left: .875em;
            width: 1.5625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .swal2-progresssteps {
            align-items: center;
            margin: 0 0 1.25em;
            padding: 0;
            font-weight: 600;
        }

        .swal2-progresssteps li {
            display: inline-block;
            position: relative;
        }

        .swal2-progresssteps .swal2-progresscircle {
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #3085d6;
            color: #fff;
            line-height: 2em;
            text-align: center;
            z-index: 20;
        }

        .swal2-progresssteps .swal2-progresscircle:first-child {
            margin-left: 0;
        }

        .swal2-progresssteps .swal2-progresscircle:last-child {
            margin-right: 0;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
            background: #3085d6;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progresscircle {
            background: #add8e6;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progressline {
            background: #add8e6;
        }

        .swal2-progresssteps .swal2-progressline {
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #3085d6;
            z-index: 10;
        }

        [class^='swal2'] {
            -webkit-tap-highlight-color: transparent;
        }

        .swal2-show {
            -webkit-animation: swal2-show 0.3s;
            animation: swal2-show 0.3s;
        }

        .swal2-show.swal2-noanimation {
            -webkit-animation: none;
            animation: none;
        }

        .swal2-hide {
            -webkit-animation: swal2-hide 0.15s forwards;
            animation: swal2-hide 0.15s forwards;
        }

        .swal2-hide.swal2-noanimation {
            -webkit-animation: none;
            animation: none;
        }

        [dir='rtl'] .swal2-close {
            right: auto;
            left: 0;
        }

        .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: swal2-animate-success-line-tip 0.75s;
            animation: swal2-animate-success-line-tip 0.75s;
        }

        .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: swal2-animate-success-line-long 0.75s;
            animation: swal2-animate-success-line-long 0.75s;
        }

        .swal2-animate-success-icon .swal2-success-circular-line-right {
            -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
            animation: swal2-rotate-success-circular-line 4.25s ease-in;
        }

        .swal2-animate-error-icon {
            -webkit-animation: swal2-animate-error-icon 0.5s;
            animation: swal2-animate-error-icon 0.5s;
        }

        .swal2-animate-error-icon .swal2-x-mark {
            -webkit-animation: swal2-animate-error-x-mark 0.5s;
            animation: swal2-animate-error-x-mark 0.5s;
        }

        @-webkit-keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <style type="text/css">.jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body class="skin-blue fixed-layout">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader" style="display: none;">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Đang tải...</p>
    </div>
</div>
<header class="topbar" style="position: fixed; top: 0;">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark" style="background-color: #f7f7f7">
        <div style="margin: 0.1rem 2rem 0 1rem; width: 100%;">
            <!-- <h5 class="mt-3" style="display: inline; float: left">NỘP MINH CHỨNG
            </h5> -->
        </div>

    </nav>
</header>
<div id="main-wrapper" class="mt-5">

    <div class="row">
        <div class="col-12">
            <h4 style="text-align: center; font-weight: 600;" class="pt-3">Đăng ký</h4>
            <div class="card mt-3">
                <div class="card-body" style="padding-left: 10px; padding-right: 10px;">
                    <input type="hidden" name="psid" id="psid">
                    <div id="part1">
                        <form class="sky-form">
                            <div
                                style="background-color: white; padding-left: 7px; border-radius: 12px;padding-top: 7px;">
                                <label>Bạn muốn tham gia với tư cách nào?</label><br>
                                <input type="radio" name="group-check" id="member-check" value="Member">
                                <label for="member-check"> Chủ thể</label><br>
                                <input type="radio" name="group-check" id="manager-check" value="Manager">
                                <label for="manager-check"> Quản lý</label><br>
                                <input type="radio" name="group-check" id="examiner-check" value="Examiner">
                                <label for="examiner-check"> Người chấm</label><br>
                                <input type="radio" name="group-check" id="HelpTeam-check" value="HelpTeam">
                                <label for="HelpTeam-check">Tổ tư vấn</label><br>
                            </div>
                            <div id="stLevel" class="mb-3 mt-3" name="stLevel" style="display: none;">
                                <label id="levelHeading">Cấp quản lý</label><br>
                                <div id="level-select"
                                     style="background-color: white; padding-left: 7px; border-radius: 12px;padding-top: 7px;">
                                    <div class="two-level">
                                        <input type="radio" name="level-check" class="level-check-3" id="lvl2-check" value="3">
                                        <label for="lvl2-check"> Cấp huyện</label><br>
                                        <input type="radio" name="level-check" class="level-check-2" id="lvl1-check" value="2">
                                        <label for="lvl1-check"> Cấp tỉnh</label><br>
                                    </div>
                                    <input type="radio" name="level-check" class="level-check-1" id="lvl0-check" value="1">
                                    <label for="lvl0-check"> Cấp trung ương</label><br>
                                </div>
                                <span class="bar"></span>
                            </div>
                            <footer align="center" class="mt-5">
                                <button type="button" value="Submit"
                                        style="display: none; background-color: #43cdbd; color: #ffff; border-radius: 100px; padding: 5px 60px 5px 60px"
                                        id="btnContinue" class="btn" name="btnSend">Tiếp tục
                                </button>
                            </footer>
                        </form>
                    </div>
                    <div id="part2" style="display: block;">
                        <div id="member" class="register_step_2" style="display: none;">
                            <form class="m-t-10" action="{{ route('user.register.create') }}" method="post" autautocomplete="off">
                                @csrf
                                <input type="hidden" name="type" id="type" value="member">
                                <input type="hidden" name="level" id="level" class="inputLevel">
                                <div class="form-group m-b-20" id="stName" name="stName">
                                    <label for="txtFullName" id="lablefullname">Họ tên</label>
                                    <input type="text" class="form-control" id="txtFullName" name="fullname"
                                           required="true" autocomplete="off">
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="stPhone">
                                    <label for="txtPhone">Số ĐT liên hệ</label>
                                    <input type="number" class="form-control" id="txtPhone" name="phone"
                                           required="true" autocomplete="off">
                                    <code id="wrong-phone-format" style="display: none"><i>Vui lòng nhập đúng SĐT của
                                            bạn.</i></code>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="stEmail" name="stEmail">
                                    <label for="txtEmail">Email</label>
                                    <input type="text" class="form-control" id="txtEmail" name="email"
                                           required="true" autocomplete="off">
                                    <code id="wrong-email-form" style="display: none"><i>Vui lòng nhập đúng email của
                                            bạn.</i></code>
                                    <span class="bar"></span>
                                </div>

                                <div class="form-group m-b-20" id="stPass" name="stPass">
                                    <label for="txtPass">Mật khẩu</label>
                                    <input type="password" class="form-control" id="txtPass" name="password">
                                    <span toggle="#txtPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="stCfPass" name="stCfPass">
                                    <label for="txtCfPass">Xác nhận mật khẩu</label>
                                    <input type="password" class="form-control" id="txtCfPass" name="re_password">
                                    <span toggle="#txtCfPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <span class="bar"></span>
                                </div>
                                <hr>
                                <div id="snipiner" style="    text-align: center;display: none ;">
                                    <div class="spinner-grow text-success" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-danger" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-warning" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-info" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <footer align="center">
                                    <div class="btn-group" style="display: flex;">
                                        <button type="button" value="Submit" style="background-color: #43cdbd; color: #ffff; border-radius: 100px;width: 45%;
                                                    margin-right: 14px;" id="btnBackToPart1" class="btn  btn-back" name="btnSend">
                                            Quay lại
                                        </button>
                                        <button type="submit" value="Submit"
                                                style="background-color: #43cdbd; color: #ffff; border-radius: 100px;width: 45%;"
                                                id="btnSend" class="btn" name="btnSend">Đăng ký
                                        </button>
                                    </div>
                                </footer>
                            </form>
                        </div>
                        <div id="manager" class="register_step_2" style="display: none;">
                            <form class="m-t-10 form-register" action="{{ route('user.register.create') }}" method="post" id="form-manager"
                                  autautocomplete="off">
                                @csrf
                                <input type="hidden" name="type" id="type" value="manager">
                                <input type="hidden" name="level" id="level" class="inputLevel">
                                <div class="row">
                                    <div class="col-sm-4 form-group m-b-20 provinces" id="stProvical">
                                        <label for="txtlevel">Tỉnh/TP</label>
                                        <select class="form-control" style="width: 100%" name="province_id"
                                                id="cboProvincial" required>
                                            <option selected="selected" disabled>Chọn</option>
                                            @foreach($provinces as $province)
                                                <option value="{{$province['id']}}">{{ $province['name'] }}</option>
                                            @endforeach
                                        </select>
                                        <code id="nof-load-pro" style="display: none;">Đang tải ...</code>
                                    </div>
                                    <div class="col-sm-4 form-group m-b-20 districts">
                                        <label for="txtlevel">Quận/Huyện</label>
                                        <select class="form-control" style="width: 100%" name="district_id"
                                                id="cboDistricts" required>
                                            <option disabled selected>Chọn quận/huyện</option>
                                        </select>
                                        <code id="nof-load-district" style="display: none;">Đang tải ...</code>
                                    </div>
                                </div>
                                <div class="form-group m-b-20" id="stName" name="stName">
                                    <label for="txtFullName" id="lablefullname">Họ tên</label>
                                    <input type="text" class="form-control" id="txtFullName" name="fullname"
                                           required="true" autocomplete="off">
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="stBBN">
                                    <label for="txtBBN">Bộ ban ngành</label>
                                    <select class="form-control" style="width: 100%" name="departments" id="txtBBN">
                                        <option value="0" disabled selected="selected">Chọn Bộ ban ngành</option>
                                        @foreach($departments as $key => $department)
                                            <option value="{{ $key }}">{{ $department }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group m-b-20" id="stWorkunitdisTric" style="display: none;">
                                    <label for="txtstWorkunit">Đơn vị công tác</label>
                                    <div id="forDistrict" style="display: none;">
                                        <select class="form-control" style="width: 100%" name="work_unit_id_district"
                                                id="txtstWorkunitdisTric">
                                            <option value="0" disabled selected="selected">Chọn đơn vị công tác</option>
                                            @foreach($workUnitDistrictLevel as $key => $unit)
                                                <option value="{{ $key }}">{{ $unit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div id="forProvince" style="display: none;">
                                        <select class="form-control" style="width: 100%" name="work_unit_id_province"
                                                id="txtstWorkunitdisTric">
                                            <option value="0" disabled selected="selected">Chọn đơn vị công tác</option>
                                            @foreach($workUnitProvinceLevel as $key => $unit)
                                                <option value="{{ $key }}">{{ $unit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="text" class="form-control mt-2 d-none" id="txtmemberPosition" name="work_unit" placeholder="Nhập đơn vị công tác khác"
                                           required="true" autocomplete="off">
                                </div>

                                <div class="form-group m-b-20" id="memberPositionWrapper" name="stPhone">
                                    <label for="txtmemberPosition">Chức vụ</label>
                                    <input type="text" class="form-control" id="txtmemberPosition" name="position"
                                           required="true" autocomplete="off">
                                </div>

                                <div class="form-group m-b-20" id="stPhone">
                                    <label for="txtPhone">Số ĐT liên hệ</label>
                                    <input type="text" class="form-control" id="txtPhone" name="phone"
                                           required="true" autocomplete="off">
                                    <code id="wrong-phone-format" style="display: none"><i>Vui lòng nhập đúng SĐT của
                                            bạn.</i></code>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="stEmail" name="stEmail">
                                    <label for="txtEmail">Email</label>
                                    <input type="text" class="form-control" id="txtEmail" name="email"
                                           required="true" autocomplete="off">
                                    <code id="wrong-email-form" style="display: none"><i>Vui lòng nhập đúng email của
                                            bạn.</i></code>
                                    <span class="bar"></span>
                                </div>

                                <div class="form-group m-b-20" id="stPass" name="stPass">
                                    <label for="txtPass">Mật khẩu</label>
                                    <input type="password" class="form-control" id="txtPass" name="password" required>
                                    <span toggle="#txtPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="stCfPass" name="stCfPass">
                                    <label for="txtCfPass">Xác nhận mật khẩu</label>
                                    <input type="password" class="form-control" id="txtCfPass" name="re_password"
                                           required>
                                    <span toggle="#txtCfPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <span class="bar"></span>
                                </div>
                                <hr>
                                <div id="snipiner" style="    text-align: center;display: none ;">
                                    <div class="spinner-grow text-success" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-danger" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-warning" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-info" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <footer align="center">
                                    <div class="btn-group" style="display: flex;">
                                        <button type="button" value="Submit" style="background-color: #43cdbd; color: #ffff; border-radius: 100px;width: 45%;
                                                margin-right: 14px;" id="btnBackToPart1" class="btn btn-back" name="btnSend">Quay
                                            lại
                                        </button>
                                        <button type="button" value="Submit"
                                                style="background-color: #43cdbd; color: #ffff; border-radius: 100px;width: 45%;"
                                                id="btnSend" class="btn btn-submit">Đăng ký
                                        </button>
                                    </div>
                                </footer>
                            </form>
                        </div>
                        <div id="examiner" class="register_step_2" style="display: none;">
                            <form class="m-t-10 form-register" action="{{ route('user.register.create') }}" method="post" autautocomplete="off">
                                @csrf
                                <input type="hidden" name="type" id="typeExaminer" value="examiner">
                                <input type="hidden" name="level" id="levelExaminer" class="inputLevel">
                                <div class="row">
                                    <div class="col-sm-4 form-group m-b-20 provinces" id="stProvicalExaminer">
                                        <label for="txtlevel">Tỉnh/TP</label>
                                        <select class="form-control" style="width: 100%" name="province_id"
                                                id="cboProvincialExaminer">
                                            <option selected="selected" disabled>Chọn</option>
                                            @foreach($provinces as $province)
                                                <option value="{{$province['id']}}">{{ $province['name'] }}</option>
                                            @endforeach
                                        </select>
                                        <code id="nof-load-pro" style="display: none;">Đang tải ...</code>
                                    </div>
                                    <div class="col-sm-4 form-group m-b-20 districts" id="stDistrictsExaminer">
                                        <label for="txtlevel">Quận/Huyện</label>
                                        <select class="form-control" style="width: 100%" name="district_id"
                                                id="cboDistrictsExaminer">
                                        </select>
                                        <code id="nof-load-district" style="display: none;">Đang tải ...</code>
                                    </div>
                                </div>
                                <div class="form-group m-b-20" id="stNameExaminer" name="stName">
                                    <label for="txtFullName" id="lablefullname">Họ tên</label>
                                    <input type="text" class="form-control" id="txtFullNameExaminer" name="fullname"
                                           required="true" autocomplete="off">
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="stBBNExaminer">
                                    <label for="txtBBN">Bộ ban ngành</label>
                                    <select class="form-control" style="width: 100%" name="departments" id="txtBBN">
                                        <option value="0" disabled selected="selected">Chọn Bộ ban ngành</option>
                                        @foreach($departments as $key => $department)
                                            <option value="{{ $key }}">{{ $department }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group m-b-20" id="stWorkunitExaminer" style="display: none;">
                                    <label for="txtstWorkunit">Đơn vị công tác</label>
                                    <div id="stWorkunitdisTricExaminer" style="display: none;">
                                        <select class="form-control" style="width: 100%" name="work_unit_id_district"
                                                id="txtstWorkunitdisTric">
                                            <option value="0" disabled selected="selected">Chọn đơn vị công tác</option>
                                            @foreach($workUnitDistrictLevel as $key => $unit)
                                                <option value="{{ $key }}">{{ $unit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div id="stWorkunitProExaminer" style="display: none;">
                                        <select class="form-control" style="width: 100%" name="work_unit_id_province"
                                                id="txtstWorkunitdisTric">
                                            <option value="0" disabled selected="selected">Chọn đơn vị công tác</option>
                                            @foreach($workUnitProvinceLevel as $key => $unit)
                                                <option value="{{ $key }}">{{ $unit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="text" class="form-control mt-2 d-none" id="txtmemberPosition" name="work_unit" placeholder="Nhập đơn vị công tác khác"
                                           required="true" autocomplete="off">
                                </div>
                                <div class="form-group m-b-20" id="memberPositionWrapperExaminer" name="stPhone">
                                    <label for="txtmemberPosition">Chức vụ</label>
                                    <input type="text" class="form-control" id="position"
                                           name="position" required="true" autocomplete="off">
                                </div>

                                <div class="form-group m-b-20" id="stPhoneExaminer">
                                    <label for="txtPhone">Số ĐT liên hệ</label>
                                    <input type="number" class="form-control" id="txtPhoneExaminer" name="phone"
                                           required="true" autocomplete="off">
                                    <code id="wrong-phone-format" style="display: none"><i>Vui lòng nhập đúng SĐT của
                                            bạn.</i></code>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="stEmailExaminer" name="stEmail">
                                    <label for="txtEmail">Email</label>
                                    <input type="text" class="form-control" id="txtEmailExaminer" name="email"
                                           required="true" autocomplete="off">
                                    <code id="wrong-email-form" style="display: none"><i>Vui lòng nhập đúng email của
                                            bạn.</i></code>
                                    <span class="bar"></span>
                                </div>

                                <div class="form-group m-b-20" id="stPassExaminer" name="stPass">
                                    <label for="txtPass">Mật khẩu</label>
                                    <input type="password" class="form-control" id="txtPassExaminer" name="password">
                                    <span toggle="#txtPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="stCfPassExaminer" name="stCfPass">
                                    <label for="txtCfPass">Xác nhận mật khẩu</label>
                                    <input type="password" class="form-control" id="txtCfPassExaminer" name="re_password">
                                    <span toggle="#txtCfPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <span class="bar"></span>
                                </div>
                                <hr>
                                <div id="snipiner" style="    text-align: center;display: none ;">
                                    <div class="spinner-grow text-success" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-danger" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-warning" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-info" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <footer align="center">
                                    <div class="btn-group" style="display: flex;">
                                        <button type="button" value="Submit" style="background-color: #43cdbd; color: #ffff; border-radius: 100px;width: 45%;
                                                    margin-right: 14px;" id="btnBackToPart1" class="btn btn-back" name="btnSend">
                                            Quay lại
                                        </button>
                                        <button type="button" value="Submit"
                                                style="background-color: #43cdbd; color: #ffff; border-radius: 100px;width: 45%;"
                                                id="btnSend" class="btn btn-submit" name="btnSend">Đăng ký
                                        </button>
                                    </div>
                                </footer>
                            </form>
                        </div>
                        <div id="helpteam" class="register_step_2" style="display: none;">
                            <form class="m-t-10 form-register" action="" method="post" autautocomplete="off">
                                @csrf
                                <input type="hidden" name="type" id="typeHelpteam" value="helpteam">
                                <input type="hidden" name="level" id="levelHelpteam" class="inputLevel" value="1">
                                <div class="row">
                                    <div class="col-sm-4 form-group m-b-20 provinces" id="stProvicalExaminer">
                                        <label for="txtlevel">Tỉnh/TP</label>
                                        <select class="form-control" style="width: 100%" name="province_id"
                                                id="cboProvincialExaminer">
                                            <option selected="selected" disabled>Chọn</option>
                                            @foreach($provinces as $province)
                                                <option value="{{$province['id']}}">{{ $province['name'] }}</option>
                                            @endforeach
                                        </select>
                                        <code id="nof-load-pro" style="display: none;">Đang tải ...</code>
                                    </div>
                                    <div class="col-sm-4 form-group m-b-20 districts" id="stDistrictsExaminer">
                                        <label for="txtlevel">Quận/Huyện</label>
                                        <select class="form-control" style="width: 100%" name="district_id"
                                                id="cboDistrictsExaminer">
                                        </select>
                                        <code id="nof-load-district" style="display: none;">Đang tải ...</code>
                                    </div>
                                </div>
                                <div class="form-group m-b-20" id="stNameHelpteam" name="stName">
                                    <label for="txtFullName" id="lablefullname">Họ tên</label>
                                    <input type="text" class="form-control" id="txtFullNameHelpteam" name="fullname"
                                           required="true" autocomplete="off">
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="wokerUnit" name="wokerUnit">
                                    <label for="wokerUnitInput">Đơn vị công tác</label>
                                    <input type="text" class="form-control" id="wokerUnitInput"
                                           name="work_unit" required="true" autocomplete="off">
                                </div>
                                <div class="form-group m-b-20" id="memberPositionWrapperHelpteam" name="stPhone">
                                    <label for="txtmemberPosition">Chức vụ</label>
                                    <input type="text" class="form-control" id="txtmemberPositionHelpteam"
                                           name="position" required="true" autocomplete="off">
                                </div>

                                <div class="form-group m-b-20" id="stPhoneHelpteam">
                                    <label for="txtPhone">Số ĐT liên hệ</label>
                                    <input type="number" class="form-control" id="txtPhoneHelpteam" name="phone"
                                           required="true" autocomplete="off">
                                    <code id="wrong-phone-format" style="display: none"><i>Vui lòng nhập đúng SĐT của
                                            bạn.</i></code>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="stEmailHelpteam" name="stEmail">
                                    <label for="txtEmail">Email</label>
                                    <input type="text" class="form-control" id="txtEmailHelpteam" name="email"
                                           required="true" autocomplete="off">
                                    <code id="wrong-email-form" style="display: none"><i>Vui lòng nhập đúng email của
                                            bạn.</i></code>
                                    <span class="bar"></span>
                                </div>

                                <div class="form-group m-b-20" id="stPassHelpteam" name="stPass">
                                    <label for="txtPass">Mật khẩu</label>
                                    <input type="password" class="form-control" id="txtPassHelpteam" name="password">
                                    <span toggle="#txtPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group m-b-20" id="stCfPassHelpteam" name="stCfPass">
                                    <label for="txtCfPass">Xác nhận mật khẩu</label>
                                    <input type="password" class="form-control" id="txtCfPassHelpteam" name="re_password">
                                    <span toggle="#txtCfPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <span class="bar"></span>
                                </div>
                                <hr>
                                <footer align="center">
                                    <div class="btn-group" style="display: flex;">
                                        <button type="button" value="Submit" style="background-color: #43cdbd; color: #ffff; border-radius: 100px;width: 45%;
                                                    margin-right: 14px;" id="btnBackToPart1" class="btn btn-back">
                                            Quay lại
                                        </button>
                                        <button type="button" value="Submit"
                                                style="background-color: #43cdbd; color: #ffff; border-radius: 100px;width: 45%;"
                                                id="btnSend" class="btn btn-submit">Đăng ký
                                        </button>
                                    </div>
                                </footer>
                            </form>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal hide fade in" id="OTPModal" tabindex="-1" role="dialog" aria-labelledby="OTPModal"
         data-keyboard="false" data-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid py-3">
                        <h4 class="text-center font-weight-bold">Xác thực thông tin</h4>
                        <h5 class="text-center font-weight-bold px-5" style="color: #616161">Vui lòng nhập mã OTP đã
                            được gửi về số điện thoại <span class="font-weight-bold" style="color: #09714E;"
                                                            id="member-id"></span></h5>
                        <div class="row justify-content-center mt-3">
                            <div class="digit-group" data-group-name="digits" data-autosubmit="false"
                                 autocomplete="off">
                                <input type="text" id="digit-1" name="digit-1" data-next="digit-2" autofocus=""
                                       maxlength="1">
                                <input type="text" id="digit-2" name="digit-2" data-next="digit-3"
                                       data-previous="digit-1" maxlength="1">
                                <input type="text" id="digit-3" name="digit-3" data-next="digit-4"
                                       data-previous="digit-2" maxlength="1">
                                <input type="text" id="digit-4" name="digit-4" data-next="digit-5"
                                       data-previous="digit-3" maxlength="1">
                                <input type="text" id="digit-5" name="digit-5" data-next="digit-6"
                                       data-previous="digit-4" maxlength="1">
                                <input type="text" id="digit-6" name="digit-6" data-previous="digit-5" maxlength="1">
                            </div>
                        </div>
                        <div class="text-center text-danger error-otp font-weight-bold mt-4"></div>
                        <h5 class="text-center font-weight-bold mt-4">Bạn chưa nhận được mã? <span
                                class="font-weight-bold" id="resent-otp" style="color: #616161;cursor: pointer">Gửi lại OTP <span
                                    style="color: #09714E" id="countTime">(03:00)</span></span></h5>
                        <button id="btn-otp" class="btn col-12 font-weight-bold mt-2"
                                style="background-color: #09714E;color: white">Xác nhận
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script id="Messenger" src="{{ asset('js/messenger.js') }}"></script>
<script src="{{ asset('js/bundle.js') }}" crossorigin="anonymous">
</script>
<script src="{{ asset('js/psid.js') }}"></script>
<script src="{{ asset('js/jquery-3.js') }}"></script>
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
<script src="{{ asset('js/jquery_002.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/sweetalert.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery_003.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Alert%2520copy.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" type="text/javascript"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('js/perfect-scrollbar.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>


<!-- Menu sidebar -->
<!--Custom JavaScript -->
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/jasny-bootstrap.js') }}"></script>
<script src="{{ asset('js/registernew.js?v=3') }}"></script>

</body>
</html>
