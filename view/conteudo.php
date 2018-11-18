
		
		

		<!-- Campo registrar -->
		<div class="container" style="background:white; margin-top: 10px;">
			<div class="row" >
				<div class="col-md-12 centro" style="margin-top: 10px;">
					
					

<p>Podemos determinar a <strong>análise combinatória</strong> como sendo um conjunto de possibilidade constituído por elementos finitos, a mesma baseia-se em critérios que possibilitam a contagem. Realizamos o seu estudo na lógica matemática, analisando possibilidades e combinações. Acompanhe o exemplo a seguir, para poder compreender melhor o que vêm a ser a análise combinatória.</p>
<p><span style="text-decoration: underline;">Exemplo</span>: Descubra quantos números com 3 algarismos conseguimos formar com o conjunto numérico {1, 2, 3}.
<p style="padding-left: 30px;"><em>Conjunto de elementos finito</em>: {1, 2, 3}</p>
<p style="padding-left: 30px;">Conjunto de possibilidades de números com 3 algarismos: {123, 132, 213, 231, 312, 321}</p>
<p style="padding-left: 30px;"><span style="text-decoration: underline;">Resposta Final</span>: Com o conjunto numérico {1, 2, 3}, é possível formar 6 números.</p>
<p>A análise combinatória estuda os seguintes conteúdos:</p>
<ul>
	<li>Princípio fundamental da contagem</li>
	<li>Fatorial</li>
	<li>Permutação simples</li>
	<li>Permutação com repetição</li>
	<li>Arranjo simples</li>
	<li>Combinação simples</li>
</ul>
<p>Confira a seguir uma definição resumida de cada tópico estudo pela análise combinatória.</p>
<h2>Princípio fundamental da contagem</h2>
<p>Determina o número total de possibilidade de um evento ocorrer, pelo produto de m <em>x</em> n. Sendo n e m resultados distintos de um evento experimental.</p>
<p><span style="text-decoration: underline;">Exemplo</span>: Jeniffer precisa comprar uma saia, a loja em que está possui 3 modelos de saia diferente nas cores: preto, rosa, azul e amarelo. Quantas opções de escolha Jeniffer possuí.</p>
<p>Para solucionar essa questão utilizamos o principio fundamental da contagem.</p>
<p>m = 3 (Modelos diferentes de saia), n = 4 (Cores que a saia possui)</p>
<p>m x n = 3 x 4 = 12</p>
<p>Jeniffer possui 12 possibilidades de escolha.</p>
<h2>Fatorial</h2>
<p>O fatorial de um número qualquer, e representado pelo produto:</p>
<p>n! = n . (n - 1) . (n - 2) . (n - 3) . ... . 1!</p>
<p>Exemplo: Calcule 4!</p>
<p>n! = n . (n - 1) . (n - 2) . (n - 3) . ... . 1!<br />
	4! = 4 . (4 – 1) . (4 – 2) . (4 – 3)<br />
	4! = 4 . 3. 2 . 1<br />
4! = 24</p>
<h2>Permutação simples</h2>
<p>Na permutação os elementos que compõem o agrupamento mudam de ordem, ou seja, de posição. Determinamos a quantidade possível de permutação dos elementos de um conjunto, com a seguinte expressão:</p>
<p>P<sub>n</sub> = n!<br />
	P<sub>n</sub> = n . (n-1) . (n-2) . (n-3).....1!</p>
	<p><span style="text-decoration: underline;">Exemplo</span>: Em uma eleição para representante de sala de aula, 3 alunos candidataram-se: Vanessa, Caio e Flávia. Quais são os possíveis resultados dessa eleição?</p>
	<p>Vanessa (V), Caio (C), Flávia (F)</p>
	<p>Os possíveis resultados dessa eleição podem ser dados com uma permutação simples, acompanhe:</p>
	<p>n = 3 (Quantidade de candidatos concorrendo a representante)</p>
	<p>P<sub>n</sub> = n!</p>
	<p>P<sub>n</sub> = 3 . 2 . 1!<br />
		P<sub>n</sub> = 6</p>
		<p>Para a eleição de representante, temos 6 possibilidades de resultado, em relação a posição dos candidatos, ou seja, 1<span style="font-size: 13.3333px; line-height: 20px;">º, </span>2º e 3º lugar. Veja a seguir os possíveis resultados dessa eleição.</p>
		<table style="height: 60px;" border="1" width="80%" cellspacing="0" cellpadding="2" align="center">
			<tbody>
				<tr>
					<td style="text-align: center;">Resultado 1</td>
					<td style="text-align: center;">Resultado 2</td>
					<td style="text-align: center;">Resultado 3</td>
					<td style="text-align: center;">Resultado 4</td>
					<td style="text-align: center;">Resultado 5</td>
					<td style="text-align: center;">Resultado 6</td>
				</tr>
				<tr>
					<td style="text-align: center;">VCF</td>
					<td style="text-align: center;">VFC</td>
					<td style="text-align: center;">CVF</td>
					<td style="text-align: center;">CFV</td>
					<td style="text-align: center;">FCV</td>
					<td style="text-align: center;">FVC</td>
				</tr>
			</tbody>
		</table>
		<h2>Permutação com repetição</h2>
		<p>Nessa permutação alguns elementos que compõem o evento experimental são repetidos, quando isso ocorrer devemos aplicar a seguinte fórmula:</p>
		<span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_23afcf4ea47412459d13c747f61456ea.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>P_n (n_1, n_2, n_3 \ldots n_k) = \frac{n!}{n_{1}! \cdot n_{2}! \cdot n_{3}! \ldots n_{k}!}</script>
		<ul>
			<li><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_0450b2dd92e989915daecaeac121509e.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>P_n (n_1, n_2, n_3 \ldots n_k)</script> = permutação com repetição</li>
			<li><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_cc00678587b18a8ff9b50fa185ef14d3.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>{n!}</script> = total de elemetos do evento</li>
			<li><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_cdd480015cec5d8b09155274c14e6120.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>{n_{1}! \cdot n_{2}! \cdot n_{3}! \ldots n_{k}!}</script> = Elementos repetidos do evento</li>
		</ul>
		<p><span style="text-decoration: underline;">Exemplo</span>: Quantos anagramas são possíveis formar com a palavra CASA.</p>
		<p>A palavra CASA possui: 4 letras (n) e duas vogais que se repetem (n<sub>1</sub>).</p>
		<ul>
			<li>n! = 4!</li>
			<li>n<sub>1</sub>! = 2!</li>
		</ul>
		<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_7cbf4256b073c88c1c37e6f0da6fdb8a.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>P_{n}(n_1) = \frac{n!}{n_{1}!}</script></p>
		<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_3cf47bed859d7edd2261da52c3a2984f.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>P_{n}(n_1) = \frac{4!}{2!}</script></p>
		<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_b260ad8665612210dc2e64a725aad906.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>P_{n}(n_1) = \frac{4 \cdot 3 \cdot 2 \cdot 1!}{2 \cdot 1!}</script></p>
		<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_48e9216ac5a39dc327d3bf1f83d19999.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>P_{n}(n_1) = \frac{24}{2} = 12</script>
		</p>
		<table border="1" width="80%" cellspacing="0" cellpadding="2" align="center">
			<colgroup>
				<col width="82" />
				<col width="83" />
				<col width="83" />
				<col width="83" />
				<col width="83" />
				<col width="82" /> </colgroup>
				<tbody>
					<tr>
						<td style="text-align: center;" colspan="6" valign="top" width="565">Anagramas da palavra CASA sem repetição</td>
					</tr>
					<tr valign="top">
						<td style="text-align: center;" width="82"><strong><span style="color: #ff0000;">C</span><span style="color: #002060;">A</span><span style="color: #00b050;">S</span><span style="color: #5f497a;">A</span></strong></td>
						<td style="text-align: center;" width="83"><strong><span style="color: #002060;">A</span><span style="color: #ff0000;">C</span><span style="color: #00b050;">S</span><span style="color: #7030a0;">A</span></strong></td>
						<td style="text-align: center;" width="83"><strong><span style="color: #002060;">A</span><span style="color: #00b050;">S</span><span style="color: #ff0000;">C</span><span style="color: #7030a0;">A</span></strong></td>
						<td style="text-align: center;" width="83"><strong><span style="color: #002060;">A</span><span style="color: #00b050;">S</span><span style="color: #7030a0;">A</span><span style="color: #ff0000;">C</span></strong></td>
						<td style="text-align: center;" width="83"><strong><span style="color: #00b050;">S</span><span style="color: #ff0000;">C</span><span style="color: #0070c0;">A</span><span style="color: #7030a0;">A</span></strong></td>
						<td style="text-align: center;" width="82"><strong><span style="color: #ff0000;">C</span><span style="color: #00b050;">S</span><span style="color: #0070c0;">A</span>A</strong></td>
					</tr>
					<tr valign="top">
						<td style="text-align: center;" width="82"><strong><span style="color: #002060;">A</span><span style="color: #7030a0;">A</span><span style="color: #00b050;">S</span><span style="color: #ff0000;">C</span></strong></td>
						<td style="text-align: center;" width="83"><strong><span style="color: #002060;">A</span><span style="color: #7030a0;">A</span><span style="color: #ff0000;">C</span><span style="color: #00b050;">S</span></strong></td>
						<td style="text-align: center;" width="83"><strong><span style="color: #ff0000;">C</span><span style="color: #002060;">A</span><span style="color: #7030a0;">A</span><span style="color: #00b050;">S</span></strong></td>
						<td style="text-align: center;" width="83"><strong><span style="color: #00b050;">S</span><span style="color: #002060;">A</span><span style="color: #7030a0;">A</span><span style="color: #ff0000;">C</span></strong></td>
						<td style="text-align: center;" width="83"><strong><span style="color: #00b050;">S</span><span style="color: #7030a0;">A</span><span style="color: #ff0000;">C</span><span style="color: #002060;">A</span></strong></td>
						<td style="text-align: center;" width="82"><strong><span style="color: #002060;">A</span><span style="color: #ff0000;">C</span><span style="color: #7030a0;">A</span><span style="color: #00b050;">S</span></strong></td>
					</tr>
				</tbody>
			</table>
			<h2>Arranjo simples</h2>
			<p>No arranjo simples a localização de cada elemento do conjunto forma diferentes agrupamentos, devemos levar em consideração, a ordem de posição do elemento e sua natureza, além disso, devemos saber que ao mudar os elementos de posição isso causa diferenciação entre os agrupamentos.</p>
			<p>Para saber a quantidade de arranjos possíveis em p agrupamento com n elementos, devemos utilizar a fórmula a seguir:</p>
			<p style="text-align: center;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_f81db3b9074d34fd05675f9c940b4a57.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>A_{n,p} = \frac{n!}{(n-p)!}</script></p>
			<ul>
				<li>A = Arranjo</li>
				<li>n = elementos</li>
				<li>p = Agrupamentos</li>
			</ul>
			<p>No arranjo a quantidade de agrupamento p, sempre deve ser menor que n, ou seja:</p>
			<p style="text-align: center;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_cdb071c4c9a56c35818230afe995b24e.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>p \leq n</script></p>
			<p><span style="text-decoration: underline;">Exemplo</span>: Flávia, Maria, Gustavo e Pedro estão participando de uma competição em que há premiação para os três primeiros colocados (1º, 2º e 3º). Quais são as possibilidades de premiação?</p>
			<ul>
				<li>Quantidade de participantes da competição: n = 4</li>
				<li>Quantidade de pessoas em cada agrupamento (premiação): p = 3</li>
			</ul>
			<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_f81db3b9074d34fd05675f9c940b4a57.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>A_{n,p} = \frac{n!}{(n-p)!}</script></p>
			<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_394d4e57b4d499733568dec905c0de47.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>A_{4,3} = \frac{4!}{(4-3)!}</script></p>
			<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_5c57dbcdf92ad6ad7906c80bf9bd52c4.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>A_{4,3} = \frac{4 \cdot 3 \cdot 2 \cdot 1!}{1!}</script></p>
			<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_5fa1f3f08344fc291d7868cdd4948c68.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>A_{4,3} = \frac{24}{1} = 24</script></p>
			<p>Existem 24 possibilidades de premiação.</p>
			<h2>Combinação simples</h2>
			<p>Na combinação simples, em um agrupamento mudamos somente a ordem dos elementos distintos. Para que isso seja feito podemos recorrer à utilização da fórmula:</p>
			<p style="text-align: center;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_426854f09eb3bbf18d552d6b63066a65.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>C_{n,p} = \frac{n!}{p! \cdot (n-p)!}</script></p>
			<ul>
				<li>C = Combinação</li>
				<li>n = Elementos.</li>
				<li>p = Agrupamento</li>
			</ul>
			<p>Sendo sempre: <span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_cdb071c4c9a56c35818230afe995b24e.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>p \leq n</script></p>
			<p><span style="text-decoration: underline;">Exemplo</span>: De quantos modos diferentes posso separar 10 bolinhas de cores distintas, colocando 2 bolinhas em cada saquinhos</p>
			<ul>
				<li>Total de bolinhas: n = 10</li>
				<li>Quantidade de bolinhas por saquinho: p = 2</li>
			</ul>
			<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_426854f09eb3bbf18d552d6b63066a65.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>C_{n,p} = \frac{n!}{p! \cdot (n-p)!}</script></p>
			<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_2da74e51427fa9d9ee6fb94ba40cf10c.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>C_{10,2} = \frac{10!}{2! \cdot (10-2)!}</script></p>
			<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_bda24fd51badb56c0be875a5ab18649e.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>C_{10,2} = \frac{3628800}{2 \cdot (8)!}</script></p>
			<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_26961bba15c1cba6a4f0936e6269346c.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>C_{10,2} = \frac{3628800}{2 \cdot (40320)}</script></p>
			<p style="padding-left: 30px;"><span class='MathJax_Preview'><img src='https://www.infoescola.com/wp-content/plugins/latex/cache/tex_269_492ee8000819793f2899b4af44d863c3.gif' style='vertical-align: middle; border: none; ' class='tex' /></span><script type='math/tex'>C_{10,2} = \frac{3628800}{80640} = 45</script></p>
			<p>Com 10 bolinhas distintas colocando duas em cada saquinho, é possível fazer 45 combinações.</p>
		</p>

		Fonte:  InfoEscola



					
				</div>
			</div>
		</div>
		<!-- rodapé -->
		
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="bootstrap/js/bootstrap.min.js"></script>