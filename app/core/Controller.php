<?php

class Controller{
    public function view($view, $data = []){
        // panggil views
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model){
        // panggil model
        require_once '../app/models/' . $model . '.php';
        // ambil data dari model
        return new $model;
    }
}