<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pizzawinkel.css">
    <title>Document</title>
</head>
<body> 
  
<div class="gegevens">
    Naam:       <input type="text" name="naam" value="" id="" placeholder="Uw naam" required /><br />
    Adres:      <input type="text" name="adres" value="" id="" placeholder="Uw adres" required /><br />
    Postcode:   <input type="text" name="postcode" value="" id="" placeholder="Uw postcode" required /><br />
    Plaats:     <input type="text" name="plaats" value="" id="" placeholder="Uw plaats" required /><br />
</div>

<div class="bestel-flexbox"> 

<div class="datum">
  <label for="start">Besteldatum:</label>
    <input type="date" id="start" name="trip-start"
           value="dd-mm-yy"
           min="2023-01-11" max="2023-01-18">
</div>

<div class="bestelkeuze">
<select>
    <option value="placeholder">Bezorgen of afhalen?</option>
    <option value="bezorgen">Bezorgen</option>
    <option value="afhalen">Afhalen</option>
</select>
</div>

<div class="tijd">
  <label for="appt">Kies je tijd voor afhalen / bezorgen.</label>
    <input type="time" id="appt" name="appt" 
           min="16:00" max="02:00" required>
      <small>Bezorging is tussen 17:00 tot 00:00.</small>
</div>

</div>
<input type="submit" value="Submit">


<table>
  <tr>
    <th>Pizza</th>
    <th>Prijs</th>
  </tr>
  <tr>
    <td>Pizza Margherita</td>
    <td>€12,50</td>
  </tr>
  <tr>
    <td>Pizza Funghi</td>
    <td>€12,50</td>
  </tr>
  <tr>
    <td>Pizza Marina</td>
    <td>€13,95</td>
  </tr>
  <tr>
    <td>Pizza Hawai</td>
    <td>€11,50</td>
  </tr>
  <tr>  
    <td>Pizza Quattro Formaggi</td>
    <td>€14,50</td>
  </tr>
</table>
</body>
</html>