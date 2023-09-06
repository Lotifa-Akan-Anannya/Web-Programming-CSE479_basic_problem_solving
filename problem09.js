function changeBackgroundColor(elementId,newcolor){
    const element=document.getElementById(elementId);
    if(element){
        element.addEventListener("mouseEnters",()=>{
            element.style.backgroundcolor=newcolor;
        })
    }
}

