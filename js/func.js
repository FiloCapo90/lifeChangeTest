/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */



document.getElementById("launch").addEventListener("click",test);

function test(){
    let dicetype = document.getElementById("diceTypes").value;
    let launchnum = document.getElementById("launchNum").value;
    document.getElementById("result").innerHTML = dicetype.concat(" ",launchnum);
}
