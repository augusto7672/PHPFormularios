<?php
  $val1 = $_GET['base'];
  $val2 = $_GET['altura'];
  $res = $val1 * $val2;
  $res2 = ($val1 * 2) + ($val2 * 2);

	$link_bootstrap = [
        "head" => "<!DOCTYPE html><html><head><meta charset=\"utf-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css\" integrity=\"sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l\" crossorigin=\"anonymous\">
    <title>Cálculo dos Lados de Retângulo</title>
</head><body>",
        "script" => "<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns\" crossorigin=\"anonymous\"></script></body></html>"
    ];
  $navbar = "<div class=\"container-fluid\">
    <!-- Image and text -->
    <nav class=\"navbar navbar-light bg-primary\">
      <a class=\"navbar-brand text-white\" href=\"#\">
        <img src=\"lHZUirRj_400x400.jpg\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"Logo ETECIA Rosa\">
        ETEC Irmã Agostina - Programação Web 2
      </a>
    </nav>
  </div>";
  $conteudo_sucesso = "<div class=\"container-md w-50 mx-auto my-md-3\"><div class=\"alert alert-success\" role=\"alert\"><h4 class=\"alert-heading\">Sucesso!</h4><p>"."Valores:<br/>Base -> ".$val1." cm<br/>Altura -> ".$val2." cm<br/>"."Resultado:<br/>Área -> ".$res." cm²<br/>"."Perímetro -> ".$res2." cm<br/>"."</p></div>";
  $conteudo_aviso = "<div class=\"container-md w-50 mx-auto my-md-3\"><div class=\"alert alert-warning\" role=\"alert\"><h4 class=\"alert-heading\">Alerta! Seu retângulo na verdade é um quadrado!</h4><p>Valores:<br/>Base -> ".$val1." cm<br/>Altura -> ".$val2." cm<br/>".$val1." = ".$val2."<br/>Caso a base e altura sejam as mesmas, a forma geométrica será um quadrado.</p></div>";
  $conteudo_falha = "<div class=\"container-md w-50 mx-auto my-md-3\"><div class=\"alert alert-danger\" role=\"alert\"><h4 class=\"alert-heading\">Oops... Seus valores são impossíveis...</h4><p>Valores:<br/>Base -> ".$val1." cm<br/>Altura -> ".$val2." cm<br/>".$val1." = ".$val2."<br/>É complicado montar um quadrado multiplicando por zero... Provávelmente será uma linha e não um retângulo...</br><a href=\"index.php\" class=\"link\">Tente novamente</a></p></div>";
  $indice = "<div class=\"alert alert-primary\" role=\"alert\">"."<a class=\"alert-link\" href=\"index.php\">Voltar ao início</a>"."</div>";

	echo $link_bootstrap['head'];
  echo $navbar;

  if ($val1 == 0 || $val2 == 0)
  {
    echo $conteudo_falha;
  } else if ($val1 == $val2)
  {
    echo $conteudo_aviso;
  } else
  {
    echo $conteudo_sucesso;
  }

  echo $indice;
	echo "</div>";
  echo $link_bootstrap['script']
?>