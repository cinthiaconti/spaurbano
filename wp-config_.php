<?php

/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configuraçções de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

/* Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem */
/* O nome do banco de dados do WordPress */
define('DB_NAME', 'contisaude');


/* Usuário do banco de dados MySQL */
define('DB_USER', 'root');


/* Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/* nome do host do MySQL */
define('DB_HOST', 'localhost');



/* Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/* O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/*
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/DS^w0@1;#u4|,87uG:*wnWPHy:&>P~Q(R#-UpU@t$f<duC>SZG3VG8_Z-),S~i|');
define('SECURE_AUTH_KEY',  '2A_9u6.Fz,f.|e&9V;Z^S2Ap=7SM|F^:`&tumP>m3E9#-KZ=mPp(x=s_|c$xMJ`d');
define('LOGGED_IN_KEY',    'Y:J_}$(ea+k[0ovzR!U`r#DCbRKX_|vk,%E1v.TPvV%))<NvI9yB0D&Ln K*?4G^');
define('NONCE_KEY',        'l~y$$%c-6guA{,qlSh-U1zmg:OI#v)xlhDXQ|*:#T+.4Z@6GdIfCB|!n.E@]Pnqz');
define('AUTH_SALT',        'NTVc.m}X~_G&[cq`*^ S#!<ZCw>ydg#(GgVz]-@1pU|* nOQn*uH!rCa=%]AHL?O');
define('SECURE_AUTH_SALT', 'T$+vTZSj^AJ/-f-mXeOhBy6V-0:ZiUeOS3F8773y40$7+b-UG?`HXr<GXN#zt}X]');
define('LOGGED_IN_SALT',   ' oAy0yT{dwCb{[|%zF:yxZS}{hh)?l[F;@;W-hlc&1.[KI{+EA]ZRK)g6Yiz5)>-');
define('NONCE_SALT',       'inb|R[gxX|a #plLuvH+N0061J$Lk?7HU*E>4{+_{x+R9>0[H:+~oy9<Y]DYs,S=');
/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente a
 * língua escolhida deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define ('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seuas ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
?>
