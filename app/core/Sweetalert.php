<?php


class Sweetalert{

    public static function sweetOn($judul, $pesan, $type)
    {
        $_SESSION['alert'] = [
            'judul' => $judul,
            'pesan' => $pesan,
            'type' => $type
        ];

    }


    public static function sweet()
    {

        if(isset($_SESSION['alert'])){
            echo "<script>
            Swal.fire(
                '". $_SESSION['alert']['judul']."',
                '" . $_SESSION['alert']['pesan']. "',
                '". $_SESSION['alert']['type']."'
              )
            </script>";
        }

        unset($_SESSION['alert']);
    }


    public static function sweeterror()
    {
        echo  "<script>
            
                </script>";
    }
}