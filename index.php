<!DOCTYPE html>
<html>
	<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="chatws.css" rel="stylesheet"/>
	</head>
	<body>
		<div id="konten">
			<div class="tabs"><div class="tab aktip" data-dip="chat">CHATS</div><div class="tab" data-dip="users">USERS</div></div>
			<div class="chat">
			<?php

				
				$colours = array('8FC7FF','8F8FFF','C78FFF','FF8FFF','FF8F8F','FFC78F','C7FF8F');
				$user_colour = array_rand($colours);
				
				$username = (!empty($_GET['name']) ? $_GET['name'] : '');
				$userlogin = (!empty($_GET['name']) ? '<div class="user '.$_GET['name'].'">'.$_GET['name'].' <a href="index.php?pergi='.$_GET['name'].'" class="keluar">Disconnec</a></div>' : '');
	 
				if(!empty($username)){
			?>

					<div id='message_box' class="container-fluid">
						<!-- menampilan message -->
					</div>
					<form id="msg_form">
						<input id="message" type="text" placeholder="Message.." />
					</form>

			<?php 

				}
	 
			
				else{
			?>

					<form action="index.php" method="GET">
						<input name="name" class="username" placeholder="Enter Username to connect" required/>
						<button id="button-blue">Connect</button>
					</form>
					<div class="welcome">Nothing to write here</div>
					<footer>Developed by Maisam </footer>
					 
			<?php 
				}
			?>
			
			</div>
			<div class="users" style='display:none'>
				<?php echo $userlogin ?>
			</div>
		</div>
		
		<!-- data user hidden -->
		<input id="u_name" type="hidden" value="<?php echo $username ?>"/>
		<input id="u_date" type="hidden" value="<?php echo date("Y/m/d h:i:sa") ?>"/>
		<input id="u_pergi" type="hidden" value="<?php echo (empty($_GET['pergi']) ? '' : $_GET['pergi']) ?>"/>
		<input id="u_color" type="hidden" value="<?php echo $colours[$user_colour] ?>"/>
	
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="chatws.js"></script>
		<script>
			chatws(
				host = '10.103.4.62', //host
				port = '9000', //port
				socketpath = 'demo/chatws.php' //socketpath
			);
		</script>
  
	</body>
</html>
