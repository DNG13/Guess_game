$(document).ready(function(){
    var url= "test.php";
    $('#yes').click(function(){
        $.getJSON(url, {answer:"yes"}, function(data){
            $("#mid").html(data[0].mid);
            $("#content").html(data[0].win);
        });    
    });
    $('#no').click(function(){
        $.getJSON(url, {answer:"no"}, function(data){
            $("#mid").html(data[0].mid);
            $("#content").html(data[0].win);
        });             
    });
});