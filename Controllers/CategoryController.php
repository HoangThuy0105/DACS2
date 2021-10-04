<?php
    class CategoryController extends BaseController
    {
        public function categorie()
        {
            $pageTitle = 'Danh sách sản phẩm theo danh mục: Bưởi Hồng';

            $categories =[
              [
                'id' => 1,
                'name' => 'Bưởi hồng',
              ],
              [
                'id' => 2,
                'name' => ' Hồng',
              ],
              [
                'id' => 1,
                'name' => 'Cà rốt',
              ],
              [
                'id' => 1,
                'name' => 'Rau cải',
              ],
              [
                'id' => 1,
                'name' => 'Rau muống',
              ],
            ];
            return $this->views('categories.categorie', [
                'categories' => $categories,
                'pageTitle' => $pageTitle,
            ]);
        }
        public function show()
        {
          $categorieId = $_GET['id'] ?? null;
          
          $categories
        }
    }
?>