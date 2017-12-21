<?php
	class Posts extends CI_controller{

		public function index(){

			$data['title'] = "Latest Posts";
			$data['posts'] = $this->post_model->get_posts();
			//print_r($data['posts']); //posts get fetched in this array

			$this->load->view('templates/header');
			$this->load->view('posts/index',$data);
			$this->load->view('templates/footer');
	}
}