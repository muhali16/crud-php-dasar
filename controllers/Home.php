<?php

class Home extends Controller
{
    public $repository;

    public function __construct()
    {
        $this->repository = new \repositories\BarangRepository();
    }

    public function index($data=[]) {
        $barang = $this->repository->getAllBarang();
        $this->view("home", [
            "barang" => $barang,
        ]);
    }

    public function tambah($data = []) {
        $this->view("tambah");
        if (isset($_POST['tambah'])) {
            $add = $this->repository->storeBarang($_POST);
            if ($add) {
                echo "
                    <script>
                        alert('Berhasil tambah barang');
                        document.location.href = '".BASE_URL."/home'
                    </script>
                    ";
                exit();
            }
        }
    }

    public function edit($data) {
        $barang = $this->repository->getById((int) $data);
        if ($barang == null) {
            header("Location: " . BASE_URL);
        }
        $this->view("edit", [
            "barang" => $barang,
        ]);

        if (isset($_POST['edit'])) {
            $update = $this->repository->editBarang($_POST, $data);
            if ($update) {
                echo "
                    <script>
                        alert('Berhasil edit barang');
                        document.location.href = '".BASE_URL."/home'
                    </script>
                    ";
                exit();
            }
        }
    }

    public function delete($data) {
        $delete = $this->repository->deleteBarang($data);
        if (!$delete) {
            echo "
                    <script>
                        alert('Gagal mengahapus barang');
                        document.location.href = '".BASE_URL."/home'
                    </script>
                    ";
            exit();
        }

        echo "
                    <script>
                        alert('Berhasil mengahapus barang');
                        document.location.href = '".BASE_URL."/home'
                    </script>
                    ";
        exit();
    }
}