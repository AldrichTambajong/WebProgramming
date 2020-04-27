var fs = require('fs');
var readStream = fs.createReadStream('./demofile1.txt');

/*fs.appendFile('mynewFile.txt','Hello content!' ,function(err){
    if(err)throw err;
    console.log('Saved!');
});*/
/*fs.open('mynewFile1.txt','w',function(err,file){
    if(err)throw err;
    console.log('Saved!');
});*/

readStream.on('open',function(){
    console.log('File is open');
});