<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

    <?php 
    //print_r($_GET);
    $guetefaktoren = array ( );
      $guetefaktoren['Steinfliege (Larve)'] = 1.5;
      $guetefaktoren['Eintagsfliege (Larve)'] = 2;
      $guetefaktoren['Köcherfliegenlarve (groß)'] = 1.5;
      $guetefaktoren['Köcherfliegenlarve (mit Steinchen)'] = 1.5;
      $guetefaktoren['Köcherfliegenlarve (mit Pflanzenteilen)'] = 2;
      $guetefaktoren['Köcherfliegenlarve (pur)'] = 2;
      
    //print_r($guetefaktoren);
    
    $formularfelder = array_keys($_GET);
    //print_r($formularfelder);

    $produktsumme = 0;
    $anzahl = 0;

    foreach($formularfelder as $feld){
      //print('in Formularfeld: '.$feld.' steht: ');
      //print($_GET[$feld]);
      //print('<hr>');
      if(is_numeric($_GET[$feld])){
        $produktsumme = $produktsumme + $_GET[$feld]*$guetefaktoren[$feld];
        $anzahl = $anzahl + $_GET[$feld];
      }
      else{
        print('Da sollte eine Zahl stehen!');
      }
      
    }

    print('Die Produktsumme lautet: '.$produktsumme);
    print('<hr>Die Anzahl aller Tierchen ist: '.$anzahl);

    $gewaesserguete = $produktsumme / $anzahl;

    print('<hr>Die GewÃ¤ssergÃ¼te ist: '.$gewaesserguete);

    print_r($_GET);


    function formularfeld($name){
      print('
        <tr><td><label for="'.$name.'">'.$name.'</label></td><td>
      <input id="'.$name.'" name="'.$name.'" value="0" type="number"></td>
      </tr>
      <br>');

    }
     ?> 


    <form method="GET"><table>
  <?php
    $indikatororganismen = array_keys($guetefaktoren);

    foreach($indikatororganismen as $tierchen)
    {
        formularfeld($tierchen);
    }


  ?>
  </table>
 <button type="submit">Eingaben absenden</button>

    </form>

  </body>
</html>

