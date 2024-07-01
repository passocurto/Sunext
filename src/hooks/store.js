import useSWR from 'swr'
import axios from '@/lib/axios'

export const useStore = () => {

    const csrf = () => axios.get('/sanctum/csrf-cookie')
        const { data: Produtos } =  useSWR('/api/produtos', () =>
            axios
                .get('/api/produtos')
                .then(res => res.data)
                .catch(error => {
                    console.log('Produtos não carregados')
                }),
        )

    return {
        Produtos,
    }
}
