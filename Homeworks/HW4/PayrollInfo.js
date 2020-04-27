var hours = 1;
var employee = 1;
var hoursList = [];

while(hours > 0){
    hours = prompt("Enter amount of hours employee " + employee + " worked: ");
    hours = parseInt(hours);
    
    if(hours == -1){
        break;
    }
    
    hoursList.push(hours);
    employee++;
    
}

function calcPay(hours){
    var pay;
    if(hours <=40){
        pay = 15 * hours;
    }
    else{
        pay = (15 * 40) + ((hours-40) * 15 + (hours-40) * 7.5);
    }
    return pay;
}

function totalPay(hoursList){
    var total = 0;
    for(var i = 0; i < hoursList.length;i++){
        total += calcPay(hoursList[i]);
    }
    return total;
}
function makeTable(){
    document.write("<table border=2; bgcolor=#bdd6ff>");
    document.write("<tr>");
    document.write("<td>Employee Number</td>");
    document.write("<td>Hours Worked</td>");
    document.write("<td>Pay</td>");
    document.write("</tr>");
    
    for(var i =0; i < hoursList.length;i++){
        document.write("<tr>");
        document.write("<td>"+i+"</td>");
        document.write("<td>"+hoursList[i]+"</td>");
        document.write("<td>"+calcPay(hoursList[i])+"</td>");
        document.write("</tr>");
    }
    document.write("</table>");
    
    document.write("The total pay of employees: " + totalPay(hoursList));
}