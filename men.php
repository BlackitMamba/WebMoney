
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>`substitute(Filename('', 'Page Title'), '^.', '\u&', '')`</title>
    <link rel="stylesheet" href="Captura_de_pantalla_2023-06-02_133451__1_-removebg-preview.png" >
    <style type="text/css" media="all">
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(45deg,#11151c, #151b25, #19212e);
        }

        section {
            justify-content: space-around;
            display: flex;
            margin-right: 10%;
            margin-left: 10%;
            transition: all 0.5s ease;
            transition: all 0.8s ease-out;
        }

        section:hover {
            flex-grow: 2;
        }

        section .Login {
            border-top:6px groove #04a6c2;
                border-left:5px groove #0899ba;
                border-right:5px groove #0f80aa;
                border-bottom:5px groove #16679a;
            background: linear-gradient(45deg, #212d40, #141414, #1b2427);
            padding: 20px;
            border-radius: 10px;
            transition: all 0.5s ease;
            transition: all 0.8s ease-out;
        }

        section .reg {
            border-top: 6px groove #70012b;
            border-left: 5px groove #5d0124;
            border-right: 5px groove #4b011d;
            border-bottom: 5px groove #380116;
            background: linear-gradient(45deg, #360d0c, #141414, #2e1e1e);
            padding: 20px;
            transition: all 0.5s ease;
            transition: all 0.8s ease-out;
        }

        section .info {
            border-top: 6px groove #208b3a;
            border-left: 5px groove #1a7431;
            border-right: 5px groove #155d27;
            border-bottom: 5px groove #10451d;
            background: linear-gradient(45deg, #0b2c24, #141414, #151e15);
            padding: 20px;
            transition: all 0.5s ease;
            transition: all 0.8s ease-out;
        }

        section div {
            cursor: grab;
            box-shadow: 15px 15px 20px 2px black;
            margin: 20px;
            opacity: .6;
            align-items: center;
            width: 250px;
            height: 250px;
            text-align: center;
            color: white;
            border-radius: 10px;
            transition: all 0.3s ease;
            transition: all 0.5s ease-out;
            flex-grow: 1;
        }

        section div:hover {
            box-shadow: 10px 5px 5px #7f94f8;
            border: 5.5px groove #cefef8;
            opacity: 1;
            width: 280px;
            height: 280px;
            flex-grow: 2;
            top: 0px;
        }
        section div:hover p{
            color: transparent;
            background: linear-gradient(to right, #dc2f02,#e85d04, #f48c06 );
            -webkit-background-clip: text;
            transition: all 0.5s ease;
        }
        section div:hover p:hover{
            color: transparent;
            background: linear-gradient(to right, #9b2001,#943901, #804902 );
            -webkit-background-clip: text;
            font-size: 30px;
        }
        section div .Login:hover {
            box-shadow: 10px 5px 5px #7f94f8;
            border: 5.5px groove #cefef8;
            opacity: 1;
            flex-grow: 2;
        }

        .reg:hover {
            cursor: grab;
            border: 5.5px groove #ffa6a6;
            box-shadow: 10px 5px 5px red;
            opacity: 1;
            flex-grow: 2;
        }
.info:hover {
    cursor: help;
            border: 5.5px groove #a6ffc4;
            box-shadow: 10px 5px 5px #40f819;
            opacity: 1;
            flex-grow: 2;
        }

        p {
            background: linear-gradient(45deg, #fff, #838383);
            color: transparent;
            -webkit-background-clip: text;
            font-size: 25px;
            margin-top: 40%;
            display: center;
            justify-content: center;
            text-align: center;
            align-items: center;
            transition: all 0.6s ease;
        }

        p:hover {
            background: linear-gradient(45deg, #d599e0, #ac10c9);
            color: transparent;
            -webkit-background-clip: text;
        }

        .logol {
            font-size: 100px;
            -webkit-text-stroke: 3px #29adff;
            color: transparent;
            background: linear-gradient(to right, #ffffff,#cbf3f0,#2ec4b6);
            -webkit-background-clip: text;
            text-shadow: 15px 10px 10px black;
        }

        .logo {
            justify-content: center;
            display: flex;
            align-items: center;
           position: relative;
          overflow: hidden;
         margin-left: 25%;
         margin-right: 25%;
        }

        .logo img {
            width: 120px;
            height: 120px;
        }
   
       .logo span:nth-child(1){
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(to right,transparent, lightblue);
        animation: animate-1 2s linear infinite;
       }
       @keyframes animate-1 {
        0%{
            transform: translate(-100%);
        }
        100%{
            transform: translate(100%);
        }
       }
       .logo span:nth-child(2){
        position: absolute;
        top: 0;
        right: 0;
        width: 3px;
        height: 100%;
        background: linear-gradient(to right,transparent, rgb(45, 130, 158)14);
        animation: animate-2 2s linear infinite;
        animation-delay: 1s;
       }
       @keyframes animate-2 {
        0%{
            transform: translate(-100%);
        }
        100%{
            transform: translate(100%);
        }
       }
       .logo span:nth-child(3){
        position: absolute;
        bottom: 0;
        left: 0;
        width:100%;
        height: 3px;
        background: linear-gradient(to left,transparent, #2d759e);
        animation: animate-3 2s linear infinite;
        animation-delay: 1s;
       }
       @keyframes animate-3 {
        0%{
            transform: translate(-100%);
        }
        100%{
            transform: translate(100%);
        }
       }
       .logo span:nth-child(4){
        position: absolute;
        top: 0;
        left: 0;
        width: 3px;
        height: 100%;
        background: linear-gradient(to right,transparent, rgb(53, 45, 158)14);
        animation: animate-4 2s linear infinite;
       
       }
       @keyframes animate-4 {
        0%{
            transform: translate(-100%);
        }
        100%{
            transform: translate(100%);
        }
       }
       a{
        text-decoration:none;
       }
       img{
        filter: drop-shadow(0 0 0.75rem #4444dd);
        animation:opacity 2s infinite ;

       }
       @keyframes opacity {
        0%{
            opacity: 0.2;
        }
        50%{
            opacity: 0.5;
        }
        75%{
            opacity: 0.7;
        }
        100%{
            opacity: 1;
        }
       }
    </style>
</head>
<body>
    <div class="logo">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <h1 class="logol">WebMoney</h1>
        <img src="weblogo.png" alt="">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <br>
    <section>
    <a href="c1.html">
        <div class="Login" >
            <p><strong>Ingresar un cliente</strong></p>
        </div>
        </a>
        <a href="c2.html">
        <div class="reg">
       <p><strong>Registrarse</strong></p>
        </div>
        </a>
        <a href="c3.html">
        <div class="info">
        <p><strong>informacion</strong></p>
        </div>
        </a>
    </section>
</body>
</html>

