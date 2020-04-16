<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <title>Liste des etudiantss</title>
</head>
<body>
    

    <nav class="navbar navbar-default">
        <div class="container fluid">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Liste des eleves</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="">
        <div class="col-sm-8 col-sm-offset-2">
            <h2>Liste des eleves</h2>
            

            <table id="liste" class="display table">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                </tr>
            </table>
            
        </div>
    </div>

    
    <script>
        $(document).ready(function() {
            $('#liste').DataTable();
        } );
    </script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
</body>
</html>