
const mysql = require('mysql')


const conection = mysql.createConnection({
    host: 'localhost',
    user: 'Maicol',
    password:'1000939487',
    database:'pruba'
})

conection.connect( (err) =>{
    if (err) throw err 
    console.log('la conexion funciona')
        
    
})
conection.query('SELECT * from usuario',(err, rows)=>{


    if (err) throw err 
   
    const mostrarUser = rows[0];
    
    
});
conection.end();










