const beige= document.getElementById('be')
const orange= document.getElementById('or')
const jaune= document.getElementById('ja')
const bleu= document.getElementById('bl')
const rouge= document.getElementById('ro')
const marron= document.getElementById('ma')
const blanc= document.getElementById('bla')
const vert= document.getElementById('ve')
const noir= document.getElementById('no')
const gris= document.getElementById('gr')

const addPost= document.getElementById('forms-pub')
const navBar= document.querySelector('.navbar-vertical')
const btnNav= document.querySelectorAll('.btn-nav')
const tags= document.querySelectorAll('.btn-tags')



 const bisque= beige.addEventListener('click', function(){
    
    if (beige.style.background!= 'bisque'){
        removeBg()
        beige.style.background= 'bisque'
        addPost.style.background='bisque'
        navBar.style.background='bisque'
        
        
      } else {
        beige.style.background= ''
        addPost.style.background=''
        navBar.style.background=''
        
       
      }
   
    })  

   const orangy=  orange.addEventListener('click', function(){
        if (orange.style.background!= 'orange'){
            removeBg()
            orange.style.background= 'orange'
            addPost.style.background='orange'
            navBar.style.background='orange'
           
          } else {
            orange.style.background= ''
            addPost.style.background=''
            navBar.style.background=''
            
          }
       
        })  

const yellow= jaune.addEventListener('click', function(){
    if (jaune.style.background!= 'yellow'){
        removeBg()
        jaune.style.background= 'yellow'
        addPost.style.background='yellow'
        navBar.style.background='yellow'
        
      } else {
        jaune.style.background= ''
        addPost.style.background=''
        navBar.style.background=''
        
        
      }
   
    })  

const bleue= bleu.addEventListener('click', function(){
    if (bleu.style.background!= 'blue'){
        removeBg()
        bleu.style.background= 'blue'
        addPost.style.background='blue'
        navBar.style.background='blue'
        
      } else {
        bleu.style.background= ''
        addPost.style.background=''
        navBar.style.background=''
        
      }
   
    }) 

             
           
 const red= rouge.addEventListener('click', function(){
    if (rouge.style.background!= 'red'){
        removeBg()
        rouge.style.background= 'red'
        addPost.style.background='red'
        navBar.style.background="red"
        
      } else {
        rouge.style.background= ''
        addPost.style.background=''
        navBar.style.background=""
        
      }
   
    }) 

const brown=  marron.addEventListener('click', function(){
     if (marron.style.background!= 'brown'){
        removeBg()
         marron.style.background= 'brown'
         addPost.style.background='brown'
         navBar.style.background='brown'
         
       } else {
         marron.style.background= ''
         addPost.style.background=''
         navBar.style.background=''
         
       }
    
     }) 

const white=  blanc.addEventListener('click', function(){
    if (blanc.style.background!= 'rgb(180, 180, 180)'){
        removeBg()
        blanc.style.background= 'rgb(180, 180, 180)'
        addPost.style.background='rgb(198, 197, 197)'
        navBar.style.background='rgb(198, 197, 197)'
        
      } else {
        blanc.style.background= ''
        addPost.style.background=''
        navBar.style.background=''
        
      }
   
    }) 

    const green=  vert.addEventListener('click', function(){
        if (vert.style.background!= 'green'){
            removeBg()
            vert.style.background= 'green'
            addPost.style.background='green'
            navBar.style.background='green'
            
          } else {
            vert.style.background= ''
            addPost.style.background=''
            navBar.style.background=''
            
          }
       
        }) 

    const blac=  noir.addEventListener('click', function(){
        if (noir.style.background!= 'black'){
            removeBg()
            noir.style.background= 'black'
            addPost.style.background='black'
            navBar.style.background='black'
            
          } else {
            noir.style.background= ''
            addPost.style.background=''
            navBar.style.background=''
            
          }
       
        }) 

    const gray=  gris.addEventListener('click', function(){
        if (gris.style.background!= 'gray'){
            removeBg()
            gris.style.background= 'gray'
            addPost.style.background='gray'
            navBar.style.background='gray'
            
          } else {
            gris.style.background= ''
            addPost.style.background=''
            navBar.style.background=''
            
          }
       
        }) 


//console.log(document.querySelectorAll('.btn-tags, #forms-pub'))
function removeBg() {
    document.querySelectorAll('.btn-tags, #forms-pub, .navbar-vertical').forEach(
        function(item) {
            item.style.background = ''
        }
    )
}