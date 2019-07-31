<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portal de Egressos</title>

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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Portal de Egressos
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <a href="{{url('\home')}}"><figure>
                      <img width="200px" src="http://www.ifrr.edu.br/egressos/midia/icon-1/egresso/image" alt="">
                    </figure></a><figcaption>Sou Aluno</figcaption>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <a href="{{url('\admin\home')}}"><figure>
                      <img width="200px" src="http://63.143.48.211/imagens/16/como-melhorar-a-imagem-da-empresa-na-internet_3320171134590.png" alt="">
                    </figure></a><figcaption>Sou Empresa</figcaption>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
