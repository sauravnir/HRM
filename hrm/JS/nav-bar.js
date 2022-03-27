let clicked=false
document.getElementById("toggle").addEventListener("click",function(){
    if (clicked == false){
                document.getElementsByClassName("leftSidebar")[0].style.width = "0"
                document.getElementsByClassName("leftSidebar")[0].style.display = "none"
                document.getElementsByClassName("main-container")[0].style.width = "100%"
                clicked=true
            }
            else if(clicked==true){

                document.getElementsByClassName("leftSidebar")[0].style.width = "300px"
                document.getElementsByClassName("leftSidebar")[0].style.display = "block"
                document.getElementsByClassName("main-container")[0].style.width = "calc(100% - 300px)"
 
                clicked=false
            }
})