<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung extends CI_Controller {

  function __construct(){
    parent::__construct();    
    $this->load->model('m_alternatif');
  }

  public function index(){
    //array data lahan
    $nama = array( 
      "0" => array ("f1" => 4, "f2" => 4, "f3" => 2, "f4" => 3, "f5" => 4),
      "1" => array ("f1" => 4, "f2" => 2, "f3" => 2, "f4" => 4, "f5" => 3),
      "2" => array ("f1" => 4, "f2" => 2, "f3" => 4, "f4" => 3, "f5" => 4),
      "3" => array ("f1" => 4, "f2" => 3, "f3" => 3, "f4" => 1, "f5" => 1),
      "4" => array ("f1" => 4, "f2" => 4, "f3" => 4, "f4" => 4, "f5" => 2 )
      );

    $kriteria = array(
      "0" => array("kriteria" => "f1" , "bobot" => 1/6 ,"tipe" =>1,"p" =>0,"q" =>0 ),
      "1" => array("kriteria" => "f2" , "bobot" => 1/6 ,"tipe" =>1,"p" =>0,"q" =>10 ),
      "2" => array("kriteria" => "f3" , "bobot" => 1/6 ,"tipe" =>4,"p" =>200,"q" =>400 ),
      "3" => array("kriteria" => "f4" , "bobot" => 1/6 ,"tipe" =>4,"p" =>200,"q" =>400 ),
      "4" => array("kriteria" => "f5" , "bobot" => 1/6 ,"tipe" =>4,"p" =>200,"q" =>400 )
      );

    $d = array(); //simpan selisih 
    $e=1;

    //hitung selisih tiap alternatif masing-masing kriteria
    $jml_kriteria = count($kriteria);

    for ($k=0; $k < count($kriteria) ; $k++) { 
      echo $e;
      $namaKriteria = $kriteria[$k]['kriteria'];
      echo $namaKriteria."</br>";
      $x=0;
      $y=0;
      for ($i=0; $i < count($nama); $i++) { 
        for ($j=0; $j < count($nama); $j++) { 
          echo "d".$k.$i.$j." = ".$nama[$i][$namaKriteria]." - ".$nama[$j][$namaKriteria];
          $d[$k][$i][$j] = (($nama[$i][$namaKriteria]-$nama[$j][$namaKriteria]));
          echo " = ".$d[$k][$i][$j]."</br>";
          $y++;
        }
        $x++;
      }
      $e++;
    }

    echo "</br></br>nilai |d|</br>";
    for ($k=0; $k < count($kriteria); $k++) { 
      for ($i=0; $i < count($nama) ; $i++) { 
        for ($j=0; $j < count($nama); $j++) { 
        echo $d[$k][$i][$j]." , ";
        }echo"</br>";
      }echo"</br>";
    }

    echo "</br></br>nilai |d|</br>";
    for ($i=0; $i < count($kriteria); $i++) { 
      for ($j=0; $j < count($nama); $j++) { 
        echo $d[$i][$j]." , ";
      }echo"</br>";
    }


    echo "</br></br>nilai preferensi</br>";
    //cek tipe preferensi dan hitung preferensi

    //---variable
    $p = array();//simpan nilai preferensi
    $jml_data  = pow((count($nama)), 2);

    //---function
    for ($i=0; $i < count($kriteria); $i++) { 
      //cek tipe preferensi
      //tipe preferensi 1 
      if ($kriteria[$i+1]['tipe']==1) {
        echo "kriteria ".$kriteria[$i+1]['kriteria']." memiliki tipe preferensi 1</br>";
        for ($n=0; $n < $jml_data ; $n++) {
          echo "data ".($n+1)." = ";
          if ($d[$i][$n]>0) {
            $p[$i][$n]=1;
            echo 1;
          }else{
            $p[$i][$n]=0;
            echo 0;
          }
          echo "</br>";
        }
      }
      //tipe preferensi 2
      if ($kriteria[$i+1]['tipe']==2) {
        echo "kriteria ".$kriteria[$i+1]['kriteria']." memiliki tipe preferensi 2</br>";
        for ($n=0; $n < $jml_data ; $n++) {
          echo "data ".($n+1)." = ";
          if ($d[$i][$n]<=$kriteria[$i+1]['q']) {
            $p[$i][$n]=0;
            echo 0;
          }else{
            $p[$i][$n]=1;
            echo 1;
          }
          echo "</br>";
        }
      }
      //tipe preferensi 3
      if ($kriteria[$i+1]['tipe']==3) {
        echo "kriteria ".$kriteria[$i+1]['kriteria']." memiliki tipe preferensi 3</br>";
        for ($n=0; $n < $jml_data ; $n++) {
          echo "data ".($n+1)." = ";
          if ($d[$i][$n]<=$kriteria[$i+1]['q']) {
            $p[$i][$n]=0;
            echo 0;
          }else{
            $p[$i][$n]=1;
            echo 1;
          }
          echo "</br>";
        }
      }
      //tipe preferensi 4
      if ($kriteria[$i+1]['tipe']==4) {
        echo "kriteria ".$kriteria[$i+1]['kriteria']." memiliki tipe preferensi 4</br>";
        for ($n=0; $n < $jml_data ; $n++) {
          echo "data ".($n+1)." = ";
          if ($d[$i][$n]<=$kriteria[$i+1]['q']) {
            $p[$i][$n]=0;
            echo 0;
          }else{
            $p[$i][$n]=1;
            echo 1;
          }
          echo "</br>";
        }
      }
      //tipe preferensi 5
      if ($kriteria[$i+1]['tipe']==5) {
        for ($n=$batasData; $n < $jml_data ; $n++) {
          if ($d[$i][$n]<=$kriteria[$i+1]['q']) {
            $p[$i][$n]=0;
          }else{
            $p[$i][$n]=1;
          }
        }
      }
    }


    echo "</br></br>nilai H(|d|)</br>";
    for ($i=0; $i < 3; $i++) { 
      for ($j=0; $j < 9; $j++) { 
        echo $p[$i][$j]." , ";
      }echo"</br>";
    }


    //hitung dan simpan nilai index preferensi

    //atribut
    $ip = array();// nilai index preferensi

    //---function
    for ($i=0; $i < count($kriteria); $i++) { 
      //cek tipe preferensi
      //tipe preferensi 1 
        echo "kriteria ".$kriteria[$i+1]['kriteria']." memiliki bobot </br>".$kriteria[$i+1]['bobot'];
        for ($n=0; $n < $jml_data ; $n++) {
          echo "data ".($n+1)." = ";
            $ip[$i][$n]=$p[$i][$n]*$kriteria[$i+1]['bobot'];
            echo $ip[$i][$n];
          echo "</br>";
        }
      
    }

    //nilai index preferensi
    echo "</br></br>nilai index preferensi</br>";
    for ($i=0; $i < 3; $i++) { 
      for ($j=0; $j < 9; $j++) { 
        echo " ip".$i.$j." = ".$ip[$i][$j]." , ";
      }echo"</br>";
    }


    //nilai total index preferensi
    echo "</br></br>nilai total index preferensi</br>";
    $tot = array();
    for ($i=0; $i < 9; $i++) { 
      $tot[$i] =0;
      for ($j=0; $j < 3; $j++) { 
        $x= $ip[$j][$i];
        echo $x." , ";
        $tot[$i] = $tot[$i] + $x;
      }
      echo " total ".$i." = ".$tot[$i];
      echo"</br>";
    }

    //nilai total index preferensi
    echo "</br></br>nilai index preferensi</br>";
    for ($i=0; $i < 3; $i++) { 
      for ($j=0; $j < 9; $j++) { 
        echo " ip".$i.$j." = ".$ip[$i][$j]." , ";
      }echo"</br>";
    }
    }
  }

  ?>