<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
           $(function() {
               $("#from").datepicker({ dateFormat: "yy-mm-dd" }).val()
               $("#till").datepicker({ dateFormat: "yy-mm-dd" }).val()
       });

  $(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#till" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
  </script>

<style>
div.ui-datepicker{
 font-size:10px;
}</style>
</head>
<?php
$AffiliateID = $_GET['id'];
?>
<div style="background: #25AAE1 none repeat scroll 0% 0%; width: 240px; height: auto; color:#FFF; font-size: 16px;">
<center style="font-family: &quot;Open Sans&quot;,sans-serif;">
<div style="padding: 10px 0px 5px;">
<img src="http://enjoyapartments.com/blog/wp-content/uploads/2015/06/new-enjoy-v2-white-small.png" width="230px">
</div>
Buscar Apartamentos
<form onsubmit="window.open('http://enjoy-apartments.com/en/' + place.value + '/apartments/listing/1?arrivalDate=' + from.value + '&departureDate=' + till.value + '&numPer=' + persons.value + '&id=' + AffiliateID.value); return false;">
<!--<form onsubmit="window.location = 'http://enjoy-apartments.com/en/' + city.value + '/apartments/listing/1?arrivalDate=' + from.value + '&departureDate=' + till.value + '&numPer=' + persons.value; return false; + '/' ">-->
<i style="color:white;" class="fa fa-globe fa-2x"></i>
<select style="margin-top: 10px; width: 188px; font-size: 18px; margin-bottom: 10px;color: rgb(102, 102, 102);" id="place" name="place" value="place">
<option value="Barcelona">Barcelona</option>
<option value="Rome">Rome</option>
<option value="Amsterdam">Amsterdam</option>
<option value="Rotterdam">Rotterdam</option>
<option value="Andorra">Andorra</option>
<option value="Curacao">Curacao</option>
<option value="Madrid">Madrid</option>
<option value="Malaga">Malaga</option>
<option value="Marbella">Marbella</option>
<option value="rio_de_janeiro">Rio de janeiro</option>
<option value="Aruba">Aruba</option>
<option value="London">London</option>
<option value="Ibiza">Ibiza</option>
<option value="Lisbon">Lisbon</option>
<option value="Capetown">Cape Town</option>
<option value="Milan">Milan</option>
</select><br>
<div style="width:240px;">
<i style="color:white;" class="fa fa-calendar fa-2x"></i>
<input type="text" id="from" name="from" style="font-size:18px;color: rgb(102, 102, 102);width:188px"><br>
<i style="color:white;" class="fa fa-calendar fa-2x"></i>
<input type="text" id="till" name="till" style="margin-bottom:10px;font-size:18px;color: rgb(102, 102, 102);width:188px"><br>
<i style="color:white;" class="fa fa-users fa-2x"></i>
<input name="persons" type="number" id="persons" value="persons" min="1" max="15" style="margin-bottom:20px;width:103px;font-size:18px;color: rgb(102, 102, 102);">
<input type="hidden" name="AffiliateID" value="<?php echo $AffiliateID; ?>">
  <input style="font-size: 18px; background: rgb(37, 170, 225) none repeat scroll 0% 0%; color: white;" value="Search" type="submit" )">
  </form>
</div>

<?php echo $_POST["City"]; ?>
