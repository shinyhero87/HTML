<?php 
$emotion = "";
$name = "";

//Use of isset to check if variable is not null
//if statements to load variables with values based on return on isset
//pushing values t variable if statement is true


//Determine if a variable is declared
if(isset($_GET["emotion"])) {$emotion = $_GET["emotion"];} 
    else{$emotion = "error";}
//set emotion to sad if value = sad, set name to sad, show emoji
if($emotion == "sad"){
    $emotion = "sad_image.png";
    $name = "sad";
}
//set emotion to happy if value = happy, set name to happy, show emoji
    if ($emotion == "happy"){
        $emotion = "happy_image.png";
        $name = "happy";
    }
    //set emotion to bored if value = bored, set name to bored, show emoji
    if ($emotion == "bored"){
        $emotion = "bored_image.png";
        $name = "bored";
    }
    //set emotion to nervous_laugh if value = nervous_laugh, set name to nervous_laugh, show emoji
    if ($emotion == "nervous_laugh"){
        $emotion = "nervous_laugh.png";
        $name = "nervous_laugh";
    }
    //set emotion to da_bomb if value = da_bomb, set name to da_bomb show emoji
    if ($emotion == "da_bomb"){
        $emotion = "da_bomb.png";
        $name = "da_bomb";
    }

 
          
//print updated variables and show picture on screen
print "
<style>
body{
    background-color: #14B884;

}
h1 {
    font-family: 'Droid Sans', sans-serif;
    font-size: 22px;
    color: #093426;
  
}
img{
    width: 160px; ;
    height: 130px ;
}
</style>

<body>
<h1>Emoji for $name </h1><img src='$emotion'/>
<br><br>


";


print "
</p>
</body>
";
?>