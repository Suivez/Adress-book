<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/Animation.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src="assets/js/MyJS.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
<style>
    .thead-custom {
        background-color: #415a77;
        color: white;
        font-weight: 600;
    }
    </style>
<?php
// Start the session
session_start();
?>
</head>
<body>
    <div class="container-fluid" style="margin-top:100px">
        <center>
        <div class="w-75">
        <?php
        include_once 'CRUD_Insert.php';
        ?>
        <table class="table" id="example">
            <thead class="thead-custom">
                <td>ID</td>
                <td>Imię</td>
                <td>Nazwisko</td>
                <td>E-mail</td>
                <td>Telefon</td>
                <td>Lokalizacja</td>
                <td>Pokój</td>
                <td>Edytuj/Usuń</td>
            </thead>
            <tbody>
                <?php
                include_once 'MyFrameworks/DBQuery.php';
                $DBQuery = new DBQuery;
                $DBQuery->SetDiv("SELECT * FROM bank_table order by ID  desc",'Gridview_bank_table_Admin.php'); 
                ?>
            </tbody>
        </table>
        </div>
        <br>
        <?php
            include_once 'Register.php';
        ?>
        </center>
    </div>  
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    new DataTable('#example', {
        paging: false
    });

</script>

<?php
    include_once 'CRUD_Delete.php';
    include_once 'CRUD_Update.php';
?>

</html>