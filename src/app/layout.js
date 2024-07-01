'use client'
import { Nunito } from 'next/font/google'
import '@/app/global.css'

import store from '@/redux/store'
import { Provider } from 'react-redux'


const nunitoFont = Nunito({
    subsets: ['latin'],
    display: 'swap',
})

const RootLayout = ({ children }) => {

    return (
         <Provider store={store}>
            <html lang="en" className={nunitoFont.className}>
                <body className="antialiased">{children}</body>
            </html>
        </Provider>
    )

}

export default RootLayout
