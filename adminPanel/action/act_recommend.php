<?php
session_start();
$con= mysqli_connect('localhost', 'root', '', 'hmspatient');

if(isset($_POST['problem'])){
   $problem=$_POST['problem'];
   if($problem!=null){
    
    $keywords = keywordsParser($problem);
    $suggestion = recommendationEngine($con,$keywords);
    echo json_encode($suggestion);
   }
}


// recommendation algorithm implementation
function keywordsParser($problem){
    //Dictionary of different structure of words to filter out 
    //ADD AS NEEDED ----------BUT USE CAPITAL LETTERS -------------->>
    $pronouns = ['I','HE','SHE','THEY','IT','WE'];
    $verbs =['HAVE','FEEL'];
    $punctuations = ['!','.'];
    $others = ['THE','A','TOO','VERY','PROBLEM','ALSO', 'PAIN'];

    // ---------------------- recommendation algorithm  ---->
    $problem = strtoupper($problem);// converting it to uppercase
    $keywords=[]; //store final keywords

    // Assuming the patient will give us his/her problem in a paragraph 

    //Step 1: split paragraph into array of sentences sentences[0] sentences[1] , ...
    $sentences = splitSentences($problem);

    foreach ($sentences as $key => $singlesentence) {
        //Step 2: Split sentences into words
        $words[$key] = explode(" ", $singlesentence); // words[0]= array of words of sentence[0] , ...
        //Step 3: check and exclude out pronouns
         $keywords[$key]='';
        foreach ($words[$key] as $wordcount=>$singleword) {
            if($wordcount==sizeof($words[$key])-1){
                $singleword = explode(".", $singleword);
                $singleword = $singleword[0];
            }
            //perform different filtering techniques
            if(!in_array($singleword, $pronouns) && !in_array($singleword, $verbs) && !in_array($singleword, $punctuations)&& !in_array($singleword, $others)){

                $keywords[$key]=$keywords[$key].$singleword." "; //add keyword after filtering with space
            }
        }
        $keywords[$key]=trim($keywords[$key]);

    }

    return $keywords; 
}


// recommendation engine that generates suggestion from given keywords

function recommendationEngine($con,$keywords){
    $probability=[];
    foreach ($keywords as $key => $value) {
        $query="select specialization from recommendation where keywords like '%$value%'";
        $result= mysqli_query($con, $query);
        if($result){
            $data = $result->fetch_array();

            if($data['specialization']!=''){
                if(!isset($probability[$data['specialization']])) 
                    $probability[$data['specialization']]=1;
                else
                $probability[$data['specialization']]++;
            }
        }
    }
    //return doctor type with greatest probability 
    if($probability){
    return array_keys($probability, max($probability));
    }else return "false";
}



// function to split paragraph into sentences
function splitSentences($text) {
    $re = '/# Split sentences on whitespace between them.
        (?<=                # Begin positive lookbehind.
          [.!?]             # Either an end of sentence punct,
        | [.!?][\'"]        # or end of sentence punct and quote.
        )                   # End positive lookbehind.
        (?<!                # Begin negative lookbehind.
          Mr\.              # Skip either "Mr."
        | Mrs\.             # or "Mrs.",
        | Ms\.              # or "Ms.",
        | Jr\.              # or "Jr.",
        | Dr\.              # or "Dr.",
        | Prof\.            # or "Prof.",
        | Vol\.             # or "Vol.",
        | A\.D\.            # or "A.D.",
        | B\.C\.            # or "B.C.",
        | Sr\.              # or "Sr.",
        | T\.V\.A\.         # or "T.V.A.",
                            # or... (you get the idea).
        )                   # End negative lookbehind.
        \s+                 # Split on whitespace between sentences.
        /ix';

    $sentences = preg_split($re, $text, -1, PREG_SPLIT_NO_EMPTY);
    return $sentences;
}

