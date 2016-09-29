
<html lang="en">
	<head>
		<meta charset="utf-8">
        <link rel="icon" type="image/gif" href="photos/korea.gif"  />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Korean Cuisine</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="cadastro.css" >
    </head>
    
    <body>
        <div class="container">
			<div class="header" align="center">
            	<img src="photos/kc.jpg" width=200px >
			</div>
			<div class="nav-bar" align="center">
				<ul class="nav">
					<li><a href="index.html" >Home</a></li>
					<li><a href="top5dishes.html">Top 5 Dishes</a></li>
					<li><a href="receitas.html">Receitas</a></li>
                   	<li><a href="restaurantes.html">Restaurantes em Sp</a></li>
                  	<li><a href="fale.html">Fale Conosco</a></li>
                  	<li><a href="quem.html">Quem Somos</a></li>
				</ul>
				</div>
			</div>
    
    			
    			
    			
    
    			 <div class="content" align="center"> 
    			 
                
                <form method="post" action="cadastro.php">
            	<h1 font-color=black><a>Cadastro</a></h1>
                <p class="nome">  <label for="nome">Nome:</label>
                <input type="text"  placeholder="Digite o seu nome" required name="nome" /> </p> 
                
                <p class="fone">  <label for="fone">Telefone</label> 
                <input type="text" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="fone" /></p> 
                
                <p>  <label for="email">Email</label>
                <input type="email" id="emailid" placeholder="exemplo@exemplo.com.br" name="email" /></p> 
                
                <p class="senha"> <label for="senha">Senha:</label>
                <input type="password" placeholder="*********" name="senha"> </p> 
                
                <p class="sexo"> <label for="sexo">Sexo:</label>
                <select name="sexo">
                	<option name="masculino">Masculino</option>
                	<option name="feminino">Feminino</option>
                </select></p>
                
                <div class="file" align="center" >
                	<td><label for="foto"> Foto </label>
                	<input type="file" id="idfoto" name="foto" size="90"></th>
                </div>
                
                <br>
                
                <p><input type="submit" onclick="Enviar();" value="Enviar" /></p>
                
                </div>
                
                </form>
        
                
			
			
			<div class="content" align="center">
				<div class="main">
			<div class="footer">
				@Developed by : Cho Wan Lim, Leonardo Koralcow, Guilherme Henrique
			</div>
		</div>
		</div>
	</body>
</html>