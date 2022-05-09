function filtrPares(arr){
    return arr.filter(callback)
}

function callback(item){
    return item % 2 === 0;
}

const meuArray = [1, 3, 5, 6, 8, 12, 23];

console.log(filtraPares(meuArray));