<title>Card Game Code Test</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    /* CSS for card design */
    body {
        height: 100%;
        background: #4e5660;
        background: -moz-radial-gradient(center, ellipse cover,  #4e5660 10%, #000000 76%);
        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(10%,#4e5660), color-stop(76%,#000000));
        background: -webkit-radial-gradient(center, ellipse cover,  #4e5660 10%,#000000 76%);
        background: -o-radial-gradient(center, ellipse cover,  #4e5660 10%,#000000 76%);
        background: -ms-radial-gradient(center, ellipse cover,  #4e5660 10%,#000000 76%);
        background: radial-gradient(ellipse at center,  #4e5660 10%,#000000 76%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4e5660', endColorstr='#000000',GradientType=1 );
        font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
        background-attachment:fixed;
        }

        h1 {
            font-size: 20px;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 15px;
            font-weight: 100;
        }
        label, td {
            color: white
        }

        container {
            
        color:white;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        controls {
            font-weight: 300;
        display: block;
            text-align: center;
            width: auto;
            margin: 5px auto 20px;
            background-color: red;
            padding: 5px;
            font-size: 16px;
            line-height: 18px;
        }

        .btn-refresh {
            background-color: black;
            padding: 6px 5px 5px;
            border-radius: 5px;
            display: inline-block;
        cursor: pointer;
        }

        card {
            width:200px;
            height:310px;
            border-radius:10px;
            border:solid 1px gray;
            float: left;
            margin: 9px;
            position: relative;
            font-size: 20px;
            text-align: center;
            background: white fixed;
            line-height: 20px;
        }

        center {
            width: 65%;
            height: 65%;
            position: absolute;
            top: 15%;
            left: 15%;
            font-size: 70px;
            text-indent: -5px;
            word-wrap: break-word;
            line-height: 53px;
            padding: 2%;
        }

        .no-K center,
        .no-Q center,
        .no-J center {
            border:solid 1px gray;
        }

        .no-K.heart center,
        .no-Q.heart center,
        .no-J.heart center,
        .no-K.diamond center,
        .no-Q.diamond center,
        .no-J.diamond center {
            border:solid 1px red;
        }

        .heart, .diamond {
        color:red;	
        }

        .spade, .club {
        color:black;
        }

        value, suit {
            text-align: center;
        }

        suit {
            
        }

        value {
            display: block;
            margin-bottom: 0px;
            font: 37px/29px 'Tulpen One';
        }

        corner {
            display: block;
            margin: 6px 7px;
            position: absolute;
            width: 20px;
            font-family:sans-serif !important;
        }

        corner:last-of-type {
            -ms-transform: rotate(180deg); /* IE 9 */
            -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
            transform: rotate(180deg);
            bottom: 0;
            
            right: 0;
        }

        .no-13 center,
        .no-12 center,
        .no-11 center {
            font-size: 100px;
            line-height: 160px;
        }

        symbol {
            -ms-transform: rotate(180deg); /* IE 9 */
            -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
            transform: rotate(180deg);
            display: inline-block;
            position: absolute;
            top: 0;
        }

        .no-1 symbol,
        .no-2 symbol:nth-child(-n+1),
        .no-3 symbol:nth-child(-n+2),
        .no-4 symbol:nth-child(-n+2),
        .no-5 symbol:nth-child(-n+3),
        .no-6 symbol:nth-child(-n+4),
        .no-7 symbol:nth-child(-n+5),
        .no-8 symbol:nth-child(-n+5),
        .no-9 symbol:nth-child(-n+5),
        .no-10 symbol:nth-child(-n+5) {
            -ms-transform: rotate(0deg); /* IE 9 */
            -webkit-transform: rotate(0deg); /* Chrome, Safari, Opera */
            transform: rotate(0deg);
            margin-left: 4px;
        }

        .no-A symbol { top: 35%; left: 35%; }

        .no-2 symbol:nth-child(1) { left: 35%; }

        .no-2 symbol:nth-child(2) { bottom: 0; left: 35%; }

        .no-3 symbol {left: 35%; }
        .no-3 symbol:nth-child(2) { top: 36%;   }
        .no-3 symbol:nth-child(3) { bottom: 0; }

        .no-4 symbol:nth-child(1) { left: 0; }
        .no-4 symbol:nth-child(2) { right: -3px; }
        .no-4 symbol:nth-child(3) { bottom: 0; left: 0; }
        .no-4 symbol:nth-child(4) { bottom: 0; right: 2px; }

        .no-5 symbol:nth-child(1) { left: 0; }
        .no-5 symbol:nth-child(2) { right: -3px; }
        .no-5 symbol:nth-child(3) { top: 35%; left: 35%; }
        .no-5 symbol:nth-child(4) { bottom: 0; left: 0; }
        .no-5 symbol:nth-child(5) { bottom: 0; right: 2px; }

        .no-6 symbol:nth-child(1) { left: 0; }
        .no-6 symbol:nth-child(2) { right: -3px; }
        .no-6 symbol:nth-child(3) { top: 35%; left: 0; }
        .no-6 symbol:nth-child(4) { top: 35%; right: -3px; }
        .no-6 symbol:nth-child(5) { bottom: 0; left: 0; }
        .no-6 symbol:nth-child(6) { bottom: 0; right: 2px; }

        .no-7 symbol:nth-child(1) { left: 0; }
        .no-7 symbol:nth-child(2) { right: -3px; }
        .no-7 symbol:nth-child(3) {  left: 38%; top: 34px; }
        .no-7 symbol:nth-child(4) { top: 35%; left: 0; }
        .no-7 symbol:nth-child(5) { top: 35%; right: -3px; }
        .no-7 symbol:nth-child(6) { bottom: 0; left: 0; }
        .no-7 symbol:nth-child(7) { bottom: 0; right: 2px; }

        .no-8 symbol:nth-child(1) { left: 0; }
        .no-8 symbol:nth-child(2) { right: -3px; }
        .no-8 symbol:nth-child(3) {  left: 38%; top: 34px; }
        .no-8 symbol:nth-child(4) { top: 35%; left: 0; }
        .no-8 symbol:nth-child(5) { top: 35%; right: -3px; }
        .no-8 symbol:nth-child(6) {  left: 38%; top: 121px; }
        .no-8 symbol:nth-child(7) { bottom: 0; left: 0; }
        .no-8 symbol:nth-child(8) { bottom: 0; right: 2px; }

        .no-9 symbol:nth-child(1) { left: 0; }
        .no-9 symbol:nth-child(2) { right: -3px; }
        .no-9 symbol:nth-child(3) {  left: 0; top: 23%; }
        .no-9 symbol:nth-child(4) { top: 23%; right: -3px; }
        .no-9 symbol:nth-child(5) { top: 35%; left: 38%; }
        .no-9 symbol:nth-child(6) { left: 0; top: 51%; }
        .no-9 symbol:nth-child(7) { right: 2px; top: 51%; }
        .no-9 symbol:nth-child(8) { left: 0; bottom: 0; }
        .no-9 symbol:nth-child(9) { right: 2px; bottom: 0; }

        .no-10 symbol:nth-child(1) { left: 0; }
        .no-10 symbol:nth-child(2) { right: -3px; }
        .no-10 symbol:nth-child(3) {  left: 0; top: 23%; }
        .no-10 symbol:nth-child(4) { top: 23%; right: -3px; }
        .no-10 symbol:nth-child(5) { top: 12%; left: 37%; }
        .no-10 symbol:nth-child(6) { left: 0; top: 51%; }
        .no-10 symbol:nth-child(7) { right: 2px; top: 51%; }
        .no-10 symbol:nth-child(8) { right: 55px; bottom: 30px; }
        .no-10 symbol:nth-child(9) { left: 0; bottom: 0; }
        .no-10 symbol:nth-child(10) { right: 2px; bottom: 0; }
</style>