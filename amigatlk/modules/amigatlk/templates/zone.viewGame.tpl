{assign $screenshots = $game->screenshots}
{for ( $i = 0; $i < count($screenshots); $i++ ) }
<img class="gauche" src="/gfx/games/{$game->code}/{$screenshots[$i]}" alt="Photo écran Amiga" title="{$game->title}" />
{/for}
<h1>{$game->title}</h1>
{assign $lines = $game->content}
{assign $lineNumber = 0}
{for ( $i = 0; $i < count($lines); $i++ ) }
  {assign $lineStr = $lines[$i]} 
  <p id="ligne{$lineNumber}">{$lineStr}</p>
{/for}
