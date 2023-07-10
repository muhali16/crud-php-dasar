<?php

namespace repositories;

use entities\Barang;

class BarangRepository
{
    protected $entity;

    public function __construct()
    {
        $this->entity = new Barang();
    }

    public function getAllBarang()
    {
        return $this->entity->query("select * from barang");
    }

    public function getById($id) {
        return $this->entity->fetchAssocQuery($this->entity->query("select * from barang where id_barang = $id"));
    }

    public function storeBarang($data)
    {
        $nama_barang = ucfirst($data['nama_barang']) ?? null;
        $harga_barang = $data['harga_barang'] ?? null;
        $stok_barang = $data['stok_barang'] ?? null;
        return $this->entity->query("insert into barang values (null, '$nama_barang', $harga_barang, $stok_barang)");
    }

    public function editBarang($data, $id)
    {
        $nama_barang = ucfirst($data['nama_barang']) ?? null;
        $harga_barang = $data['harga_barang'] ?? null;
        $stok_barang = $data['stok_barang'] ?? null;
        return $this->entity->query("update barang set nama_barang = '$nama_barang', harga_barang = $harga_barang, stok_barang = $stok_barang where id_barang = $id");
    }

    public function deleteBarang($id) {
        return $this->entity->query("delete from barang where id_barang = $id");
    }
}