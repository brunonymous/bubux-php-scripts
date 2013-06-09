<ul id="menu">
<li><a href="/">Accueil </a></li>
{assign $gameNames = array('Tecnoball', 'TecnoballZ', 'TecnoballZ-AGA', 'Equality-92', 'Tronic') }
{foreach $gameNames as $name}
<li><a href="{jurl 'amigatlk~games:view@classic', array('name' => $name, 'lang' => $lang) }">{$name}</a></li>
{/foreach}
<li><a href="http://linux.tlk.fr/contact/">Contact</a></li></ul>
