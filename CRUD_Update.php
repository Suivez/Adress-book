<?php

?>
<div class="modal-backdrop modal animate-fading" style="background-color: rgba(0,0,0,.7)" id="background"></div>
<div class="modal " id="Update_bank_table">
    <div class="modal-dialog carousel-fade animate-top modal-dialog-scrollable ">
        <div class=" modal-content">
            <form method="POST">
                <div class="modal-header"> <a class="navbar-brand"><b>Edytuj kontakt</b></a></div>
                <div class="modal-body">
                    <input id="update_ID" name="update_ID" style="display:none">
                    <div>Imię</div>
                    <div><input class="form-control" id="update_first_namebx" name="update_first_namebx" required></div>
                    <div>Nazwisko</div>
                    <div><input class="form-control" id="update_last_namebx" name="update_last_namebx" required></div>
                    <div>Email</div>
                    <div><input class="form-control" id="update_emailbx" name="update_emailbx" required></div>
                    <div>Telefon</div>
                    <div><input class="form-control" id="update_phonebx" name="update_phonebx" required></div>
                    <div>Lokalizacja</div>
                    <div><input class="form-control" id="update_locationbx" name="update_locationbx" required></div>
                    <div>Pokój</div>
                    <div><input class="form-control" id="update_roombx" name="update_roombx" required></div>
                    <div>Stanowisko</div>
                    <div><input class="form-control" id="update_jobbx" name="update_jobbx" required></div>
                </div>
                <div class="modal-footer">
                    <button onclick="hideModal('Update_bank_table')" class="btn btn-danger w-25">Anuluj</button>
                    <button name="updatebtn" class="btn btn-success w-25">Edytuj</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>

</script>
<?php
if (isset($_POST["updatebtn"])) {
    $DBQuery = new DBQuery;
    $DBQuery->IUD("Update bank_table SET First_name = '" . $_POST["update_first_namebx"] 
    . "', Last_name ='" . $_POST["update_last_namebx"] 
    . "', Email ='" . $_POST["update_emailbx"] 
    . "', Phone ='" .$_POST["update_phonebx"]
    . "', Location ='" .$_POST["update_locationbx"]
    . "', Room ='" .$_POST["update_roombx"]
    . "', Job ='" .$_POST["update_jobbx"]
    . "' WHERE ID ='" . $_POST["update_ID"] . "'");
    echo '<script>window.location.href="";</script>';
}
?>