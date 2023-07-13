<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/Animation.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/MyJS.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <style>
        body {
            font-family: 'Arial';
        }

        td {
            background-color: #415a77;
            color: white;
            font-weight: 600;
        }

        th {
            font-size: 0.8rem;
        }

        .custom {
            display: flex;
            justify-content: center;
        }

        .info-text {
            display: flex;
            width: 1100px;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div id="SelectedRow" class="text-white"></div>
    <div class="container-fluid" style="margin-top:100px">
        <center>
            <div>
                <h2>Lista kontaktów</h2>
                <a href="index.php">Panel logowania</a>
            </div>
            <br>
            <div class="info-text">
                <p>
                    Osoba dzwoniąca z zewnątrz będzie mogła <b>dodzwonić się bezpośrednio do każdego pokoju w Urzędzie</b> - z
                    pominięciem centrali telefonicznej.<br>
                    <b>Ul. B. Głowackiego 51</b> numer <b>14 68 65 XXX </b>, gdzie <b>XXX</b> odpowiada poszczególnym numerom wewnętrznym.
                    Komunikacja między pokojami pozostaje bez zmian tzn. za pomocą trzy cyfrowych numerów wewnętrznych.
                    Wybieramy 0, jeśli chcemy dzwonić na numer spoza urzędu.
                </p>
            </div>
            <div class="w-75 custom">
                <table class="table" id="example">
                    <thead>
                        <td>Imię</td>
                        <td>Nazwisko</td>
                        <td>E-mail</td>
                        <td>Telefon</td>
                        <td>Lokalizacja</td>
                        <td>Pokój</td>
                        <td>Wydział</td>
                    </thead>
                    <tbody>
                        <?php
                        include_once 'MyFrameworks/DBQuery.php';
                        $DBQuery = new DBQuery;
                        $DBQuery->SetDiv("SELECT * FROM bank_table order by ID  desc", 'Gridview_bank_table_Guest.php');
                        ?>
                    </tbody>
                </table>
            </div>
        </center>
    </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    new DataTable('#example', {
        paging: false,
        "language": {
            "search": "Szukaj"
        }
    });
</script>

</html>