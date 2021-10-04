<?php
    class Productmodels 
    {
        const TABLE = 'products';

        public function getAll(){
            return [
                [
                   'id' => 12,
                'name' => 'cam'
                ]
            ];
                
        }
        public function findById($id){
            return __METHOD__;
        }
        public function delete(){
            return __METHOD__;
        }
    }}
?>