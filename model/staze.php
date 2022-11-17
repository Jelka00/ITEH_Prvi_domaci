<?php

class Staze
{

    private $naziv_staze;
    private $duzina_staze;
    private $kategorija;
    private $id_staze;
    private $opis_staze;


    public function add(mysqli $conn, $naziv_staze, $duzina_staze, $kategorija, $opis_staze)
    {
        mysqli_query($conn, "INSERT INTO staze (naziv_staze,duzina_staze,kategorija,opis_staze) 
        VALUES ('$naziv_staze','$duzina_staze','$kategorija','$opis_staze');");
        return 1;
    }

    public function update(mysqli $conn, $id_staze, $naziv_staze, $duzina_staze, $kategorija, $opis_staze)
    {
        mysqli_query($conn, "UPDATE staze set naziv_staze = '$naziv_staze',duzina_staze = '$duzina_staze',
        kategorija = '$kategorija', opis_staze = '$opis_staze'  WHERE id_staze='$id_staze'");
        return 1;
    }

    public function delete(mysqli $conn ,$id_staze)
    {
        mysqli_query($conn, "DELETE FROM staze WHERE id_staze='$id_staze'");
        return 1;
    }

    public static function getAll(mysqli $conn)
    {
        $result = mysqli_query($conn, "SELECT * FROM staze");
        return $result;
    }


    public static function getStaza(mysqli $conn, $naziv_staze)
    {
        $result = mysqli_query($conn, "SELECT * FROM staze WHERE naziv_staze='$naziv_staze'");
        return $result;
    }
    public static function getStazaByID(mysqli $conn, $id_staze)
    {
        $result = mysqli_query($conn, "SELECT * FROM staze WHERE id_staze='$id_staze'");
        return $result;
    }
}
