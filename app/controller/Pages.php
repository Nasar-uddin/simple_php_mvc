<?php
class Pages extends Controller{
    public function __construct(){
        //model created from model/Post
        
    }
    public function index(){
        //get post from Post class
        $data = [
            'title'=>SITENAME,
        ];
        $this->view("pages/index",$data);
    }
    public function about(){
        $data = ['title'=>'About us'];
        $this->view("pages/about",$data);
    }
}
