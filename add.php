<?php
	session_start();
	if(isset($_POST['add'])){
		//open xml file
		$users = simplexml_load_file('filesxml/blanco_IT2D_finalproject_personalblog.xml');
		$user = $users->addChild('user');
		$user->addChild('id', $_POST['id']);
		$user->addChild('firstname', $_POST['firstname']);
		$user->addChild('lastname', $_POST['lastname']);
		$user->addChild('address', $_POST['address']);
		$user->addChild('birthday', $_POST['birthday']);
		$user->addChild('zodiac', $_POST['zodiac']);
		$user->addChild('age', $_POST['age']);
		$user->addChild('status', $_POST['status']);
                $user->addChild('gender', $_POST['gender']);
		$user->addChild('crush', $_POST['crush']);
		$user->addChild('contact', $_POST['contact']);
		// Save to file
		// file_put_contents('files/blanco_IT2D_finalproject_personalblog.xml', $users->asXML());
		// Prettify / Format XML and save
		$dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($users->asXML());
		$dom->save('filesxml/blanco_IT2D_finalproject_personalblog.xml');
		// Prettify / Format XML and save
 
		$_SESSION['message'] = 'Member added successfully';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: index.php');
	}
?>
