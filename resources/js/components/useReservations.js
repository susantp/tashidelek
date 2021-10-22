import {reactive} from "vue";

export default function useReservations() {
    const errors = reactive({})
    const submitted = reactive({status: false})
    const storeReservation = async (data) => {
        await axios.post('api/reservations', data)
            .then(({data}) => {
                if (!data[0].errors) {
                    submitted.status = true
                }
            })
            .catch(({response}) => {
                if (response.status === 422) {
                    window.alert('Please fill the required fields')
                }
            })
    }

    return {
        errors,
        submitted,
        storeReservation
    }
}
