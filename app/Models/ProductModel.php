<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'product';
    protected $allowedFields    = ['id', 'nama', 'harga', 'gambar', 'deskripsi', 'id_kategori'];
    protected $returnType       = 'object';
    protected $primaryKey       = 'id';

    function getAll(){
        $builder = $this->db->table('product');
        $query   = $builder->get();
        return $query->getResultArray();
    }

    function getDataById($id){
        $builder = $this->db->table('product');
        $builder->where('id', $id);
        $query   = $builder->get();
        return $query->getRowArray();
    }

    function insertData($data){
        $query = $this->db->table('product')->insert($data);
        return $query;
    }

    function updateData($data, $id){
        $query = $this->db->table('product')->update($data, array('id' => $id));
        return $query;
    }

    function deleteData($id){
        $query = $this->db->table('product')->delete(array('id' => $id));
        return $query;
    }


    function getPaginated($num, $keyword = null){
      $builder = $this->builder();
      $builder->select('product.id as id_product, nama, harga, gambar, deskripsi, id_kategori, nama_kategori');
      $builder->join('kategori', 'kategori.id = product.id_kategori');
      if ($keyword != '') {
        $builder->like('nama', $keyword);
      }
      return [
        'product' => $this->paginate($num),
        'pager' => $this->pager,
      ];
    }

    function getDetail($id){
      $builder = $this->builder();
      $builder->select('product.id as id_product, nama, harga, gambar, deskripsi, id_kategori, nama_kategori');
      $builder->join('kategori', 'kategori.id = product.id_kategori');
      $builder->where('product.id', $id);
      return $builder->get()->getRowArray();
    }

    function getProductByCategory($id){
      $builder = $this->builder();
      $builder->select('product.id as id_product, nama, harga, gambar, deskripsi, id_kategori, nama_kategori');
      $builder->join('kategori', 'kategori.id = product.id_kategori');
      $builder->where('product.id_kategori', $id);
      return $builder->get()->getResultArray();
    }
}
