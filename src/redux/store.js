'use client'
import { configureStore, applyMiddleware } from '@reduxjs/toolkit'
import cartReducer from './cart/cart.reducer'

import logger from 'redux-logger';
import {thunk} from 'redux-thunk';


const middlewares = [thunk];

if (process.env.NODE_ENV === 'development') {
  middlewares.push(logger);
}

export default configureStore({
  reducer: {
    cart: cartReducer
  }
})
