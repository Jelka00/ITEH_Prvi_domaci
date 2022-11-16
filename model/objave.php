<?php

class Objave
{

    private $id_objave;
    private $sadrzaj;
    private $naslov;

    public function add(mysqli $conn, $sadrzaj, $naslov)
    {
        mysqli_query($conn, "INSERT INTO objave(sadrzaj,naslov) VALUES ('$sadrzaj','$naslov')");
    }

    public function update(mysqli $conn, $ime_prezime, $korisnicko_ime, $email, $lozinka)
    {
        mysqli_query($conn, "UPDATE skijasi set ime_prezime = '$this->ime_prezime',korisnicko_ime = '$this->korisnicko_ime',
                email = '$this->email', lozinka = '$this->lozinka'  WHERE id_korisnika='$this->id_korisnika'");
    }

    public function delete(mysqli $conn, $id_korisnika)
    {
       mysqli_query($conn, "DELETE FROM skijasi WHERE id_korisnika='$id_korisnika'");
    }

    public static function getAll(mysqli $conn)
    {
        mysqli_query($conn, "SELECT * FROM skijasi");
    }


    public static function getKorisnik($naziv_staze, mysqli $conn)
    {
        $query = "SELECT * FROM staze WHERE id_staze='$naziv_staze'";

        $staze = array();
        if ($obj = $conn->query($query)) {
            while ($row = $obj->fetch_array(1)) {
                $predstava[] = $row;
            }
        }

        return $staze;
    }
}
