<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\ProductModel;
use App\Models\KategoriModel;
use App\Models\OrderModel;
use Exception;

class Home extends BaseController
{
  protected $usersModel;
  protected $product;
  protected $category;
  protected $orderModel;
  protected $db;
    public function __construct()
    {
        // $this->user = new UsersModel();
        $this->product = new ProductModel();
        $this->category = new KategoriModel();
        $this->orderModel = new OrderModel();
        $this->db = \Config\Database::connect();
    }
    public function index()
    {

        $keyword = $this->request->getGet('keyword');        
        $data = $this->product->getPaginated(8);
        $data['keyword'] = $keyword;
        return view('themes/store/pages/home', $data);
        //
        // $data['product'] = $this->product->getProduct();
        // return view('themes/'.$this->data['currentTheme'].'/pages/home', $data);
    }

    public function about()
    {
        return view('themes/store/pages/about');
    }

    public function category()
    {
      
        $data['categories'] =  $this->category->getAll();
        return view('themes/store/pages/category', $data);
    }

    public function category_detail($id)
    {
      
        $data['products'] =  $this->product->getProductByCategory($id);
        
        return view('themes/store/pages/category_detail', $data);

    }

    public function product()
    {
      
        $data['products'] =  $this->product->getAll();
        
        return view('themes/store/pages/products', $data);
    }

    public function add_cart($id){
      $product = $this->product->getDataById($id);

      $data['product'] = $product;
      
      return view('themes/store/pages/form_add_cart', $data);
    }

    public function post_cart(){
      if ($this->request->isAJAX()) {
        $id = $this->request->getPost('id');
        $product = $this->product->getDataById($id);
        $qty = 1;
        $price = $product['harga'];
        $name = $product['nama'];
        $gambar = $product['gambar'];
        $deskripsi = $product['deskripsi'];
        // $berat = $product['berat'];
        $cart = \Config\Services::cart();

        $cart->insert(array(
          'id'      => $id,
          'qty'     => $qty,
          'price'   => $price,
          'name'    => $name,
          'options' => array(
            'id'     => $id,
            'gambar' => $gambar,
            'deskripsi' => $deskripsi,
          )
        ));
        $response = [
          'message' => 'Item added to cart',
        ];
    
        return json_encode($response);
      }

      
    }
    
    public function cart()
    {
      
        
        return view('themes/store/pages/cart');
    }


    public function checkout()
    {
        
        return view('themes/store/pages/checkout');
    }

    
  

    public function profil($id = 0)
      {
        $builder = $this->db->table('users');
        $builder->select('users.id as userid, username, telp, alamat, image, email, name, fullname');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query   = $builder->get();
        $data['profil'] = $query->getRow();
        if (empty($data['profil'])) {
          return redirect()->to('/dashboard');
        }
          return view('access/profil', $data);
      }
      public function update_profil($id)
      {

        $fileImage  = $this->request->getFile('image');
        if ($fileImage->getError() == 4) {
          $namaImage = $this->request->getVar('imageLama');
        } else{
          $namaImage = $fileImage->getRandomName();
          $fileImage->move('image/', $namaImage);
        }
         $data = [
           'fullname' => $this->request->getVar('fullname'),
           'alamat' => $this->request->getVar('alamat'),
           'telp' => $this->request->getVar('telp'),
           'email' => $this->request->getVar('email'),
           'username' => $this->request->getVar('username'),
           'image' => $namaImage
         ];
        unset($data['_method']);
        $this->db->table('users')->where(['id' => $id]) -> update($data);
        return redirect()->to(site_url('profil/'.$id))->with('success', 'Profile Data Updated Successfully');
      }

      public function cek()
      {
        $cart = \Config\Services::cart();
        $response = $cart->contents();
        echo '<pre>';
        print_r($response);
        echo '</pre';
      }

      public function add()
      {
        $cart = \Config\Services::cart();
        $cart->insert(array(
          'id'      => $this->request->getPost('id'),
          'qty'     => 1,
          'price'   => $this->request->getPost('price'),
          'name'    => $this->request->getPost('name'),
          'options' => array(
            'id'     => $this->request->getPost('id'),
            'gambar' => $this->request->getPost('gambar'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'berat' => $this->request->getPost('berat')
          )
        ));
        session()->setFlashdata('success', 'The product has been successfully added to the cart');
        return redirect()->to(base_url('/'));
      }
      public function update()
      {
        $cart = \Config\Services::cart();
        $i = 1;
         foreach ($cart->contents() as $key => $value) {

        $cart->update(array(
          'rowid'   => $value['rowid'],
          'qty'     => $this->request->getPost('qty'.$i++),
        ));
      }
      session()->setFlashdata('success', 'Cart data successfully updated');
      return redirect()->to(base_url('/cart'));
    }

    public function clear(){
      $cart = \Config\Services::cart();
      $cart->destroy();

      session()->setFlashdata('success', 'Cart data successfully deleted');
      return redirect()->to(base_url('/'));
    }
      
    public function delete($id)
      {
      
          
          $cart = \Config\Services::cart();
          $cart->remove($id);
          $response = [
            'message' => 'Item removed from cart',
          ];
      
          return json_encode($response);
        

      }
}
