var random = Math.floor(Math.random() * 101);
var limit = 10;
var numberOfGuesses = 0;

function refresh(){
    random = Math.floor(Math.random() * 101);
    numberOfGuesses=0;
    document.getElementById("guesses").innerHTML = "Guesses made: " + numberOfGuesses;
}

function time(){
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    
    hours = subtwelve(hours)
    minutes = addZero(minutes);
    document.getElementById("time").innerHTML = hours + ":" + minutes;
}
function subtwelve(num){
    if(num > 12){
        num = num - 12;
    }
    return num;
}
function addZero(num){
    if(num < 10){
        num= "0" + num;
    }
    return num;
}

function hint(){
    var num = document.getElementById("number").value;
    document.getElementById("num").innerHTML = random;
    if(numberOfGuesses < limit - 1){
       if(num < random){
            document.getElementById("error").innerHTML = "Your Guess is too low!";
            numberOfGuesses++;
            document.getElementById("guesses").innerHTML = "Guesses made: " + numberOfGuesses;
        }
        else if(num > random){
            document.getElementById("error").innerHTML = "Your Guess is too high!";
            numberOfGuesses++;
            document.getElementById("guesses").innerHTML = "Guesses made: " + numberOfGuesses;
        }
        else if( num == random){
            document.getElementById("error").innerHTML = "Correct! Good job!";
            refresh();
        }
    }
    else{
        if(num == random){
            document.getElementById("error").innerHTML = "Correct! Good job!";
            refresh();
        }
        else{
            alert("You used up all your guesses!");
            numberOfGuesses = 0;
            document.getElementById("number").value = 0;
            refresh();
        }
    }
}