<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                color: #73879C;
                background: #F7F7F7;
            }

            .container {
                text-align: center;
                display: table-cell;
                /*vertical-align: middle;*/
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 190px;
                padding-bottom: 60px;
                margin-top: 30px;
                font-weight: 900;
            }

            #enter {
                font-size: 100px;
                font-weight: 900;
                text-decoration: none;
                color: #73879C;
                border: 5px solid;
                border-radius: 10px;
                padding: 0px 100px 10px 100px;
            }

            #trade-mark {
                font-size: 77px;
                vertical-align: top;
                font-weight: 900;
            }

			#copyright {
			    font-size: 40px;
			    font-weight: 900;
			    margin-top: 80px;
			}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">tCableBilling<span id="trade-mark">&reg;</span></div>
                <a id="enter" href="{{ URL::route('home') }}">Login</a>
                <p id="copyright">&copy; 2015. All rights reserved.</p>
            </div>
        </div>
    </body>
</html>