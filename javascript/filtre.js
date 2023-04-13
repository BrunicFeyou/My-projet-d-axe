const btnfiltre= document.querySelectorAll('.btn-tags')
const post= document.querySelectorAll(".carte-publication-texte")

console.log(post);

btnfiltre.forEach(function(tag){
    tag.addEventListener('click', function(){
        const data_tag= tag.getAttribute("data-tag") 
               console.log(data_tag);
               post.forEach(function(tweet, key){ 
                const egalite= data_tag !== key
                if (egalite){
                    tweet.style.display= 'none'
                    console.log(tweet)
                } else {
                    tweet.style.display= 'block'
                }
                
               }) 
    })
})


// à chaque fois qu'on  click sur un tag les tags correspondant s'affiche
//un tags à une couleur 
//pour ça j'ai besoin de clicker sur un tag
// Je déclare les tags -> dans un querySelectorAll 
// vu qu'il y'a plusieurs boutons je vais utiliser une boucle 
// cette boucle sélectionnera bouton par bouton 
// chaque fois qu'on click sur un tags 
// chque tague est cliqué et fais appariatre la classe tu tag
// apparaitre en display block
