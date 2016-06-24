<?php
session_start();
$_SESSION['form_id'] = uniqid();
?><html><head><meta charset="utf-8"><title>Form1</title></head>
<body><?php
if( !empty($_SESSION['error_message'] )) {
  echo '<h2>' . implode('<br>',$_SESSION['error_message'] ) . '</h2>';
}
?><form  method="post" action="form2_submit.php">
    <p>
      <label for="nom">Nom : </label>
      <input type="text" name="nom" id="nom">
    </p><p>
      <label for="prenom">Prénom : </label>
      <input type="text" name="prenom" id="prenom"/>
    </p>
    <input type="hidden" name="form_id"
           value="<?php print $_SESSION['form_id'];?>"/>
    
    <input type="radio" name="sexe" id="h" value="homme"/>
    <label>homme</label>
     <input type="radio" name="sexe" id="f" value="femme"/>
    <label>femme</label>
    <br/>
  <?php
  $selected = '';
  echo '<select name="annee">',"\n";
  for($i=1970; $i<=2030; $i++)
  {
    //$selected = ' selected="selected"';
    echo '<option value="',$i,'"' ,'>', $i ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected='';
  }
  echo '</select>',"\n";
  ?>
  <br/>
  <input type="submit" value="Valider"> 
</form>
</body></html>