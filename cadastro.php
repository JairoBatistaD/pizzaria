<htmL>
	<head>
		<link href="estilo.css" rel="stylesheet" >
		<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<!---SCR---->
 <!-- Adicionando Javascript -->
    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
          
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
           
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
               


                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

     function Enviar(){
var nome = document.getElementById("nome").value;
return alert("Obrigado "+nome+" seu cadastro foi efetuado com sucesso")

     }
    </script>

	</head>
	<body id="ide1">
		<!-- Inicio Logo ---->
		<div class="container-fluid">
			<div class="row">
		<div id= "logo" class="col-3">
			<h3 style="text-align: left"> Ligue agora:<br> XXXXX-XXXX </h3>
			</div>
			<div id="logo" class="col-5">
			<img src="logo.png" width="200px" height="200px;">
			</div>
			<div  id="logo" class="col-4"></div>

		</div>
	</div><!--fecha row-->
	</div><!--Fecha container-->
		<div id="logo1"></div>
		<!--- Fim logo --_--->


		<!-- Menu ---------->
		<nav id="menu" class="nav justify-content-end navbar sticky-top">
			<button class="btn btn-warning"> <a href="index.php">Quem somos</a></button>
			<button class="btn btn-warning"> <a href="cardapio.php">Cardapio</a></button>
			<button class="btn btn-warning"> <a href="cadastro.php">Faça seu Cadastro</a></button>

		</nav>

		<!-- Fim Menu ------->

		<!--- INICIO FORMULARIO---->
		<h1 style="text-align: center; color:white;">Receba nossas novidades </h1>
		<div class="container">
<form method="get" action="." class="form-horizontal">
		<label> Nome </label>
			<input type="text" class="form-control" id="nome"></br>
        <label>Cep:</label>
        <input name="cep" type="text" id="cep" value=""  maxlength="9"
               onblur="pesquisacep(this.value);" class="form-control" /><br />
        <label>Rua:</label>
        <input name="rua" type="text" id="rua"  class="form-control" /><br />
        <label>Bairro:</label>
        <input name="bairro" type="text" id="bairro" class="form-control" /><br />
        <label>Cidade:</label>
        <input name="cidade" type="text" id="cidade" class="form-control" /><br />
        <label>Estado:</label>
        <input name="uf" type="text" id="uf" size="2" class="form-control"/><br />
        <button onclick="Enviar()" class="btn btn-success" >Cadastrar</button>
      </form>
  </div>


		<!--- FIM FORM ----->

<footer>
	<div class="container">
	<label>Entre em contato através: </label><br>
	<label>Telefone: XXXXX-XXX</label><br>
	<label>Email:jaokok@jojs.com</label><br>

</div>

</footer>

	</body>


</htmL>