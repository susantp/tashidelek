import {createApp} from 'vue'
import ReservationForm from "./components/ReservationForm";

const app = createApp({
    components: {ReservationForm}
})
app.mount('#reservationApp')
