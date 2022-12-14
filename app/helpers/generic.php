<?php

function string_contains($haystack, $needle)
{
    return strpos($haystack, $needle) !== false;
}

function paramsFromUrl($key)
{
    if ($key) return isset($_GET[$key]) ? $_GET[$key] : null;
    else return null;
}

function isSelect($variableValue, $value)
{
    if ($variableValue === $value) return 'selected';
    return '';
}

function isSelectArray($array, $value)
{
    if (!is_null($array)) {
        if (in_array($value, $array)) return 'selected';
    }
    return '';
}



function getFile($file)
{
    return $_FILES[$file];
}




function randomPassword()
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


function queryParam($key)
{
    if (isset($_GET[$key])) return $_GET[$key];
    else return null;
}

function timestampToDateBR($value)
{
    $data = explode(' ', $value);
    return implode('/', array_reverse(explode('-', $data[0])));
}

function timestampToDateBRAndTime($value)
{
    $data = explode(' ', $value);
    return implode('/', array_reverse(explode('-', $data[0]))) . " {$data[1]}";
}

function timestampAddDays($value, $days)
{
    return date('Y-m-d H:i:s', strtotime($value . " + {$days} day"));
}




function fillContentEmail($typeEmail, $values)
{
    $content = '';
    if (strtolower($typeEmail) === 'register') $content = file_get_contents(route('public/templates/email_register.html'));
    $keys = array_keys($values);
    $values = array_values($values);
    $content = str_replace($keys, $values, $content);
    return $content;
}


function isUrl($url)
{

    if ($position = strpos($url, '*')) {
        $newUrl = substr($url, 0, ($position - 1));
        if (strpos($_SERVER['REQUEST_URI'], $newUrl)) return true;
    }

    $findParams = strpos($_SERVER['REQUEST_URI'], '?');
    if ($findParams) $uri = substr($_SERVER["REQUEST_URI"], 0, $findParams);
    else $uri = $_SERVER['REQUEST_URI'];

    return $url === $uri;
}

function monthNameByNumber($monthInNumber)
{
    return ucfirst(strftime("%B", strtotime("01-{$monthInNumber}-2022")));
}


function slugify($text, $length = null)
{
    $replacements = [
        '<' => '', '>' => '', '-' => ' ', '&' => '', '"' => '', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'Ae', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'Ae', '??' => 'C', "'" => '', '??' => 'C', '??' => 'C', '??' => 'C', '??' => 'C', '??' => 'D', '??' => 'D', '??' => 'D', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'G', '??' => 'G', '??' => 'G', '??' => 'G', '??' => 'H', '??' => 'H', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'IJ', '??' => 'J', '??' => 'K', '??' => 'L', '??' => 'L', '??' => 'L', '??' => 'L', '??' => 'L', '??' => 'N', '??' => 'N', '??' => 'N', '??' => 'N', '??' => 'N', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'Oe', '??' => 'Oe', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'OE', '??' => 'R', '??' => 'R', '??' => 'R', '??' => 'S', '??' => 'S', '??' => 'S', '??' => 'S', '??' => 'S', '??' => 'T', '??' => 'T', '??' => 'T', '??' => 'T', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'Ue', '??' => 'U', '??' => 'Ue', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'W', '??' => 'Y', '??' => 'Y', '??' => 'Y', '??' => 'Z', '??' => 'Z', '??' => 'Z', '??' => 'T', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'ae', '??' => 'ae', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'ae', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'd', '??' => 'd', '??' => 'd', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'f', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'h', '??' => 'h', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'ij', '??' => 'j', '??' => 'k', '??' => 'k', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'oe', '??' => 'oe', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'oe', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 's', '??' => 's', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'ue', '??' => 'u', '??' => 'ue', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'w', '??' => 'y', '??' => 'y', '??' => 'y', '??' => 'z', '??' => 'z', '??' => 'z', '??' => 't', '??' => 'a', '??' => 'ss', '???' => 'b', '??' => 'ss', '????' => 'iy', '??' => 'A', '??' => 'B', '??' => 'V', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'YO', '??' => 'ZH', '??' => 'Z', '??' => 'I', '??' => 'Y', '??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => 'O', '??' => 'P', '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'U', '??' => 'F', '??' => 'H', '??' => 'C', '??' => 'CH', '??' => 'SH', '??' => 'SCH', '??' => '', '??' => 'Y', '??' => '', '??' => 'E', '??' => 'YU', '??' => 'YA', '??' => 'a', '??' => 'b', '??' => 'v', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'yo', '??' => 'zh', '??' => 'z', '??' => 'i', '??' => 'y', '??' => 'k', '??' => 'l', '??' => 'm', '??' => 'n', '??' => 'o', '??' => 'p', '??' => 'r', '??' => 's', '??' => 't', '??' => 'u', '??' => 'f', '??' => 'h', '??' => 'c', '??' => 'ch', '??' => 'sh', '??' => 'sch', '??' => '', '??' => 'y', '??' => '', '??' => 'e', '??' => 'yu', '??' => 'ya', '.' => '-', '???' => '-eur-', '$' => '-usd-'
    ];
    // Replace non-ascii characters
    $text = strtr($text, $replacements);
    // Replace non letter or digits with "-"
    $text = preg_replace('~[^\pL\d.]+~u', '-', $text);
    // Replace unwanted characters with "-"
    $text = preg_replace('~[^-\w.]+~', '-', $text);
    // Trim "-"
    $text = trim($text, '-');
    // Remove duplicate "-"
    $text = preg_replace('~-+~', '-', $text);
    // Convert to lowercase
    $text = strtolower($text);
    // Limit length
    if (isset($length) && $length < strlen($text))
        $text = rtrim(substr($text, 0, $length), '-');

    return $text;
}

function array_slugify($array)
{
    $arraySlugify = [];
    foreach ($array as $value) {
        $arraySlugify[] = slugify($value);
    }
    return $arraySlugify;
}



function array_only($array, $keys)
{
    $return = [];
    foreach ($keys as $key) {
        $return[$key] = $array[$key];
    }
    return $return;
}

function array_only_one($array, $key)
{
    if (isset($array[$key])) return $array[$key];
    else return [];
}


function array_excepts($array, $keys)
{
    $return = [];
    foreach ($array as $key => $value) {
        if (!in_array($key, $keys)) $return[$key] = $array[$key];
    }
    return $return;
}



function numberBR(string $value = null)
{
    if (!$value) return 0;
    return number_format($value, 2, ',', '.');
}

function removeMoneySimbol(string $string = null)
{
    if (!$string) return  null;
    return str_replace('R$ ', '', $string);
}


function brNumberToEn(string $string  = null)
{
    if(!$string) return null;
    return str_replace(['.', ','], ['', '.'], $string);
}
