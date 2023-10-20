<?php
function score($score1, $score2, $score3)
{
  $total_score = $score1 + $score2 + $score3;
  if ($total_score > 210) {
    return "合計点は" . $total_score . "なので合格です";
  }
  else {
    return "合計点は" . $total_score . "なので不合格です";
  }
}

$judge = score(70, 60, 70);
echo $judge;