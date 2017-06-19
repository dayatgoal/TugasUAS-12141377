<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->model("categories_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index()
	{
		//Function yang digunakan untuk menampilkan view products_view.php
		//$this->load->view('home/header');
		$data['listCategories'] = $this->categories_model->getAllCategory(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('categories/categories_view', $data);
		//menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
	}

	public function addCategory()
	{
		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
		$this->load->view('add_category_view');
	}

	public function addCategoryDb()
	{
		//Function yang dipanggil ketika ingin memasukan produk ke dalam database
		$data = array(
					'CategoryName' => $this->input->post('CategoryName'),
					'Description' => $this->input->post('Description')
				);
		$this->categories_model->addCategory($data); //passing variable $data ke products_model

		redirect('categories'); //redirect page ke halaman utama controller products
	}

	public function updateCategory()
	{
		//Function yang dipanggil ketika ingin melakukan update produk kemudian menampilkan update_product_view
	}

	public function updateCategoryDb()
	{
		//Function yang dipanggil ketika ingin melakukan update terhadap produk yang ada di dalam database
	}

	public function deleteCategoryDb()
	{
		//Function yang dipanggil ketika ingin melakukan delete produk dari database
	}
}

/* Location: ./application/controllers/products.php */