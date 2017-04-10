<?php
$bdd=DB::getDB();
//Execution de la requete
$req = $bdd->prepare('SELECT p.desc as patho, k.name as carac, s.desc as symptome
FROM `patho` p inner join `symptPatho` sp on sp.idP = p.idP inner join `symptome` s on s.idS = sp.idS inner join `keySympt` ks on ks.idS = s.idS inner join`keywords` k on k.idk = ks.idK GROUP BY patho, carac, symptome ORDER BY patho asc');

$req->execute();





//print("Recupereation de la requete ");
$result = $req->fetchAll();
//print_r($result);
//pour debug 
print_r($result);


//La suite ne fonctionne pas encore ..

$row = $req->fetch(PDO::FETCH_ASSOC);
echo $row['patho'];
echo $row['carac'];

print($row['patho']);


$list_news = array();
$i = 0;

while($data = $req->fetch()){
    $list_news[$i]['patho'] = $data['patho'];
    print($data['patho']."\n");
    $list_news[$i]['carac'] = $data['carac'];
    $list_news[$i]['symptome'] = strtolower($data['symptome']);
    $i++;
}

$v = $i;





//echo $twig->render(array($list_news=>'list_news'));

$req->closeCursor(); 
?>