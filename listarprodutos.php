<?php  //listarclientes.php

include('conexao.php');

$sql = "select * from tblprodutos";
$qry = mysqli_query($con,$sql);


   echo "<table>";
   echo "<tr>";
   echo "<td>nome</td>";
   echo "<td>foto</td>";
   echo "<td>preco</td>";
   echo "<td>qtd</td>";
   
   echo "<tr>";
   while ($linha = mysqli_fetch_array($qry)){
   echo "<tr>";
   echo "<td>{$linha['nome']}</td>";
   echo "<td><img src='{$linha['foto']}' width='110px' height='130px'></td>";
   echo "<td>{$linha['preco']}</td>";
       echo "<td>{$linha['qtd']}</td>";
   echo "<tr>";
   }
   echo "</table>";
 ?>
</body>
</html>