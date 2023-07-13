<div class="login-main">
    <div class="login-form" style="right:100px; top:150px">
        <div class="card" style="width:500px">
            <div class="card-header">Zarejestruj nowego Administratora</div>
            <div class="card-body">
                <form method="POST">
                    <div class="p-1">
                        <div>Imię i Nazwisko</div>
                        <div><input name="usernamebx" required class="form-control"></div>
                    </div>
                    <div class="p-1">
                        <div>Login</div>
                        <div><input name="loginbx" required class="form-control"></div>
                    </div>
                    <div class="p-1">
                        <div>Hasło</div>
                        <div><input type="password" name="passwordbx" required class="form-control"></div>
                    </div>
                    <div class="p-1">
                        <div class="d-flex">
                            <input type="submit" name="addNewAdmin" style="width:500px" value="Zarejestruj"
                                class="form-control bg-dark text-white">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    if(isset($_POST["addNewAdmin"])){
        $passwordHash = password_hash($_POST["passwordbx"], PASSWORD_DEFAULT);
        include_once 'MyFrameworks/DBQuery.php';
        $DBQuery = new DBQuery;
        $DBQuery->IUD("Insert INTO account_table (IDName, IDUsername, IDPassword) VALUES ('"
        .$_POST["usernamebx"]."','"
        .$_POST["loginbx"]."','"
        .$passwordHash."') "
        );
    }
?>