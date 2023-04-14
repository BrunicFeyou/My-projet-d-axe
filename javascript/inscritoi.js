const modal_inscription= document.querySelector(".fond-inscription")
const page= document.querySelector(".page")
const like= document.querySelector('.jaime')

if(!isConnected){
page.addEventListener("scroll", function(){
     console.log("je scroll");
     modal_inscription.style.display='block';
     
})
}

