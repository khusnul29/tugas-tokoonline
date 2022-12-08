<?php 

    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login_petugas.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login_petugas.php';</script>";
        } else {
            include "koneksi.php";
            $sql="SELECT * FROM 'petugas' WHERE 'username' 'password' = $username and 'password' = $password";
            $qry_login=mysqli_query($conn,$sql);
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_siswa']=$dt_login['id_siswa'];
                $_SESSION['nama_siswa']=$dt_login['nama_siswa'];
                $_SESSION['status_login']=true;
                header("location: index_petugas.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login_petugas.php';</script>";
            }
        }
    }
?>