<?php

class Kartu {
    private $conn;
    private $table_name = "kartu";

    public $id;
    public $kode;
    public $nama;
    public $diskon;
    public $iuran;
    
    public function __construct($db){
        $this->conn = $db;
    }

    // Tampilkan data semua kartu
    public function index(){
        $query = "SELECT * FROM {$this->table_name}";
        $data = $this->conn->prepare($query);
        $data->execute();
        return $data;
    }

    // Tampilkan halaman create
    public function create(){
        header("Location: create.php");
        exit();
    }

    // Tambah kartu ke database
    public function store(){
        $query = "INSERT INTO {$this->table_name} 
                (kode, nama, diskon, iuran ) 
                VALUES (?, ?, ?, ?, ?, ?, ?)
                ";
        $data = $this->conn->prepare($query);
    
        $data->execute([
            $this->kode, 
            $this->nama, 
            $this->diskon, 
            $this->iuran
           
        ]);
    
        return $data->rowCount() > 0;
    }

    // Tampilkan halaman edit
    public function edit(){
        $query = "SELECT * FROM {$this->table_name} WHERE id = ?";
        $data = $this->conn->prepare($query);
        $data->execute([$this->id]);
        return $data;
    }

    // Update kartu ke database
    public function update(){
        $query = "UPDATE {$this->table_name} 
                SET kode=?, nama=?, harga_beli=?, harga_jual=?, stok=?, min_stok=?, jenis_produk_id=? 
                WHERE id=?";
        $data = $this->conn->prepare($query);
    
        $data->execute([
            $this->kode, 
            $this->nama, 
            $this->diskon, 
            $this->iuran, 
            $this->id
        ]);
    
        return $data->rowCount() > 0;
    }

    // Hapus kartu dari database
    public function delete(){
        $query = "DELETE FROM {$this->table_name} WHERE id = ?";
        $data = $this->conn->prepare($query);
        $data->execute([$this->id]);
    
        return $data->rowCount() > 0;
    }
}
?>
