var done = 6; 
var color = randomSelection(done);
var rgb = document.querySelector(".rgb");
var h1 = document.querySelector("h1");
var message = document.querySelector(".message");
var Reset = document.querySelector(".reset");
var Easy = document.querySelector(".easy");
var Hard = document.querySelector(".hard");
// var Diff = document.querySelector(".diff");
var Squares = document.querySelectorAll(".square");
var answer = randomSelect();
 rgb.textContent = answer;

for(i = 0; i < Squares.length; i++){
    Squares[i].style.background = color[i];
    Squares[i].addEventListener("click", function(){
        var clickedColor = this.style.background;
        if(clickedColor === answer){
            coverbg(answer);
            Reset.textContent = "PLAY AGAIN?"
            h1.style.background = answer;
            message.textContent = "Yeah!! you click the right color";
        }
        else{
            this.style.background  = "#232323";
            message.textContent = "Nope!! Try Again"
        }
    })
}

function coverbg(colo){
    for(i =0; i < Squares.length; i++){
        Squares[i].style.background = colo;
    }
}

function randomSelect(){
    var random = Math.floor(Math.random() * color.length);
    return color[random];
}

function randomSelection(num){
    var arr = [];
    for(i = 0; i < num; i++){
        arr.push(finalSelection());
    }
    return arr;
}

function finalSelection(){
    var red = Math.floor(Math.random() * 256);
    var green = Math.floor(Math.random() * 256);
    var blue = Math.floor(Math.random() * 256);
    return "rgb("+red+", "+green+", "+ blue +")";
}

Reset.addEventListener("click", function(){
    color = randomSelection(done);;
    answer = randomSelect();
    Reset.textContent = "NEW COLOR";
    message.textContent = "";
    rgb.textContent = answer;
    for(i = 0; i < Squares.length; i++){
    Squares[i].style.background = color[i];
    }
})

Easy.addEventListener("click", function(){
    Easy.classList.add("style");
    Hard.classList.remove("style");
//    Diff.classList.remove("style");
    Reset.classList.remove("style");
    done = 3;
    color = randomSelection(done);;
    answer = randomSelect();
    Reset.textContent = "NEW COLOR";
    message.textContent = "";
    rgb.textContent = answer;
    for(i = 0; i < Squares.length; i++){
        if(color[i]){
            Squares[i].style.background = color[i];
        }
        else{
            Squares[i].style.display = "none";
        }
    }
})

Hard.addEventListener("click", function(){
    Easy.classList.remove("style");
    Hard.classList.add("style");
//    Diff.classList.remove("style");
    done = 6;
    color = randomSelection(done);;
    answer = randomSelect();
    Reset.textContent = "NEW COLOR";
    message.textContent = "";
    rgb.textContent = answer;
    for(i = 0; i < Squares.length; i++){
          Squares[i].style.background = color[i];
          Squares[i].style.display = "block";
    }
})

//
//Hard.addEventListener("click", function(){
//    Easy.classList.remove("style");
//    Hard.classList.add("style");
//    Diff.classList.remove("style");
//    Reset.classList.remove("style");
//    done = 6;
//    color = randomSelection(done);;
//    answer = randomSelect();
//    Reset.textContent = "NEW COLOR";
//    message.textContent = "";
//    rgb.textContent = answer;
//    for(i = 0; i < Squares.length; i++){
//        if(color[i]){
//            Squares[i].style.background = color[i];
//        }
//        else if(color[i]){
//            Squares[i].style.display = "block";   
//        }
//        else{
//            Squares[i].style.display = "none";
//        }
//    }
//})
//
//Diff.addEventListener("click", function(){
//     Easy.classList.remove("style");
//    Hard.classList.remove("style");
//    Diff.classList.add("style");
//    Reset.classList.remove("style");
//    done = 9;
//    color = randomSelection(done);;
//    answer = randomSelect();
//    Reset.textContent = "NEW COLOR";
//    message.textContent = "";
//    rgb.textContent = answer;
//    for(i = 0; i < Squares.length; i++){
//            Squares[i].style.background = color[i];
//            Squares[i].style.display = "block";
//    }
//})



