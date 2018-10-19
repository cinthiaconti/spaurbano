<?php
/*
  Template Name: Estetica
 */
?>

<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>

<div id='container'>

	<div class='quadradinhos'><span class='laranja'>&#9632;</span><span class='marrom'>&#9632;</span><span class='bege'>&#9632;</span></div>
	<h2><?php the_title(); ?></h2>

    <div class="interna">

        <ul class="menu2">
            <li id='ifacial' onclick="switchid(this.id,'facial')" class='active'>Est&eacute;tica Facial</li>
            <li id='icorporal' onclick="switchid(this.id,'corporal')">Est&eacute;tica Corporal</li>
            <li id='imedicina' onclick="switchid(this.id,'medicina')">Medicina Est&eacute;tica</li>
        </ul>


        <!-- FACIAL -->
        <div id="facial" class="clear">
            <table border="0" cellspacing="0" cellpadding="0" width="100%" class="caixa">
                <tr>
                    <td width="680" colspan="3" class="none">
                        <p>Em busca do rejuvenescimento, a Contisaude disp&otilde;e de tratamentos faciais com &oacute;timos resultados.</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <ul class='itens'>
                            <li id='ihigieni' onclick="switchid5(this.id,'higieni')" class='active'>Higieniza&ccedil;&atilde;o da Pele</li>
                            <li id='ilifting' onclick="switchid5(this.id,'lifting')">Lifting</li>
                            <li id='idrenFacial' onclick="switchid5(this.id,'drenFacial')">Drenagem Linf&aacute;tica Facial</li>
                        </ul>
                    </td>
                    <td valign="top" class="detalhes">
                        <div id="higieni" style="display: block">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/mascara.jpg" alt="1" width="150" height="100" class="imagem" />
                            <p>
                                &Eacute; um tratamento indicado para remover impurezas da pele e promover a limpeza
			dos poros. Para que ocorra a renova&ccedil;&atilde;o das c&eacute;lulas da pele, ela precisa ser bem tratada. Um dos cuidados b&aacute;sicos &eacute; a Limpeza de Pele.
                            </p>

                        </div>
                        <div id="lifting" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/mascara.jpg" alt="1" width="150" height="100" class="imagem" />
                            <p>
                                &Eacute; um procedimento que devolve elasticidade, flexibilidade à pele e aos
			tecidos. Indicado para o tratamento da flacidez de pele.
                            </p>
                            <p><strong>Como funciona o tratamento?</strong></p>
                            <p>
			O lifting hidrata e nutre a pele em profundidade, al&eacute;m de retardar e amenizar
			os sinais de envelhecimento.
                            </p>

                        </div>
                        <div id="drenFacial" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/mascara.jpg" alt="1" width="150" height="100" class="imagem" />
                            <p>
                                &Eacute; uma massagem manual, bastante relaxante, que visa à elimina&ccedil;&atilde;o de l&iacute;quidos.
			Age tamb&eacute;m com o objetivo de ativar, limpar e regenerar os tecidos. Muito
			utilizada para o tratamento de acne, pr&eacute; e p&oacute;s-operat&oacute;rio de cirurgia
			pl&aacute;stica, auxiliando na redu&ccedil;&atilde;o dos edemas.
                            </p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <!-- CORPORAL -->
        <div id="corporal" style="display: none" class="clear">
            <table border="0" cellspacing="0" cellpadding="0" width="100%" class="caixa">
                <tr>
                    <td width="680" colspan="3" class="none">
                        <p>Inova&ccedil;&atilde;o e resultados garantidos! Venha conhecer nossos procedimentos!<p>

                    </td>
                </tr>
                <tr>

                    <td valign="top">
                        <ul class='itens'>
                            <li id='irussa' onclick="switchid4(this.id,'russa')" class='active'>Estimula&ccedil;&atilde;o Russa</li>
                            <li id='iendermo' onclick="switchid4(this.id,'endermo')">Endermologia</li>
                            <li id='iultrasom' onclick="switchid4(this.id,'ultrasom')">Ultrasom</li>
                        </ul>
                    </td>

                    <td valign="top" class="detalhes">
                        <div id="russa" style="display: block">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/corporal.jpg" alt="1" width="150" height="188" class="imagem" />
                            <p>
			A estimula&ccedil;&atilde;o russa ou Corrente Russa &eacute; um dos tratamentos mais requisitados
			nas cl&iacute;nicas de est&eacute;tica na atualidade. &Eacute; o nome do tratamento de tonifica&ccedil;&atilde;o	muscular realizado atrav&eacute;s de um aparelho de eletroterapia capaz de promover a
			contra&ccedil;&atilde;o muscular, por meio de corrente el&eacute;trica de m&eacute;dia e baixa frequência, despolarizada.
                            </p>
                            <p><strong>Indica&ccedil;&atilde;o:</strong> &eacute; muito utilizada para os tratamentos est&eacute;ticos de flacidez
			muscular e modelagem corporal.</p>
                        </div>

                        <div id="endermo" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/corporal.jpg" alt="1" width="150" height="188" class="imagem" />
                            <p>
			A endermologia &eacute; uma t&eacute;cnica aplicada atrav&eacute;s de um aparelho que realiza uma
			massagem profunda e estimula a circula&ccedil;&atilde;o linf&aacute;tica, destruindo as c&eacute;lulas de
			gordura e dissolve os n&oacute;dulos de celulite.

			Geralmente &eacute; realizada com aux&iacute;lio de um aparelho que executa uma massagem
			melhorando o fluxo sangu&iacute;neo e a nutri&ccedil;&atilde;o celular, possibilitando assim a
			elimina&ccedil;&atilde;o de toxinas.

			Auxilia na redu&ccedil;&atilde;o de medidas e permite tamb&eacute;m uma reabsor&ccedil;&atilde;o do edema entre
			as c&eacute;lulas e libera endorfina, o que faz com que o paciente tenha uma enorme
			sensa&ccedil;&atilde;o de bem-estar.
                            </p>
                        </div>
                        <div id="ultrasom" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/corporal.jpg" alt="1" width="150" height="188" class="imagem" />
                            <p>
			O ultrassom &eacute; mais um recurso no tratamento do fibro edema gel&oacute;ide (celulite).
			As ondas emitidas por este aparelho promovem um aumento na circula&ccedil;&atilde;o local,
			diminui&ccedil;&atilde;o dos n&oacute;dulos do fibro edema gel&oacute;ide e ainda facilita a passagem de
			algumas substâncias atrav&eacute;s da pele.
                            </p>

                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <!-- MEDICINA -->
        <div id="medicina" style="display: none" class="clear">
            <table border="0" cellspacing="0" cellpadding="0" width="100%" class="caixa">
                <tr>
                    <td width="680" colspan="3" class="none">

                        <p>Em busca do rejuvenescimento, a Contisaude disp&otilde;e de tratamentos faciais com &oacute;timos resultados.</p>


                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <ul class='itens'>
                            <li id='ipreenFacial' onclick="switchid6(this.id,'preenFacial')" class='active'>Preenchimento Facial</li>
                            <li id='ipreenLabios' onclick="switchid6(this.id,'preenLabios')">Preenchimento de L&aacute;bios</li>
                            <li id='ibotox' onclick="switchid6(this.id,'botox')">Botox®</li>

                            <li id='irejuv' onclick="switchid6(this.id,'rejuv')">Rejuvenescimento Facial</li>
                            <li id='ilaser' onclick="switchid6(this.id,'laser')">Laser</li>
                            <li id='iintradermo' onclick="switchid6(this.id,'intradermo')">Intradermoterapia</li>
                            <li id='ihidroli' onclick="switchid6(this.id,'hidroli')">Hidrolipoclasia Ultrasonica</li>
                            <li id='icarboxi' onclick="switchid6(this.id,'carboxi')">Carboxiterapia</li>
                            <li id='ilipossomas' onclick="switchid6(this.id,'lipossomas')">Lipossomas de Girassol</li>

                            <li id='isubcisao' onclick="switchid6(this.id,'subcisao')">Subcisão</li>
                            <li id='ibioplastia' onclick="switchid6(this.id,'bioplastia')">Bioplastia</li>
                            <li id='ipeelings' onclick="switchid6(this.id,'peelings')">Peelings</li>
                            <li id='ieletroporacao' onclick="switchid6(this.id,'eletroporacao')">Eletropora&ccedil;&atilde;o</li>
                        </ul>
                    </td>
                    <td valign="top" class="detalhes">

                        <div id="preenFacial" style="display: block">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <p>&Eacute; uma t&eacute;cnica de rejuvenescimento em que substâncias orgânicas ou inorgânicas são injetadas na pele para preencher os sulcos ou aumentar partes do rosto e l&aacute;bios. A aplica&ccedil;&atilde;o &eacute; simples e r&aacute;pida, normalmente feita atrav&eacute;s de microcânulas, varia de 15 a 40 minutos. A recupera&ccedil;&atilde;o &eacute; imediata.</p>
                        </div>
                        <div id="preenLabios" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <p>Os procedimentos de preenchimento labial são feitos no pr&oacute;prio consult&oacute;rio. H&aacute; substâncias definitivas e alternativas tempor&aacute;rias - que, depois de cerca de um ano, são reabsorvidas pelo organismo.</p>
                        </div>
                        <div id="botox" style="display: none">

                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <p>O BOTOX ® &eacute; usado para corrigir as rugas de expressão. As rugas da testa, o sulco entre as sobrancelhas e os famosos "p&eacute;s de galinha" podem ser beneficiados com o m&eacute;todo.</p>
                        </div>
                        <div id="rejuv" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>
                        </div>
                        <div id="laser" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>

                        </div>
                        <div id="intradermo" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <p>A Intradermoterapia &eacute;  um m&eacute;todo que permite a inje&ccedil;&atilde;o de medicamento diretamente na &aacute;rea afetada, sendo recomend&aacute;vel para o combate à celulite e à gordura localizada.</p>
                        </div>
                        <div id="hidroli" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <p>A t&eacute;cnica consiste em injetar na gordura localizada uma solu&ccedil;&atilde;o salina (soro) e posteriormente aplicar o ultrasom neste local.</p>
                        </div>

                        <div id="carboxi" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <p>A carboxiterapia consiste na aplica&ccedil;&atilde;o de g&aacute;s carbônico (CO2)  medicinal, atrav&eacute;s de infusão nos tecidos com pressão controlada. Tem ganhado muito espaço na medicina est&eacute;tica devidos aos bons resultados obtidos no tratamento de celulite, estrias e flacidez.</p>
                        </div>
                        <div id="lipossomas" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <p>Mobilizam e destroem a gordura com as suas propriedades lipotr&oacute;picas (mobilizadora de gordura) e ações lipol&iacute;ticas (destruidora de gordura). Al&eacute;m de conseguir exterminar a gordurinha localizada,  melhoram os n&iacute;veis de colesterol e triglic&eacute;rides, e auxiliam na perda de peso. Aplica&ccedil;&atilde;o subcutânea (mesoterapia ou intradermoterapia) de sete em sete dias, com o m&iacute;nimo de dez sessões, na região a tratar.</p>
                        </div>
                        <div id="subcisao" style="display: none">

                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <p>Existem v&aacute;rios graus de celulite, mas o que fazer em um est&aacute;gio muito avançado, quando o funcionamento da derme est&aacute; comprometido? Nessa fase, o aspecto de casca de laranja ou de furinhos, causado pelo endurecimento das fibras que puxam a pele para dentro. &Eacute; preciso a associa&ccedil;&atilde;o de v&aacute;rios tratamentos e o resultado &eacute; lento. Uma solu&ccedil;&atilde;o eficaz para corrigir essas depressões &eacute; um procedimento cir&uacute;rgico realizado com anestesia local, em que uma agulha especial rompe as fibras e solta a pele. O procedimento não deixa cicatrizes, somente pequenos hematomas que desaparecem entre 2 e 3 semanas.</p>
                        </div>
                        <div id="bioplastia" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <p>A Bioplastia &eacute; uma t&eacute;cnica sem cortes, que pode ser aplicada no rosto e no corpo.</p>
                        </div>
                        <div id="peelings" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <p>Os peelings são procedimentos m&eacute;dicos, pois em mãos in&aacute;beis podem trazer resultados desastrosos. Nestes procedimentos, podem ser utilizados diversos tipos de &aacute;cidos de acordo com o resultado que se deseja obter e com a profundidade que se deseja atingir.</p>

                        </div>
                        <div id="eletroporacao" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/girassol.jpg" alt="1" width="150" height="111" class="imagem" />
                            <p>A electropora&ccedil;&atilde;o consiste no uso de correntes de m&eacute;dia frequência para a
                                abertura de microporos transit&oacute;rios na camada externa da pele e na membrana
                                celular, o que facilita a penetra&ccedil;&atilde;o dos activos do cosm&eacute;tico utilizado,
                                aumentando a efic&aacute;cia do tratamento. &Eacute; uma alternativa muito eficaz e indolor
                                à mesoterapia com agulhas.</p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </div>

</div>

<? get_footer(); ?>