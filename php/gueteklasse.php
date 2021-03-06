<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Güteklassen von Gewässern</title>
  </head>
  <body>
    <form method="GET">
 <label for="f1">Steinfliege (Larve)</label>
  <input id="f1" name="f1" value="0" type="number">
  <br>
  <label for="f2">Eintagsfliege (Larve) (Larve)</label>
  <input id="f2" name="f2" value="0" type="number">
  <br>
  <label for="f3">Köcherfliegenlarve (groß)</label>
  <input id="f3" name="f3" value="0" type="number">
  <br>
  <label for="f4">Köcherfliegenlarve (mit Steinchen)</label>
  <input id="f4" name="f4" value="0" type="number">
  <br>
  <label for="f5">Köcherfliegenlarve (mit Pflanzenteilen)</label>
  <input id="f5" name="f5" value="0" type="number">
  <br>
  <label for="f6">Köcherfliegenlarve (ohne Köcher)</label>
  <input id="f6" name="f6" value="0" type="number">
  <br>
  <label for="f7">Kriebelmücke (Larve)</label>
  <input id="f7" name="f7" value="0" type="number">
  <br>
  <label for="f8">Schlammfliege (Larve)</label>
  <input id="f8" name="f8" value="0" type="number">
  <br>
  <label for="f9">Rote Zuckmückenlarve</label>
  <input id="f9" name="f9" value="0" type="number">
  <br>
  <label for="f10">Schneckenegel u. andere Egel *</label>
  <input id="f10" name="f10" value="0" type="number">
  <br>
  <label for="f11">Rollegel</label>
  <input id="f11" name="f11" value="0" type="number">
  <br>
  <label for="f12">Schlammröhrenwurm</label>
  <input id="f12" name="f12" value="0" type="number">
  <br>
  <label for="f13">Strudelwürmer *</label>
  <input id="f13" name="f13" value="0" type="number">
  <br>
  <label for="f14">Schlammschnecke</label>
  <input id="f14" name="f14" value="0" type="number">
  <br>
  <label for="f15">Flussnapfschnecke</label>
  <input id="f15" name="f15" value="0" type="number">
  <br>
  <label for="f16">Kugelmuschel</label>
  <input id="f16" name="f16" value="0" type="number">
  <br>
  <label for="f17">Flohkrebs</label>
  <input id="f17" name="f17" value="0" type="number">
  <br>
  <label for="f18">Wasserassel</label>
  <input id="f18" name="f18" value="0" type="number">
  <br>
  <label for="f19">Taumelkäfer</label>
  <input id="f19" name="f19" value="0" type="number">
  <br>
  <label for="f20">Hakenkäfer *</label>
  <input id="f20" name="f20" value="0" type="number">
  <br>

 <button type="submit">Eingaben absenden</button>

    </form>
    <?php 
    //print_r($_GET);
    $guetefaktoren = array ( );
      $guetefaktoren['f1'] = 1.5;
      $guetefaktoren['f2'] = 2;
      $guetefaktoren['f3'] = 1.5;
      $guetefaktoren['f4'] = 1.5;
      $guetefaktoren['f5'] = 2;
      $guetefaktoren['f6'] = 2;
      $guetefaktoren['f7'] = 2 ;
      $guetefaktoren['f8'] = 2.5 ;
      $guetefaktoren['f9'] = 3.5 ;
      $guetefaktoren['f10'] = 2.5 ;
      $guetefaktoren['f11'] = 3.0 ;
      $guetefaktoren['f12'] = 3.5 ;
      $guetefaktoren['f13'] = 1.5 ;
      $guetefaktoren['f14'] = 2 ;
      $guetefaktoren['f15'] = 2 ;
      $guetefaktoren['f16'] = 2 ;
      $guetefaktoren['f17'] = 2 ;
      $guetefaktoren['f18'] = 2.5 ;
      $guetefaktoren['f19'] = 2.5 ;
      $guetefaktoren['f20'] = 1.5 ;
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

    print('<hr>Die Gewässergüte ist ungefähr: '.$gewaesserguete);
     ?> 
  </body>
</html>
