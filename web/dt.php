<?php include'../inc/db.php';
include '../core.php';   
session_start();

if (!isset($_SESSION['id'])) {
    echo '<script>window.location="index.php" </script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Possible Form</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="css/main.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>

</head>
<body>
    <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
              'print',
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            // 'columnsToggle',
            'colvis'

            
        ]
    } );
} );
    
    </script>



<!-- begin side bar -->

<div class="sb">

<ul>
    <li class="sp">
        <a href="dt.php">Home</a>
    

    </li>

    <li class="sp">
        <a href="logout.php">Logout</a>
    </li>


</ul>


</div>

<!-- End sidebar -->

    <div class="twrapper">

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Level</th>
                <th>Gender</th>
                <th>Hall</th>
                <th>Room</th>
                <th>Programme</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>$320,800</td>
            </tr> -->

            <?php echo them();?>
            
        </tfoot>
    </table>
    </div>
    
</body>
</html>