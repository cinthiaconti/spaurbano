��    r      �  �   <      �	  "   �	  �  �	  -   z  5   �  C   �  ?   "  8   b  9   �  �   �     �  	   �  	   �  	   �  	   �  E   �               &  4  /     d     j     v  0  �  o   �     (     ?     X     s     �     �  8   �  ;   �  
        (  V   A     �     �     �  4   �  P   �     K  	   _     i  R   {  H   �  �     S   �  R  3  /   �  :   �     �       S        l  #   �     �  !   �  2   �  7   "  &   Z  "   �  �  �  �   {     �  1        I     U     s     �     �     �  
   �  2   �     �     �  .   q  4  �  �  �  x   q   E  �   �  0$  �  �%  O  �(  L   �,  ?   :-  "   z-  6   �-  �   �-  5   c.     �.     �.     �.  (   �.  !   /     #/     8/     N/     V/     g/  ;   �/     �/  0   �/     0  #   0     80     E0     ]0  -   y0     �0     �0     �0     �0     1  i  $1  #   �3  �  �3  .   B5  /   q5  ;   �5  9   �5  4   6  7   L6  �   �6  	   D7  
   N7  
   Y7  
   d7  
   o7  9   z7  	   �7  	   �7  	   �7  D  �7     9     9     19  _  G9  u   �:      ;  "   >;  (   a;     �;     �;     �;  =   �;  <   <  
   @<  $   K<  T   p<     �<     �<     �<  .   =  Q   1=     �=     �=     �=  S   �=  ?   >  �   M>  [   ?  F  c?  ;   �@  I   �@     0A     JA  R   fA      �A  "   �A  #   �A     !B  .   ?B  N   nB  )   �B     �B  �  C  |   �D     GE  -   `E  
   �E     �E     �E     �E  	   �E     �E  
   �E  :   F  
   CF  �   NF  1   �F  2  G  �  8H  �   �J    UK  V  jN  �  �O  X  �R  P   �V  A   6W     xW  5   �W  �   �W  4   jX     �X     �X     �X  *   �X  %   Y     (Y     CY  
   YY     dY     vY  0   �Y     �Y  *   �Y  
   Z  (   Z  
   BZ     MZ     cZ  *   �Z     �Z     �Z     �Z      [     #[                   A   D   N   1   C                 7      X   <   '                                         )   d   T                e   G   c                  I   (       +   &      /   	   M                  h   k   V                     F       "   0   l   9      b   J   p   i   \   S   ]       Y   R   m       -   >           4   @   K   6      o   g   n       W           f   a      q       2   5   3   B   :   r   ,           ;   =      [       8      
   *      $   P   Z      #   ?      .   `   L   ^              E                   _   Q                    %   U   j   !          O   H     %1$s has an option line with %2$s "%s" attempts to provide some measure against the deletion of current "rss_hash" options by not deleting any "rss_hash" rows with an option_id newer than (the last row id - %d ). Because plugins and themes also add rows to the wp_options table, depending on your recent installation history, this may remove <strong>ALL</strong> of the "rss_hash" options, both older AND <strong>CURRENT</strong> ones, no questions asked. "all" means BOTH "plugin" AND "rss_" options. %s (the "rss_" Options query) did not return an array %s (the "rss_" non-timestamp Options query) did not return an array %s (the "rss_" timestamp Options query) did not return an array %s (the Orphaned Options query) did not return an array. %s (the review information query) did not return an array *Note* spaces have been added after every 10th character of the option_name and every 20th character of the option_value to preserve page layout.<br />Not all options have values and/or descriptions. 10 pairs 100 pairs 125 pairs 150 pairs 175 pairs 2 strings separated by %s (in uppercase, enclosed with asterisks) eg. 25 pairs 50 pairs 75 pairs A Warning message, means that something has happened and options that should not be deleted might be available for deletion, or options that could be safely deleted might not be available for deletion. In any case, if you see a Warning message, use extra-special care and thought before deleting any options. ALERT Age Unknown Alternate Syntax Although removing current "rss_hash" rows should not "break" your WordPress blog (they should be entered again next time the feed is cached), please <strong>BACKUP</strong> your database <strong>BEFORE</strong> doing this.<br />After using "%1$s", you should "%2$s" to clean the wp_options table further. Carefully Review information on the "View Selected Options Information" page <i>before</i> deleting the option. Could not open file %s Could not open folder %s Could not open folder/file Database Error Delete ALL 'rss' Options Deselect all Don't show the Alternate Syntax Warnings for this "Find" Don't show the Known WordPress Core options for this "Find" Empty Name Enter Search String here Every "rss_hash" option in the wp_options table will be shown, including current ones. File System Error Find Find Orphaned Options For comments / suggestions, please visit the blog %s For more information, the latest version, etc. please visit the plugin's page %s Further Information Google it High Memory usage If you have any questions, problems, comments, or suggestions, please let me know. If you would like to provide a translation, please leave a comment at %s It is <strong>highly recommended</strong> that you Limit the "Find" to only a selected number of the most recent "rss_hash" options Instead and repeat the process until the number becomes manageable. It is strongly suggested that you BACKUP your database before removing any options. Listed Options are those that are found in the wp_options table but are not referenced by "get_option" or "get_settings" by any of the PHP files located within your blog directory. If you have deactivated plugins and/or non-used themes in your directory, the associated options will not be considered orphaned until the files are removed. Look at the file names in any Warning messages. Look at the text in any Alternate Syntax Warning messages. Low Memory usage Moderate Memory usage Most likely there are an extreme number of "rss_hash" rows in the wp_options table. No Orphaned Options were found No Orphaned Options where selected. No Search string was entered. No files were found containing %s No, Don't remove them, return to the first screen. Note: all spaces are removed, search is case sensitive. Only WordPress Core Options were found Option with No Name with the value Perhaps some plugins/themes add options that have no name? Or the name becomes removed from the row somehow? Because this plugin finds options based on their names, these "no name" options will not be included in the list, and thus can not be selected for review or deletion. If the row has no option_name but has an option_value, it will be shown to help you identify the source of the problem. At present, if you wish to remove such rows you must do so by other means. Please review this information very carefully and only remove Options that you know for certain have been orphaned or deprecated. Possibly Orphaned Options Questions? For support, please visit the forum %s RSS Options Removed %d "rss_hash" Options Removed Options Return to the %s Search Search files by: Select all Some information may be available at your %s page. Submit The "rss_" options are obsolete as of WordPress version 2.8 All are selectable and it should be safe to remove any that remain. The Options table currently has %s found rows. The following Options appear to be orphans. When shown, non-selectable Options are known to have been created from files present during upgrade or backup, or are legitimate options that do not "fit" the search for get_option or get_settings. If you wish to remove them by other means, do so at your own risk. The following contains "RSS" Options added to the wp_options table from the blog's dashboard page and other files that parse RSS feeds and cache the results.<br />In each pair, the upper option is the cached feed and the lower is the option's timestamp.<br />Those listed may include options that are <strong>Currently Active</strong>.<br />When shown, "rss_" option pairs with dates newer or the same as the date of 14'th newest "rss_" option pair (the ones that are more likely to be current) have no checkbox but begin with "-" and end with "<em># %1$s</em>" in italics.<br />The older "rss_" options can be selected and end with "<strong># %2$s</strong>" in bold. The following options were not paired correctly. Be certain to check their information carefully before you remove them. The lower the number of "rss_hash" option pairs you "Find", the less likely it is that you will experience problems with memory during the "Find". However, depending on the number of feed rows that are current, the "Find" may not include any older ones that can be deleted.<br />The higher the number of "rss_hash" pairs you "Find", the more likely it is that older ones that can be deleted will be included. But there is a greater chance of having memory problems during the "Find".<br />It is suggested that you start off with a lower "Find", and increase the number gradually, if you wish to, on subsequent "Finds". If you get a memory error, use a lower number.<br />Again said, it is recommended that you scan the results on the review page of anything you select prior to it's deletion, to ensure that you really want to remove it. The plugin failed to open a folder/file. This is most often because of inadequate permissions settings. i.e. The "read" permission setting. They do not need to be "world" readable, but scripts must be able to. Options that are in files that can not be read may appear in the "orphaned options" list when in fact they are not orphaned. In many cases, knowing the folder/file should help in identification of options that are not really orphaned. The plugin queries the wp_options table. It expects an array with at least 1 row. This error message may be the result of fact. i.e. There actually are no wp_option rows with autoload=yes (next to impossible), or there actually are no "rss_hash" rows. Or it could be an actual database problem (eg. connection failure, memory failure). If you get this error message you should look for a WPDB error message as well for more detailed information. An error with either the autoload=yes query (core/plugin/theme options), or the autoload!=yes query (rss_hash options) means that none of the corresponding rows will be available for review or deletion until the database problem is resolved. The plugin searches PHP files for instances of get_option('option_name as a string') to match against values found in the wp_options table. Some files however use syntax such as get_option(&#36;variable) or get_option('prefix_' . &#36;variable). These option names will not match those found in the wp_option table, and they may be present in the list of Orphaned Options when in fact they are not really orphaned. In many cases, knowing the file, and the prefix if used, should help in identification of options that are not really orphaned.<br />*Note, if you get this warning with a plugin file (from the <u><i>WordPress.com Plugin Directory only</i></u>, please) and you know it's not a potential problem (eg. some WordPress core files, the WordPress.com Stats plugin, and this plugin have alternate syntax in them BUT <u><i>there are no options associated with them listed</i></u>), please visit the blog and leave a comment something like "the whatever plugin has alternate syntax but is OK" and I can add it to the "ignore" list for future version releases if it is safe to do so. Many Thanks. %s There is an autoload not equal to yes Option with No Name with the value: %s There is an autoload yes Option with No Name with the value: %s There were No "rss_" Options found These are the error messages as returned by WordPress. To avoid excessive memory use, using "%s" does not attempt to list all of the "rss_hash" options, nor will you be able to review the contents. To double-check options in the Orphaned Options list: To look for option_name(s): Tools Translation Acknowledgements Try a Google search for the option_name. View Selected Options Information WANTED - Bug Reports WANTED - Translations WARNING Warning Messages WordPress database error Yes, Remove ALL of these options from the wp_options table. all_or_portion_of_option_name check the age of the corresponding "_ts" option. days old entering either a single string eg. first screen has an option line with known WordPress Core option or a maximum of 3 strings separated by %s eg. prefix %s other_words prefix%1$sword%2$sother_word query did not return an array registration required to post was found in: Project-Id-Version: Clean Options 1.3.1
Report-Msgid-Bugs-To: 
POT-Creation-Date: 2010-03-01 22:21+0000
PO-Revision-Date: 2010-01-16 02:29+0000
Last-Translator: Vladimir uranic<vdjuranic@gmail.com>
Language-Team: Vladimir uranic<vdjuranic@gmail.com>
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Poedit-Language: Hrvatski
X-Poedit-Country: Hrvatska
X-Poedit-SourceCharset: utf-8
Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);
X-Poedit-KeywordsList: _e;__
X-Poedit-Basepath: .
X-Poedit-SearchPath-0: .
  %1$s ima liniju opcije unutar %2$s "%s" pokušava osigurati mjere protiv brisanja trenutnih "rss_hash" opcija tako što ne briše niti jedan "rss_hash" red sa option_id novijim od (zadnji red id - %d). Zbog toga što dodaci i teme takoder dodaju redove u wp_options tablicu, ovisno o povjesti Vaše instalacije, ovo može ukoniti <strong>SVE</strong> "rss_hash" opcije, takoder stare I <strong> TRENUTNE</strong> bez daljnjih pitanja. "sve"  znaci OBOJE "dodataka" I "rss_" opcije. %s ("rss_" upit Opcija) nije vratio vrijednost. %s ("rss_" ne-vremenski upit Opcija) nije vratio vrijednost %s ("rss_" vremenski upit Opcija) nije vratio vrijednost. %s (Upit Ostavljenih Opcija) nije vratio vrijednost. %s (upit pregleda informacija) nije vratio vrijednost . *Bilješka* razmaci su dodani nakon svakog 10tog znaka option_name i svakog 20tog znaka option_value da bi se zadržao izgled stranice.<br/>Sve opcije ne moraju imati vrijednosti i/ili opise. 10 parova 100 parova 125 parova 150 parova 175 parova 2 niza odvojena s %s (velika slova unutar zvjezdica) npr. 25 parova 50 parova 75 parova Poruke Upozorenja znace da se nešto dogodilo i da je opcija koja ne bi trebala biti izbrisana postala dostupna za brisanje, ili da opcija koja se može obrisati nije dostupna za brisanje. U svakom slucaju ukoliko ugledate poruke Upozorenja budite posebno oprezni i promišljeni prije no što cete obrisati bilo koje opcije. PAŽNJA Starost Nepoznata Alternativna sintaksa Iako uklanjanje trenutnih "rss_hash" redova ne bi trebalo "razbiti" Vaš Wordpress blog (trebali bi biti uneseni iduci put kada se kanal umemorira), molimo <strong> NAPRAVITE PRICUVU</strong> Vaše baze podataka <strong> PRIJE</strong> nego što cete ovo uciniti.<br/> Nakon korištenja "%1$s", trebali bi "%2$s", da dalje ocistite wp_options tablicu. Pažljivo pregledajte informacije na "Pogledaj Informacije Oznacenih Opcija" stranici <i> prije </i> brisanja opcije. Nije moguce otvoriti datoteku %s Nije moguce otvoriti direktorij %s Nije moguce otvoriti direktorij/datoteku Greška baze podataka Obriši SVE 'rss' Opcije Odznaci sve Ne prikazuj alternativna upozorenja sintakse za ovaj "Traži" Ne prikazuj poznate opcije WordPress jezgre za ovaj "Traži" Prazno Ime Unesite niz za pretraživanje ovdje- Svaka "rss_hash" opcija u wp_options tablici ce biti prikazana ukljucujuci trenutne. Greška sistemskih datoteka Traži Pronadi Ostavljene Opcije Za komentare/sugestije molim posjetite blog %s Za više informacija, posljednju verziju itd. Molim posjetite stranicu dodatka %s Daljnje informacije Guglaj Visoka potrošnja memorije Ukoliko imate bilo kakvih pitanja, problema, komentara ili prijedloga molim javite. Ukoliko želite prevesti dodatak, molim ostavite komentar na %s <strong> Vrlo je preporucivo </strong> da odredite limit "Traži" na samo odabrani broj najnovijih "rss_hash" opcija umjesto i ponavljate proces dok njihov broj ne postane upravljiviji. Vrlo je preporucljivo da napravite KOPIJU baze  podataka prije uklanjanja bilo koje opcije. Izlistane opcije su one pronadene u wp_options tablici ali nisu povezane sa "get_option" ili "get_settings" u svim PHP datotekama pronadenim  unutar direktorija vašeg bloga. Ukoliko ste deaktivirali dodatke i/ili neupotrebljavane teme u datoteci, pripradajuce opcije se nece smatrati ostavljenima dok datoteke nisu uklonjene. Pogledajte imena datoteka u bilo kojim porukama Upozorenja. Pogledajte tekst u bilo kojim porukama Upozorenja Alternativnih Sintaksi. Niska potrošnja memorije Srednja potrošnja memorije Vrlo vjerovatno postoji extreman broj "rss_hash" redova unutar tablice wp_options. Nisu pronadene Ostavljene Opcije Nema oznacenih Ostavljenih Opcija. Nije unešen niz podataka Pretrage. Nisu pronadene datoteke sa %s Ne, ne uklanjaj ih, vrati se na pocetni ekran. Bilješka: svi razmaci su uklonjeni, pretraga je osjetljiva na velicinu slova. Pronadene su samo opcije WordPress jezgre Opcija Bez Imena sa vrijednosti Možda neki dodatci/teme dodaju opcije koje nemaju imena? Ili je ime nekako uklonjeno iz reda? Kako dodatci pronalaze opcije prema njihovim imenima, ove "bez imena" opcije nece biti ukljucene u popis, te se prema tome ne mogu pregledati niti obrisati. Ukoliko red nema option_name ali ima option_value, biti ce prikazan da bi se pomoglo u identifikaciji problema. Trenutno, ukoliko želite ukloniti takve redove morate to uciniti na neki drugi nacin. Molimo pregledajte ove podatke vrlo pažljivo te uklonite samo Opcije za koje sigurno znate da su ostavljene ili neodobrene. Moguce Ostavljene Opcije Pitanja? Za podršku molim posjetite forum %s RSS Opcije Uklonjene %d "rss_hash"  Opcije Uklonjene Opcije Povratak na %s Pretraži Pretraži datoteke prema: Oznaci sve Neke informacije su možda dostupne na Vašoj %s stranici. Proslijedi "rss_" opcije kao od Wordpress verzije 2.8 su zastarjele te se mogu oznaciti i trebalo bi biti sigurno ukloniti bilo koje su ostale. Tablica Opcije trenutno ima %s pronadenih redova. Opcije koje slijede se cine Ostavljene. Kada su prikazane, opcije koje se nemogu oznaciti su stvorene prilikom nadogradnje ili pravljenja pricuve, ili su legitimne opcije koje ne "pristajati" u pretragu za get_option ili get_settings. Ako ih želite ukloniti iz drugih razloga ucinite to na vlastiti rizik. Slijedi sadržaj "RSS" Opcija dodanih u wp_options tablicu od strane administratorskog sucelja ili drugih datoteka koje citaju RSS tokove i hvataju rezultate.<br/> U svakom paru, gornja opcija je uhvaceni tok a doljnja je vremenska oznaka opcije.<br/> Popis može ukljucivati opcije koje su <strong>Trenutno Aktivne</strong>.<br/> Kada su prikazane "rss_" parovi opcija sa datumom novijim ili istim kao datumom 14 te najnovijih "rss_" parova opcija ( one koje su vjerovatnije trenutne) nemaju polje za oznaku ali pocinju sa "-" i završavaju sa "<em># %1$s</em>" italik.<br/>Starije "rss_" opcije mogu biti oznacene i završavaju sa "<strong># %2$s</strong>" boldano. Opcije koje slijede nisu ispravno uparene. Budite sigurni da pažljivo provjerite njihove informacije prije no što ih uklonite. &#352;to niži broj "rss_hash" opcija parova "Traži" , manje je vjerovatno da cete imati problema s memorijom tijekom "Traži" . Unatoc tome, ovisno o broju redova kanala koji su trenutni, "Traži"  može ne ukljuciti i starije koji mogu biti obrisani.<br/> &#352;to je veci broj "rss_hash" parova koji "Traži" , veca je vjerovatnost da ce i stariji koji mogu biti obrisani biti ukljuceni. Ali tada je veca mogucnost problema s memorijom tijekom "Traži"<br/> Savjetujemo da zapocnete s nižim "Traži" i postepeno povecavate broj svakim sljedecim "Pronalazi". Ukoliko dobijete greške s memorijom, koristite niži broj.<br/> Ponavljamo da preporucamo da pregledate rezultate na stranici s rezultatima koje ste odabrali prije brisanja, kako bi se uvjerili da ih zaista želite obrisati. Dodatak nije uspio otvoriti direktorij/datoteku. To se najcešce dogada zbog neadekvatne postavke dozvola tj. "čitati" postavke dozvola. One ne trebaju biti "svijet" ucitavane, ali skripte moraju imati dozvolu. Opcije koje su u direktorijima koji se ne mogu citati se mogu pojaviti u  listi "ostavljene opcije" kada u stvari nisu ostavljene. Dodatak postavlja upite prema wp_options tablici. Ocekuje vrijednost sa barem jednim redom. Ova poruka greške može biti rezultat cinjenice da stvarno nema wp_options redova koji se automatski ucitavaju (što je skoro nemoguce), ili stvarno nema "rss_hash" redova. Ili možda postoji problem u bazi podataka (npr. Greška u povezivanju ili memoriji). Ukoliko ste dobili ovu poruku greške trebali bi pogledati  takoder WPDB poruke greške za detaljnije informacije. Greška sa bilo automatskoucitanje=da upitom(opcije jezgre/dodataka/teme) ili automatskoucitanje=da (rss_hash opcija) znaci da niti jedan od pripadajucih redova nece biti dostupan za pregled ili brisanje dok se ne riješi problem s bazom podataka. Dodatak pretražuje PHP datoteke za instance "get_option('option_name kao niz') što se slažu s vrijednostima pronadenim u wp_options tablici. Neki fajlovi koriste sintaksu kao get_option(&#36;varijable) ili get_option('prefix_' . &#36;variable). Ova imena opcija se nece slagati sa onima pronadenim u wp_options tablici i mogu biti prisutna na listi Ostavljenih Opcija dok u stvarnosti nisu ostavljene.U mnogim slucajevima, poznavajuci datoteke, i prefikse ukoliko su korišteni, može pomoci u identifikaciji opcija koje nisu u stvarnosti ostavljene. <br/> *Bilješka* ukoliko dobivate ovo upozorenje sa datotekama dodataka (iz<u><i> Wordpress.com direktorija dodataka</i></u>, molim) i znate da nije potencijalni problem (npr. neke poznate Wordpress jezgrene datoteke, WordPress.com dodatak za statistiku, koji ima alternativnu sintaksu u sebi ALI <u><i> nema izlistanih opcija povezanih s njim</i></u>, molimo posjetite blog i ostavite komentar tipa: "bilokoji dodatak ima alternativnu sintaksu ali je OK " da ga mogu dodati na "ignore" listu za izdanja buducih verzija ukoliko je to sigurno. Puno hvala. %s Postoji samoucitanje koje nije jednako da Opciji sa Bez Imena sa vrijednosti: %s Postoji automatski ucitana Opcija sa Bez Imena sa vrijednosti: %s Nisu pronadene "rss_" Opcije Ovo su poruke grešaka kako ih prosljeduje Wordpress. Da bi se izbjegla prekomjerna potrošnja memorije, koristeci "%s" ne pokušava se izlistanje svih "rss_hash" opcija niti cete moci pregledati njihov sadržaj. Ponovno provjeri opcije iz liste Ostavljenih Opcija: Pregledati za option_name: Alati Zahvale Prevoditeljima Pokušajte Google pretragu za option_name. Pogledaj Informacije Oznacenih Opcija TRAŽE SE - prijave bugova TRAŽE SE - Prijevodi UPOZORENJE Poruke Upozorenja Greška WordPress baze podataka Da, ukloni SVE ove opcije iz wp_options tablice. cijeli_ili_dio_imena_opcije provjeri starost pripadajuce "_ts" opcije. dana stare unoseci bilo samo jednu oznaku niza npr. prvi ekran ima liniju opcije sa  poznate opcije WordPress jezgre ili maksimum od 3 niza odvojena sa %s npr. prefiks %s druge_rijeci prefiks%1$srijec%2$sdruga_rijec upit nije vratio vrijednost za post je potrebna registracija je pronadeno u: 