var age = prompt("Enter your age and find out how many days you've been alive");
var days = age * 365;
document.write( age + " years is roughlly " + days + " days");
console.log( age + " years is roughlly " + days + " days");
alert( age + " years is roughlly " + days + " days");

var button = document.querySelector("button");
button.addEventListener("click", function(){
    console.log("somebody have click me!!!!")
    document.write("somebody have click me!!!!")
})