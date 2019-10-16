<?php

function a($i) {
  if($i < 1000) {
    a($i+1);
  }
  echo 1000-abs($i) . "<br>";
}
a(-1000);

// 100 chars