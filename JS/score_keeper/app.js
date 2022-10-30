let p1Point=document.getElementById("p1-point");
let p2Point=document.getElementById("p2-point");
let p1Btn=document.getElementById("p1-btn");
let p2bBtn=document.getElementById("p2-btn");
let p1score=0;
let p2score=0;
const gameOver=5;


p1Btn.addEventListener('click' , function(event){
    AppPoint(1);
    if(p1score >= gameOver){
        endGame();
    }
});

p2bBtn.addEventListener('click' , function(event){
    AppPoint(2);
    if(p2score >= gameOver){
        endGame();
    }
});

document.getElementById("reset").addEventListener("click" , function(){
    p1score=0;
    p2score=0;
    p1Point.textContent=0;
    p2Point.textContent=0;
    p1Btn.disabled=false;
    p2bBtn.disabled=false;
    document.getElementById('winner').style.display="none";
    document.getElementById('player-container').style.backgroundColor="white";
});

// DRY == Don't Repeat Yourself
function AppPoint(player){
    if(player==1){
        if(p2score==0){
            p1score++;
            p1Point.textContent=p1score;
        }else if(p2score==1){
            p2score--;
            p2Point.textContent=p2score;
        }else if(p2score==2){
            p2score--;
            p2Point.textContent=p2score;
        }
        else if(p2score==3){
            p2score--;
            p2Point.textContent=p2score;
        }
        else if(p2score==4){
            p2score--;
            p2Point.textContent=p2score;
        }else{
            p1score++;
            p2score--;
            p1Point.textContent=p1score;
            p2Point.textContent=p2score;
        }
        }else{
            if(p1score==0){
                p2score++;
                p2Point.textContent=p2score;
        }else if(p1score==1){
            p1score--;
            p1Point.textContent=p1score;
        }else if(p1score==2){
            p1score--;
            p1Point.textContent=p1score;
        }else if(p1score==3){
            p1score--;
            p1Point.textContent=p1score;
        }else if(p1score==4){
            p1score--;
            p1Point.textContent=p1score;
        }
        else{
            //App Point To The Score 
            p2score++;
            p1score--;
            //Print The Score On The Player Point Section   
            p1Point.textContent=p1score;
            p2Point.textContent=p2score;
        }
    }}


function endGame(){
        let winnerPlyerName = null ;
    if(p1score > p2score){
        winnerPlyerName = document.getElementById('p1-name').textContent;
    }else{
        winnerPlyerName = document.getElementById('p2-name').textContent;
    }
    document.getElementById('winner-name').textContent=winnerPlyerName;
    document.getElementById('winner').style.display="block";
    document.getElementById('player-container').style.backgroundColor="red";
    document.getElementById('winner').style.backgroundColor="black";
    document.getElementById('winner-winner').style.color="white";
    p1Btn.disabled=true;
    p2bBtn.disabled=true;
}
