<?php

class Objave
{

    private $id_objave;
    private $sadrzaj;
    private $naslov;

    public function add(mysqli $conn, $sadrzaj, $naslov)
    {
        mysqli_query($conn, "INSERT INTO objave(sadrzaj,naslov) VALUES ('$sadrzaj','$naslov')");
        return 1;
    }

    public function update(mysqli $conn, $id_objave, $sadrzaj, $naslov)
    {
        mysqli_query($conn, "UPDATE objave set sadrzaj = '$sadrzaj',naslov = '$naslov' WHERE id_objave = '$id_objave'");
        return 1;
    }

    public function delete(mysqli $conn, $id_objave)
    {
       mysqli_query($conn, "DELETE FROM objave WHERE id_objave='$id_objave'");
       return 1;
    }

    public static function getAll(mysqli $conn)
    {
        $result = mysqli_query($conn, "SELECT * FROM objave");
        return $result;
    }


    public static function getObjava($id_objave, mysqli $conn)
    {
        $result = mysqli_query($conn, "SELECT * FROM objave WHERE id_objave='$id_objave'");

        return $result;
    }
}
