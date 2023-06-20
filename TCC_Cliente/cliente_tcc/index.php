<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>SOS FARMÁCIA</title>
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      
 </head>
 <body>
 <center>
        <img src="../imagens/logoofcc.png" alt="SOS Farmácia" width=340 height=240  >
    </center>
 <?php
include_once "conexao_bd.php";

 
    if (isset($_POST['btnCadastrar'])) {

        $Produto = mysqli_escape_string($connection,$_POST['pesquisa']);
        
        $sql = "SELECT* FROM  Produtos  WHERE NomeProd LIKE '%$Produto%' LIMIT 4";
        
        $resultado = mysqli_query($connection, $sql);
        
        }else{
        
        $sql = "SELECT * FROM Produtos";
        
        $resultado = mysqli_query($connection, $sql);
        
        
        

        while($dados = mysqli_fetch_array($resultado)){ ?>

<div class="row">

<div class="card red">
    <h2><?php echo $dados['NomeProd']; ?></h2>
    <br>
    <p><?php echo $dados['Descricao']; ?></p>
  </div>
</div>
  
  <?php }}
?>
<footer>

<p>(11) 94555-5555 - SOS Farmácia - Copyright&copy;</p>

</footer>