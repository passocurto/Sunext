'use client'

import Link from 'next/link'
import { useAuth } from '@/hooks/auth'

import CartDropDown from '@/components/CartDropDown'

const LoginLinks = () => {
    const { user } = useAuth({ middleware: 'guest' })

    return (
        <div>
        <CartDropDown />
        <div className="hidden fixed top-0 right-0 px-10 py-4 sm:block absolute ">

            {user ? (
                <Link
                    href="/dashboard"
                    className="ml-4 text-sm text-gray-700 "
                >
                    Dashboard
                </Link>
            ) : (
                <>
                    <Link
                        href="/login"
                        className="text-sm text-gray-700 "
                    >
                        Login
                    </Link>

                    <Link
                        href="/register"
                        className="ml-4 text-sm text-gray-700 "
                    >
                        Registrar
                    </Link>
                </>
            )}
        </div>
        </div>
    )
}

export default LoginLinks
