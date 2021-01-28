<?php 
$name = 'Alfredo';
// $cognome = $argv[2];
$par = 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then';
$all = explode(" ", $par);
$word = '***';
// $final = var_dump($par);
$lenght = strlen($par);
$modify= str_replace($_GET['badword'], $word, $par)

?>
<!-- / php script -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Ciao <?php echo $name;?></h1>
    <p><?php echo $par;?></p>
    <p>La lunghezza del tuo paragrafo è <?php echo $lenght;?> lettere</p>
    <p>La parola proibita è: "the"</p>
    <p><?php echo $modify; ?></p>
    <p>ciao</p>
</body>
</html> 