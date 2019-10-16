<?php

// eMail address
echo '<h1>eMail</h1>';
$emails = [
  'bloodborne@rules.com', 
  'bloo@email.com', 
  'camlet.zone', // not an email address
  'there are spaces in this@example.com', 
  'not,anemail@blip.chip' // invalid character
];
$emailRegEx = '/(^[A-Za-z0-9_.+-]+@[A-Za-z0-9-]+\.[A-Za-z0-9.-]+$)/';
// This is a pretty bad way to match emails - there's a specificiation I could go read but life is too short.
foreach ($emails as $email) {
  echo $email;
  echo "<br/>\t";
  echo 'preg_match result: ' . preg_match($emailRegEx, $email); 
  echo '<br/><br/>';
}
echo '<br/>';

// UK postcode
echo '<h1>UK postcode</h1>';
$postcodes = [
  'BA2 5NN', // uppercase
  'some rubbish', // not a postcode
  'fa49 3ke', // lowercase
  'gu116ay' // no space - would match if the space was ?ed
];
$postcodeRegEx = '/[A-Z|a-z]{2}[0-9][0-9]?\ [0-9][A-Z|a-z]{2}/';
// This would allow a lot of not real postcodes in
foreach ($postcodes as $postcode) {
  echo $postcode;
  echo '<br/>';
  echo 'preg_match result: ' . preg_match($postcodeRegEx, $postcode);
  echo '<br/><br/>';
}
echo '<br/>';

// Occurrences of a word in longer pieces of text
$cats = 'Lick plastic bags scratch my tummy actually i hate you now fight me. Curl into a furry donut bathe private parts with tongue then lick owner\'s face but cough hairball, eat toilet paper and sleep all day whilst slave is at work, play all night whilst slave is sleeping and if it fits, i sits. Climb a tree, wait for a fireman jump to fireman then scratch his face making sure that fluff gets into the owner\'s eyes eat and than sleep on your face. Claw drapes somehow manage to catch a bird but have no idea what to do next, so play with it until it dies of shock, so when owners are asleep, cry for no apparent reason and cats secretly make all the worlds muffins. Steal the warm chair right after you get up. If human is on laptop sit on the keyboard try to jump onto window and fall while scratching at wall. Poop in a handbag look delicious and drink the soapy mopping up water then puke giant foamy fur-balls snuggles up to shoulders or knees and purrs you to sleep and nya nya nyan white cat sleeps on a black shirt. Sleep all day whilst slave is at work, play all night whilst slave is sleeping cats woo for cry louder at reflection destroy couch as revenge hide at bottom of staircase to trip human but hide head under blanket so no one can see. Skid on floor, crash into wall swat turds around the house. Meow. Stare out the window making sure that fluff gets into the owner\'s eyes. I could pee on this if i had the energy step on your keyboard while you\'re gaming and then turn in a circle , and cat is love, cat is life or run in circles eat an easter feather as if it were a bird then burp victoriously, but tender so instead of drinking water from the cat bowl, make sure to steal water from the toilet. Floof tum, tickle bum, jellybean footies curly toes plays league of legends. Lie in the sink all day hell is other people. I shredded your linens for you find empty spot in cupboard and sleep all day then cats take over the world dismember a mouse and then regurgitate parts of it on the family room floor kitty power. Stare at the wall, play with food and get confused by dust run up and down stairs yet attempt to leap between furniture but woefully miscalibrate and bellyflop onto the floor; what\'s your problem? i meant to do that now i shall wash myself intently.';
$catNoisesRegEx = '/([Nn]yan?|[Mm]eow|[Pp]urr+)/';
echo '<h1>Cats</h1>';
echo "<p>$cats</p>";
echo 'Cat noises: ' . preg_match_all($catNoisesRegEx, $cats);
echo '<br/><br/>';

echo '<h1>Replace spaces in Cats</h1>';

$catsTruncd = substr($cats, 0, 200);
$catsReplaced = preg_replace('/\s/', '-', $catsTruncd);
echo "<p>$catsReplaced</p>";
echo '<br/><br/>';