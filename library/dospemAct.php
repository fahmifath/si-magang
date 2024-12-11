<?php
    include '../database/database.php';

    class Crud extends Database {

        public function InsertData($nama, $nidn, $nip, $alamat, $prodi, $penilaian) {
            $query = "INSERT INTO tb_dospem (nama_dospem, nidn , nip, alamat, prodi_id, penilaian)
                      VALUES ('$nama', '$nidn', '$nip', '$alamat', '$prodi', '$penilaian')";
            $result = mysqli_query($this->link, $query);
        }      

        public function ShowOneData($id){
            $query = "SELECT * FROM tb_dospem
            JOIN tb_prodi ON tb_prodi.id = tb_dospem.prodi_id
            WHERE id_dospem = $id";
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
            $query = "SELECT * FROM tb_dospem
            JOIN tb_prodi ON tb_prodi.id = tb_dospem.prodi_id
            ORDER by id_dospem asc";
            $result = mysqli_query($this->link, $query);
            $array = array();
            while ($row = mysqli_fetch_array($result)){
                $array[]=$row;
            }
            return $array;
        }

        public function EditData($id, $nama, $nidn, $nip, $alamat, $prodi, $penilaian){
            $query = "UPDATE tb_dospem SET nama_dospem = '$nama', nidn = '$nidn', nip = '$nip', prodi_id = '$prodi', alamat ='$alamat', penilaian = '$penilaian'
            where id_dospem = $id";
            $result = mysqli_query($this->link, $query);
        }

        public function DeleteData($id){
            $query = "DELETE FROM tb_dospem WHERE id_dospem = $id";
            $result = mysqli_query($this->link, $query);
        }
    }
?> 