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
					<img src="imagem-exemplo-por-gustavo-resende.png" alt="Mascote Nome Do Site" border="0" title="Mascote Nome Do Site"/>
				</a>
			</section>
			<section class="informacoes vcard">
				<h1 class="fn org">Nome Do Site</h1>
				<header class="logotipo"/>
					<a href="<?php echo $site_url;?>" title="" class="url fn org">
						<img src="logotipo-nome-do-site.png" alt="Logotipo Nome Do Site" class="logo"/>
					</a>
				</header>
				<section class="conteudo-principal">
					<section class="conteudo-principal sucesso">
						<h2>Valeu! Seu email foi cadastrado com sucesso.</h2>
						<p>Em breve, assim que o site estiver pronto, você vai ficar sabendo em primeira mão :)</p>
						<p class='assinatura'> - Agradecimentos da Equipe 3Birds</p>
					</section>
				</section>
			</section>
		</div>
<?php
	include_once "rodape.php";
?>
