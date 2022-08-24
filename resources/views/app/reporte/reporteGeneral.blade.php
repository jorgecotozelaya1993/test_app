@extends('layouts.app')

@section('title','Reporte')
@section('content')
    <div class="container">
        <table id="table" class="table table-reponsive-sm">
            <thead >
                <tr>
                    <th>ID</th>
                    <th>Nombre cliente</th>
                    <th>Producto</th>
                    <th>Precio unitario</th>
                    <th>Cantidad producto</th>
                    <th>Fecha de compra</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>

                @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->nombre_completo }}</td>
                    <td>{{ $venta->nombre }}</td>
                    <td>${{ $venta->precio }}</td>
                    <td>{{ $venta->cantidad }}</td>
                    <td>{{ $venta->fecha_venta }}</td>
                    <td>${{ $venta->cantidad * $venta->precio  }}</td>
                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.12.1/integration/jqueryui/dataTables.jqueryui.css"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

<script>
    $(document).ready(function() {
        $.noConflict(); //Required
     $('#table').DataTable( {
         dom: 'Bfrtip',
         buttons: [
             {
                 extend: 'print',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text: '<button class="btn btn-outline-primary border:none; btn-sm mb-0">Imprimir <i class="fas fa-print"></i></button>'
             },
             {
                 extend: 'pdf',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text: '<button class="btn btn-outline-danger border:none; btn-sm mb-0">PDF <i class="fas fa-file-pdf"></i></button>'
             },
              {
                 extend: 'excel',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text: '<button class="btn btn-outline-success border:none; btn-sm mb-0">EXCEL <i class="fas fa-file-excel"></i></button>'
             },
             {
                 extend: 'colvis',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text:  '<button class="btn btn-outline-info border:none; btn-sm mb-0">Acciones  <i class="fas fa-arrow-circle-down"></i></button>'
             },
             
         ],
         
         "language": {
             "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
         },
 
         "lengthMenu": [[10,50], [10,50]]
     } );
    } );
</script>
@endsection