$maxRange = 6;
$multi = 0.1;
$OldPosX = 0;
$OldPosY = 0;
$PositionY = -5;
$PositionX = -5;
$img = document.getElementById("Image");

function moveMouse() {
  CursorX = event.clientX;
  CursorY = event.clientY;

  if ($OldPosX <= CursorX) {
    $PositionX = $PositionX + $multi * 1;
  } else {
    $PositionX = $PositionX - $multi * 1;
  }

  if ($PositionX >= $maxRange || $PositionX <= -$maxRange) {
    if ($PositionX >= $maxRange) {
      $PositionX = $maxRange;
    } else {
      $PositionX = -$maxRange;
    }
  }

  $OldPosX = CursorX;

  if ($OldPosY <= CursorY) {
    $PositionY = $PositionY + $multi * 1;
  } else {
    $PositionY = $PositionY - $multi * 1;
  }

  if ($PositionY >= $maxRange || $PositionY <= -$maxRange) {
    if ($PositionY >= $maxRange) {
      $PositionY = $maxRange;
    } else {
      $PositionY = -$maxRange;
    }
  }

  $OldPosY = CursorY;
  $img.style.transform =
    "translateY(" + $PositionY + "%) translateX(" + $PositionX + "%)";
}
