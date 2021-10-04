<?php

    class ProductController extends BaseController
    {
        private $productMoldel;

        public function __construct()
        {
            $this->loadModel('Productmodels');
            $this->$productMoldel = new ProductModel;
        }
        public function index()
        {
                $product = $this->productmodels->getAll();

                return $this->views ('Product.Product',[
               'pageTitle' => 'Danh sách sản phẩm'
               'product' => $product,
            ]);  
        }

        public function show($id)
        {
            $product = $this->$productMoldel->findById($id);
            return $this->views('Product.Product.show',[ 'product' => $product,]);
        }
    }
?>