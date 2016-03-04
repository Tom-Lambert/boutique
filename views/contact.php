<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
?>
<h1 class="titre__first">Contactez moi:</h1>
<FORM METHOD="POST" ENCTYPE="text/plain" ACTION="mailto:tom_lambert@outlook.fr" class="form-horizontal">
  <div class="form-group">
    <label  class="col-sm-4 control-label"></label>
    <div class="col-sm-3">
      <TEXTAREA NAME="Message" rows=5 cols=40 placeholder="Message"></TEXTAREA> 
    </div>
  </div>
	<div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
    	<INPUT type="RESET" class="btn btn-default" VALUE="Effacer">
        <input type="submit" class="btn btn-default" name="valid" value="Envoyer">
    </div>
  </div> 
	<br>
	 
</FORM>
<?php 
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/footer.php");
?>