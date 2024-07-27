<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')

    <style type="text/css">
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #2C2C2C;
            color: #E0E0E0;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .page-content {
            margin-left: px; /* Ajustar si se necesita más espacio debido a la barra lateral */
            padding: 20px;
        }

        .table-container {
            margin: 20px auto;
            padding: 20px;
            background-color: #353535;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            background-color: #5BC0EB;
            color: #2C2C2C;
            padding: 10px;
        }

        tbody tr:nth-child(even) {
            background-color: #3E3E3E;
        }

        tbody tr:nth-child(odd) {
            background-color: #474747;
        }

        td, th {
            text-align: left;
            padding: 10px;
            border: 1px solid #5BC0EB;
            white-space: nowrap; /* Evita que el texto se divida en varias líneas */
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons a {
            background-color: #5BC0EB;
            color: #2C2C2C;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            text-align: center;
        }

        .action-buttons a.btn-success {
            background-color: #28a745;
            color: white;
        }

        .action-buttons a.btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .action-buttons a:hover {
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .table-container {
                padding: 10px;
            }

            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead tr {
                display: none;
            }

            tbody tr {
                margin-bottom: 15px;
            }

            td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                width: 45%;
                padding-right: 10px;
                text-align: left;
                font-weight: bold;
            }
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.slidebar')
    <div class="page-content">
        <div class="page-header">
            <h1>Participantes Apoyos</h1>
            <div class="table-container">
                <table class="table_deg">
                    <thead>
                        <tr>
                            <th>Nombre completo</th>
                            <th>Tipo de Documento</th>
                            <th>Número de Documento</th>
                            <th>Jornada</th>
                            <th>Número de Ficha</th>
                            <th>Programa de Formación</th>
                            <th>Correo Electrónico</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                            <th>Editar Estado</th>
                            <th>Eliminar</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agendados as $agendado)
                            <tr>
                                <td data-label="Nombre completo">{{ $agendado->nombre }} {{ $agendado->apellidos }}</td>
                                <td data-label="Tipo de Documento">{{ $agendado->tipo_documento }}</td>
                                <td data-label="Número de Documento">{{ $agendado->num_documento }}</td>
                                <td data-label="Jornada">{{ $agendado->jornada }}</td>
                                <td data-label="Número de Ficha">{{ $agendado->num_ficha }}</td>
                                <td data-label="Programa de Formación">{{ $agendado->programa }}</td>
                                <td data-label="Correo Electrónico">{{ $agendado->correo }}</td>
                                <td data-label="Teléfono">{{ $agendado->telefono }}</td>
                                <td data-label="Dirección">{{ $agendado->direccion }}</td>
                                <td data-label="Estado">
                            
                                   @if($agendado->estado == 'En revisión')
                                    <span style="color:gray">{{$agendado->estado}}</span>
                                    @elseif ($agendado->estado == 'APROBADA')

                                    <span style="color:green;">{{$agendado->estado}}</span>

                                    @else 
                                    <span style="color:red;">{{$agendado->estado}}</span>
                                   @endif
                                </td>

                                <td data-label="Aprobar" class="action-buttons">
                                    <a class="btn btn-success" href="{{url('aprobada',$agendado->id)}}">Aprobar</a>
                                </td>
                                <td data-label="Rechazar" class="action-buttons">
                                    <a class="btn btn-danger" href="{{url('rechazada',$agendado->id)}}">Rechazar</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" onclick="confirmation(event)" href="{{ url('delete_usuario', $agendado->id) }}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$agendados->links()}}
            </div>
        </div>
    </div>

    @include('admin.js')
</body>
</html>
