<?php
 namespace HTL3R\megaham_v3\HamsterHomes;

require_once "./vendor/autoload.php";
    use HTL3R\megaham_v3\HamsterHomes\ThePit;
    use HTL3R\megaham_v3\HamsterHomes\TheFlat;
    use HTL3R\megaham_v3\HamsterHomes\TheRoom;
    use http\Exception\RuntimeException;

//Hier wird alles Berechnet, was wir im HTML Markup brauchen

        if(!isset($_GET['format']) || $_GET['format']!=='json') {
            if(!isset($_GET['id'])){
                $_GET['id'] = 1;
            }
            switch ($_GET['id']) {
                case 2:
                    $body = '<h3>Impressum</h3><p>

Höhere technische Bundeslehranstalt Wien 3
Rennweg 89b
1030 Wien

Schulkennzahl: 903 507
UID: ATU 3877 1307

Telefon: +43 1 242 15-10
Fax:+43 1 242 15-4212

E-Mail: direktion@htl.rennweg.at

Bis 2000:
HTL Wien 4
Argentinierstraße 11
1040 Wien

Haftungsausschluss
Der Webauftritt der Höheren Technischen Bundeslehranstalt Wien 3 Rennweg hat das Ziel, die Öffentlichkeit über das Bildungsangebot, das Personal und die Aktivitäten der Schule zu informieren.

Sollten Sie Fehler oder Irrtümer auf der Site entdecken, bitten wir Sie, uns darüber in Kenntnis zu setzen. Wir sind bestrebt, diese rasch zu berichtigen.
</p>';
                    break;

                case 3:
                    $body = '<h3>Datenschutz</h3><p>Datenschutzerklärung
Der Schutz Ihrer persönlichen Daten ist uns ein besonderes Anliegen. Wir verarbeiten Ihre Daten daher ausschließlich auf Grundlage der gesetzlichen Bestimmungen (DSGVO, TKG 2003). In diesen Datenschutzinformationen informieren wir Sie über die wichtigsten Aspekte der Datenverarbeitung im Rahmen unserer Website.

Kontakt mit uns
Wenn Sie per Formular auf der Website oder per E-Mail Kontakt mit uns aufnehmen, werden Ihre angegebenen Daten zwecks Bearbeitung der Anfrage und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.

Cookies
Unsere Website verwendet so genannte Cookies. Dabei handelt es sich um kleine Textdateien, die mit Hilfe des Browsers auf Ihrem Endgerät abgelegt werden. Sie richten keinen Schaden an.

Wir nutzen Cookies dazu, unser Angebot nutzerfreundlich zu gestalten. Einige Cookies bleiben auf Ihrem Endgerät gespeichert, bis Sie diese löschen. Sie ermöglichen es uns, Ihren Browser beim nächsten Besuch wiederzuerkennen.

Wenn Sie dies nicht wünschen, so können Sie Ihren Browser so einrichten, dass er Sie über das Setzen von Cookies informiert und Sie dies nur im Einzelfall erlauben.

Bei der Deaktivierung von Cookies kann die Funktionalität unserer Website eingeschränkt sein.
</p>';
                    break;

                case 1:
                        $theRoomInfo = (new TheRoom())->outputProductInfo();
                        $theFlatInfo = (new TheFlat())->outputProductInfo();
                        $thePitInfo = (new ThePit())->outputProductInfo();

                    $body = <<<EOT
                    <h3>Hier sind alle tollen Angebote</h3>
                    <p>$theRoomInfo</p>
                    <p>$theFlatInfo</p>
                    <p>$thePitInfo</p>
EOT;

                    break;
            }


            //Hier den Body-Text ausgeben
            echo <<<FOO
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Megahamster</title>
                </head>
                <body>
                            <h1>Megahamster</h1>
                            <ul>
                                <li><a href="home.php?id=1">Wilkommen</a> </li>
                                <li><a href="home.php?id=2">Impressum</a> </li>
                                <li><a href="home.php?id=3">Datenschutz</a> </li>
                                <hr>
                                <li><a href="home.php?id=1&format=json">JSON-Ansicht Wilkommen</a> </li>
                                <li><a href="home.php?id=2&format=json">JSON-Ansicht Impressum</a> </li>
                                <li><a href="home.php?id=3&format=json">JSON-Ansicht Datenschutz</a> </li>
                            </ul>
                        <br>
                        <hr>
                            $body
                </body>
                </html>
FOO;
            // $body printen




    }else{
            header('Content-Type: application/json');
            if(!isset($_GET['id'])){
                $_GET['id'] = 1;
            }
            switch ($_GET['id']){
                case 3:
                    echo json_encode(['Datenschutz' => 'Datenschutzerklärung
Der Schutz Ihrer persönlichen Daten ist uns ein besonderes Anliegen. Wir verarbeiten Ihre Daten daher ausschließlich auf Grundlage der gesetzlichen Bestimmungen (DSGVO, TKG 2003). In diesen Datenschutzinformationen informieren wir Sie über die wichtigsten Aspekte der Datenverarbeitung im Rahmen unserer Website.

Kontakt mit uns
Wenn Sie per Formular auf der Website oder per E-Mail Kontakt mit uns aufnehmen, werden Ihre angegebenen Daten zwecks Bearbeitung der Anfrage und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.

Cookies
Unsere Website verwendet so genannte Cookies. Dabei handelt es sich um kleine Textdateien, die mit Hilfe des Browsers auf Ihrem Endgerät abgelegt werden. Sie richten keinen Schaden an.

Wir nutzen Cookies dazu, unser Angebot nutzerfreundlich zu gestalten. Einige Cookies bleiben auf Ihrem Endgerät gespeichert, bis Sie diese löschen. Sie ermöglichen es uns, Ihren Browser beim nächsten Besuch wiederzuerkennen.

Wenn Sie dies nicht wünschen, so können Sie Ihren Browser so einrichten, dass er Sie über das Setzen von Cookies informiert und Sie dies nur im Einzelfall erlauben.

Bei der Deaktivierung von Cookies kann die Funktionalität unserer Website eingeschränkt sein.
                    ']);
                    break;
                case 2:
                    echo json_encode(['Impressum' => '                   
Höhere technische Bundeslehranstalt Wien 3
Rennweg 89b
1030 Wien

Schulkennzahl: 903 507
UID: ATU 3877 1307

Telefon: +43 1 242 15-10
Fax:+43 1 242 15-4212

E-Mail: direktion@htl.rennweg.at

Bis 2000:
HTL Wien 4
Argentinierstraße 11
1040 Wien

Haftungsausschluss
Der Webauftritt der Höheren Technischen Bundeslehranstalt Wien 3 Rennweg hat das Ziel, die Öffentlichkeit über das Bildungsangebot, das Personal und die Aktivitäten der Schule zu informieren.

Sollten Sie Fehler oder Irrtümer auf der Site entdecken, bitten wir Sie, uns darüber in Kenntnis zu setzen. Wir sind bestrebt, diese rasch zu berichtigen.
                    ']);
                    break;
                case 1:
                    echo json_encode([
                            'TheRoom' => new TheRoom(), //hier bekommt mal leere klammern zurück, weil es nicht public ist in der klasse. Lösung : interface serializable implementieren (Foto5.11.11:16) (implements muss nur bei der oberen Klasse hingeschrieben werden, weil: das untere ist extended vom oberen und nimmt das obere mit)
                            'TheFlat' => new TheFlat(),
                            'ThePit' => new ThePit(),
                    ]);
                    break;
            }

        }

    ?>
