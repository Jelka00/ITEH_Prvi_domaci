<?php

class Skipas
{

    private $skipas_id;
    private $sezona;
    private $trajanje;
    private $tip;
    private $id_korisnika;

    public function add(mysqli $conn, $skipas_id, $sezona, $trajanje,$tip,$id_korisnika)
    {
        mysqli_query($conn, "INSERT INTO skipas(skipas_id,sezona,trajanje,tip,id_korisnika) VALUES ('$skipas_id','$sezona','$trajanje','$tip','$id_korisnika')");
        return 1;
    }

    public function update(mysqli $conn, $skipas_id, $sezona, $trajanje,$tip)
    {
        mysqli_query($conn, "UPDATE skipas set sezona = '$sezona',trajanje = '$trajanje',tip = '$tip' WHERE skipas_id = '$skipas_id'");
        return 1;
    }

    public function delete(mysqli $conn, $skipas_id)
    {
       mysqli_query($conn, "DELETE FROM skipas WHERE skipas_id='$skipas_id'");
       return 1;
    }

    public static function getAll(mysqli $conn)
    {
        $result = mysqli_query($conn, "SELECT * FROM skipas");
        return $result;
    }


    public static function getSkipas($skipas_id, mysqli $conn)
    {
        $result = mysqli_query($conn, "SELECT * FROM skipas WHERE skipas_id='$skipas_id'");

        return $result;
    }
}
