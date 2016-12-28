<html>
<head>
<link href="/css/app.css" rel="stylesheet">
<title>Controle de estoque</title>
</head>
<body>
	<ul class="nav navbar-nav navbar-right">
		<li>
			<a href="{{action('ProdutoController@lista')}}">
			Listagem
			</a>
		</li>
		<li>
			<a href="{{action('ProdutoController@novo')}}">
			Novo
			</a>
		</li>
	</ul>
	<div class="container">
			@yield('conteudo')
	</div>
</body>
</html>