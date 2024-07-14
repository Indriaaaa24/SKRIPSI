<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
  protected $table = 'transaksi';
  protected $returnType = 'object';
  protected $primaryKey = 'id_transaksi';
  protected $allowedFields = [ 'product_id', 'order_status', 'user_id', 'bukti', 'keterangan', 'qty', 'harga', 'alamat', 'payment', 'no_hp', 'tgl_acara'];

  function getAll()
  {
      $builder = $this->db->table('transaksi');
      $query = $builder->get();
      return $query->getResultArray();
  }

  function getPaginated($num, $keyword = null)
  {
      $builder = $this->builder();
      $builder->select('*');
      $builder->join('product', 'product.id = transaksi.product_id');
      $builder->join('users', 'users.id = transaksi.user_id');
      if ($keyword != '') {
          $builder->like('nama', $keyword);
      }
      return [
          'transaksi' => $this->paginate($num),
          'pager' => $this->pager,
      ];
  }

    function insertData($data)
    {
        $query = $this->db->table('transaksi')->insert($data);
        return $query;
    }

    function updateData($data, $id)
    {
        $query = $this->db->table('transaksi')->update($data, array('id' => $id));
        return $query;
    }

    function deleteData($id)
    {
        $query = $this->db->table('transaksi')->delete(array('id' => $id));
        return $query;
    }

    function getDataById($id)
    {
        $builder = $this->db->table('transaksi');
        $builder->where('id', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }

    function getTransaksi()
    {
        $builder = $this->db->table('transaksi');
        $query = $builder->get();
        return $query->getResultArray();
    }

    function getTransaksiByStatus($status)
    {
        $builder = $this->db->table('transaksi');
        $builder->join('product', 'product.id = transaksi.product_id');
        $builder->join('users', 'users.id = transaksi.user_id');
        $builder->where('order_status', $status);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
