<div class="modal-backdrop modal animate-fading" style="background-color: rgba(0,0,0,.7)" id="background"></div>
<div class="modal " id="Delete_bank_table">
    <div class="modal-dialog carousel-fade animate-top modal-dialog-scrollable ">
        <div class=" modal-content">
            <div class="modal-header"> <a class="navbar-brand"><b>Usuń kontakt</b></a></div>
            <div class="modal-body">
                <div class=" nav-link">Czy Na pewno chcesz usunąć kontakt?</div>
            </div>
            <div class="modal-footer">
                <input id="delete_ID" name="delete_ID" style="display:none">
                <button onclick="hideModal('Delete_bank_table')" class="btn btn-danger w-25">Anuluj</button>
                <button name="deletebtn" onclick="Delete_bank_table()" class="btn btn-success w-25">Tak</button>
            </div>
        </div>
    </div>
</div>
<script>
    function Delete_bank_table() {
        var delete_ID = document.getElementById("delete_ID").value;
        window.location.href = '?ID=' + delete_ID;
    }
</script>
<?php
if (isset($_GET["ID"])) {
    include_once 'MyFrameworks/DBQuery.php';
    $DBQuery = new DBQuery;
    $DBQuery->IUD("Delete from bank_table where ID = '" . $_GET["ID"] . "'");
    echo '<script>window.location.href="CRUD.php";</script>';
}
?>