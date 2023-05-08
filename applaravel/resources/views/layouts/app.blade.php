<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title >Document</title>
</head>
<body>

    @include('includes.navbar')




    <div class="container">
        @yield('content')

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
    <style>
        .table-formal {
            color: black; 
            background-color:#EAF2F8 ; 
            border-color: #ABB2B9; 
        }
        .table-primary th, 
        .table-primary td, 
        .table-primary thead th {
            border-color: #007bff; 
        }
        .table-primary.table-hover tbody tr:hover {
            background-color: #0069d9; 
        }
        .table-primary.table-hover tbody tr:hover td {
            color: #fff; 
            background-color: #0062cc; 
            border-color: #005cbf; 
        }
        .table-primary.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 123, 255, 0.05); 
        }
    </style>
</html>