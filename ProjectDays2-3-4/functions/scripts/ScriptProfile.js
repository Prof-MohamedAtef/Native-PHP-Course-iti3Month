document.write("<h1>"+"entering user info"+"</h1>");

document.write("<hr/>");
document.write("<br/>");

var eChar = prompt("Enter String including 'e' character");    
var counter = 0;
for(var i = 0;i<eChar.length;i++){
    if(eChar.charAt(i) == "e")
        counter++;
}
document.write("<h1>"+counter+"</h1>");

