
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Glossário Bilíngue de Informática</title>

</head>
<header class="d-flex align-items-center bg-success py-2 fixed-top">

  <!-- Navbar principal -->
  <div class="container d-flex justify-content-between">
    <div id="logo">
      <a href="/"><img src="<?php echo base_url('/assets/images/logo-branco.png'); ?>" alt="" style="width: 200px"></a>
    </div>

    <nav class="navbar navbar-expand-lg" id="">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active px-1">
          <a class="nav-link text-white" href="/">Início <span class="sr-only"></span></a>
        </li>
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
        <li class="nav-item dropdown px-1">
            <a class="nav-link dropdown-toggle text-white" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administração </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                <?php if(session()->has('user')) :?>
                  <li><a class="dropdown-item" href="/admin/form">Inserir novo termo</a></li>
                  <li><a class="dropdown-item" href="/session/logout">Logout</a></li>
                <?php else :?>
                  <li><a class="dropdown-item" href="/session/loginForm">Login</a></li>
                <?php endif; ?>
            </ul>
        </li>
      </ul>
    </nav>
  </div>
  
</header>

