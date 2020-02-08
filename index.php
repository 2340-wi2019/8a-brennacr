<?php
    include "includes/header.php";

    //write PHP here...
	$weight = '125';
	$age = '31';
	$firstname = 'Brenna';
	$lastname = 'Rosenberg';
	function poundsToKg($weight)
	{return $weight * (1/2.2);}
	$kg = poundsToKg($weight);
?>
<body>
<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php echo $firstname;?> <?php echo $lastname; ?>!
<p>I am <?php echo $age; ?> years old. I weigh <?php echo $weight; ?> pounds, which is <?php echo $kg;?> kg!</p>

</body>
<?php
    include "includes/footer.php";
?>


