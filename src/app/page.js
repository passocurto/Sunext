'use client'

import LoginLinks from '@/app/LoginLinks'
import { useRouter } from 'next/navigation'

const Home = () => {
    const router = useRouter();
    router.push('/dashboard');

    return (
        <>
            <div className="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
                <LoginLinks />
                  <div className="max-w-6xl mx-auto sm:px-6 lg:px-8">
                </div>
            </div>
        </>
    )
}

export default Home
