'use client'

import { useAuth } from '@/hooks/auth'
import Navigation from '@/app/(app)/Navigation'
import LoginLinks from '@/app/(app)/LoginLinks'
import CartDropDown from '@/components/CartDropDown'

const AppLayout = ({ children }) => {
    const { user } = useAuth({ middleware: 'auth' })

    return (
        <div className="min-h-screen bg-gray-100">

            { user ? <Navigation user={user} /> : <LoginLinks />}


            <main>{children}</main>
        </div>
    )
}

export default AppLayout
