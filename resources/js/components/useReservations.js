import {reactive} from "vue";

export default function useReservations() {
    const errors = reactive({})

    const storeReservation = async (data) => {
        await axios.post('api/reservations', data)
            .then(({data}) => {
                console.log(data)
            })
            .catch((errors) => {
                console.log(errors.response)
            })
    }

    return {
        errors,
        storeReservation
    }
}
