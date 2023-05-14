// const marvel= async()=>{
//     const img= await fetch("http://i.annihil.us/u/prod/marvel/i/mg/3/40/4bb4680432f73/portrait_xlarge.jpg");
//     console.log(img);
// }
// marvel();

fetch("https://api.chucknorris.io/jokes/random")
.then(response => response.json())
.then(json => console.log(json))
.then(json => $("#chuk").html(json));