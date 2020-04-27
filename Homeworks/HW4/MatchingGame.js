var size = parseInt(prompt("How many tiles would you like for this game (8, 10, or 12)?"));
var difficulty = parseInt(prompt("Select how long you want images to stay flipped at the start (3, 5, or 8 seconds)"));
var tileArray  = [];
var tileValues = [];
var tileId =[];
var flipped = 0;


makeTable(size);
function makeTable(num){
    if(num == 10){
        tileArray  = ["1", "1", "2", "2", "3", "3", "4","4","5","5"];
        tileShuffle(tileArray);
        document.write("<table class='matchingTable'>");
        //First Row
        document.write("<tr class = 'matchingTr'>");
        for(var i =0; i < 5; i++){
            document.write("<td class = 'matchingTd'>" + tileArray[i] + "</td>");
        }
        document.write("</tr>");
        
        //Second Row
        document.write("<tr class = 'matchingTr'>");
        for(var i = 5; i < 10;i++){
            document.write("<td class = 'matchingTd'>" + tileArray[i] + "</td>");
        }
        document.write("</tr>");
        
        document.write("</table>");
    }else if(num == 8){
        tileArray  = ["1", "1", "2", "2", "3", "3", "4","4"];
        tileShuffle(tileArray);
        document.write("<table class='matchingTable'>");
        
        //First Row
        document.write("<tr class = 'matchingTr'>");
        for(var i =0; i < 4; i++){
            document.write("<td class = 'matchingTd'>" + tileArray[i] + "</td>");
        }
        document.write("</tr>");
        
        //Second Row
        document.write("<tr class = 'matchingTr'>");
        for(var i = 4; i < 8;i++){
            document.write("<td class = 'matchingTd'>" + tileArray[i] + "</td>");
        }
        document.write("</tr>");
        
        document.write("</table>");
    }else if(num == 12){
        tileArray  = ["1", "1", "2", "2", "3", "3", "4","4","5","5","6","6"];
        tileShuffle(tileArray);
        document.write("<table class='matchingTable'>");
        
        //First Row
        document.write("<tr class = 'matchingTr'>");
        for(var i =0; i < 4; i++){
            document.write("<td class = 'matchingTd'>" + tileArray[i] + "</td>");
        }
        document.write("</tr>");
        
        //Second Row
        document.write("<tr class = 'matchingTr'>");
        for(var i = 4; i < 8;i++){
            document.write("<td class = 'matchingTd'>" + tileArray[i] + "</td>");
        }
        document.write("</tr>");
        
        //Third Row
        document.write("<tr class = 'matchingTr'>");
        for(var i = 8; i < 12;i++){
            document.write("<td class = 'matchingTd'>" + tileArray[i] + "</td>");
        }
        document.write("</tr>");
        
        document.write("</table>");
    }
}

//Function to shuffle tiles
function tileShuffle(array){
    var i = array.length, random, temp;
    
    while(i != 0){
        random = Math.floor(Math.random() * i);
        i -= 1;
        
        temp = array[i];
        array[i] = array[random];
        array[random] = temp;
    }
}

//Function to flip tiles
function flipTiles(array, tile, num){
    if(tile.innerHTML == "" && tileValues.length < 2){
        tile.style.background = "#ffe6cc";
        tile.innerHTML = num;
        if(tileValues.length == 0){
           tileValues.push(num);
           tileId.push(tile.id);
        }else if(tileValues.length == 1){
            tileValues.push(num);
            tileId.push(tile.id);
            
            if(tileValues[0] == tileValues[1]){
                flipped += 2;
                tileValues = [];
                tileId = [];
                if(flipped == array.length){
                    alert("You Won!");
                }
                else{
                    flipBack();
                    setTimeout(flipBack,500);
                }
            }
        }
    }
}

//function to flip two tiles back
function flipBack(){
    var tile1 = document.getElementById(tileId[0]);
    var tile2 = document.getElementById(tileId[1]);
    tile_1.style.background = 'url(tile_bg.jpg) no-repeat';
    tile_1.innerHTML = "";
    tile_2.style.background = 'url(tile_bg.jpg) no-repeat';
    tile_2.innerHTML = "";
    memory_values = [];
    memory_tile_ids = [];
}