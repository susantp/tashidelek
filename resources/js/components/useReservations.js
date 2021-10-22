import {reactive} from "vue";

export default function useReservations() {
    const errors = reactive({})

    const storeReservation = async (data) => {
        await axios.post('api/reservations', data)
            .then(({data}) => {
                console.log(data)
            })
            .catch(({response}) => {
                if(response.status === 422){
                    window.alert('Please fill the required fields')
                }
            })
    }

    return {
        errors,
        storeReservation
    }
}
