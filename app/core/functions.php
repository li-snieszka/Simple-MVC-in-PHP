<?php
function show($thingsToShow)
{
    echo "<pre>";
    print_r($thingsToShow);
    echo "</pre>";
}

function esc($str)
{
    return htmlspecialchars($str);
}

function redirect($path)
{
	header("Location: " . ROOT."/".$path);
	die;
}