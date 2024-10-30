<div class="wrap">

<?php cmb_load_settings(); ?>

<h2>Colour Me Bad Settings</h2>

<a name="form"></a>
<form name="cmb_settings" id="cmb_settings" method="post" action="<?php echo cmb_form_action(); ?>">

  <table class="editform" width="100%" cellspacing="2" cellpadding="5">
    <tr>
      <th scope="row">Last.fm username:</th>
      <td><input type="text" name="lastfm_username" value="<?php echo $_REQUEST['lastfm_username'];?>" style="width: 95%" /></td>
    </tr>
 <!-- if horizontal-->
 
 <?php 
 $current_pos=$_REQUEST['position'];
 if($current_pos==standing){
 
 ?>
     <tr>
           <th scope='row'>Position:</th><br/>
     		<td><br/><br/>Vertical:<input type='radio' value='standing' name='position' checked='checked'><br/> <br/>
		Horizontal:<input type='radio' value='lying' name='position'> </td>
    </tr>
<?php;} else {?>
 
     <tr>
           <th scope='row'>Position:</th><br/>
     		<td><br/><br/>Vertical:<input type='radio' value='standing' name='position' ><br/> <br/>
		Horizontal:<input type='radio' value='lying' name='position' checked='checked'> </td>
    </tr>
    <?php;}?>

 




     </table>

  <p class="submit">
    <input type="hidden" name="cmb_action" value="set" />
    <input type="submit" name="submit" value="Save Settings &raquo;" />
  </p>

</form>

</div>
