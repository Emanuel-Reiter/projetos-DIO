function Counter(){
    let quantity = 10;

    function increaseQuantity(){
        quantity = quantity + 1;

        document.getElementById('quantity-counter').innerHTML = quantity;
    }

    return(
        <div>
            <h2 id="quantity-counter">{quantity}</h2>

            <button onClick={increaseQuantity}>Aumentar</button>
        </div>
    );
}

export default Counter;