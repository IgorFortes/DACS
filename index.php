<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Heroic Features - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Listagem de Produtos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Catálogo
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formProduto.php">Cadastro</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <?php
        $nome2=$_POST['nome2'];
        
        include 'dbconnect.php';
        
        if (isset($_GET['pesquisa']) && ($_GET['pesquisa']==1)){
          $sql = "select * from produto where nome LIKE '%{$nome2}%'";
        }else{
          $sql = "select * from produto";
        }

        $result = mysqli_query($con,$sql);
    ?>
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <p class="lead">
          
          <center><h4>Catálogo de Produtos</h4></center>
          <a href="formProduto.php" class="btn btn-info btn-sm">Adicionar Produto</a>
          
          <form method="POST" action="index.php?pesquisa=1">
            <div class="input-group input-group-lg form-control_i" id="pesquisaA">
              <input type="text" class="form-control " placeholder="Digite para buscar" aria-label="align left" name="nome2">
                <button class="btn btn-warning btn-sm" type="submit">Pesquisar<span class="glyphicon glyphicon-search" id="pesq" aria-hidden="true"></span></button>
            </div>
          </form>

          <table class="table">
             <thead>
               <tr>
                 <th>id</th>
                 <th>Nome</th>
                 <th>Descrição</th>
                 <th>Valor</th>
                 <th>Categoria</th>
                 <th>Ações</th>
               </tr>
             </thead>
             <tbody>
               <?php
               while($row = $result->fetch_row()){
               ?>
               <tr>
                 <td><?=$row[0]?></td>
                 <td><?=$row[1]?></td>
                 <td><?=$row[2]?></td>
                 <td><?=$row[3]?></td>
                 <td><?=$row[4]?></td>
                 <td><a href="formProduto.php?id=<?=$row[0]?>" class="btn btn-primary btn-sm"> Alterar </a>
                     <a href="confremoveProduto.php?id=<?=$row[0]?>" class="btn btn-danger btn-sm"> X </a>
                 </td>
               </tr>
               <?php
               }
               ?>
             </tbody>
          </table>
      </p>
    </header>


  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Igor Fortes 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
