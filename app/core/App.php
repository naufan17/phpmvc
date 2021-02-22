<?php

class App{
    protected $controller = 'Home',
              $method = 'index',
              $params = [];

    
    public  function __construct(){
        // jalankan method parseURL
        $url = $this->parseURL();
        
        // cek apakah ada file di dalam folder controllers
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            // jika ada timpa dengan yang baru
            $this->controller = $url[0];
            // hilangkan controller dari array
            unset($url[0]);
        }

        // panggil controller
        require_once '../app/controllers/' . $this->controller . '.php';
        // jalankan (instansisasi) controller
        $this->controller = new $this->controller;

        // cek apakah method url sudah ditulis
        if(isset($url[1])){
            // cek methodnya didalam controller
            if(method_exists($this->controller, $url[1])){
                // jika ada timpa method yang baru
                $this->method = $url[1];
                // hilangkan controller dari array
                unset($url[1]);
            }
        }
        
        // cek adakah parameternya
        if (!empty($url)){
            // simpan parameter ke dalam array
            $this->params = array_values($url);
        }

        //jalankan controller dan method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL(){
        if(isset($_GET['url'])){
            // hapus tanda slash di akhir
            $url = rtrim($_GET['url'], '/');
            // bersihkan karakter yang aneh
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // pecah url, hilangkan slash, jadikan array 
            $url = explode('/', $url);
            return $url;
        }
    }
}