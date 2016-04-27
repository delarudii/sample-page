<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$text = $_POST['text'];

	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['text']))
			{
				$_SESSION['error'] = '<p class="error">Brak danych do wyświetlenia.</p>';
				header('Location: index.php');
					exit();
			}
			else
			{
				$_SESSION['ok'] = '<p class="ok">Dziękujemy za wysłanie formularza z następującymi danymi:<br>
									Your name: '.$name.'<br>
									Your email: '.$email.'<br>
									Your phone: '.$phone.'<br>
									Your message: '.$text.'</p>';
				header('Location: index.php');
					exit();
			}

?>

