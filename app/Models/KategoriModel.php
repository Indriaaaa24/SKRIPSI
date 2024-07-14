<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table            = 'kategori';
    protected $allowedFields    = ['id','nama_kategori'];
    protected $returnType       = 'object';
    protected $primaryKey       = 'id';

    function getAll(){
        $builder = $this->db->table('kategori');
        $query   = $builder->get();
        return $query->getResultArray();
      }
    function getPaginated($num, $keyword = null){
      $builder = $this->builder();
      $builder->select('id, nama_kategori');
      if ($keyword != '') {
        $builder->like('nama_kategori', $keyword);
      }
    return [
        'kategori' => $this->paginate($num),
        'pager' =>$this->pager,
    ];
    }

    function insertData($data){
        $query = $this->db->table('kategori')->insert($data);
        return $query;
    }

    function updateData($data, $id){
        $query = $this->db->table('kategori')->update($data, array('id' => $id));
        return $query;
    }

    function deleteData($id){
        $query = $this->db->table('kategori')->delete(array('id' => $id));
        return $query;
    }

    function getDataById($id){
        $builder = $this->db->table('kategori');
        $builder->where('id', $id);
        $query   = $builder->get();
        return $query->getRowArray();
    }

    function getKategori(){
        $builder = $this->db->table('kategori');
        $query   = $builder->get();
        return $query->getResultArray();
    }

    function getKategoriById($id){
        $builder = $this->db->table('kategori');
        $builder->where('id', $id);
        $query   = $builder->get();
        return $query->getRowArray();
    }

    function getKategoriByProduct($id){
        $builder = $this->db->table('kategori');
        $builder->select('kategori.id as id_kategori, nama_kategori');
        $builder->join('product', 'product.id_kategori = kategori.id');
        $builder->where('product.id', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }
}
