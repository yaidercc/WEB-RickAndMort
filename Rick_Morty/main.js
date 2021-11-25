// variables
const $cardsContainer=document.getElementById("cards-container");
const $rickMortyLink=document.getElementById("link-rick");
const $pokemonLink=document.getElementById("link-pokemon");
const $loading = document.getElementById("loading");
// Funciones
window.onload=()=>{
    getRickAndMorty();
}
function getCharacters(url){
    const data = new FormData();
    data.append("url",url);
    const request=fetch("http://localhost/Practica-Curl/Rick_Morty/api.php",{
        method:'POST',
        body: data}
    )
    return request;
}


function getRickAndMorty(){
    getCharacters("https://rickandmortyapi.com/api/character")
    .then(resp=>resp.json())
    .then(data=>{
        $loading.classList.add("hide");
        $cardsContainer.classList.remove("chargin")
        const datos=JSON.parse(data);
        let characters=``;
        Object.keys(datos.results).forEach((el) => {
            console.log(datos.results[el]);
            characters+=
            `
            <div class="card">
                <div class="card-image">
                    <img src="${datos.results[el].image}" alt="imagen de ${datos.results[el].name}"/>
                </div>
                <div class="card-info">
                    <h3>${datos.results[el].name}</h3>
                    <p><span>Especie</span> ${datos.results[el].species}</p>
                    <p><span>Estado:</span> ${datos.results[el].status}</p>
                </div>
            </div>
            `;
        });
        $cardsContainer.innerHTML=characters;
    })
    .catch( err=>console.log(err))
}

function getPokemon(){
    getCharacters("https://pokeapi.co/api/v2/pokemon/?offset=1&limit=50")
    .then(resp=>resp.json())
    .then(data=>{
        const datos=JSON.parse(data);
        console.log(datos.results);
        // $loading.classList.remove("hide");
        // $cardsContainer.classList.remove("chargin")
        // const datos=JSON.parse(data);
        // let characters=``;
        // Object.keys(datos.results).forEach((el) => {
        //     console.log(datos.results[el]);
        //     characters+=
        //     `
        //     <div class="card">
        //         <div class="card-image">
        //             <img src="${datos.results[el].image}" alt="imagen de ${datos.results[el].name}"/>
        //         </div>
        //         <div class="card-info">
        //             <h3>${datos.results[el].name}</h3>
        //             <p><span>Especie</span> ${datos.results[el].species}</p>
        //             <p><span>Estado:</span> ${datos.results[el].status}</p>
        //         </div>
        //     </div>
        //     `;
        // });
        // $cardsContainer.innerHTML=characters;
    })
    .catch( err=>console.log(err))
}
// Eventos
$rickMortyLink.addEventListener("click",function(e){
    e.preventDefault();
    $loading.classList.add("hide");
    getRickAndMorty();
})

$pokemonLink.addEventListener("click",function(e){
    e.preventDefault();
    $loading.classList.add("hide");
    getPokemon();
})