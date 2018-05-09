<?php 

require 'users.php';

$users = new User();

$data = file_get_contents("php://input");
$data = json_decode($data,true);

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'GET':
			
			$id = $_GET['id'] ?? null;

			if ($id) {
				$data = $users->find($id);
			} else {
				$data = $users->list();
			}

			if($data){
				header('HTTP/1.1 200');
				$response = [
					'status'  => 'ok',
					'data'    => $data,
					'message' => ''
				];
			} else {
				header('HTTP/1.1 204');
				$response = [
					'status'  => 'erro',
					'data'    => '',
					'message' => 'Users Not Found'
				];
			}
		break;
	case 'POST':
		echo  'POST';
		break;
	case 'PUT':
		echo  'PUT';
		break;
	case 'DELETE':
		echo  'DELETE';
		break;
}

header('Content-type: application/json; charset=UTF-8');
echo json_encode($response);