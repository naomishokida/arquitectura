<?php 



$nombreyapellido=$_POST['nombreyapellido'];

$email=$_POST['email'];

$motivo=$_POST['motivo'];

$comentario=$_POST['comentario'];



// configuramos datos de email

$destinatario="shokida.naomi@gmail.com";

$asunto= "Comentario desde la web";



// cuerpo de email

$cuerpo.="Nombre y apellido: ".$nombreyapellido."\n";

$cuerpo.="Email: ".$email."\n";

$cuerpo.="Asunto: ".$motivo."\n";

$cuerpo.="Comentario: ".$comentario."\n";



// enviamos el email

mail($destinatario,$asunto,$cuerpo);



echo $nombreyapellido,  "Gracias por contactarme, en breve te estaré respondiendo!";		



 ?>