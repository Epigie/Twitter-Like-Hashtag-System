<?php
if(!function_exists("linkToHashtags"))
{
    function linkToHashtags($text)
    {
        $words = explode(" ",$text);
        $string = "";
        
        foreach($words as $word)
        {
            /**
            *Check if beginning of word starts with a hashtag
            */
            if(isset($word[0]) && trim($word[0]) === "#")
            {
                $string .= "<a href='search.php?hashtag=".substr($word,1)."'>".$word."</a> ";
            }else {
                $string .= $word." ";
            }
        }
        
        return $string;
    }
}
