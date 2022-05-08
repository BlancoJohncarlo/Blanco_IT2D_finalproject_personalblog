<?php
	session_start();
	if(isset($_POST['edit'])){
		$users = simplexml_load_file('filesxml/blanco_IT2D_finalproject_personalblog.xml');
		foreach($users->user as $user){
			if($user->id == $_POST['id']){
				$user->firstname = $_POST['firstname'];
				$user->lastname = $_POST['lastname'];
				$user->address = $_POST['address'];
				$user->birthday = $_POST['birthday'];
				$user->zodiac = $_POST['zodiac'];
				$user->age = $_POST['age'];
				$user->gender = $_POST['gender'];
				$user->crush = $_POST['crush'];
				$user->contact = $_POST['contact'];
				break;
			}
		}
 
		file_put_contents('filesxml/blanco_IT2D_finalproject_personalblog', $users->asXML());
		$_SESSION['message'] = 'Member updated successfully';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Select member to edit first';
		header('location: index.php');
	}
 
?>