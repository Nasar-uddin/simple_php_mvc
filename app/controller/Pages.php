<?php
class Pages extends Controller{
    public function __construct(){
        //model created from model/Post
        
        $this->postModel = $this->model("Post");
    }
    public function index(){
        //get post from Post class
        $posts = $this->postModel->getPosts();
        $data = [
            'title'=>'Welcome',
            'posts'=>$posts
        ];
        $this->view("pages/index",$data);
    }
    public function about(){
        $data = ['title'=>'About us'];
        $this->view("pages/about",$data);
    }
}
