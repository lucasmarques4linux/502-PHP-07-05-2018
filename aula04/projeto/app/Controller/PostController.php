<?php 

namespace Controller;

use Lib\ViewModel\ViewModel;
use Model\PostModel;
use Controller\LoginController;

class PostController
{
	private $viewModel;
	private $postModel;

	public function __construct()
	{
		$this->viewModel = new ViewModel();
		$this->postModel = new PostModel();
	}

	public function index()
	{
		LoginController::isLogged();
		$posts = $this->postModel->all();
		$this->viewModel->render('post/index',['posts' => $posts]);
	}

	public function new()
	{
		LoginController::isLogged();
		$this->viewModel->render('post/new');
	}

	public function edit($id)
	{	
		LoginController::isLogged();
		$post = $this->postModel->findOne($id);
		$this->viewModel->render('post/edit',['post'=>$post]);
	}

	public function create()
	{
		LoginController::isLogged();
		$_POST['created_at'] = date('Y-m-d');
		$_POST['user_id'] = LoginController::userLogged()->getId();
		$this->postModel->create($_POST);
		header('location:/post');
	}

	public function update()
	{
		LoginController::isLogged();
		$this->postModel->edit($_POST);
		header('location:/post');
	}

	public function delete()
	{
		LoginController::isLogged();
		$this->postModel->delete($_POST['id']);
		header('location:/post');	
	}
}