<?php

//$string = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?";
$string = "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.";

echo '<h1>Characters:</h1>';
echo strlen($string);
echo '<br>';

echo '<h1>Words:</h1>';
$words = str_word_count($string, 1);
echo count($words);
echo '<br>';

echo '<h1>Sentences:</h1>';
$sentences = preg_split('/(?<!\w\.\w.)(?<![A-Z][a-z]\.)(?<=\.|\?)\s/', $string);
echo count($sentences);
echo '<br>';

echo '<h1>Paragraphs:</h1>';
echo count(
  array_filter(
    explode("\n", $string), 
    function($str) { 
      if ($str != "") { 
        return true; 
      }
    }
  )
);
echo '<br>';
//consider preg_split, uses regex to explode

echo '<h1>Longest word:</h1>';
$longestWord = $words[0];
foreach ($words as $word) {
  if (strlen($word) > strlen($longestWord)) {
    $longestWord = $word;
  }
}
echo $longestWord;
echo '<br>';

echo '<h1>Average sentence length (characters):</h1>';
$sentenceLengths = [];
foreach ($sentences as $sentence) {
  array_push($sentenceLengths, strlen($sentence));
}
echo array_sum($sentenceLengths) / count($sentenceLengths);
echo '<br>';

echo '<h1>Average sentence length (words):</h1>';
$sentenceLengths2 = [];
foreach ($sentences as $sentence) {
  array_push($sentenceLengths2, count(explode(' ', $sentence)));
}
echo array_sum($sentenceLengths2) / count($sentenceLengths2);
echo '<br>';

