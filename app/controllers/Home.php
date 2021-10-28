<?php 

class Home extends Controller{
    public function index()
    {
        $data['judul'] = "Home";
        $data['nama'] = $this->model('User_model')->get_user();
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}