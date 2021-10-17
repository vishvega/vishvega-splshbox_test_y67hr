<!DOCTYPE html>
<html>
<head>
    <title>Laravel Test : My Blog</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" referrerpolicy="no-referrer" />

    <style>
    html, body {
        height: 100%;
        box-sizing: border-box;
    }
    header{
        border-bottom: 1px solid #777;
        padding-bottom: 7px;
    }
    #menuToggle{
        display: block;
        z-index: 1;
        -webkit-user-select: none;
        user-select: none;
        position: absolute;
        top: 8%;
        left: 15%;
    }
    #menuToggle a{
        text-decoration: none;
        color: #232323;
        transition: color 0.3s ease;
    }
    #menuToggle a:hover{
        color: tomato;
    }
    #menuToggle input{
        display: block;
        width: 40px;
        height: 32px;
        position: absolute;
        top: -7px;
        left: -5px; 
        cursor: pointer; 
        opacity: 0;
        z-index: 2; 
        -webkit-touch-callout: none;
    }
    #menuToggle span{
        display: block;
        width: 33px;
        height: 4px;
        margin-bottom: 5px;
        position: relative;
        background: #000;
        border-radius: 3px; 
        z-index: 1;  
        transform-origin: 4px 0px;  
        transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
        background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
        opacity 0.55s ease;
    }
    #menuToggle span:first-child{
        transform-origin: 0% 0%;
    }
    #menuToggle span:nth-last-child(2){
        transform-origin: 0% 100%;
    }
    #menuToggle input:checked ~ span{
        opacity: 1;
        transform: rotate(45deg) translate(-2px, -1px);
        background: #232323;
    }
    #menuToggle input:checked ~ span:nth-last-child(3){
        opacity: 0;
        transform: rotate(0deg) scale(0.2, 0.2);
    }
    #menuToggle input:checked ~ span:nth-last-child(2){
        transform: rotate(-45deg) translate(0, -1px);
    }
    #menu{
        position: absolute;
        width: 300px;
        margin: -100px 0 0 -50px;
        padding: 50px;
        padding-top: 125px;  
        background: #ededed;
        list-style-type: none;
        -webkit-font-smoothing: antialiased; 
        transform-origin: 0% 0%;
        transform: translate(-300%, 0);  
        transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
    }
    #menu li{
        padding: 10px 0;
        font-size: 22px;
    }
    #menuToggle input:checked ~ ul{
        transform: none;
    }
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
        font-family: 'Nunito', sans-serif;
        background-color: #eaeaeaff;
        line-height: 1.5;
    }
    h1{
        font-size: 72px;
        text-align: center;
        font-family: "Nunito", sans-serif;
    }
    a, a:hover{
        text-decoration: none;
    }
    p{
        font-size: 18px;
        font-family: "Nunito", sans-serif;
        line-height: 1.5;
    }
    .dl-blurbs {
        display: grid;
    }
    @media (min-width: 768px) {
        .dl-blurbs {
            grid-template-columns: repeat(2, 1fr);
            gap: 2vw;
        }
    }

    /* LIST */
    dl {
        counter-reset: count;
        background: linear-gradient(90deg, rgba(0, 0, 0, 0.04) 20%, rgba(255, 255, 255, 0) 0%);
        padding-left: 4vw;
        padding-right: 4vw;
        margin: 0;
    }
    @media (min-width: 768px) {
        dl {
            padding-left: 2vw;
        }
    }
    @media (min-width: 1024px) {
        dl {
            padding-top: 3vw;
            padding-bottom: 0vw;
        }
    }

    dl + dl {
        counter-reset: counter 4;
    }

    dt {
        counter-increment: count;
        color: #4f6d7aff;
        font-family: "Nunito", sans-serif;
        font-size: 4rem;
        text-transform: uppercase;
    }

    dt::before {
        content: counter(count, decimal-leading-zero) ".";
        font-family: serif;
        color: #5ea5b8ff;
        margin-left: -1vw;
        padding-right: 12px;
    }

    dd {
        margin-left: 5vw;
        margin-bottom: 2rem;
        font-size: 2rem;
        line-height: 1.2;
        text-align: justify;
    }
    footer {
        text-align: center;
        color: #fff;
        margin: 10px 0 0 0;
        font-size: 1.5rem;
        font-weight: 600;
        background: #245177;
        padding: 5px 0;
    }
</style>
</head>
    <body>
        <header>
            <div class="container">
                 <div class="row">
                    <div class="menu-wrapper">
                       <nav role="navigation">
                          <div id="menuToggle">
                             <input type="checkbox" />
                             <span></span>
                             <span></span>
                             <span></span>
                                 <ul id="menu">
                                    <a href="{{ route('showme') }}"><li>Home</li></a>
                                    <a href="{{ route('about') }}"><li>About</li></a>
                                    <a href="#mystory"><li>My Story</li></a>
                                    <a href="#contact"><li>Contact</li></a>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="title-wrapper">
                       <div class="title">
                          <h1>My Blog : @yield('title', config('app.name')) </h1>
                      </div>
                  </div>
                </div>
            </div>
        </header>