<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">   
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <title>Paginação</title>
        <style>
            body{
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <!--criando tabela-->
            <div class="card text-center">
                <div class="card-header">
                    <h4>Tabela de Clientes</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        Exibindo {{ $clientes->count() }} clientes de {{ $clientes->total() }} 
                        ({{ $clientes->firstItem() }} a {{ $clientes->lastItem() }})
                    </h5>
                    <table class="table  table-hover">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">E-mail</th>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cli)
                            <tr>
                                <td>{{ $cli->id }}</td>
                                <td>{{ $cli->nome }}</td>
                                <td>{{ $cli->sobrenome }}</td>
                                <td>{{ $cli->email }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $clientes->links() }}                    
                </div>
            </div>

        </div>

        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
