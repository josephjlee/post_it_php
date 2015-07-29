<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class posts_controller extends CI_Controller {

	public function index()
	{
		$getPosts = $this->post_model->getPosts();
		$this->load->view('post_view', array('posts' => $getPosts));
	}

	public function create()
	{
		$postResult = $this->post_model->createPost($this->input->post());

		if($postResult)
		{
			echo json_encode("success");
			$_POST['post'] = "";
		}
		else
		{
			die("Uh oh Spaghetti-O!");
		}
	}
}
