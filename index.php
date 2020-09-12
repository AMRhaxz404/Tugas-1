<?php

class Animal
{
    public $jumlah_kaki, $bisa_terbang, $tidak_bisa_terbang, $suara;

    public function jumlahKaki()
    {
        return $this->jumlah_kaki;
    }

    public function bisaTerbang()
    {
        return "Bisa Terbang " . $this->bisa_terbang;
    }

    public function tidakTerbang()
    {
        return $this->tidak_bisa_terbang;
    }

    public function suara()
    {
        return "hemmm";
    }
}

class Kucing extends Animal
{
    function keteranganMomo()
    {
        echo "Tidak Bisa Terbang";
    }
    function suara()
    {
        return "Meong";
    }
}

class Anjing extends Animal
{
    function keteranganDoggo()
    {
        echo "Tidak Bisa Terbang";
    }
    function suara()
    {
        return "Guk Guk";
    }
}

class Elang extends Animal
{
    function keteranganZya()
    {
        echo "Bisa Terbang ";
    }
    function suara()
    {
        return "Miippp";
    }
}

class Angsa extends Animal
{
    function keteranganMasha()
    {
        echo "Bisa Terbang";
    }
    function suara()
    {
        return "Kwakkk";
    }
}


// kucing
$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo Adalah Kucing <br>";
echo "Punya Kaki Sebanyak : " . $momo->jumlah_kaki . "<br>";
echo $momo->keteranganMomo() . "<br>";
echo "Suaranya :" . $momo->suara() . "<br>";

echo "<hr>";
// anjing
$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : " . $doggo->jumlah_kaki . "<br>";
echo $doggo->keteranganDoggo() . "<br>";
echo "Suaranya :" . $doggo->suara() . "<br>";

echo "<hr>";
// Elang
$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya Adalah Elang <br>";
echo "Punya Kaki Sebanyak : " . $zya->jumlah_kaki . "<br>";
echo $zya->keteranganZya() . "<br>";
echo "Suaranya :" . $zya->suara() . "<br>";

echo "<hr>";
// Angsa
$masha = new Angsa;
$masha->jumlah_kaki = 2;
echo "Masha Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : " . $masha->jumlah_kaki . "<br>";
echo $masha->keteranganMasha() . "<br>";
echo "Suaranya :" . $masha->suara() . "<br>";
