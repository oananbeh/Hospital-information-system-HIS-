<?php
function getdata()
{
    $contents = "<table><tr><td>Row 1 Column 1</td><td>Row 1 Column 2</td></tr><tr><td>Row 2 Column 1</td><td>Row 2 Column 2</td></tr></table>";
    $DOM = new DOMDocument;
    $DOM->loadHTML($contents);
     
    $items = $DOM->getElementsByTagName('tr');

    function tdrows($elements)
    {
        $str = "";
        foreach ($elements as $element)
        {
            $str .= $element->nodeValue . ", ";
        }
        return $str;
    }
    foreach ($items as $node)
    {
        echo tdrows($node->childNodes) . "<br />";
    }
}
getdata();
?>
