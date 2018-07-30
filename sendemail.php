<?

$destinatario = "inespinheiro131@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$profissao = $_REQUEST['profissao'];
$escola = $_REQUEST['escola'];
$numero = $_REQUEST['numero'];
$associacao = $_REQUEST['associacao'];
$outra = $_REQUEST['outra'];


$body = "Inscrição" . "\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Profissão: " . $profissao . "\n";
$body = $body . "Instituição de Ensino: " . $escola . "\n";
$body = $body . "Número de aluno: " . $numero . "\n";
$body = $body . "Entidade pareceira: " . $associacao . "\n";
$body = $body . "Outra: " . $outra . "\n\n";


mail($destinatario, $assunto , $body, "From: $email\r\n");

header("location:obrigado.html");
?>