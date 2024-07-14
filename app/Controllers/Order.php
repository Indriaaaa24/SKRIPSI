<?php

namespace App\Controllers;
use App\Models\OrderModel;
use App\Models\ProductModel;
use App\Models\DetailTransaksi;

class Order extends BaseController
{
  protected $orderModel;

  public function __construct()
  {
      $this->orderModel = new OrderModel();
      $this->productModel = new ProductModel();
      $this->detailModel = new DetailTransaksi();
  }

  public function index()
  {
      $keyword = $this->request->getGet('keyword');
      $data = $this->orderModel->getPaginated(5, $keyword);
      $data['keyword'] = $keyword;
      return view('order/get', $data);
  }

  public function get_transaksi()
  {
   
      // Define statuses
      $statuses = ['dipesan', 'diproses', 'dikirim', 'selesai'];
      $data = [];

      foreach ($statuses as $status) {
          $builder = $this->db->table('transaksi');
          $builder->select('transaksi.*, product.*, users.*, transaksi.harga as total_harga');
          $builder->join('product', 'product.id = transaksi.product_id');
          $builder->join('users', 'users.id = transaksi.user_id');
          $builder->where('order_status', $status);
          $query = $builder->get();
          $data[$status] = $query->getResult();
      }

      return view('order/get', $data);
  }

  public function get($id = 0)
  {
      // Define statuses
      $statuses = ['dipesan', 'diproses', 'dikirim', 'selesai'];
      $data = [];

      foreach ($statuses as $status) {
          $builder = $this->db->table('transaksi');
          $builder->select('*');
          $builder->join('product', 'product.id = transaksi.product_id');
          $builder->join('users', 'users.id = transaksi.user_id');
          $builder->where('users.id', $id);
          $builder->where('order_status', $status);
          $query = $builder->get();
          $data[$status] = $query->getResult();
      }

      return view('order/detail', $data);
  }

  public function save()
  {
      $fileImage = $this->request->getFile('bukti');
      $namaImage = $fileImage->getRandomName();
      $fileImage->move('bukti/', $namaImage);

      $this->orderModel->save([
          'product_id' => $this->request->getVar('id'),
          'order_status' => 'dipesan',
          'user_id' => $this->request->getVar('user'),
          'bukti' => $namaImage,
          'keterangan' => $this->request->getVar('keterangan'),
          'qty' => $this->request->getVar('qty'),
          'alamat' => $this->request->getVar('alamat'),
          'harga' => $this->request->getVar('harga'),
          'payment' => $this->request->getVar('payment'),
           'no_hp' => $this->request->getVar('no_hp'),
            'tgl_acara' => $this->request->getVar('tgl_acara'),
      ]);

      session()->setFlashdata('success', 'Pembayaran sedang diproses tunggu 1x24 jam');
      return redirect()->to(base_url('/'));
  }

  public function status($id)
  {
      $data = [
          'order_status' => $this->request->getVar('order_status'),
      ];
      unset($data['_method']);
      $this->db->table('transaksi')->where(['id_transaksi' => $id])->update($data);
      return redirect()->to(site_url('transaksi'))->with('success', 'Data Berhasil Diproses');
  }
}
