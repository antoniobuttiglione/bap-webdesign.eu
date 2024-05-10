<?php

// Strips nasty tags from code..
function cleanEvilTags($data)
{
  $patterns = [
    '/javascript/i' => 'j&#097;v&#097;script',
    '/alert/i' => '&#097;lert',
    '/about:/i' => '&#097;bout:',
    '/onmouseover/i' => '&#111;nmouseover',
    '/onclick/i' => '&#111;nclick',
    '/onload/i' => '&#111;nload',
    '/onsubmit/i' => '&#111;nsubmit',
    '/<body/i' => '&lt;body',
    '/<html/i' => '&lt;html',
    '/document\./i' => '&#100;ocument.',
    '/<script/i' => '&lt;&#115;cript'
  ];

  foreach ($patterns as $pattern => $replacement) {
    $data = preg_replace($pattern, $replacement, $data);
  }

  return strip_tags(trim($data));
}

// Cleans output data..
function cleanData($data)
{
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

function multiDimensionalArrayMap($func, $arr)
{
  $newArr = array();
  if (!empty($arr)) {
    foreach ($arr as $key => $value) {
      $newArr[$key] = (is_array($value) ? multiDimensionalArrayMap($func, $value) : $func($value));
    }
  }
  return $newArr;
}
