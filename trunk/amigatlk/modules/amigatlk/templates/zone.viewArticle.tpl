{assign $lines = $article->content}
{assign $lineNumber = 0}
{for ( $i = 0; $i < count($lines); $i++ ) }
  {assign $lineStr = $lines[$i]} 
  {if substr($lineStr, 0, 5) != '<img '}
    <p id="ligne{$lineNumber}">{$lineStr}</p>
    {assign $lineNumber = $lineNumber + 1}
  {else}
    {$lineStr}
  {/if}
{/for}
