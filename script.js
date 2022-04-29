window.addEventListener("load", myInit, true); function myInit(){OnStart()};
         function OnStart(){
             //Background
            const body = document.querySelector("body");
            const RandomInt = Math.floor(Math.random() * 15);
            const ColorArr = [[59,53,46],[60, 60, 60],[140, 111, 88],[85, 91, 107],[16, 16, 31],[56, 45, 59],[26, 41, 26],[122, 107, 77],[196, 185, 161],[22, 31, 46],[50, 51, 56],[92, 87, 70],[71, 74, 92],[36, 33, 28],[77, 61, 40]];
            body.style.backgroundImage = `linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgb(${ColorArr[RandomInt][0]}, ${ColorArr[RandomInt][1]}, ${ColorArr[RandomInt][2]}) 55vw), url('images/Background/Background${RandomInt+1}.jpg')`;
        }