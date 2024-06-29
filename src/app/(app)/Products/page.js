'use client'
import { useState } from 'react';
import { useStore } from '@/hooks/store'


const Products = () => {

  const { Produto } = useStore();
  const [cart, setCart] = useState([]);

  const addToCart = (product) => {
    setCart([...cart, product]);
  };

  return (
     <div className="container mx-auto">
      <h1 className="text-3xl font-bold mt-8 mb-4">Chapéus</h1>
      <ul className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        {Produto.map((product) => (
          <li key={product.id} className="bg-white shadow-md p-4 rounded-md">
            <h2 className="text-lg font-semibold">{product.nome}</h2>
            <p className="text-gray-600">{product.descricao}</p>
            <p className="text-gray-700 mt-2">Preço: R$ {product.preco}</p>
            <button
              onClick={() => addToCart(product)}
              className="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none"
            >
              Adicionar ao Carrinho
            </button>
          </li>
        ))}
      </ul>
      <div className="mt-8">
        <h2 className="text-2xl font-bold mb-4">Carrinho</h2>
        <ul>
          {cart.map((item, index) => (
            <li key={index} className="bg-white shadow-md p-4 rounded-md mb-2">
              {item.nome} - R$ {item.preco}
            </li>
          ))}
        </ul>
      </div>
    </div>
  );
};

export default Products;
