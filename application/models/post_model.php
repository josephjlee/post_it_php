<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class post_model extends CI_Model {

	public function createPost($data)
	{
		$query = "INSERT INTO posts (post, created_at, updated_at) VALUES (?, NOW(), NOW())";
		$result = $this->db->query($query, array($data['post']));
		return($result);
	}	

	public function getPosts()
	{
		$query = "SELECT * FROM posts ORDER BY created_at DESC";
		$result = $this->db->query($query)->result_array();
		return($result);
	}
}
