<?php

class Skijasi
{

    private $id_korisnika;
    private $ime_prezime;
    private $korisnicko_ime;
    private $email;
    private $lozinka;


    public function add(mysqli $conn, $ime_prezime, $korisnicko_ime, $email, $lozinka)
    {
        mysqli_query($conn, "INSERT INTO skijasi(ime_prezime,korisnicko_ime,email,lozinka) VALUES ('$ime_prezime','$korisnicko_ime','$email','$lozinka')");
        return 1;
    }

    public function update(mysqli $conn, $id_korisnika, $ime_prezime, $korisnicko_ime, $email, $lozinka)
    {
        mysqli_query($conn, "UPDATE skijasi set ime_prezime = '$ime_prezime',korisnicko_ime = '$korisnicko_ime',
                email = '$email', lozinka = '$lozinka'  WHERE id_korisnika='$id_korisnika'");
        return 1;
    }

    public function delete(mysqli $conn, $id_korisnika)
    {
       mysqli_query($conn, "DELETE FROM skijasi WHERE id_korisnika='$id_korisnika'");
       return 1; 
    }

    public static function getAll(mysqli $conn)
    {
        $result = mysqli_query($conn, "SELECT * FROM skijasi");
        return $result;
    }


    public static function getSkijas( mysqli $conn, $id_korisnika)
    {
        $result = mysqli_query($conn, "SELECT * FROM skijasi WHERE id_korisnika='$id_korisnika'");
        return $result;
    }
    public static function getSkijasID( mysqli $conn, $ime_prezime)
    {
        $result = mysqli_query($conn, "SELECT id_korisnika FROM skijasi WHERE ime_prezime='$ime_prezime'");
        return $result;
        
    }

}
