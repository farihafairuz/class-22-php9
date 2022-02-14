<?php


namespace App\classes;


class Products
{
    protected $allProducts;
    protected $result = [];

    public function index()
    {
        return [
            0=>[
                'id'=>1,
                'categoryid'=> 1,
                'name'=>'T-shirt Black',
                'price'=>700,
                'description'=> 'product description',
                'image'=>'assets/img/blacktshirt.jpg',
            ],
            1=>[
                'id'=>2,
                'name'=>'T-shirt White',
                'categoryid'=> 2,
                'price'=>800,
                'description'=> 'product description',
                'image'=>'assets/img/2.jpg',
            ],

            2=>[
                'id'=>3,
                'categoryid'=> 2,
                'name'=>'Black Sharee',
                'price'=>4000,
                'description'=> 'product description',
                'image'=>'assets/img/blacksharee.jpg',
            ],
            3=>[
                'id'=>4,
                'categoryid'=> 2,
                'name'=>'Green Sharee',
                'price'=>3000,
                'description'=> 'product description',
                'image'=>'assets/img/green-sharee.jpg',
            ],
            4=>[
                'id'=>5,
                'categoryid'=> 2,
                'name'=>'Kamiz Mauve',
                'price'=>2500,
                'description'=> 'product description',
                'image'=>'assets/img/kamiz1.jpg',
            ],
            5=>[
                'id'=>6,
                'categoryid'=> 2,
                'name'=>'Kamiz Red',
                'price'=>2000,
                'description'=> 'product description',
                'image'=>'assets/img/redkamiz.jpg',
            ],
            6=>[
                'id'=>7,
                'categoryid'=> 3,
                'name'=>'Kid Dress ',
                'price'=>1500,
                'description'=> 'product description',
                'image'=>'assets/img/kid.jpg',
            ],
            7=>[
                'id'=>8,
                'categoryid'=> 3,
                'name'=>'Kid Dress',
                'price'=>1500,
                'description'=> 'product description',
                'image'=>'assets/img/kid2.jpg',
            ],

        ];
    }
    public function shortProducts($categoryId)
    {
//        echo $categoryId;
        $this->allProducts= $this->index();
//        echo '<pre>';
//        print_r($this->allProducts);
        foreach ($this->allProducts as $product)
        {
            if ($product['categoryid'] == $categoryId)
            {
                array_push($this->result,$product);
            }
        }
         return $this->result;


    }

    public function getProductDetails($productId)
    {
        $this->allProducts= $this->index();
        foreach ($this->allProducts as $product)
        {
            if($product['id']== $productId)
            {
                return $product;
            }
        }
    }

}