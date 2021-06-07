<?php
    $message1 = "0@sn9sirppa@#?ia'jgtvryko1";
    $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
    $message3 = "aopi?sgnirts@#?sedhtg+p9l!";
    
        $lenghtMess1 = strlen($message1) /2;     
        $subChain1 = substr($message1 , 5 , $lenghtMess1);
        $spaceMess1 = str_replace("@#?", " ", $subChain1);            
        $rev1 =strrev ($spaceMess1);
        echo $rev1;

            $lenghtMess2 = strlen($message2) /2;
            $subChain2 = substr($message2 , 5 , $lenghtMess2);
            $spaceMess2 = str_replace("@#?", " ", $subChain2);
            $rev2 =strrev ($spaceMess2);
            echo $rev2;

                $lenghtMess3 = strlen($message3) /2;
                $subChain3 = substr($message3 , 5 , $lenghtMess3);
                $spaceMess3 = str_replace("@#?", " ", $subChain3);
                $rev3 =strrev ($spaceMess3);
                echo $rev3;
?>


