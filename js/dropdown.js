
var buttons = document.getElementsByClassName("dropmenu");

for (var i = 0; i < buttons.length; i++){
    buttons[i].onclick = function(){
        var content = this.nextElementSibling;
        if(content.style.maxHeight){
            content.style.maxHeight = null;
        }else{
            content.style.maxHeight = content.scrollHeight + "px";
        }
    }
}