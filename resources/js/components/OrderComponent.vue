<template>
    <div style="margin-top: -55px;">

        <div class="order-first-page d-flex flex-column align-items-start w-100" v-if="currentStep === 1">
            <div class="mt-2 w-100">
                <div class="form-group w-100 d-flex flex-column align-items-start">
                    <label for="meatType">Select meat</label>
                    <select name="meatType" id="meatType" v-model="meatType" class="custom-select w-100">
                        <option value="select">-- Meat type --</option>
                        <option value="beef">Beef</option>
                        <option value="lamb">Lamb</option>
                        <option value="chicken">Chicken</option>
                        <option value="minced-meat">Minced meat</option>
                        <option value="burger">Burger</option>
                        <option value="Lola kebab">Lola Kebab</option>
                    </select>
                </div>
                <div class="form-group w-100 d-flex flex-column align-items-start">
                    <label for="secondMeatType" v-show="meatType === 'lamb'"></label>
                    <select class="custom-select w-100" name="second-type" id="secondMeatType"
                            v-show="meatType === 'lamb'" v-model="meatSecondType">
                        <option value="select">Meat second type</option>
                        <option value="leg-boneless">
                            Leg Boneless
                        </option>
                        <option value="Swift-Lamb-Rack">Swift Lamb Rack</option>
                        <option value="lamb-hind-shank">Lamb Hind Shank</option>
                    </select>
                </div>
                <div class="form-group d-flex flex-column align-items-start">
                    <label for="kg">How many Kgs?</label>
                    <input type="number" step="1" min="1" placeholder="2 Kgs" max="10" v-model="kg" id="kg"
                           class="form-control">
                </div>

                <div class="d-flex w-100 align-items-end justify-content-end red-btn">
                    <a href="javascript:void(0)" @click="currentStep++">Next</a>
                </div>
            </div>
        </div>


        <div class="order-second-page" v-if="currentStep === 2">
            <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Name" v-model="name" required>
                <input type="tel" class="form-control mt-2" placeholder="Phone number" v-model="phone" required>
                <input type="email" class="form-control mt-2" placeholder="Email" v-model="email" required>
                <input type="text" class="form-control mt-2" placeholder="Preferred delivery time" v-model="deliverTime"
                       required>
                <input type="text" class="form-control mt-2" placeholder="Full Address" v-model="address" required>

                <div class="form-group w-100 d-flex flex-column align-items-start mt-3">
                    <label for="comments">Any special orders or comments?</label>
                    <textarea type="text" id="comments" class="form-control" v-model="comments" required></textarea>
                </div>
            </div>

            <div class="d-flex w-100 align-items-end justify-content-end red-btn">
                <a href="javascript:void(0)" @click="currentStep++">Next</a>
            </div>
        </div>


        <div class="order-third-page" v-if="currentStep === 3">
            <div class="col-md-12 text-center thanks-text mb-5">
                Thank you for your order! our sales manager will get in touch with you soon!
            </div>
            <div class="red-btn">
                <a href="javascript:void(0)" @click="startNewOrder">Make another order</a>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "OrderComponent",
        data() {
            return {
                meatType: 'select',
                meatSecondType: 'select',
                kg: '',
                name: '',
                phone: '',
                email: '',
                deliverTime: '',
                address: '',
                comments: '',
                currentStep: 1,
            }
        },
        methods: {
            startNewOrder() {
                this.currentStep = 1;
                this.meatType = 'select';
                this.meatSecondType = 'select';
                this.kg = '';
                this.comments = '';
            }
        },
        mounted() {

        }
    }
</script>

<style scoped lang="scss">
    .red-btn{
        a{
            background: #cf1d16;
            color: #fff !important;
            text-transform: uppercase;
            padding: 15px 20px !important;
            line-height: 1;
            font-weight: bold;
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }
    }

    .thanks-text{
        color: black;
        font-weight: 600;
        font-size: large;
    }
</style>
