<?php
function getCost($volume) {
  if (!is_int($volume) || $volume <= 0) {
    return false;
  }
  if ($volume > 500) {
    return $volume * 0.8;
  }
  if ($volume <= 100) {
    return $volume * 1;
  }
  if ($volume <= 150) {
    return 100 + ($volume - 100) * 0.98;
  }
  if ($volume <= 175) {
    return 100 + 50 * 0.98 + ($volume - 150) * 0.95;
  }
  if ($volume <= 200) {
    return 100 + 50 * 0.98 + 25 * 0.95 + ($volume - 175) * 0.90;
  }
  return 100 + 50 * 0.98 + 25 * 0.95 + 25 * 0.90 + ($volume - 200) * 1;
}