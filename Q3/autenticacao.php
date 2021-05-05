<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $str_usuario = "etecia";
    $str_senha = "etecia238";

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
    $autenticado = "<div class=\"container-md w-50 mx-auto my-md-3\"><div class=\"alert alert-success\"><h1 role=\"alert\">Autenticação realizada com sucesso!</h1><h2 role=\"alert\">Seguindo para a próxima página...</h2></div>";
    $nao_autenticado = "<div class=\"container-md w-50 mx-auto my-md-3\"><div class=\"alert alert-danger\"><h1 role=\"alert\">Você não tem permissão para visualizar essa página.</h1><h2 role=\"alert\">Volte e <a href=\"index.php\" class=\"link\">tente novamente</a>.</h2></div>";

    echo $link_bootstrap['head'];
    echo $navbar;

    if (strcmp($usuario,$str_usuario) == 0 && strcmp($senha,$str_senha) == 0)
    {
        echo $autenticado;
    } else
    {
        echo $nao_autenticado;
    }


    echo "</div>";
    echo $link_bootstrap['script']
?>