<?php

class pegawai{
    public $nip, $nama, $jabatan, $agama, $status, $gapok;

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this -> nip = $nip;
        $this -> nama = $nama;
        $this -> jabatan = $jabatan;
        $this -> agama = $agama;
        $this -> status = $status;
    }
    
    public function setGajiPokok($jabatan){
        switch($jabatan){
            //gaji pokok
            case 'Manager': 
                $gp = 15000000;
                break;
            case 'Asisten Manager':
                $gp = 10000000;
                break;
            case 'Kabag':
                $gp = 7000000;
                break;
            case 'Staff':
                $gp = 4000000;
                break;
            default:
                $gp = 0;
                break;
        }
        return $gp;
    }

    public function setTunjab(){
        return $this ->  setGajiPokok($this -> jabatan)*0.2;

    }

    public function setTunkel(){
        return ($this->status=="Menikah") ? $this->setGajiPokok($this->jabatan) * 0.1 : 0;
    }

    public function setZakatProfesi(){
        //gaji kotor
        $gk = $this -> setGajiPokok($this->jabatan)+ $this -> setTunjab() + $this -> setTunkel();
        return ($this->agama=="Islam" && $gk>6000000) ? $this->setGajiPokok($this->jabatan) * 0.025 : 0;
    }

    public function setGajiBersih(){
        return $this->setGajiPokok($this->jabatan) + $this->setTunjab() + $this->setTunkel() + $this->setZakatProfesi();
    }

    public function tampil(){
        echo "NIP : " .$this->nip. "<br/>";
        echo "Jabatan : " .$this->jabatan. "<br/>";
        echo "Agama : " .$this->agama. "<br/>";
        echo "Status : " .$this->status. "<br/>";
        echo "Gaji Pokok :  Rp " .number_format(($this->setGajiPokok($this->jabatan)), 2, ",", "."). "<br/>";
        echo "Tunjangan Jabatan : Rp " .number_format(($this->setTunjab()), 2, ",", "."). "<br/>";
        echo "Tunjangan Keluarga : Rp " .number_format(($this->setTunkel()), 2, ",", "."). "<br/>";
        echo "Zakat Profesi : Rp " .number_format(($this->setZakatProfesi()), 2, ",", "."). "<br/>";
        echo "Gaji Bersih : Rp " .number_format(($this->setGajiBersih()), 2, ",", "."). "<br/>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tugas 4 PHP</title>
</head>
<body>
    <br>
    <table class="table" style="width:50%" border=1 align="center">
    <tr align="center" class="table-primary">
        <th>Daftar Pegawai</th>
    </tr>
    <tbody class="table-warning">
    <tr>
        <td>
            <?php
            $pegawai1 = new pegawai ("a200", "Lee Haechan", "Manager", "Islam", "Menikah");
            $pegawai1->tampil();
        ?>
        </td>
    </tr>
    <tr>
    <td>
            <?php
             $pegawai2 = new pegawai ("a102", "Park Jisung", "Asisten", "Kristen", "Belum Menikah");
             $pegawai2->tampil();
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
             $pegawai3 = new pegawai ("a234", "Lee Mark", "Asisten Manager", "Hindu", "Menikah");
             $pegawai3->tampil();
            ?>
        </td>
    </tr>
    <tr>
    <td>
        <?php
            $pegawai4 = new pegawai ("a184", "Zhong Chenle", "Staff", "Budha", "Belum Menikah");
            $pegawai4->tampil();
        ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">
    <?php
        $pegawai5 = new pegawai ("a173", "Huang Renjun", "Staff", "Konghucu", "Menikah");
        $pegawai5->tampil();
    ?>
        </td>
    </tr>
    </tbody>
    </table>
</body>
</html>