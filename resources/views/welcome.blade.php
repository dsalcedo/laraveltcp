<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DEBUG</title>

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
                min-width: 720px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            table{
                border-spacing: 0;
            }
            table thead tr th {
                padding-top: 11px;
                padding-bottom: 11px;
                background-color: #4CAF50;
                color: white;
            }
            table tr td, table th {
                border: 1px solid #ddd;
                text-align: left;
                padding: 8px;
            }

            .text-center{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    DEBUG
                </div>

                <table style="width: 100%;">
                    <thead>
                        <tr>
                            <th width="50">ID</th>
                            <th>Contenido</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($logs as $log)
                        <tr>
                            <td>{{ $log->id }}</td>
                            <td>{{ $log->content }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <p class="text-center">
                    <a href="/">Actualizar</a>
                </p>
            </div>
        </div>
    </body>
</html>
