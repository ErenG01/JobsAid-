const formulario = document.querySelector("#formulario");
const userName = document.querySelector("input[name='userName']");
const userEmail = document.querySelector("input[name='userEmail']");

formulario.addEventListener("submit", (e) => {
    e.preventDefault();
    console.log("funciona");

    const name = userName.value;
    const email = userEmail.value;


    console.log(name);
    console.log(email)
    
});