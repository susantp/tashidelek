<template>
    <form class="form-contact-line text-left offset-top-35">
        <div class="form-inline-flex">
            <div class="form-group">
                <label for="first-name" class="form-label form-label-outside rd-input-label">First name</label>
                <input id="first-name"
                       type="text"
                       v-model="form.first_name"
                       placeholder="Enter your firstname"
                       name="name"
                       class="form-control form-control-last-child">
                <span v-if="errors" class="form-validation">The text field is required.</span>
            </div>
            <div class="form-group">
                <label for="last-name" class="form-label form-label-outside rd-input-label">Last Name</label>
                <input id="last-name" type="text" placeholder="Enter lastname"
                       v-model="form.last_name"
                       class="form-control form-control-last-child">
                <span v-if="errors" class="form-validation"></span>
            </div>
        </div>
        <div class="form-inline-flex offset-top-15">
            <div class="form-group">
                <label for="phone" class="form-label form-label-outside rd-input-label">Contact</label>
                <input id="phone"
                       v-model="form.phone"
                       type="number"
                       placeholder="Enter your contact"
                       class="form-control form-control-last-child">
                <span v-if="errors" class="form-validation">The text field is required.</span>
            </div>
            <div class="form-group">
                <label for="email" class="form-label form-label-outside rd-input-label">Email</label>
                <input id="email" type="email" placeholder="Enter email"
                       v-model="form.email"
                       class="form-control form-control-has-validation form-control-last-child">
                <span v-if="errors" class="form-validation"></span>
            </div>
        </div>
        <div class="form-inline-flex offset-top-15">
            <div class="form-group">
                <label for="nos" class="form-label form-label-outside rd-input-label"># of Guests</label>
                <input id="nos"
                       v-model="form.guest_count"
                       type="number"
                       placeholder="How many person?"
                       class="form-control form-control-last-child">
                <span v-if="errors" class="form-validation">The text field is required.</span>
            </div>
            <div class="form-group">
                <label for="date" class="form-label form-label-outside rd-input-label">Reservation Date</label>
                <input id="date"
                       v-model="form.date_time"
                       min="2021-10-23 12:00:00"
                       type="datetime-local"
                       placeholder="Enter datetime"
                       class="form-control form-control-has-validation form-control-last-child">
                <span v-if="errors" class="form-validation"></span>
            </div>
        </div>
        <div class="form-inline-flex offset-top-15">
            <div class="form-group offset-top-15">
                <label class="form-label form-label-outside rd-input-label">Type</label>
                <select v-model="form.type" class="form-control">
                    <option value="dinner">Dinner</option>
                    <option value="lunch">Lunch</option>
                    <option value="breakfast">Breakfast</option>
                </select>
                <span
                    class="form-validation">
                </span>
            </div>

        </div>

        <div class="offset-top-15">
            <div class="form-inline-flex">
                <div class="form-group offset-top-15">
                    <label class="form-label form-label-outside rd-input-label">Any special Request</label>
                    <textarea id="message"
                              v-model="form.meta.specialRequest"
                              class="form-control form-control-last-child">

            </textarea><span
                    class="form-validation"></span>
                </div>
                <div class="form-group">
                    <button @click.prevent="saveReservation" class="btn btn-primary btn-fullwidth">Send message</button>
                </div>
            </div>
        </div>
    </form>
</template>
<script>
import useReservations from "./useReservations";
import {reactive, ref} from "vue";

export default {
    name: "reservationForm",

    setup() {
        const errors = reactive({})
        const form = reactive({
            'first_name': '',
            'last_name': '',
            'email': '',
            'phone': '',
            'guest_count': '',
            'type': '',
            'date_time': '',
            'meta': {
                'specialRequest': ''
            }

        })

        const {storeReservation} = useReservations()
        const saveReservation = async () => {
            await storeReservation({...form})
        }
        return {
            form, saveReservation, errors
        }
    }
}
</script>
