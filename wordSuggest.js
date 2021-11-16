$(start);

function start(){
    $("#myReading").on("keyup",InputHasChanged);
}

function InputHasChanged(){
    //alert("We will give you suggestions");
   // $("#Suggestions").html("We will give you suggestions (you are typing)")
   $("#Suggestions").load("wordSuggest.php");
}