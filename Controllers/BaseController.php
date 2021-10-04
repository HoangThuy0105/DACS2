<?php
    class BaseController
    {
        const VIEW_FOLDER_NAME = 'views';

        const MODEL_FOLDER_NAME = 'Models';
        protected function views($viewpath, array $data=[])
        {
            foreach($data as $key => $value){
                $$key = $value;
            }

            
          require(self::VIEW_FOLER_NAME . '/'
            . str_replace('.', '/', $viewpath). '.php');
        }
        protected function loadModel($modelPath){
            require(self::MODEL_FOLER_NAME . '/'
            . str_replace('.', '/', $modelPath). '.php');

        }
    }
?>