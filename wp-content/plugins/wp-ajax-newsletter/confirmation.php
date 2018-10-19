<?php
include_once("../../../wp-blog-header.php");
include_once("wp-ajax-newsletter.php");

$del = $_REQUEST["del"];
$add = $_REQUEST["add"];
$delConf = $_POST['delconf'];

$content = "";
$content .= "<h1>Contisaude - Newsletter</h1>\n";

if($del != ""){//newsletter removal confirmation
	if(ajaxNewsletter::isConfirmation($del)){
		if($delConf != ""){//we have answered confirmation
			if($delConf == "Yes"){//we have answerd Yes to the confirmation
				$id = ajaxNewsletter::getConfirmationId($del);
				$email = ajaxNewsletter::getSubscriptionEmail($id);
				ajaxNewsletter::removeSubscriber($id);
				$content .= "<div class='success'>O email <b>$email</b> foi removido com sucesso da Nossa newsletter.</div>\n";
			}else{
				$content .= "<div class='success'>Remoção do email cancelada.</div>\n";
			}
		}else{ //ask before removing
			$content .= "<h2>Confirmação de cancelamento</h2>\n";
			$content .= "<div style='padding:10px;'><p>Tem certeza que não deseja receber nosso conteúdo exclusivo por email?</p>\n";
			$content .= "<form action=\"\" method=\"post\">\n";
			$content .= "	<input class=\"button\" type=\"submit\" name=\"delconf\" value='Sim'/>\n";
			$content .= "	<input class=\"button\" type=\"submit\" name=\"delconf\" value='Não'/>\n";
			$content .= "</form></div>\n";
		}
	}else{//the confirmation number was not valid
		$content .= "<div class=\"errorTitle\">>Número de confirmação inválido.</div>\n";
		$content .= "<p>Confirme que o link fornecido no email foi copiado corretamente.</p>\n";
	}
}elseif($add != ""){//subscription confirmation
	if(ajaxNewsletter::isConfirmation($add)){
		$id = ajaxNewsletter::getConfirmationId($add);
		
		ajaxNewsletter::activateSubscriber($id);
		$email = ajaxNewsletter::getSubscriptionEmail($id);
		$content .= "<div class=\"success\">O email <b>$email</b> foi adicionado a nossa newsletter com sucesso.</div>\n";
	}else{//the confirmation number was not valid
		$content .= "<div class=\"errorTitle\">Número de confirmação inválido.</div>\n";
		$content .= "<p>Confirme que copiou corretamente o link fornecido no email.</p>\n";
	}
}else{//the user should not be here... redirect to homepage
	header( 'Location: '.get_bloginfo("url") ) ;
	exit();
}
//write the HTML for the confirmation page
ajaxNewsletter::writeConfirmationPage($content);
?>