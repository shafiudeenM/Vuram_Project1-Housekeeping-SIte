

document.getElementById("#ironp").style.visibility="hidden"

document.getElementById("#cleanp").style.visibility="hidden"

document.getElementById("#sweepp").style.visibility="hidden"

document.getElementById("#washp").style.visibility="hidden"
const iron= document.getElementById("#iron");
const clean= document.getElementById("#clean");
const wash= document.getElementById("#wash");
const sweep= document.getElementById("#sweep");


function showi()
{  
document.getElementById("#ironp").style.visibility="visible";

}
function showc()
{  
document.getElementById("#cleanp").style.visibility="visible";
}
function showw()
{  
document.getElementById("#washp").style.visibility="visible";
}
function shows()
{  
document.getElementById("#sweepp").style.visibility="visible";
}
function hidei()
{  
document.getElementById("#ironp").style.visibility="hidden";
}
function hidec()
{  
document.getElementById("#cleanp").style.visibility="hidden";
}function hidew()
{  
document.getElementById("#washp").style.visibility="hidden";
}
function hides()
{  
document.getElementById("#sweepp").style.visibility="hidden";
}


iron.addEventListener('mouseenter',showi)
if( iron.addEventListener('mouseleave',hidei));

clean.addEventListener('mouseenter',showc)
if( clean.addEventListener('mouseleave',hidec));

wash.addEventListener('mouseenter',showw)
if( wash.addEventListener('mouseleave',hidew));

sweep.addEventListener('mouseenter',shows)
if( sweep.addEventListener('mouseleave',hides));

