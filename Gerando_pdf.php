
<?php

require_once './mpdf60/mpdf.php';

$dados = array($nome = $_POST['nome'], $funcao = $_POST['funcao'], $data = $_POST['data']);
$mpdf = new mPDF();

//$mpdf->charset_in = 'UTF-8'; caso de o erro HTML contains invalid UTF-8 character(s)

if (empty($dados[0])) {
    echo"<script type='text/javascript'>alert('Preencher Todos O Campos');window.location='./index.php';</script>";
    return;
}

$dados_arquivo_pdf = "Nome : $dados[0]<br>"
        . "Função : $dados[1]<br>"
        . "Data da incrição : <br>"
        . "Data de Termino de Contrato : $dados[2]<br>"
        . "<b class='direita'>Comprovante de Incrição Obricado !..</b>";

$mpdf->WriteHTML($dados_arquivo_pdf);

$mpdf->Output();



