
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="materialize/js/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){

        });
      </script>
      <script>
        function excluir(id) {
          if(confirm("Deseja mesmo EXCLUIR esse Funcionário?")) {
            document.location.href = "banco_de_dados/delete.php?id="+id;
          }
        }
        </script>

      
    </body>
  </html>
        