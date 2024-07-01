'use client'

import { useState, useEffect } from 'react';
import { useDispatch } from 'react-redux'
import { useStore } from '@/hooks/store'
import Image from 'next/image'

import { addItem } from '@/redux/cart/cart.actions';

const Products = ()  => {

  const { Produtos } = useStore();
  const [cart, setCart] = useState([]);
  const [product, setProduct] = useState([]);
  const dispatch = useDispatch();

useEffect(() => {
     setProduct(Produtos);
  }, [Produtos]);

  return (
     <div className="container mx-auto">
      <h1 className="text-3xl font-bold mt-8 mb-4">Chapéus</h1>
      <ul className="grid text-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
        {!product ? "Carregando Produtos" : product.map((item) => (
          <li key={item.id} className="bg-white shadow-md p-4 rounded-md">
                <Image
                     src={`${item.imageUrl}`}
                    width={200}
                    height={150}
                    alt="Picture of the author"
                    className="object-contain rounded-lg"
                />
            <h2 className="text-lg font-semibold">{item.nome}</h2>
            <p className="text-gray-600">{item.descricao}</p>
            <p className="text-gray-700 mt-2">Preço: R$ {item.preco}</p>
            <button
               onClick={() => dispatch(addItem(item))}
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
