<?php 
// Carregar imagem já existente no servidor
$imagem = imagecreatefrompng( "./img/certificado-modelo.png" );


// Definições
$colorGrey = imagecolorallocate($imagem, 82,82,82);
$colorPink = imagecolorallocate($imagem, 236,40,120);
$fontMonotype = "./fonts/MTCORSVA.TTF"; # Fonte que será utilizada
$fontLato = "./fonts/Lato-Regular.ttf"; # Fonte que será utilizada
$fontLatoBold = "./fonts/Lato-Bold.ttf"; # Fonte que será utilizada
$header = "Certificado de Conclusão"; # Texto a ser escrito
$titleCouse = 'Certificamos que o aluno Willian Celso Zarpellon Damaceno concluiu com sucesso 30 horas do Curso completo de Construct2 em 10 de abril de 2018.';
$titleCouse = wordwrap($titleCouse, 60, "\n");

$instrutoresLabel = "Instrutores:";
$instrutoresNames = "Willian Zarpellon e Thiago Prado";
$codeLabel = "Código de Validação:";
$code = "DSAKLDE2018";
$codeSite = "Validar no site: www.cursae.com.br";

// Escreve na imagem
imagettftext($imagem, 178, 0, 820,580,$colorGrey,$fontMonotype,$header);
imagettftext($imagem, 75, 0, 820,830,$colorGrey,$fontMonotype,$titleCouse);
imagettftext($imagem, 56, 0, 820,1430,$colorGrey,$fontLatoBold,$instrutoresLabel);
imagettftext($imagem, 50, 0, 820,1530,$colorGrey,$fontLato,$instrutoresNames);
imagettftext($imagem, 45, 0, 300,2000,$colorPink,$fontLatoBold,$codeLabel);
imagettftext($imagem, 45, 0, 300,2080,$colorPink,$fontLato,$code);
imagettftext($imagem, 35, 0, 300,2190,$colorGrey,$fontLato,$codeSite);


header( 'Content-type: image/png' );
 
//eEnvia a imagem para o borwser ou arquivo
imagejpeg( $imagem, NULL, 85);

?>

