/*
442
p1 - 604,493
p2 - 890,416
p3 - 714,430
p4 - 495,430
p5 - 309,416
p6 - 891,257
p7 - 715,278
p8 - 495,278
p9 - 309,257
p10 - 697,136
p11 - 508,136
*/

var pl = new Array(11);
for (var i = 0; i < pl.length; i++) {
  pl[i] = new Array(2);
}

pl[0][0] = 604;
pl[0][1] = 493;

pl[1][0] = 890;
pl[1][1] = 416;

pl[2][0] = 714;
pl[2][1] = 430;

pl[3][0] = 495;
pl[3][1] = 430;

pl[4][0] = 309;
pl[4][1] = 416;

pl[5][0] = 891;
pl[5][1] = 257;

pl[6][0] = 715;
pl[6][1] = 278;

pl[7][0] = 495;
pl[7][1] = 278;

pl[8][0] = 309;
pl[8][1] = 257;

pl[9][0] = 697;
pl[9][1] = 136;

pl[10][0] = 508;
pl[10][1] = 136;

var c = document.getElementById("chem-lines");
var ctx = c.getContext("2d");
ctx.strokeStyle = "#53607b";
ctx.lineWidth = 3;

//1-3
ctx.moveTo(pl[0][0],pl[0][1]);
ctx.lineTo(pl[2][0],pl[2][1]);
ctx.stroke();
//1-4
ctx.moveTo(pl[0][0],pl[0][1]);
ctx.lineTo(pl[3][0],pl[3][1]);
ctx.stroke();
//2-3
ctx.moveTo(pl[1][0],pl[1][1]);
ctx.lineTo(pl[2][0],pl[2][1]);
ctx.stroke();
//2-6
ctx.moveTo(pl[1][0],pl[1][1]);
ctx.lineTo(pl[5][0],pl[5][1]);
ctx.stroke();
//3-4
ctx.moveTo(pl[2][0],pl[2][1]);
ctx.lineTo(pl[3][0],pl[3][1]);
ctx.stroke();
//3-7
ctx.moveTo(pl[2][0],pl[2][1]);
ctx.lineTo(pl[6][0],pl[6][1]);
ctx.stroke();
//4-5
ctx.moveTo(pl[3][0],pl[3][1]);
ctx.lineTo(pl[4][0],pl[4][1]);
ctx.stroke();
//4-8
ctx.moveTo(pl[3][0],pl[3][1]);
ctx.lineTo(pl[7][0],pl[7][1]);
ctx.stroke();
//5-9
ctx.moveTo(pl[4][0],pl[4][1]);
ctx.lineTo(pl[8][0],pl[8][1]);
ctx.stroke();
//6-7
ctx.moveTo(pl[5][0],pl[5][1]);
ctx.lineTo(pl[6][0],pl[6][1]);
ctx.stroke();
//6-10
ctx.moveTo(pl[5][0],pl[5][1]);
ctx.lineTo(pl[9][0],pl[9][1]);
ctx.stroke();
//7-8
ctx.moveTo(pl[6][0],pl[6][1]);
ctx.lineTo(pl[7][0],pl[7][1]);
ctx.stroke();
//7-10
ctx.moveTo(pl[6][0],pl[6][1]);
ctx.lineTo(pl[9][0],pl[9][1]);
ctx.stroke();
//8-9
ctx.moveTo(pl[7][0],pl[7][1]);
ctx.lineTo(pl[8][0],pl[8][1]);
ctx.stroke();
//8-11
ctx.moveTo(pl[7][0],pl[7][1]);
ctx.lineTo(pl[10][0],pl[10][1]);
ctx.stroke();
//9-11
ctx.moveTo(pl[8][0],pl[8][1]);
ctx.lineTo(pl[10][0],pl[10][1]);
ctx.stroke();
//10-11
ctx.moveTo(pl[9][0],pl[9][1]);
ctx.lineTo(pl[10][0],pl[10][1]);
ctx.stroke();
