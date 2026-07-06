
const container = document.querySelector(".container");
const btnIn = document.getElementById("btn-sing-in")
const btnUp = document.getElementById("btn-sing-up")

btnUp.addEventListener("click",()=>{
    container.classList.remove("toggle")
})
btnIn.addEventListener("click",()=>{
    container.classList.add("toggle")
})

// const btn = document.getElementById("btn");

// btn.addEventListener("click",()=>{
// container.classList.toggle("toggle");
// })