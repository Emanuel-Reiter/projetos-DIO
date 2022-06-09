import {useState} from 'react';

function SmartCounter(){
    const [quantity, increaseQuantity] = useState(10);
    return(
        <div>
            <h2>{quantity}</h2>
            <button onClick={() => increaseQuantity(quantity + 1)}>Aumentar</button>
        </div>
    );
}

export default SmartCounter;