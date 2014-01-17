<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Envoi d'un courrielr</title>
</head>
<body>

<?php
set_magic_quotes_runtime(false);

# 06 07 26 97 97 67
# 06 84 13 90 58

function run () {
       global $message;
    if (!empty($_POST)) {
        $a = $_POST;
    } elseif (!empty($_GET)) {
        $a = $_GET;
    } else {
            $message  = 'rien trouve';
        return 0;
    }
    $to = 'damien.nonnotte@gmail.com,delphine@tlk.fr,delphine.ethvignot@gmail.com';
    //$to = 'bruno@tlk.biz';
    if(!mail($to,
                stripslashes($a['sujet']),
                stripslashes($a['contenu']),
                "from:" . stripslashes($a['de']))) {
        $message = "Le courrier &eacute;lectronique n'a pas &eacute;t&eacute; envoy&eacute;";
    } else {
        $message = "Le courrier &eacute;lectronique a &eacute;t&eacute; envoy&eacute;";
    }
}
    
run();


?>
<h1>Envoi</h1>
<p><?php print $message ?></p>


</body>
</html>

