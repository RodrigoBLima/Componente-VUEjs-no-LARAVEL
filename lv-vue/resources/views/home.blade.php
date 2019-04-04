<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <title>Laravel - Componentes Vue</title>

        
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <div id="app">
                        <h2 class="text-center">Escreva suas Ideias</h2>
                    <div class="well">
                        <h4>No que está pensando?</h4>
                        <form>
                            <div class="input-group">
                                <input type="text" name="" class="form-control input-sm" name="" maxlength="256">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary btn-sm">Adicionar</button>
                                </span>
                            </div>
                        </form>
                        <hr>
                        <ul class="list-un">
                            <li>
                                <p>
                                    <small class="text-muted"><em>Há um minuto </em>
                                    </small>
                                </p>
                            </li>
                        </ul>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            
        </script>

        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
