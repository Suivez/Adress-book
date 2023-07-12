<?php
    class DBConnection {
    public  function getDBConnection() {
        $con = mysqli_connect("localhost","root","","adress_book");
        return $con;
    }
}
