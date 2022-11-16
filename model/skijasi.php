<?php

class Skijasi
{

    private $id_korisnika;
    private $ime_prezime;
    private $korisnicko_ime;
    private $email;
    private $lozinka;



    public function __construct($id_korisnika = null, $ime_prezime = null, $korisnicko_ime = null, $email = null, $lozinka = null)
    {
        $this->id_korisnika = $id_korisnika;
        $this->ime_prezime = $ime_prezime;
        $this->korisnicko_ime = $korisnicko_ime;
        $this->email = $email;
        $this->lozinka = $lozinka;
    }

    public function add(mysqli $conn, $ime_prezime, $korisnicko_ime, $email, $lozinka)
    {
        mysqli_query($conn, "INSERT INTO skijasi(ime_prezime,korisnicko_ime,email,lozinka) VALUES ('$ime_prezime','$korisnicko_ime','$email','$lozinka')");
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
