<?php
    $peso = $_GET['peso'];
    $altura = $_GET['altura']; // Centímetros
    // $altura_m = $altura * ; // Metros
    $imc_preciso = $peso / ($altura * $altura);
    $imc = number_format($imc_preciso,2,',','.');


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
  $imc_abaixo = "<div class=\"container-md w-50 mx-auto my-md-3\"><div class=\"alert alert-danger\"><h2 role=\"alert\">Você está abaixo do peso ideal!</h2><h3>Valores:</h3><p>Peso -> ".$peso." kg<br/>"."Altura -> ".$altura." cm<br/>IMC -> ".$imc." (IMC < 18.5)<br/>Agende uma consulta no médico urgentemente.</p><img src=\"anorexia.png\" alt=\"Pessoa abaixo do peso\" width=\"120\" height=\"120\"></div>";
  $imc_saudavel = "<div class=\"container-md w-50 mx-auto my-md-3\"><div class=\"alert alert-success\"><h2 role=\"alert\">Você está com o peso ideal!</h2><h3>Valores:</h3><p>Peso -> ".$peso." kg<br/>"."Altura -> ".$altura." cm<br/>IMC -> ".$imc." (IMC > 18.5 && IMC < 25)</p><img src=\"saudavel.png\" alt=\"Pessoa saudável\" width=\"120\" height=\"120\"></div>";
  $imc_sobrepeso = "<div class=\"container-md w-50 mx-auto my-md-3\"><div class=\"alert alert-warning\"><h2 role=\"alert\">Você está com sobrepeso!</h2><h3>Valores:</h3><p>Peso -> ".$peso." kg<br/>"."Altura -> ".$altura." cm<br/>IMC -> ".$imc." (IMC > 25 && IMC < 30)<br/>Tome cuidado... Tente seguir uma dieta mais saudável.</p><img src=\"acima_peso.png\" alt=\"Pessoa com sobrepeso\" width=\"120\" height=\"120\"></div>";
  $imc_obeso = "<div class=\"container-md w-50 mx-auto my-md-3\"><div class=\"alert alert-danger\"><h2 role=\"alert\">Você está obeso!</h2><h3>Valores:</h3><p>Peso -> ".$peso." kg<br/>"."Altura -> ".$altura." cm<br/>IMC -> ".$imc." (IMC > 30)<br/>Agende uma consulta no médico urgentemente.</p><img src=\"obeso.png\" alt=\"Pessoa obesa\" width=\"120\" height=\"120\"></div>";
    $indice = "<div class=\"alert alert-primary\" role=\"alert\">"
    ."<a class=\"alert-link\" href=\"index.php\">Voltar ao início</a>"
    ."</div>";

    echo $link_bootstrap['head'];
    echo $navbar;

    if ($imc < 18.5)
    {
        echo $imc_abaixo;
    } else if ($imc > 18.5 && $imc < 25)
    {
        echo $imc_saudavel;
    } else if ($imc > 25 && $imc < 30)
    {
        echo $imc_sobrepeso;
    } else if ($imc > 30)
    {
        echo $imc_obeso;
    }

    echo $indice;
    echo "</div>";
    echo $link_bootstrap['script'];
?>