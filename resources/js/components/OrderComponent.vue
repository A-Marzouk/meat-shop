<template>
    <div style="margin-top: -55px;">
        <div class="row d-flex align-items-center">
            <div class="col-md-8">
                <div class="order-first-page d-flex flex-column align-items-start w-100" v-if="currentStep === 1">
                    <div class="mt-2 w-100">
                        <div class="form-group w-100 d-flex flex-column align-items-start">
                            <label for="meatType">Select meat</label>
                            <select name="meatType" id="meatType" v-model="meatType" class="custom-select w-100"
                                    @change="calculateTotalPrice">
                                <option value="select">-- Meat type --</option>
                                <option value="lamb">Lamb (From 120 UAH)</option>
                                <option value="minced">Minced meat (155 UAH)</option>
                                <option value="chicken">Chicken fillet (85 UAH)</option>
                                <option value="burger">Burger (170 UAH)</option>
                                <option value="kebab">Lola Kebab (175 UAH)</option>
                            </select>
                        </div>
                        <div class="form-group w-100 d-flex flex-column align-items-start">
                            <label for="secondMeatType" v-show="meatType === 'lamb'"></label>
                            <select class="custom-select w-100" name="second-type" id="secondMeatType"
                                    @change="calculateTotalPrice"
                                    v-show="meatType === 'lamb'" v-model="meatSecondType">
                                <option value="select">Meat second type</option>

                                <option value="rack">Swift Lamb Rack (120 UAH)</option>
                                <option value="hind">Lamb Hind Shank (130 UAH)</option>
                                <option value="leg">Leg Boneless (140 UAH)</option>
                            </select>
                        </div>
                        <div class="form-group d-flex flex-column align-items-start">
                            <label for="kg">How many Kgs?</label>
                            <input type="number" step="1" min="1" placeholder="2 Kgs" max="10" v-model="kg" id="kg"
                                   @change="calculateTotalPrice"
                                   class="form-control">
                        </div>
                        <div class="error mb-2" v-show="errors.generalError.length > 1">
                            {{errors.generalError}}
                        </div>
                        <div class="d-flex w-100 align-items-end justify-content-end red-btn">
                            <a href="javascript:void(0)" @click="goToStepTwo">Next</a>
                        </div>
                    </div>
                </div>
                <div class="order-second-page" v-if="currentStep === 2">
                    <div class="form-group">
                        <input type="text" class="form-control mt-2" placeholder="Name" v-model="name" required>
                        <input type="tel" class="form-control mt-2" placeholder="Phone number" v-model="phone" required>
                        <input type="email" class="form-control mt-2" placeholder="Email" v-model="email" required>
                        <input type="text" class="form-control mt-2" placeholder="Preferred delivery time"
                               v-model="deliverTime"
                               required>
                        <input type="text" class="form-control mt-2" placeholder="Full Address" v-model="address"
                               required>

                        <div class="form-group w-100 d-flex flex-column align-items-start mt-3">
                            <label for="comments">Any special orders or comments?</label>
                            <textarea type="text" id="comments" class="form-control" v-model="comments"
                                      required></textarea>
                        </div>
                    </div>
                    <div class="error mb-2" v-show="errors.generalError.length > 1">
                        {{errors.generalError}}
                    </div>

                    <div class="d-flex w-100 align-items-end justify-content-end red-btn">
                        <a href="javascript:void(0)" @click="currentStep--" class="mr-2">Back</a>
                        <a href="javascript:void(0)" @click="finishOrder">FINISH ORDER</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 default-text" style="margin-top: 25px;" v-if="currentStep !== 3">
                <div class="row">
                    <div class="col-md-8 col-6">
                        Delivery
                    </div>
                    <div class="col-md-4 col-6">
                        {{delivery}} UAH
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-6">
                        Order
                    </div>
                    <div class="col-md-4 col-6">
                        {{meat*kg}} UAH
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-6">
                        Total
                    </div>
                    <div class="col-md-4 col-6">
                        {{total}} UAH
                    </div>
                </div>
            </div>

            <a href="#orderSection" id="goToThanksMessage"></a>
            <div class="col-md-12">
                <div class="order-third-page" v-if="currentStep === 3">
                    <div class="col-md-12 text-center thanks-text mb-5">
                        Thank you for your order! our sales manager will get in touch with you soon!
                    </div>
                    <div class="red-btn">
                        <a href="javascript:void(0)" @click="startNewOrder">Make another order</a>
                    </div>
                </div>
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
                meatSecondType: 'rack',
                kg: 1,
                name: '',
                phone: '',
                email: '',
                deliverTime: '',
                address: '',
                comments: '',
                currentStep: 1,
                delivery: 25,
                meat: 0,
                total: 25,
                meatPrices: {
                    beef: 145,
                    lamb: 140,
                    minced: 155,
                    burger: 170,
                    kebab: 175,
                    chicken: 85,
                    leg: 140,
                    rack: 120,
                    hind: 130
                },
                errors: {
                    generalError: ''
                }
            }
        },
        methods: {
            startNewOrder() {
                this.currentStep = 1;
                this.meatType = 'select';
                this.meatSecondType = 'select';
                this.kg = '';
                this.comments = '';
            },
            calculateTotalPrice() {
                this.meat = this.meatPrices[this.meatType];

                if (this.meatType === 'lamb' && this.meatSecondType === 'rack') {
                    this.meat = 120;
                }
                if (this.meatType === 'lamb' && this.meatSecondType === 'hind') {
                    this.meat = 130;
                }

                this.total = (this.kg * this.meat) + this.delivery;
            },
            goToStepTwo() {
                // validate that meat is selected && kg is not empty
                if (this.meatType === 'select' || this.meatType.length < 1 || this.kg.length < 1) {
                    this.errors.generalError = 'Please complete all required fields!';
                    return;
                }

                this.errors.generalError = '';
                this.currentStep++;
            },
            finishOrder() {
                if (this.name.length < 3 || this.phone.length < 7 || this.email.length < 1 || this.deliverTime.length < 1 || this.address.length < 1) {
                    this.errors.generalError = 'Please complete all required fields!';
                    return;
                }

                this.errors.generalError = '';
                this.currentStep++;

                // finished order | send to Telegram
                this.telegramNotification();
                $('#goToThanksMessage').click();
            },
            telegramNotification() {
                axios.post('/order', {
                    meat_type: this.meatType,
                    meat_second_type: this.meatSecondType,
                    kgs: this.kg,
                    user_name: this.name,
                    user_phone: this.phone,
                    user_email: this.email,
                    delivery_time: this.deliverTime,
                    address: this.address,
                    comments: this.comments,
                    total_price : this.total
                })
                    .then((response) => {
                        console.log(response.data);
                    })
                    .catch()
            }
        },
        mounted() {

        }
    }
</script>

<style scoped lang="scss">
    .red-btn {
        a {
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

    .thanks-text {
        color: black;
        font-weight: 600;
        font-size: large;
    }

    .default-text {
        color: darkslategray;
        font-weight: 600;
    }

    .error {
        color: red;
        font-weight: 600;
    }
</style>
