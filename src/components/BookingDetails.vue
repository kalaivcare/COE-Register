<script setup>
import { onMounted } from "vue";
import { useRouter } from "vue-router";
import { useBookingStore } from "../stores/bookingStore";

const router = useRouter();

const bookingStore = useBookingStore();
const booking = bookingStore.bookingData;
onMounted(() => {
  if (!bookingStore.bookingData) {
    router.push("/");
  }
});
</script>

<template>
  <div v-if="bookingStore.bookingData">
    <body class="pt-[50px] flex justify-center">
      <div class="container justify-center flex">
        <div
          class="card__div w-[600px] text-center flex flex-col justify-center items-center"
        >
          <div class="grid grid-cols-2 gap-4">
            <div>
              <!-- <img
                src="/assets/success-img.png"
                alt=""
                class="w-[60px] h-[60px]"
              /> -->
              <h2 class="mt-4 text-[#009688] text-[20px] font-[500] text-start">
                Booking Confirmed
              </h2>
              <p
                class="mt-4 text-[#1b1718] text-[14px] font-[400] w-[100%] text-start"
              >
                Thank you for booking with us. Your appointment details have
                been successfully saved. Please review the booking information
                below to ensure everything is correct.
              </p>
            </div>
            <div class="detail__grp flex mt-4 items-center justify-end">
              <img
                v-if="booking.data.qr_code"
                :src="JSON.parse(booking.data.qr_code)"
                alt="QR Code"
                class="w-[150px] h-[150px]"
              />
            </div>
          </div>
          <hr />
          <div
            class="detail__block w-full mt-2 bg-[#fff1e6ad] py-[20px] px-[30px] rounded-[18px] text-left border-s-[5px] border-[#ffdbbc]"
          >
            <div class="detail__grp flex">
              <div class="w-5/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">Name</p>
              </div>
              <div class="w-7/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">
                  {{ booking.data.name }}
                </p>
              </div>
            </div>

            <div class="detail__grp flex mt-4">
              <div class="w-5/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">
                  Registration No
                </p>
              </div>
              <div class="w-7/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">
                  {{ booking.data.register_no }}
                </p>
              </div>
            </div>
            <!-- <div class="detail__grp flex mt-4">
              <div class="w-5/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">
                  Transaction No
                </p>
              </div>
              <div class="w-7/12">
                <p
                  v-if="booking.data.payment_method != 'offline'"
                  class="text-[#1b1718] text-[14px] font-[400]"
                >
                  {{ booking.data.booking_pay_id }}
                </p>
                <p v-else class="text-[#1b1718] text-[14px] font-[400]">
                  {{ booking.data.offline_transaction_id }}
                </p>
              </div>
            </div> -->
            <div class="detail__grp flex mt-4">
              <div class="w-5/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">Mobile No</p>
              </div>
              <div class="w-7/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">
                  {{ booking.data.mobile }}
                </p>
              </div>
            </div>
            <div class="detail__grp flex mt-4">
              <div class="w-5/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">Gender</p>
              </div>
              <div class="w-7/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">
                  {{ booking.data.gender }}
                </p>
              </div>
            </div>
            <div class="detail__grp flex mt-4">
              <div class="w-5/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">Email ID</p>
              </div>
              <div class="w-7/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">
                  {{ booking.data.email }}
                </p>
              </div>
            </div>
            <div class="detail__grp flex mt-4">
              <div class="w-5/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">DOB</p>
              </div>
              <div class="w-7/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">
                  {{ booking.data.dob }}
                </p>
              </div>
            </div>
            <div class="detail__grp flex mt-4">
              <div class="w-5/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">Occupation</p>
              </div>
              <div class="w-7/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">
                  {{ booking.data.occupation }}
                </p>
              </div>
            </div>
            <div class="detail__grp flex mt-4">
              <div class="w-5/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">Address</p>
              </div>
              <div class="w-7/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">
                  {{ booking.data.address }}
                </p>
              </div>
            </div>
            <div class="detail__grp flex mt-4">
              <div class="w-5/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">Pincode</p>
              </div>
              <div class="w-7/12">
                <p class="text-[#1b1718] text-[14px] font-[400]">
                  {{ booking.data.pincode }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  </div>
</template>
