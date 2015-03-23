<pre>
<?php
if(isset($_POST['var'])) {
  foreach($_POST['var'] as $_k => $_v) {
    echo "var {$_k} = {$_v} \n";
  }
}
?>
</pre>
 
<form action="?" method="POST">
  <input type="text" name="var[]" value="1" /><br />
  <input type="text" name="var[]" value="2" /><br />
  <input type="text" name="var[]" value="3" /><br />
  <input type="text" name="var[]" value="4" /><br />
  <input type="text" name="var[]" value="5" /><br />
  <input type="submit" />
</form>


<?php 


$yourArray = $_POST['var'];

foreach ($_POST['var'] as $key => $value) {
echo "<p>".$key."</p>";
echo "<p>".$value."</p>";
echo "<hr />";
}

?>