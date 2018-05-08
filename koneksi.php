<?php
class Koneksi{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "phb_kelas_d";
    private $hubungan;

    function ambilKoneksi (){
        $hubungan = new mysqli($this->server, $this->username, 
                $this->password, $this->db);
        return $hubungan;
    }

}
?>