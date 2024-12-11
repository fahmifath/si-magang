<?php
    include '../database/database.php';

    class Crud extends Database {

        public function InsertData($prodi, $jenjang) {
            $query = "INSERT INTO tb_prodi (prodi, jenjang) 
                      VALUES ('$prodi', '$jenjang')";
            $result = mysqli_query($this->link, $query);
        }      

        public function ShowOneData($id){
            $query = "SELECT * FROM tb_prodi WHERE id = $id";
            $result = mysqli_query($this->link, $query);
            $row = mysqli_fetch_array($result);
            return $row;
        }

        public function ShowAllData(){
            $query = "SELECT * FROM tb_prodi";
            $result = mysqli_query($this->link, $query);
            $array = array();
            while ($row = mysqli_fetch_array($result)){
                $array[]=$row;
            }
            return $array;
        }

        public function EditData($id, $prodi, $jenjang){
            $query = "UPDATE tb_prodi SET prodi = '$prodi', jenjang ='$jenjang'
            where id = $id";
            $result = mysqli_query($this->link, $query);
        }

        public function DeleteData($id){
            $query = "DELETE FROM tb_prodi WHERE id = $id";
            $result = mysqli_query($this->link, $query);
        }
    }
?>