
var Usuario = document.getElementById('userEmail')
var contraseña = document.getElementById('password')
const boton = document.getElementById('button')

boton.addEventListener('click', (e) => {
    e.preventDefault()

    const data = {
        username: Usuario.value,
        password: contraseña.value
    }

    if (data.username == "sofiarodriguez12@gmail.com" && data.password == "123456789") {
            window.location = "Profile.html"        
    }
})
