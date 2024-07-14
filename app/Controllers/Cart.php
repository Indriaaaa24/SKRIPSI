<?php

namespace App\Controllers;

class Cart extends BaseController
{
  private $url = "https://api.rajaongkir.com/starter/";
  private $apiKey = "4c9442ec9729701e926f326376856f9f";

  public function index()
  {
    $builder = $this->db->table('product');
    $builder->select('*');
    $query = $builder->get();

    return view('themes/store/product/cart', [
      'cart' => \Config\Services::cart(),
      'product' => $query->getResultArray(),
    ]);
  }
}
