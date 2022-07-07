<?php
    class Guru extends Database
    {
        // Menampilkan data Guru ke index.php
        public function index()
        {
            $dataguru = mysqli_query($this->koneksi,"select * from guru");

            return $dataguru;
        }

        public function create($nip,$nama,$alamat)
        {
            mysqli_query($this->koneksi,
                    "insert into guru values (null, '$nip', '$nama', '$alamat')"
                );
        }

        // memilih data Guru yang akan diubah
        public function edit($no)
        {
            
            $dataguru = mysqli_query($this->koneksi, 
                        "select * from guru  where no='$no'"
                    );

            return $dataguru;
        }
        // merubah Guru dosen
        public function update($no, $nip, $nama, $alamat)
        {
            mysqli_query(
                $this->koneksi,
                "update guru set nip='$nip', nama='$nama', alamat='$alamat' where no='$no'"
            );
        }

        // Menampilkan data Guru berdasarkan id
        public function show($no)
        {
           $dataguru = mysqli_query(
                $this->koneksi,
                "select * from guru where no='$no'"
           );
        }

        // Menghapus data Guru
        public function delete($no)
        {
            mysqli_query(
                $this->koneksi,
                "delete from guru where no='$no'"
            );
        }
    }
?>