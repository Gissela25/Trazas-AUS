<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Trazas</title>
    <link rel="stylesheet" href="styles/style.css">
    <!--
        DataTable 
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!--
        DataTable 
    -->
</head>

<body>

    <div class="row mx-5 mt-5">
        <div class="col ml-5">
            <div class="row mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered " id="datatable">
                        <thead class="Te" style="background-color: #0079FF">
                            <tr style="color: white;">
                                <th class="text-center">Fecha y Hora</th>
                                <th class="text-center">Usuario</th>
                                <th class="text-center">Acción Realizada</th>
                                <th class="text-center">Resultado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">01/06/2023 10:00 am</td>
                                <td class="text-center">CalosF</td>
                                <td class="text-center">Facturación de orden de venta</td>
                                <td class="text-center">Exito</td>
                            </tr>
                            <tr>
                                <td class="text-center">01/06/2023 12:00 am</td>
                                <td class="text-center">CarmenS</td>
                                <td class="text-center">Modificación de factura de orden de venta</td>
                                <td class="text-center">Exito</td>
                            </tr>
                            <tr>
                                <td class="text-center">01/06/2023 12:00 am</td>
                                <td class="text-center">RosaM</td>
                                <td class="text-center">Generar credito fiscal de factura de orden de venta</td>
                                <td class="text-center">Error: Falta de información del cliente</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous">
            </script>
            <!--
                Script para el datatable
            -->
            <script>
            $(document).ready(function() {
                $('#datatable').DataTable();
            });
            </script>
            <script>
            $(document).ready(function() {
                $('#datatable2').DataTable();
            });
            </script>
</body>

</html>