<?php
class Pages{
    public function __construct(){

    }
    public function index(){
        echo "Pages index";
    }
    public function about($id){
        echo "About ".$id;
    }
}
