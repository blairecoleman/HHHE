$.getJSON("../JSON/about.json", function(about){

//$("#callact").html(data.heading);
var head = document.getElementById('callact');
head.innerHTML = about.heading;
//$("#mission").html(data.paragraph);
//$("#quote1").html(data.quote);




});


//var output = document.getElementById('quote1');
//output.innerHTML = 'testing';