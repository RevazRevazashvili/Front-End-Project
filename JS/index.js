const nightMode=document.getElementById('night');
const dayMode=document.getElementById('day');

function changeNightMode (){
    const paragraph=document.getElementsByClassName('text');
    const temp=document.getElementById('body');
    temp.style.backgroundColor="black";
    for(var i=0;i<7;i++)
    {
        paragraph[i].style.color="white";
    }
}
function changeDayMode (){
    const paragraph=document.getElementsByClassName('text');
    const temp=document.getElementById('body');
    temp.style.backgroundColor="white";
    for(var i=0;i<7;i++)
    {
        paragraph[i].style.color="black";
    }
}

nightMode.addEventListener('click', () => changeNightMode());
dayMode.addEventListener('click', () => changeDayMode());

