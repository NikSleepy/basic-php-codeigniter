<?php 

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ControllerProduct extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();

        foreach ($data['products'] as $key => $value) {
            $data['products'][$key]['price'] = $this->formatRupiah($value['price']);
        }
        
        return view('product/index', $data);
    }

    public function create()
    {
        return view('product/addproduct');
    }

    public function store()
    {
        $model = new ProductModel();
        $model->insert([
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price')
        ]);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);
        return view('product/editproduct', $data);
    }

    public function update($id)
    {
        $model = new ProductModel();
        $model->update($id, [
            'name'=> $this->request->getPost('name'),
            'price'=> $this->request->getPost('price')
        ]);
        return redirect()->to('/product');
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);
        return redirect()->to('/product');
    }

    private function formatRupiah($price)
    {
        return 'Rp. ' . number_format($price, 0, ',', '.');
    }
}