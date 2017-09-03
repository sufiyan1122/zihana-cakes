<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rate of cakes</title>
	<?php
	include "links.php";
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style type="text/css">

	.table tbody tr td,.table thead tr th{
    color:black; !important
  	}
  	
  	.table thead tr th{
    border-bottom:2px solid grey;
  	}

  	.table caption{
  		font-size:16px;color:black;
  		text-align:center;
  		padding:5px;
  		border-bottom:2px solid grey;
  		border-top:2px solid grey;
  	}

	</style>
</head>
<body>
<?php
include "navbar.php";
?>

<table class="table">
<caption >Fat less</caption>
    <thead>
      <tr>
        <th>Type</th>
        <th>Weight</th>
        <th>rate</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Any flavour</td>
        <td>1Kg</td>
        <td>550 Rs</td>
      </tr>
      <tr>
        <td>Chocolate</td>
        <td>1Kg</td>
        <td>590 Rs</td>
      </tr>
    </tbody>
  </table>




  <table class="table">
<caption >With Egg</caption>
    <thead>
      <tr>
        <th>Type</th>
        <th>Weight</th>
        <th>rate</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Any flavour</td>
        <td>1Kg</td>
        <td>610 Rs</td>
      </tr>
      <tr>
        <td>Chocolate</td>
        <td>1Kg</td>
        <td>650 Rs</td>
      </tr>
    </tbody>
  </table>




  <table class="table">
<caption >Egg less</caption>
    <thead>
      <tr>
        <th>Type</th>
        <th>Weight</th>
        <th>rate</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Any flavour</td>
        <td>1Kg</td>
        <td>650 Rs</td>
      </tr>
      <tr>
        <td>Chocolate</td>
        <td>1Kg</td>
        <td>690 Rs</td>
      </tr>
    </tbody>
  </table>



  <table class="table">
<caption >Special Fruit Cake</caption>
    <thead>
      <tr>
        <th>Type</th>
        <th>Weight</th>
        <th>rate</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>With egg</td>
        <td>1Kg</td>
        <td>760 Rs</td>
      </tr>
      <tr>
        <td>Egg less</td>
        <td>1Kg</td>
        <td>800 Rs</td>
      </tr>
    </tbody>
  </table>



  <table class="table">
<caption >Foundant cake(minimum order 2 KG)</caption>
    <thead>
      <tr>
        <th>Type</th>
        <th>Weight</th>
        <th>rate</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>With egg</td>
        <td>1Kg</td>
        <td>1250 Rs</td>
      </tr>
      <tr>
        <td>Egg less</td>
        <td>1Kg</td>
        <td>1300 Rs</td>
      </tr>
    </tbody>
  </table>
  <p>Toy cakes are also available for each flavour with <span style="color:red;font-size:16px;">200RS</span> extra charge</p>

  <p>photo cakes are also available for each flavour with <span style="color:red;font-size:16px;">300RS</span> extra charge</p>
 <?php include "footer.php";?>
</body>
</html>