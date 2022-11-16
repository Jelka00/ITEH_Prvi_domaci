<?php

class Staze
{

    private $naziv_staze;
    private $duzina_staze;
    private $kategorija;
    private $id_staze;   
    private $opis_staze;
   


    public function __construct($naziv_staze=null, $duzina_staze=null, $kategorija=null, $id_staze=null, $opis_staze=null)
    {
        $this->naziv_staze = $naziv_staze;
        $this->duzina_staze = $duzina_staze;
        $this->kategorija = $kategorija;
        $this->id_staze = $id_staze;
        $this->opis_staze = $opis_staze;
        
    }

    public function add(mysqli $conn){
        $query = "INSERT INTO staze (naziv_staze,duzina_staze,kategorija,opis_staze) 
                 VALUES ('$this->naziv_staze','$this->duzina_staze','$this->kategorija','$this->opis_staze');";
        return $conn->query($query);
    }

    public function update(mysqli $conn){
        $query = "UPDATE staze set naziv_staze = '$this->naziv_staze',duzina_staze = '$this->duzina_staze',
                kategorija = '$this->kategorija', opis_staze = '$this->opis_staze'  WHERE id_staze='$this->id_staze'";
        return $conn->query($query);
    }

    public function delete(mysqli $conn){
        $query = "DELETE FROM staze WHERE id_staze='$this->id_staze'";
        return $conn->query($query);
    }

    public static function getAll(mysqli $conn)
    {
        $query = "SELECT * FROM staze";
        return $conn->query($query);
    }


    public static function getStaza($naziv_staze, mysqli $conn){
        $query = "SELECT * FROM staze WHERE id_staze='$naziv_staze'";

        $staze = array();
        if($obj = $conn->query($query)){
            while($row = $obj->fetch_array(1)){
                $predstava[]= $row;
            }
        }

        return $staze;
    }


}