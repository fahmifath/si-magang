<?php
    include '../database/database.php';

    class Crud extends Database {

        public function InsertData($nama, $npm, $prodi, $alamat, $email) {
            $query = "INSERT INTO tb_mahasiswa (nama, npm, prodi_id, alamat, email) 
                      VALUES ('$nama', '$npm', '$prodi', '$alamat', '$email')";
            $result = mysqli_query($this->link, $query);
        }      

        public function ShowOneData($id){
            $query = "SELECT * FROM tb_mahasiswa 
            JOIN tb_prodi ON tb_prodi.id = tb_mahasiswa.prodi_id
            WHERE id_mhs = $id";
            $result = mysqli_query($this->link, $query);
            $row = mysqli_fetch_array($result);
            return $row;
        }
        

        public function ShowDataProdi(){
            $query = "SELECT id, prodi FROM tb_prodi";
            $result = $this->link->query($query);
            $array = array();
            while ($row = $result->fetch_assoc()){
                $array[]=$row;
            }
            return $array;
        }

        public function ShowAllData(){
            $query = "SELECT * FROM tb_mahasiswa
            JOIN tb_prodi ON tb_prodi.id = tb_mahasiswa.prodi_id";
            $result = mysqli_query($this->link, $query);
            $array = array();
            while ($row = mysqli_fetch_array($result)){
                $array[]=$row;
            }
            return $array;
        }

        public function EditData($id, $nama, $npm, $prodi, $alamat, $email){
            $query = "UPDATE tb_mahasiswa SET nama = '$nama', npm = '$npm', prodi_id = '$prodi', alamat ='$alamat', email = '$email'
            where id_mhs = $id";
            $result = mysqli_query($this->link, $query);
        }

        public function DeleteData($id){
            $query = "DELETE FROM tb_mahasiswa WHERE id_mhs = $id";
            $result = mysqli_query($this->link, $query);
        }
    }
?>