<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')

    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg {
            border: 2px solid greenyellow;
        }

        th {
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td {
            border: 1px solid skyblue;
            text-align: center;
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.slidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="div_deg">
                    <table class="table_deg">
                        <tr>
                            <th>Titulo del Servicio</th>
                            <th>Descripción</th>
                            <th>Aforo</th>
                            <th>Fecha</th>
                            <th>Imagen</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>

                        @foreach($evento as $eventos)
                            <tr>
                                <td>{{ $eventos->title }}</td>
                                <td>{!! Str::limit($eventos->description, 150) !!}</td>
                                <td>{{ $eventos->aforo}}</td>
                                <td>{{ $eventos->dates }}</td>
                                <td>
                                    <img height="120" widht="120"src="../../evento/{{$eventos->Image}}" alt="">
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{ url('update_evento', $eventos->id) }}">Editar</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" onclick="confirmation(event)" href="{{ url('delete_evento', $eventos->id) }}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="div_deg">
                    {{ $evento->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    @include('admin.js')
</body>
</html>
