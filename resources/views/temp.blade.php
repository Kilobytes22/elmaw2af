
<html lang="es">
<head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
        body {
            font-family: "Open Sans", sans-serif;
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#bea2e7+0,86b7e7+100 */
            background: #bea2e7;
            /* Old browsers */
            background: -moz-linear-gradient(top, #134e5e 0%, #71b280 100%);
            /* FF3.6-15 */
            background: -webkit-linear-gradient(top, #134e5e 0%, #71b280 100%);
            /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom, #134e5e 0%, #71b280 100%);
            /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#134e5e', endColorstr='#71b280',GradientType=0 );
            /* IE6-9 */
        }
        .route-col ul {
            margin: 0;
            margin-top: 20px;
            margin-bottom: 50px;
            list-style: none;
            position: relative;
            padding: 1px 100px;
            color: #fff;
            font-size: 13px;
        }
        .route-col ul:before {
            content: "";
            width: 1px;
            height: 100%;
            position: absolute;
            border-left: 2px dashed #fff;
        }
        .route-col ul li {
            position: relative;
            margin-left: 30px;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 14px;
            border-radius: 6px;
            width: 250px;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.12), 0 2px 2px rgba(0, 0, 0, 0.08);
        }
        .route-col ul li:not(:first-child) {
            margin-top: 60px;
        }
        .route-col ul li > span {
            width: 2px;
            height: 100%;
            background: #fff;
            left: -30px;
            top: 0;
            position: absolute;
        }
        .route-col ul li > span:before, .route-col ul li > span:after {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            border: 2px solid #fff;
            position: absolute;
            background: #86b7e7;
            left: -5px;
            top: 0;
        }
        .route-col ul li span:after {
            top: 100%;
        }
        .route-col ul li > div {
            margin-left: 10px;
        }
        .route-col div .title, .route-col div .type {
            font-weight: 600;
            font-size: 14px;
        }
        .route-col div .info {
            font-size: 14px;
            font-weight: 300;
        }
        .route-col div > div {
            margin-top: 5px;
        }
        .route-col span.number {
            height: 100%;
        }
        .route-col span.number span {
            position: absolute;
            font-size: 12px;
            left: -65px;
            font-weight: bold;
        }
        .route-col span.number span:first-child {
            top: 0;
        }
        .route-col span.number span:last-child {
            top: 98%;
        }

        .route-col{
            width: 32%;
            float: left;
            margin-right:1%;
            margin-top: 20px;
            border: 1px solid #fff;
            border-radius: 5px;
        }
        @media(max-width: 599px)  {
            .route-col{
                width:100%;
                margin-right:0;
            }
        }
        @media(min-width:600px) and (max-width:1200px)  {
            .route-col{
                width: 48%;
                margin-right:1%;
            }
        }
        .clear{
            clear: both;
        }
        .transit-result{
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .transit-result h2{
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>



<div class="transit-result">
    <h2>Direct Transport Options</h2>
    <div class="route-col">
        <ul>
            <li><span></span>
                <div>
                    <div class="title">Bus 180</div>
                    <div class="info">From El Hay el thamn To El Fangry</div>
                    <div class="type">Ticket: 3.5 EGP</div>
                </div> <span class="number"><span>01</span> <span>ARRIVED</span></span>
            </li>
        </ul>
    </div>
</div>



<div class="clear"></div>
<div class="transit-result">
    <h2>Two Transits Options</h2>
    <div class="route-col">
        <ul>
            <li><span></span>
                <div>
                    <div class="title">Bus 180</div>
                    <div class="info">From El Hay el thamn To El Fangry</div>
                    <div class="type">Ticket: 3.5 EGP</div>
                </div> <span class="number"><span>01</span> <span>SWITCH</span></span>
            </li>
            <li><span></span>
                <div>
                    <div class="title">Bus 180</div>
                    <div class="info">From El Hay el thamn To El Fangry</div>
                    <div class="type">Ticket: 3.5 EGP</div>
                </div> <span class="number"><span>01</span> <span>ARRIVED</span></span>
            </li>
        </ul>
    </div>
</div>



<div class="clear"></div>
<div class="transit-result">
    <h2>Three Transits Options</h2>
    <div class="route-col">
        <ul>
            <li><span></span>
                <div>
                    <div class="title">Bus 180</div>
                    <div class="info">From El Hay el thamn To El Fangry</div>
                    <div class="type">Ticket: 3.5 EGP</div>
                </div> <span class="number"><span>01</span> <span>SWITCH</span></span>
            </li>
            <li><span></span>
                <div>
                    <div class="title">Bus 180</div>
                    <div class="info">From El Hay el thamn To El Fangry</div>
                    <div class="type">Ticket: 3.5 EGP</div>
                </div> <span class="number"><span>01</span> <span>SWITCH</span></span>
            </li>
            <li><span></span>
                <div>
                    <div class="title">Bus 180</div>
                    <div class="info">From El Hay el thamn To El Fangry</div>
                    <div class="type">Ticket: 3.5 EGP</div>
                </div> <span class="number"><span>01</span> <span>ARRIVED</span></span>
            </li>
        </ul>
    </div>
</div>

<div class="clear"></div>


</body>
</html>
