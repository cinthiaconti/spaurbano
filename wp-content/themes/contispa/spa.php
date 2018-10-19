<?php
/*
  Template Name: Spa Urbano
 */
?>

<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>




	<div class='quadradinhos'><span class='laranja'>&#9632;</span><span class='marrom'>&#9632;</span><span class='bege'>&#9632;</span></div>
	<h2><?php the_title(); ?></h2>

    <div id='container'>
    
    <div class="interna">
        
        <ul class="menu2">
            <li id='imassagens' onclick="switchidSpa(this.id,'massagens');" class='active'>Massagens</li>
            <li id='ioriental' onclick="switchidSpa(this.id,'oriental')">Terapia Oriental</li>
            <li id='iofuro' onclick="switchidSpa(this.id,'ofuro')">Banho de Ofur&ocirc;</li>
            <li id='idayspa' onclick="switchidSpa(this.id,'dayspa')">Day Spa</li>
        </ul>

        <!-- MASSAGENS -->
        <div id="massagens" class="clear">
            <table border="0" cellspacing="0" cellpadding="0" width="100%" class="caixa">
                <tr>
                    <td width="680" colspan="3" class="none">
                        <p>
                            Proporcionando aos clientes um profundo relaxamento, oferecemos varios tipos de massagens:
                        </p>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <ul class='itens'>
                            <li id='iclassica' onclick="switchid2(this.id,'classica')" class='active'>Cl&aacute;ssica</li>
                        <li id='ishiatsu' onclick="switchid2(this.id,'shiatsu')">Shiatsu</li>
                            <li id='ibamboo' onclick="switchid2(this.id,'bamboo')">Bamboo Terapia</li>
                            <li id='igestantes' onclick="switchid2(this.id,'gestantes')">Gestantes e P&oacute;s-Parto</li>
                            <li id='iayur' onclick="switchid2(this.id,'ayur')">Ayurv&eacute;dica</li>
                            <li id='idrenagem' onclick="switchid2(this.id,'drenagem')">Drenagem Linf&aacute;tica</li>
                            <li id='iturbinada' onclick="switchid2(this.id,'turbinada')">Turbinada</li>
                            <li id='iesfoliante' onclick="switchid2(this.id,'esfoliante')">Esfoliante</li>

                            <li id='ihidratante' onclick="switchid2(this.id,'hidratante')">Hidratante</li>
                            <li id='ireflexo' onclick="switchid2(this.id,'reflexo')">Reflexologia Podal</li>
                        </ul>
                    </td>
                    <td valign="top" class="detalhes">
                        <div id="classica" style="display: block">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/massagem.jpg" alt="1" width="172" height="100" class="imagem" />
                            <p>A massagem cl&aacute;ssica, desenvolvida no ocidente, promove o relaxamento das tens&otilde;es musculares, atenuando dores localizadas.
			Pode ser feita com ou sem &oacute;leo, com o paciente em trajes &iacute;ntimos ou de banho.</p>

                            <p><strong>Indica&ccedil;&otilde;es:</strong> Altera&ccedil;&otilde;es de tecidos conjuntivos, altera&ccedil;&otilde;es musculares (tens&atilde;o, perfus&atilde;o, metabolismo), altera&ccedil;&otilde;es do retorno venoso e
			linf&aacute;tico perif&eacute;rico (edemas), altera&ccedil;&otilde;es neurol&oacute;gicas de origem perif&eacute;rica (compress&otilde;es, paralisias e paresias transit&oacute;rias).</p>
                            <p><strong>Benef&iacute;cios:</strong> Relaxamento muscular, aumento da circula&ccedil;&atilde;o sang&uuml;&iacute;nea, al&iacute;vio da dor, preven&ccedil;&atilde;o de deformidades, al&iacute;vio do estresse.</p>
                        </div>
                        <div id="shiatsu" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/massagem.jpg" alt="1" width="172" height="100" class="imagem" />
                            <p>O SHIATSU (shi = dedo - atsu = press&atilde;o) &eacute; uma t&eacute;cnica de massagem oriental para manter o equil&iacute;brio entre o corpo e a mente.
			A t&eacute;cnica consiste numa compress&atilde;o de v&aacute;rios pontos dos meridianos (caminhos de energia que percorrem o corpo) utilizando as pontas dos dedos ou as m&atilde;os.
			Os toques estimulam ou cedam a energia acumulada, melhorando o funcionamento dos &oacute;rg&atilde;os de acordo com a necessidade de cada um.</p>

                            <p><strong>Indica&ccedil;&otilde;es:</strong> Dores nas costas, dores de cabe&ccedil;a, enxaquecas, tens&atilde;o cr&ocirc;nica no corpo, ins&ocirc;nia, irregularidades nos ciclos menstruais,
			vitalidade reduzida, depress&atilde;o, ansiedade.O paciente que vai receber o Shiatsu pode estar trajando roupas confort&aacute;veis de algod&atilde;o, tecido n&atilde;o sint&eacute;tico,
			para facilitar o fluxo energ&eacute;tico.</p>
                        </div>
                        <div id="bamboo" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/massagem.jpg" alt="1" width="172" height="100" class="imagem" />
                            <p>Bambuterapia massagem realizada com a ajuda de hastes de bambu de diferentes espessuras e tamanhos, &oacute;leos relaxantes e as m&atilde;os
			de um massoterapeuta.Esse conjunto de a&ccedil;&otilde;es estimula o sistema linf&aacute;tico, aumentando a circula&ccedil;&atilde;o e, assim, elimina as toxinas.</p>
                            <p><strong>Indica&ccedil;&otilde;es:</strong> Celulites de graus um e dois e redu&ccedil;&atilde;o das de est&aacute;gios tr&ecirc;s e quatro.</p>

                        </div>
                        <div id="gestantes" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/massagem.jpg" alt="1" width="172" height="100" class="imagem" />
                            <p>
			massagem para gestantes &eacute; uma massagem diferenciada, realizada com cuidados
			especiais e toques suaves, enfatizando os problemas da gestante,
			Indica&ccedil;&atilde;o: al&iacute;vio das dores lombares e diminui&ccedil;&atilde;o do incha&ccedil;o nas pernas,
			auxilia o retorno venoso estimulando a circula&ccedil;&atilde;o sang&uuml;&iacute;nea e linf&aacute;tica.
                            </p>
                        </div>
                        <div id="ayur" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/massagem.jpg" alt="1" width="172" height="100" class="imagem" />

                            <p>
			A massagem ayurv&eacute;dica &eacute; uma vigorosa massagem que estimula os m&uacute;sculos e a
			circula&ccedil;&atilde;o, liberando as toxinas presas aos m&uacute;sculos e tecidos.

			Atrav&eacute;s de toques profundos com as m&atilde;os, cotovelos e p&eacute;s, a massagem
			Ayurv&eacute;dica propicia um realinhamento postural, al&iacute;vio de tens&otilde;es (por vezes
			cr&ocirc;nica) no corpo f&iacute;sico, fortalece o sistema imonol&oacute;gico, e tem efeitos
			anti-stress e anti-depressivos.

			Contando com alguns alongamentos, proporciona uma maior flexibilidade do corpo
			e mobilidade nas articula&ccedil;&otilde;es, possibilitando o circuito livre da energia vital.
                            </p>
                        </div>
                        <div id="drenagem" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/massagem.jpg" alt="1" width="172" height="100" class="imagem" />
                            <p>
			A Massagem de Drenagem Linf&aacute;tica &eacute; feita com press&otilde;es leves: c&iacute;rculos com os dedos, press&atilde;o em bracelete e movimentos combinados.
			 Comp&otilde;em-se de dois processos: evacua&ccedil;&atilde;o e capta&ccedil;&atilde;o, que visam transportar e remover o l&iacute;q&uuml;ido causador do edema de volta &agrave; circula&ccedil;&atilde;o sang&uuml;&iacute;nea.
			 O massoterapeuta usa &oacute;leo para facilitar os movimentos manuais, portanto &eacute; necess&aacute;rio o desnudamento da &aacute;rea tratada.
                            </p>
                            <p><strong>Indica&ccedil;&otilde;es:</strong> Celulite, reten&ccedil;&atilde;o h&iacute;drica, acne, etc.</p>

                        </div>
                        <div id="turbinada" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/massagem.jpg" alt="1" width="172" height="100" class="imagem" />
                            <p>Massagem Turbinada &eacute; baseada em princ&iacute;pios da terapia chinesa e em pontos que auxiliem a modelagem corporal.
			Realizada em todo o corpo usando movimentos intensos, r&aacute;pidos, repetitivos, e utilizando rolos de suc&ccedil;&atilde;o e amassamento,
			al&eacute;m de cremes e g&eacute;is que ativam a circula&ccedil;&atilde;o, trabalham a gordura localizada e eliminam as toxinas.</p>
                            <p><strong>Indica&ccedil;&otilde;es:</strong> Redu&ccedil;&atilde;o das medidas, gordura localizada, culotes</p>
                        </div>
                        <div id="esfoliante" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/massagem.jpg" alt="1" width="172" height="100" class="imagem" />
                            <p>Tratamento que promove a remo&ccedil;&atilde;o da camada envelhecida e desidratada da pele corporal,
			melhorando a oxigena&ccedil;&atilde;o, limpando profundamente e dando um aspecto rejuvenescido, macio ao toque e sem manchas.</p>

                        </div>
                        <div id="hidratante" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/massagem.jpg" alt="1" width="172" height="100" class="imagem" />
                            <p>
			Tratamento relaxante para todo o corpo, feito com cremes hidratantes. Permite
			uma hidrata&ccedil;&atilde;o lenta e profunda da pele. &eacute; indispens&aacute;vel em caso de exposi&ccedil;&atilde;o
			prolongada aos efeitos do sol e da &aacute;gua.
                            </p>
                        </div>
                        <div id="reflexo" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/massagem.jpg" alt="1" width="172" height="100" class="imagem" />
                            <p>

			A Reflexologia Podal parte do principio de que todos os org&atilde;os do nosso corpo
			est&atilde;o conectados com os nossos p&eacute;s, isto &eacute;, nos p&eacute;s possuimos pontos de
			liga&ccedil;&atilde;o com cada org&atilde;o do nosso corpo; e que quando massageados possibilitam a
			cura de muitos males. Ao aplicar a massagem nestas termina&ccedil;&otilde;es nervosas
			localizadas nos p&eacute;s, ocorrer&aacute; um estimulo directamente no org&atilde;o relacionado
			com o ponto tocado. A reflexologia podal tem obtido resultados satisfat&oacute;rios
			no tratamento de doen&ccedil;as como enxaqueca, asma, problemas do aparelho
			digestivo, insonia, tontura, dores musculares, prolemas de coluna, etc. Nossos
			av&oacute;s costumavam fazer o famoso escalda p&eacute;s para tirar dores dos p&eacute;s e aliviar
			outros males do corpo, e por incrivel que pare&ccedil;a o escalda p&eacute;s &eacute; um santo
			rem&eacute;dio; especialmente quando conjugado a ele se utilizar sal grosso para
			aliviar as tens&otilde;es nervosas, arnica para tirar dores das articula&ccedil;&otilde;es,
			camomila para acalmar, aroma citricos para energizar a mente, etc.
                            </p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <!-- OFURO -->
        <div id="ofuro" style="display: none" class="clear">
            <table border="0" cellspacing="0" cellpadding="0" width="100%" class="caixa">
                <tr>
                    <td width="680" colspan="3" class="none">
                        <p>
                            Al&eacute;m de incr&iacute;veis efeitos terap&ecirc;uticos, o Banho de Ofur&ocirc; proporciona uma deliciosa sensa&ccedil;&atilde;o de prazer e conforto. Nossos banhos s&atilde;o:
                        </p>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <ul class='itens'>
                            <li id='ivinho' onclick="switchid3(this.id,'vinho')" class='active'>Vinhoterapia</li>
                            <li id='ifloral' onclick="switchid3(this.id,'floral')">Banho Floral</li>

                            <li id='iervas' onclick="switchid3(this.id,'ervas')">Banho de Ervas</li>
                            <li id='icoco' onclick="switchid3(this.id,'coco')">Banho de &aacute;gua de coco</li>
                            <li id='isaque' onclick="switchid3(this.id,'saque')">Banho de Saqu&ecirc;</li>
                            <li id='ienergiza' onclick="switchid3(this.id,'energiza')">Banho Energizante</li>
                            <li id='ideuses' onclick="switchid3(this.id,'deuses')">Banho dos Deuses</li>
                            <li id='ifrutas' onclick="switchid3(this.id,'frutas')">Banho de Frutas</li>

                            <li id='iguarana' onclick="switchid3(this.id,'guarana')">Banho de P&oacute; de Guaran&aacute;</li>
                        </ul>
                    </td>
                    <td valign="top" class="detalhes">
                        <div id="vinho" style="display: block">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/ofuro.jpg" alt="1" width="150" height="100" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>
                        </div>
                        <div id="floral" style="display: none">

                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/ofuro.jpg" alt="1" width="150" height="100" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>
                        </div>
                        <div id="ervas" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/ofuro.jpg" alt="1" width="150" height="100" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>
                        </div>
                        <div id="coco" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/ofuro.jpg" alt="1" width="150" height="100" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>

                        </div>
                        <div id="saque" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/ofuro.jpg" alt="1" width="150" height="100" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>
                        </div>
                        <div id="energiza" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/ofuro.jpg" alt="1" width="150" height="100" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>
                        </div>

                        <div id="deuses" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/ofuro.jpg" alt="1" width="150" height="100" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>
                        </div>
                        <div id="frutas" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/ofuro.jpg" alt="1" width="150" height="100" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>
                        </div>
                        <div id="guarana" style="display: none">

                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/ofuro.jpg" alt="1" width="150" height="100" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <!-- ORIENTAL -->
        <div id="oriental" style="display: none" class="clear">
            <table border="0" cellspacing="0" cellpadding="0" width="100%" class="caixa">
                <tr>
                    <td width="680" colspan="3" class="none">
                        <p>
                            Em busca do rejuvenescimento, a Contisaude disp&otilde;e de tratamentos faciais com &oacute;timos resultados.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <ul class='itens'>
                            <li id='iseitai' onclick="switchid7(this.id,'seitai')" class='active'>Seitai</li>

                            <li id='iauriculo' onclick="switchid7(this.id,'auriculo')">Auriculoterapia</li>
                            <li id='imoxa' onclick="switchid7(this.id,'moxa')">Moxabust&atilde;o</li>
                        </ul>
                    </td>
                    <td valign="top" class="detalhes">
                        <div id="seitai" style="display: block">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/auriculoterapia.jpg" alt="1" width="110" height="110" class="imagem" />
                            <p>Uma arte milenar que atrav&eacute;s de t&eacute;cnicas de press&atilde;o em pontos espec&iacute;ficos ajusta a energia que circula pelo seu corpo, harmonizando todos os &oacute;rg&atilde;os,TRATANDO E PREVENINDO DORES, trazendo bem estar, qualidade de vida e sa&uacute;de! </p>

                        </div>
                        <div id="auriculo" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/auriculoterapia.jpg" alt="1" width="110" height="110" class="imagem" />
                            <p>&Eacute; uma t&eacute;cnica em que se usa o pavilh&atilde;o auricular para efetuar est&iacute;mulos aproveitando o reflexo que a aur&iacute;cula exerce sobre 			o Sistema Nervoso Central. A auriculoterapia estimula pontos, situados na orelha, que correspondem a todos os &oacute;rg&atilde;os e fun&ccedil;&otilde;es do corpo.  Ao se efetuar a estimula&ccedil;&atilde;o desses pontos, o c&eacute;rebro recebe um impulso que desencadeia uma s&eacute;rie de fen&ocirc;menos f&iacute;sicos, relacionados com a &aacute;rea do corpo, produzindo equil&iacute;brio. Esta t&eacute;cnica possibilita tamb&eacute;m a desintoxica&ccedil;&atilde;o causadas por drogas, &aacute;lcool e nicotina.</p>

                        </div>
                        <div id="moxa" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/auriculoterapia.jpg" alt="1" width="110" height="110" class="imagem" />
                            <p>&eacute; utilizada para aumentar a energia de um ponto ou meridiano, queimando pr&oacute;ximo ao ponto a erva medicinal Artemisia no formato de farelo ou bast&atilde;o na aplica&ccedil;&atilde;o.</p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <!-- DAYSPA -->
        <div id="dayspa" style="display: none" class="clear">

            <table border="0" cellspacing="0" cellpadding="0" width="100%" class="caixa">
                <tr>
                    <td width="680" colspan="3" class="none">
                        <p>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <ul class='itens'>
                            <li id='iday1' onclick="switchid8(this.id,'day1')" class='active'>Day Spa</li>

                        </ul>
                    </td>
                    <td valign="top" class="detalhes">
                        <div id="day1" style="display: block">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/dayspa.jpg" alt="1" width="150" height="100" class="imagem" />
                            <span style="color: orange; font-size: 14px; font-weight: bold">Em Constru&ccedil;&atilde;o.</span>
                        </div>
                        <div id="day2" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/dayspa.jpg" alt="1" width="150" height="100" class="imagem" />

                        </div>
                        <div id="day3" style="display: none">
                            <img src="<?php bloginfo('template_directory'); ?>/img/novas/dayspa.jpg" alt="1" width="150" height="100" class="imagem" />
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<? get_footer(); ?>