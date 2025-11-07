import { defineStore } from "pinia";
import { ref } from "vue";

export const useBookingStore = defineStore("booking", () => {
  const bookingData = ref(null);

  function setBookingData(data) {
    bookingData.value = data;
  }

  return { bookingData, setBookingData };
});
