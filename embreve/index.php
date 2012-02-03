<?php 
/* 
    Copyright 3Birds Soluções Web - 2012	

    This file is part of 'Template Em Breve'.

    'Template Em Breve' is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Foobar is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with 'Template Em Breve'.  If not, see <http://www.gnu.org/licenses/>.
*/
	include_once "cabecalho.php";
?>
		<div class='pagina'>
			<section class='mascote'>
				<a href="<?php echo $site_url;?>" title="Página inicial">
					<img src="imagem-exemplo-por-gustavo-resende.png" alt="Mascote Nome Do Site" title="Nome Do Site"/>
				</a>
			</section>
			<section class="informacoes vcard">
				<h1 class="fn org">Nome Do Site</h1>
				<header class="logotipo"/>
					<a href="/" title="" class="url fn org">
						<img src="logotipo-nome-do-site.png" alt="Logotipo Nome Do Site" class="logo"/>
					</a>
				</header>
				<section class="conteudo-principal">
					<h2>Em breve nosso site <strong>Nome Do Site</strong> estará 100% online.</h2>
					<p>Deixe seu email logo abaixo para ficar sabendo assim que a página estiver no ar :)</p>
					<form action="newsletter.php" method="post" class="newsletter">
						<input type="text" value="meuemail@dominio.com.br" name="email" class="email"/>
						<input type="submit" value="Avise-me" name="aviseme" class="aviseme"/>
					</form>
					<p class='aviso'/>
				</section>
				<section class="mail">
					<h3>Você também pode entrar em contato com a gente pelo email:</h3>
					<span class='email'>email[a]dominio.com.br</span>
				</section>
			</section>
		</div>
<?php
	include_once "rodape.php";
?>
