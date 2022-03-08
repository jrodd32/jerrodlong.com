<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jerrod Long | Developer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .top-right.links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .statement > a {
                color: #636b6f;
                text-decoration: none;
            }

            .statement > a:hover,
            .statement > a:focus,
            .statement > a:active {
                text-decoration: underline;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                {{-- <a href="{{ url('/projects') }}">Projects</a>
                <a href="{{ url('/changelog') }}">Changelog</a>
                <a href="{{ url('/contacts') }}">Contact</a> --}}
            </div>

            <div class="content">
                <div class="title m-b-md">
                    Jerrod Long
                </div>

                <div class="statement">
                    <h2>Bio</h2>
                    <p>I started my development journey at the age of 13 in the Area Technology Center attached to Montgomery County High School. The passion for development sparked into life there. That flame was stoked at Transylvania University in Lexington, KY. Post college I started my own web design &amp; development business, which I ran for 4 years prior to moving to Lousiville, KY to pursue agency life.</p>

                    <h2>Current role</h2>
                    <p>VP, Director of Software Development at Doe-Anderson. Currently leading a team of 6 developers with projects focused on the Laravel, Vue, & Statamic platforms.<p>

                    <h2>Recent projects</h2>
                    <ul>
                      <li><a href="https://www.makersmark.com/whisky-drop" rel="noopener" target="_blank">Direct-to-consumer program for Maker's Mark</a></li>
                      <li><a href="https://www.drink-ky.com/" rel="noopener" target="_blank">PWA for Kentucky Department of Agriculture</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
