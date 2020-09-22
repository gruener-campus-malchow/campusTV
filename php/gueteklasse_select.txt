<!DOCTYPE html> 
<html lang="de">
  <head>
   <title>Güteklassen von Gewässern</title> <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Güteklassen von Gewässern</title>
  </head>
  <body>

    <?php 
    //print_r($_GET);
    $guetefaktoren = array ( );
      $guetefaktoren['Steinfliege_(Larve)'] = 1.5;
      $guetefaktoren['Eintagsfliege_(Larve)'] = 2;
      $guetefaktoren['Köcherfliegenlarve_(groß)'] = 1.5;
      $guetefaktoren['Köcherfliegenlarve_(mit_Steinchen)'] = 1.5;
      $guetefaktoren['Köcherfliegenlarve_(mit_Pflanzenteilen)'] = 2;
      $guetefaktoren['Köcherfliegenlarve_(ohne_Köcher)'] = 2;
      $guetefaktoren['Kriebelmücke_(Larve)'] = 2 ;
      $guetefaktoren['Schlammfliege_(Larve)'] = 2.5 ;
      $guetefaktoren['Rote_Zuckmückenlarve'] = 3.5 ;
      $guetefaktoren['Schneckenegel_u._andere_Egel_*'] = 2.5 ;
      $guetefaktoren['Rollegel'] = 3.0 ;
      $guetefaktoren['Schlammröhrenwurm'] = 3.5 ;
      $guetefaktoren['Strudelwürmer'] = 1.5 ;
      $guetefaktoren['Schlammschnecke'] = 2 ;
      $guetefaktoren['Flussnapfschnecke'] = 2 ;
      $guetefaktoren['Kugelmuschel'] = 2 ;
      $guetefaktoren['Flohkrebs'] = 2 ;
      $guetefaktoren['Wasserassel'] = 2.5 ;
      $guetefaktoren['Taumelkäfer'] = 2.5 ;
      $guetefaktoren['Hakenkäfer_*'] = 1.5 ;
    //print_r($guetefaktoren);
    
    $formularfelder = array_keys($_GET);
    //print_r($formularfelder);

    $produktsumme = 0;
    $anzahl = 0;

    foreach($formularfelder as $feld){
      print('in Formularfeld: '.$feld.' steht: ');
      print($_GET[$feld]);
      //print('<hr>');
      if(is_numeric($_GET[$feld])){
        $io = substr($feld,0,4);

        $produktsumme = $produktsumme + $_GET[$feld] * $guetefaktoren[$_GET[$io]];
        print('------> '.$produktsumme.'<-----');
        $anzahl = $anzahl + $_GET[$feld];
      }
      else{
        print('Da sollte eine Zahl stehen!');
      }
      
    }

    print('Die Produktsumme lautet: '.$produktsumme);
    print('<hr>Die Anzahl aller Tierchen ist: '.$anzahl);

    $gewaesserguete = $produktsumme / $anzahl;

    print('<hr>Die Gewässergüte ist: '.$gewaesserguete.'<hr>');

    //print_r($_GET);


    function selectbox($name, $index){
      //print('-----'.$index['Steinfliege_(Larve)']);
      $auswahloptionen = array_keys($index);
      //print_r($auswahloptionen);
      
      print('<label>Indikatororganismus
                <select name="'.$name.'" size="1">');
      
      foreach($auswahloptionen as $option)
      {
        print('<option value="'.$option.'">'.$option.'</option>');

      }
      print('</select></label>');

      print('<label>Anzahl<input type="number" name="'.$name.'_wert"></label>');

    }
     ?> 


    <form method="GET">
  <?php
    
    selectbox('io_1', $guetefaktoren);


  ?>

 <button type="submit">Eingaben absenden</button>

    </form>

  </body>
</html>

