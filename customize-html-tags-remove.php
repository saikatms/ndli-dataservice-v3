<?php
$srts=array("Publisher varies: Noyes, Baker & Co., <1867>; Evening Star Newspaper Co., <1868->",
'<div class ="sasa" id="sajsagkh" sytle>dsds</div>',
'<label for="err_email">Page address:</label>');
$htmlElements=array("!--...--","!DOCTYPE ","a","abbr","acronym","address","applet","area","article","aside","audio","b","base","basefont","bdi","bdo","big","blockquote","body","br","button","canvas","caption","center","cite","code","col","colgroup","data","datalist","dd","del","details","dfn","dialog","dir","div","dl","dt","em","embed","fieldset","figcaption","figure","font","footer","form","frame","frameset","h1","h2","h3","h4","h5","h6","head","header","hr","html","i","iframe","img","input","ins","kbd","label","legend","li","link","main","map","mark","meta","meter","nav","noframes","noscript","object","ol","optgroup","option","output","p","param","picture","pre","progress","q","rp","rt","ruby","s","samp","script","section","select","small","source","span","strike","strong","style","sub","summary","sup","svg","table","tbody","td","template","textarea","tfoot","th","thead","time","title","tr","track","tt","u","ul","var","video","wbr");
foreach($srts as $str){    
    $str=preg_replace("/((<\/)\w+(>))/","",$str);//Eleminate endind html tags
    $re="/<.+?>/m";
    preg_match_all($re, $str, $matches);
    $matches=array_unique($matches[0]);
    foreach($matches as $matche)    {
        preg_match("/<(\w+)[^>]*>/",$matche,$tags);
        // print_r($tags);
        if(in_array($tags[1],$htmlElements)){
            $str=str_replace($tags[0],"",$str);
            echo PHP_EOL;
        }
    }
    print_r($str);
}
