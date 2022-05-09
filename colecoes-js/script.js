function getAdmnins(map){
    let admins = []
    for([key, value] of map){
        if(value === 'Admin'){
            admins.push(key);
        }
    }
    return admins;
}

const usuarios = new Map();

usuarios.set('Luiz', 'Admin');
usuarios.set('Emanuel', 'Admin');
usuarios.set('Jorge', 'User');
usuarios.set('Natalia', 'Admin');
usuarios.set('Carla', 'User');
usuarios.set('Flavio', 'User');

console.log(getAdmnins(usuarios))