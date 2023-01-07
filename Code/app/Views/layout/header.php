
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Glossário Bilíngue de Informática</title>

</head>
<body>
  <header class="d-flex align-items-center bg-success py-2">
  
    <!-- Navbar principal -->
    <div class="container d-flex justify-content-between">
      <div id="logo">
        <a href="/"><img src="<?php echo base_url('/assets/images/logo-branco.png'); ?>" alt="" style="width: 250px"></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a class="text-white" href="index.html">IFRS Farroupilha</a></h1> -->
      </div>

      <nav class="navbar navbar-expand-lg" id="">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active px-1">
            <a class="nav-link text-white" href="/info/about">Sobre <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active px-1">
            <a class="nav-link text-white" href="/info/team">Equipe <span class="sr-only"></span></a>
          </li>
          <li class="nav-item dropdown px-1">
              <a class="nav-link dropdown-toggle text-white" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contato </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                  <li><a class="dropdown-item" href="/contact/message">Enviar mensagem</a></li>
                  <li><a class="dropdown-item" href="/contact/submission">Sugerir novo termo</a></li>
              </ul>
          </li>
          <li class="nav-item active px-1">
            <a class="nav-link text-white" href="/admin/form">Administração <span class="sr-only"></span></a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Título -->
  <div class="container d-flex justify-content-center py-2" id="busca">
    <h1>GLOSSÁRIO BILÍNGUE DE INFORMÁTICA</h1>
  </div>
  <div class="container d-flex justify-content-center" id="busca">
    <h2>Inglês - Portugês</h2>
  </div>

  <!-- Espaço de busca -->
  <div class="container d-flex justify-content-center" id="busca">
    <form action="/result/search/" method="post">
      <div class="pagination">
          <input class="form-control mr-sm-2" name="pesquisa" style="min-width:400px" placeholder="Digite um termo ou sigla/ acrônimo">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </div>
    </form>
  </div>

  <!-- Navbar alfabético -->
  <nav class="container d-flex justify-content-center py-3">
    <ul class="pagination">
      <li class="page-item"><a class="page-link border-0" href="/result/list/A">A</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/B">B</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/C">C</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/D">D</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/E">E</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/F">F</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/G">G</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/H">H</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/I">I</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/J">J</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/K">K</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/L">L</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/M">M</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/N">N</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/O">O</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/P">P</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/Q">Q</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/R">R</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/S">S</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/T">T</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/U">U</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/V">V</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/W">W</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/X">X</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/Y">Y</a></li>
      <li class="page-item"><a class="page-link border-0" href="/result/list/Z">Z</a></li>
    </ul>
  </nav>

  <script src="<?php echo base_url('/assets/js/bootstrap.bundle.js'); ?>"></script>
</body>
</html>


