<div>
    <h2>Lista kontaktów</h2>
    <a href="index.php">Wyloguj</a>
</div>
<form method="POST">
    <h4 style="float: left">Dodaj nowy kontakt</h4>
<table class="table">
    <thead>
        <td>           
            <div>Imię</div>
            <div><input name="first_namebx" class="form-control" required></div>
        </td>
        <td>
            <div>Nazwisko</div>
            <div><input name="last_namebx" class="form-control" required></div>
        </td>
        <td>
            <div>Email</div>
            <div><input name="emailbx" class="form-control" required></div>
        </td>
        <td>
            <div>Telefon</div>
            <div><input name="phonebx" class="form-control" required></div>
        </td>
        <td>
            <div>Lokalizacja</div>
            <div><input name="locationbx" class="form-control" required></div>
        </td>
        <td>
            <div>Pokój</div>
            <div><input name="roombx" class="form-control" required></div>
        </td>
        <td class="align-bottom">
            <input type="Submit" name="addbtn" class="btn btn-success" value="Dodaj">
        </td>
    </thead>
</table>
</form>
<?php
    if(isset($_POST["addbtn"])){
        include_once 'MyFrameworks/DBQuery.php';
        $DBQuery = new DBQuery;
        $DBQuery->IUD("Insert INTO bank_table (First_name, Last_name, Email, Phone, Location, Room) VALUES ('"
        .$_POST["first_namebx"]."','"
        .$_POST["last_namebx"]."','"
        .$_POST["emailbx"]."','"
        .$_POST["phonebx"]."','"
        .$_POST["locationbx"]."','"
        .$_POST["roombx"]."') "
        );
    }
?>