window.addEventListener("load", myInit, true); function myInit(){OnStart()};
         function OnStart(){
             //Background
            const body = document.querySelector("body");
            const RandomInt = Math.floor(Math.random() * 8);
            const ColorArr = [[245,246,252,59,53,46],[145,145,145,60, 60, 60]];
            body.style.backgroundImage = `linear-gradient(to bottom, rgba(${ColorArr[RandomInt][0]}, ${ColorArr[RandomInt][1]}, ${ColorArr[RandomInt][2]}, 0) 0%, rgb(${ColorArr[RandomInt][3]}, ${ColorArr[RandomInt][4]}, ${ColorArr[RandomInt][5]}) 55vw), url('images/Background/Background${RandomInt+1}.jpg')`;
        }