<!DOCTYPE html>
<html>
<head>
<title>Currency Converter</title>
</head>
<body>
<h2>Problem: User inputs conver to another currency.</h2>
<p>

  <form method="POST">
    <input type="text" placeholder="Amount" name="amount" />

  <select name="inputOptions">
    <option value="USD">US</option>
    <option value="EUR">Europe</option>
    <option value="JPY">Japan</option>
  </select>

  <select name="outputOptions">
    <option value="USD">US</option>
    <option value="EUR">Europe</option>
    <option value="JPY">Japan</option>
</select>

  <input type="submit"/>
</form>
</p>
<?php require_once('mylib.php');
if(isset($_POST['amount'])) {
$currency_input = $_POST['amount'];
 //currency codes : http://en.wikipedia.org/wiki/ISO_4217
$currency_from = $_POST['inputOptions'];
$currency_to = $_POST['outputOptions'];
$currency = currencyConverter($currency_from,$currency_to,$currency_input);
}

if(isset($_POST['amount'])) {
echo "<br>" . $currency_input.' '.$currency_from.' = '.$currency.' '.$currency_to;
}
 ?>
</body>
</html>
