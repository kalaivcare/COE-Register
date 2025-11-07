<style scoped>
#skin .tab-slider {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 0;
  border-radius: 1rem;
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF0AAABcCAYAAAAMLblmAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPeSURBVHgB7Z1PUtRQEIe7X8Y/y3gCs3YjN3BED4AncKhyMZYL8QQOJwAXyLiw1BOIaxXiCRhP4HAC39IFpO1OmKmBmQELmXTQ31cFJHl5IfnS6feSTTP9Ac/S5dsFcVtIMl3NhCgNuizM6cRuGf3j6HVH1p9qRYbVVra/w4RkoMuDrbh7cN5xeF7DWtpOfxE9Jw4d+g+EXhp6M5h4JxBtzrsBU9InZPcI/B1S9PoxXz+9+YT0btrO9C591LSxROBSYJFBIF6ZjPpwYgcIv3TMZ0GyYxlktG0svZsuv4TwxWBey5R9TJleLK1oDv9BYKHclOLWZsxjGelM4TmBhTOK9lK6zr9XCCyeavpNjNRSL4lQFhLiuwRqw97swxFhxlIn9inFcnpGoE5UOnNGoDaqj4WgXjTIVXr5uRbUBJMg0j0IlmMI1EpgSK+bDOnFAUh3ANIdgHQHIN0BSHcA0h2AdAcg3QFIdwDSHYB0ByDdAUh3ANIdgHQHIN0BSHcA0h2AdAcg3QFIdwDSHYB0ByDdAUh3ANIdgHQHIN0BSHcA0h2AdAcg3QFIdwDSHYB0ByDdAUh3ANIdgHQHIN0BSHcA0h2AdAcg3QFIdwDSHYB0ByDdAUh3ANIdgHQHIN0BSHcA0h2AdAcg3QFId8CkDwnUhhUdRKTXjFV5DCwSCdSGEFukl/U0QU2wFLFFVyynM/FAxAqujs87q+p6SJuuAHb+LU3s36nhlBVvhTZvUvHKar/N2qcskkXhsV5Vhxpd0YYHXBZ95fCTGgvniUhnVM9zf7uTJa3WO11c0rZU78hOKxRrd568LdtNvlDYYKZGloazil5VlcZbD/Ya+XgKve/H3dXR6rHw/VL2yR1ji2VpJN7opsvvjqO+OYjk/bh3v6rSKE0sbcz5pHAjSa5tTAsv900Phd9Pbqn6ck6NQsrSx6X07fj5m+VMagiWwy2lTDWcnTKmy8HJ0aqMqp87Y377Mc9tefxydIOKda5mBf4I92ZXIj/rnWL6CdCLHCZ6LHLGvJrf0fpYus0KhOSRt3iLiDfx66uZbTryz+2oA+qsza/tWDo2kBOjwt6Ts64TnwEsMm6Q3PdKNfZ/t+Pui3nth4fJ6uxo14E0XF+b16/M70I9qhm7HvN5+qnleR266cO29npZ06xG04CsbcW9T+ftuL/dzZLkaKPK7xIt+hO+3rnzZOvgvL5P0wePhaVHC5/H6wAuvN6PX/KZred1t3kvU6KDlNwr9GSZLXeO691ldHGGGn25Pmwf5p3cojD5BclK0DdZTakXrcc6tF9602MhMtSUMaxeNIvcMsZZHX8DgaBDmc46nekAAAAASUVORK5CYII=");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  transition: all 0.4s ease;
  z-index: 0;
}

.error {
  color: red;
}
#hair .tab-slider {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 0;
  border-radius: 1rem;
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF0AAABcCAYAAAAMLblmAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPYSURBVHgB7Z3PUtNQFIfPuWlZ1z97s3YjSwcdrW+AT2CZYeEOfALKEwALh5UjPoH4BAYQcEd9AsMeMWsh93hP2mKhLThCc6L+vpmm7b1JJvlycnJvNofpN2jMzNyLatwUkpiYYg5NQlx8D6wW079P1vsoqS6CkzQsUi/UoZw62d7e4VU74XEdjWaz4fyPBWZu0f8h9EboXgTe9KeyOu4CDEkfkN0mcC1EpH28vbd8sf2c9EbzYewkeh8apwncCELU8ScyOxj1bnAFCL951Ker86ZmkH7bmfTbT2aWIHwyFOJDyh74300rkURfCUyUnOu3siTJikh3PlogMHH60d5NL0yzBCYPU6v4Qmopl/xEYke5e0CgNHRm7xxjxFIm+irFhZlnTKA8wrsrfZDGBEpDXxI6AqXCxIj0svEkiHQLVHqDQKlAesn0czooGUg3ANINgHQDIN0ASDcA0g2AdAMg3QBINwDSDYB0AyDdAEg3ANINgHQDIN0ASDcA0g2AdAMg3QBINwDSDYB0AyDdAEg3ANINgHQDIN0ASDcA0g2AdAMg3QBINwDSDYB0AyDdAEg3ANINgHQDIN0ASDcA0g2AdAMg3QBINwDSDYB0AyDdAEg3ANINgHQDIN0ASDcA0g2AdAMg3QBIN0ClpwTKJEOkl4yQZE5+lXoEJeCIVbqkBEpDg7zGwun4qqTVQ6sehmVHC68WDUVRWo7Dryb9BYhQp8ZOvpBU3nomIqveTa1p7bdRKxRlPb17UfWitUx5h7VkYyQn36m6JPmJtPr1PA/WW3FUq72loqIkN0LEb9acX7w//6bo71Yocyuhr5Kl4bSiVxHid54++kjVvD03vm3tzvX/9IQfFLLPIZonp/vilXBOemFaVC2ScD7PiiEje9+m6pEMCleiqL4yLFzhxqnwxmBLb9uEKkTOXJQ+LqQf7exvhQS/StUh05Qy1Hp5NcmhcnA55yq+EkNi9ZslnxL9fTY58q6+3B0Z2CPi26MrkcslAofvgCz5nOq+yJiiznTw2/9/Jl1HBZ7z59biNSKOt/fXRvWFoeH4YwsP1FHNvX1tkBFnhb0HRl3nXgNoZHiuP7NKNV3hu6/G9Z+eRnOjoz08SN3U4rjtNL9rOXkqGT0f9Xnxrh07QL/bfNwMB7pEpYxqJM09LWY7ex+uWvNg/WUcRflKN79LptEf8VTr/vzrw6u2vfPk0YuwXZsmP45Pwnxh+aiXwy9y5ayoGPdSfVq8f8oscS93xr3umP6cNLyCSBy7d+MOblJ05cusEMfXqCCf6kKn9RyCRsLMXieaOflEM8ZlG/4EZX1aWI4Mp1IAAAAASUVORK5CYII=");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  transition: all 0.4s ease;
  z-index: 0;
}

#myDiv {
  transition: opacity 0.5s ease, transform 0.5s ease;
  opacity: 1;
}
</style>
<template>
  <div
    class="container m-auto relative switch-treatment bg-gray-50"
    :id="currentTreatment"
  >
    <div class="relative">
      <div
        class="absolute top-0 left-0 right-0 py-3 min-h-[200px] w-full p-3 items-center prime-bg rounded-b-3xl"
      >
        <div class="flex items-center justify-between relative">
          <div>
            <img src="/assets/img/logo.svg" alt="logo" />
          </div>
          <div class="flex gap-3">
            <div class="flex gap-2 mb-4">
              <button
                :class="{
                  'border border-[#CECACA] h-10 w-30 rounded bg-white text-black':
                    currentTreatment === 'hair',
                  'bg-gray-200 text-black border border-[#CECACA] h-10 w-30 rounded bg-transparent text-white':
                    currentTreatment !== 'hair',
                }"
                @click="switchTreatment('Hair')"
              >
                Hair
              </button>

              <button
                :class="{
                  'border border-[#CECACA] h-10 w-30 rounded bg-white text-black':
                    currentTreatment === 'skin',
                  'bg-gray-200 text-black border border-[#CECACA] h-10 w-30 rounded bg-transparent text-white':
                    currentTreatment !== 'skin',
                }"
                @click="switchTreatment('Skin')"
              >
                Skin
              </button>
            </div>
          </div>
        </div>
      </div>

      <div id="reload" class="tab-content">
        <div class="absolute top-16 mt-4 w-full flex justify-center">
          <div
            class="bg-white w-full shadow p-3 m-3 mb-30 rounded-xl min-h-[60vh] flex justify-center items-center flex-col"
          >
            <div
              class="font-s400 prime-bg text-white text-sm p-2 px-3 rounded mb-3 flex items-center gap-2"
            >
              REFRESH
              <img
                src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='UTF-8'?%3e%3csvg%20xmlns='http://www.w3.org/2000/svg'%20xmlns:xlink='http://www.w3.org/1999/xlink'%20width='20px'%20height='20px'%20viewBox='0%200%2020%2020'%20version='1.1'%3e%3cg%20id='surface1'%3e%3cpath%20style='%20stroke:none;fill-rule:nonzero;fill:rgb(33.333334%25,34.117648%25,32.549021%25);fill-opacity:1;'%20d='M%2010%201.539062%20C%208.335938%201.539062%206.785156%202.023438%205.476562%202.855469%20L%203.707031%201.085938%20L%203.707031%206.042969%20L%208.664062%206.042969%20L%206.695312%204.074219%20C%207.675781%203.527344%208.800781%203.207031%2010%203.207031%20C%2013.746094%203.207031%2016.792969%206.253906%2016.792969%2010%20C%2016.792969%2010.890625%2016.613281%2011.742188%2016.300781%2012.523438%20L%2017.757812%2013.375%20C%2018.210938%2012.339844%2018.460938%2011.199219%2018.460938%2010%20C%2018.460938%205.335938%2014.664062%201.539062%2010%201.539062%20Z%20M%2010%201.539062%20'/%3e%3cpath%20style='%20stroke:none;fill-rule:nonzero;fill:rgb(33.333334%25,34.117648%25,32.549021%25);fill-opacity:1;'%20d='M%2013.300781%2015.921875%20C%2012.324219%2016.472656%2011.199219%2016.792969%2010%2016.792969%20C%206.253906%2016.792969%203.207031%2013.746094%203.207031%2010%20C%203.207031%209.15625%203.371094%208.355469%203.652344%207.609375%20L%202.195312%206.730469%20C%201.773438%207.738281%201.539062%208.84375%201.539062%2010%20C%201.539062%2014.664062%205.335938%2018.460938%2010%2018.460938%20C%2011.664062%2018.460938%2013.210938%2017.972656%2014.519531%2017.140625%20L%2016.292969%2018.914062%20L%2016.292969%2013.957031%20L%2011.335938%2013.957031%20Z%20M%2013.300781%2015.921875%20'/%3e%3c/g%3e%3c/svg%3e"
                class="w-5 reload_btn"
                alt=""
              />
            </div>
            <div class="font-i400">
              Oops! Something went wrong. Please try again.
            </div>
            <div></div>
          </div>
        </div>
      </div>

      <div class="absolute top-16 mt-4 w-full flex justify-center">
        <div
          class="w-full shadow p-3 m-3 mb-30 rounded-xl h-[70vh] max-h-[70vh] overflow-y-hidden bg-[#FAFAFA]"
        >
          <div class="flex flex-col items-center">
            <!-- Step Icons -->
            <div
              class="progress-tracker flex mt-4 mb-2 mx-3 px-2 items-center justify-around max-w-[600px] w-full"
            >
              <template v-for="(step, index) in steps" :key="step">
                <!-- Step Icon -->
                <div
                  :class="[
                    'flex flex-col items-center',
                    index < currentStep
                      ? 'completed'
                      : index === currentStep
                      ? 'working'
                      : 'pending',
                  ]"
                >
                  <img :src="getIconForStep(step)" alt="" class="w-5 h-5" />
                </div>

                <!-- Progress Bar Between Steps -->
                <div
                  v-if="index < steps.length - 1"
                  :class="index < currentStep ? 'progress_bar' : 'pending_bar'"
                  class="h-[2px] flex-1 mx-1"
                ></div>
              </template>
            </div>

            <!-- Step Labels -->
            <div
              class="progress-tracker flex mx-3 mb-4 items-center justify-around text-center max-w-[600px] w-full"
            >
              <div
                v-for="(step, index) in steps"
                :key="step"
                class="flex items-center"
              >
                <div class="w-20 text-xs text-center font-s400">
                  {{ stepLabels[step] }}
                </div>
                <div
                  v-if="index < steps.length - 1"
                  class="opacity-0 w-4"
                ></div>
              </div>
            </div>
          </div>

          <form @submit.prevent="handleNext">
            <div
              id="registration"
              v-show="currentStep === 0"
              class="block step"
            >
              <fieldset class="fieldset">
                <div class="grid grid-cols-12 gap-4 pb-2">
                  <div class="col-span-6">
                    <input
                      type="text"
                      class="input input-bordered w-full"
                      name="name"
                      placeholder="Name"
                      @input="clearError('name')"
                      v-model="formData.name"
                      data-error="Please enter your name"
                    />
                    <p class="error" v-if="errors.name">{{ errors.name }}</p>
                  </div>
                  <div class="col-span-6">
                    <input
                      type="text"
                      class="input input-bordered w-full"
                      name="email"
                      placeholder="Email"
                      v-model="formData.email"
                      @input="clearError('email')"
                      data-error="Please enter a valid email address"
                    />
                    <p class="error" v-if="errors.email">{{ errors.email }}</p>
                  </div>
                </div>
                <div class="grid grid-cols-12 gap-4 mt-2 pb-2">
                  <div class="col-span-6">
                    <input
                      type="text"
                      class="input input-bordered w-full"
                      name="mobile"
                      placeholder="Mobile Number"
                      @input="clearError('mobile')"
                      v-model="formData.mobile"
                      data-error="Please enter your mobile number"
                    />
                    <p class="error" v-if="errors.mobile">
                      {{ errors.mobile }}
                    </p>
                  </div>
                  <div class="col-span-6">
                    <div class="flex h-full justify-between">
                      <!-- Yes/No Radio Buttons -->
                      <div class="flex gap-4 items-center">
                        <p class="font-medium">WhatsApp Number?</p>
                        <input
                          type="checkbox"
                          name="email_confirm"
                          v-model="formData.whatsapp_same"
                          class="toggle toggle-xs custom-toggle"
                        />
                      </div>

                      <!-- Show input only if user selects "yes" -->

                      <div v-if="formData.whatsapp_same" class="pl-3">
                        <input
                          type="text"
                          v-model="formData.whatsapp_number"
                          placeholder="Enter WhatsApp number"
                          class="border p-2 rounded w-full"
                        />
                      </div>
                    </div>
                  </div>

                  <!-- <div class="col-span-6">
                    <div>
                      <p for="contactChoice1">Is same as Whatsapp Number?</p>

                      <input
                        type="radio"
                        id="contactChoice2"
                        name="contact"
                        value="phone"
                      />
                      <label for="contactChoice2">Phone</label>

                      <input
                        type="radio"
                        id="contactChoice3"
                        name="contact"
                        value="mail"
                      />
                      <label for="contactChoice3">Mail</label>
                    </div>

                    <input
                      type="text"
                      class="input input-bordered w-full"
                      name="mobile"
                      placeholder="Mobile Number"
                      @input="clearError('mobile')"
                      v-model="formData.mobile"
                      data-error="Enter your Whatsapp Number"
                    />
                    <p class="error" v-if="errors.mobile">
                      {{ errors.mobile }}
                    </p>
                  </div> -->
                </div>

                <div class="grid grid-cols-12 gap-4 mt-2 pb-2">
                  <div class="col-span-6">
                    <input
                      type="date"
                      class="input input-bordered w-full"
                      name="dob"
                      :max="maxDob"
                      v-model="formData.dob"
                      @input="clearError('dob')"
                      data-error="Please enter your Date of Birth"
                    />
                    <p class="error" v-if="errors.dob">
                      {{ errors.dob }}
                    </p>
                  </div>
                  <div class="col-span-6">
                    <select
                      name="gender"
                      class="select select-bordered w-full"
                      v-model="formData.gender"
                      @change="clearError('gender')"
                      data-error="Please select gender"
                    >
                      <option disabled selected value="">Select gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                    <p class="error text-red-500" v-if="errors.gender">
                      {{ errors.gender }}
                    </p>
                  </div>
                </div>

                <div class="grid grid-cols-12 gap-4 mt-2 pb-2">
                  <div class="col-span-6">
                    <input
                      type="text"
                      class="input input-bordered w-full"
                      name="occupation"
                      placeholder="Occupation"
                      v-model="formData.occupation"
                      @input="clearError('occupation')"
                      data-error="Please enter your occupation"
                    />
                    <p class="error text-red-500" v-if="errors.occupation">
                      {{ errors.occupation }}
                    </p>
                  </div>
                  <div class="col-span-6">
                    <input
                      type="text"
                      class="input input-bordered w-full"
                      name="pincode"
                      placeholder="Pincode"
                      v-model="formData.pincode"
                      @input="clearError('pincode')"
                      data-error="Please enter a valid 6-digit pincode"
                    />
                    <p class="error text-red-500" v-if="errors.pincode">
                      {{ errors.pincode }}
                    </p>
                  </div>
                </div>

                <div class="pb-2">
                  <textarea
                    class="textarea textarea-bordered w-full"
                    name="address"
                    @input="clearError('address')"
                    placeholder="Enter your address"
                    v-model="formData.address"
                    data-error="Please enter your address"
                  ></textarea>
                  <p class="error text-red-500" v-if="errors.address">
                    {{ errors.address }}
                  </p>
                </div>
              </fieldset>
            </div>

            <div id="terms" v-show="currentStep === 1" class="step">
              <h2 class="font-i600 pb-3">Privacy Policy</h2>

              <iframe
                src="https://docs.google.com/viewer?url=http://www.pdf995.com/samples/pdf.pdf&embedded=true"
                frameborder="0"
                height="500px"
                width="100%"
              >
              </iframe>

              <div class="flex items-center gap-2 mt-4">
                <input
                  type="checkbox"
                  id="terms-checkbox"
                  name="terms"
                  class="checkbox checkbox-xs"
                  v-model="formData.terms"
                  data-error="You must agree to the Terms and Conditions."
                />
                <p class="font-i400 text-xs">
                  I agree to the Terms and Conditions.
                </p>
                <p class="error text-red-500" v-if="errors.terms">
                  {{ errors.terms }}
                </p>
              </div>

              <span id="terms-error" class="text-red-500 text-xs mt-2 hidden">
                Please agree to the Terms and Conditions before proceeding.
              </span>
            </div>

            <div id="sign" v-show="currentStep === 2" class="step">
              <div class="flex flex-col items-center h-full mt-20">
                <div
                  v-if="formData.signature"
                  class="mt-3 border p-2 rounded bg-gray-100"
                >
                  <p class="text-sm text-gray-600 mb-1">Saved Signature:</p>
                  <img
                    :src="formData.signature"
                    alt="Signature Preview"
                    class="max-w-xs border border-gray-300"
                  />
                </div>
                <h2 v-if="!formData.signature" class="font-i600 pb-3">
                  Draw Your Signature Below
                </h2>

                <canvas
                  v-if="!formData.signature"
                  id="signature-pad"
                  ref="canvas"
                ></canvas>

                <div v-if="!formData.signature" id="signature-form">
                  <div class="button-group">
                    <button
                      class="prime-bg text-white font-i500 text-xs"
                      type="button"
                      id="clear"
                      @click="clearSignature"
                    >
                      Clear
                    </button>
                    <button
                      class="prime-bg text-white font-i500 text-xs"
                      type="button"
                      id="clear"
                      @click="saveSignature"
                    >
                      save
                    </button>
                    <p class="error text-red-500" v-if="errors.signature">
                      {{ errors.signature }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div id="pay" v-show="currentStep === 3" class="h-full step">
              <div class="flex flex-col items-center h-full mt-20 text-center">
                <h2 class="font-i600 mb-2">Select Payment Mode</h2>

                <form method="POST" id="paymentForm">
                  <div class="radio-group gap-2 flex justify-center">
                    <label>
                      <input
                        type="radio"
                        name="payment_method"
                        value="online"
                        @change="clearError('payment_method')"
                        v-model="formData.payment_method"
                      />
                      Pay Online
                    </label>

                    <label v-if="!formData.payment_done">
                      <input
                        type="radio"
                        name="payment_method"
                        value="offline"
                        @change="clearError('payment_method')"
                        v-model="formData.payment_method"
                      />
                      Pay Offline
                    </label>
                  </div>
                  <div
                    class="flex mt-3 offmode flex-col items-center"
                    v-if="formData.payment_method == 'offline'"
                  >
                    <div class="flex gap-4">
                      <label>
                        <input
                          type="radio"
                          name="offline_type"
                          value="cash"
                          @change="clearError('payment_method')"
                          v-model="formData.offline_type"
                        />
                        CASH
                      </label>
                      <label>
                        <input
                          type="radio"
                          name="offline_type"
                          value="pso"
                          @change="clearError('payment_method')"
                          v-model="formData.offline_type"
                        />
                        PSO
                      </label>
                    </div>

                    <div
                      v-if="formData.offline_type === 'pso'"
                      class="flex flex-col gap-2 mt-3"
                    >
                      <input
                        type="text"
                        @input="clearError('payment_method')"
                        placeholder="Enter Transcation Number"
                        v-model="formData.offline_transaction_id"
                        class="border p-2 rounded"
                      />
                      <input
                        type="text"
                        @input="clearError('payment_method')"
                        placeholder="Enter Transcation Amount"
                        v-model="formData.offline_amount"
                        class="border p-2 rounded"
                      />
                    </div>

                    <div
                      v-if="formData.offline_type === 'cash'"
                      class="flex flex-col gap-2 mt-3"
                    >
                      <input
                        type="text"
                        placeholder="Enter Amount"
                        @input="clearError('payment_method')"
                        v-model="formData.offline_amount"
                        class="border p-2 rounded"
                      />
                    </div>
                  </div>

                  <div v-if="formData.payment_method == 'online'">
                    <button
                      v-if="!formData.payment_done"
                      @click.prevent="payOnline"
                      class="btn prime-bg text-white w-40 mt-7"
                    >
                      Continue Payment
                    </button>
                  </div>
                  <div
                    v-if="formData.payment_done"
                    id="paySuccess"
                    class="flex flex-col justify-center items-center"
                  >
                    <img
                      class="h-20 mb-3"
                      src="/assets/img/success.svg"
                      alt=""
                    />
                    <p class="font-i400 text-green-600">
                      Transaction Completed Successfully
                    </p>
                  </div>
                </form>
                <p class="error" v-if="errors.payment_method">
                  {{ errors.payment_method }}
                </p>
                <div id="offlineDetails" class="hidden mt-3">
                  <p>
                    Please visit our office to complete the offline payment.
                  </p>
                </div>
              </div>
            </div>
            <div id="confirm" v-show="currentStep === 4" class="step">
              <fieldset class="fieldset">
                <legend class="fieldset-legend text-lg font-semibold">
                  <h2 class="font-i600 pb-3">Booking Confirmed</h2>
                </legend>
                <div class="grid grid-cols-12 gap-4 mt-2 pb-2">
                  <div class="col-span-6">
                    <select
                      name="consultant"
                      v-model="formData.consultant"
                      @change="clearError('consultant')"
                      class="select select-bordered w-full"
                    >
                      <option disabled selected>Select Consultant</option>
                      <option>one</option>
                      <option>two</option>
                      <option>Other</option>
                    </select>
                    <span v-if="errors.consultant" class="text-red-500">
                      {{ errors.consultant }}
                    </span>
                  </div>

                  <div class="col-span-6">
                    <select
                      v-model="formData.medium"
                      name="medium"
                      class="select select-bordered w-full"
                      @change="clearError('medium')"
                    >
                      <option disabled selected>Select Medium</option>
                      <option>one</option>
                      <option>two</option>
                      <option>Other</option>
                    </select>
                    <span v-if="errors.medium" class="text-red-500">
                      {{ errors.medium }}
                    </span>
                  </div>
                </div>
              </fieldset>
              <div></div>
              <div class="flex gap-5 items-baseline justify-between my-2">
                <p class="font-i400 mb-2 text-xs">
                  Please select which is your registration type
                </p>
                <div class="flex gap-2 items-center">
                  <label>
                    <input
                      type="radio"
                      name="care"
                      value="hair"
                      v-model="formData.care"
                      checked=""
                    />
                    Hair
                  </label>
                  <label>
                    <input
                      type="radio"
                      name="care"
                      value="skin"
                      v-model="formData.care"
                    />
                    Skin
                  </label>
                  <label class="m-0">
                    <input
                      type="radio"
                      name="care"
                      value="both"
                      v-model="formData.care"
                    />
                    Both
                  </label>
                  <span
                    class="text-red-500 hidden error"
                    id="care-error"
                  ></span>
                </div>
              </div>
              <div class="flex gap-5 items-baseline justify-between my-2">
                <p class="font-i400 mb-2 text-xs">
                  You’ll receive an email once your appointment is confirmed.
                </p>
                <div class="flex gap-2 items-center">
                  <input
                    type="checkbox"
                    checked="checked"
                    name="email_confirm"
                    v-model="formData.email_confirm"
                    class="toggle toggle-xs custom-toggle"
                  />
                </div>
              </div>
              <div class="flex gap-5 items-baseline justify-between my-2">
                <p class="font-i400 mb-2 text-xs">
                  You’ll receive an whatsapp once your appointment is confirmed.
                </p>
                <div class="flex gap-2 items-center">
                  <input
                    type="checkbox"
                    name="whatsapp_confirm"
                    checked="checked"
                    v-model="formData.whatsapp_confirm"
                    class="toggle toggle-xs custom-toggle"
                  />
                </div>
              </div>
            </div>
            <div class="flex justify-center mt-4 pb-2 sticky-footer">
              <div class="actions">
                <button
                  type="submit"
                  class="nxt_btn btn prime-bg text-white w-40"
                >
                  {{ currentStep === steps.length - 1 ? "Submit" : "Next" }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import { ref, watch, reactive, onMounted, computed } from "vue";
import { useRouter } from "vue-router";
import { useBookingStore } from "../stores/bookingStore";
const bookingStore = useBookingStore();

import SignaturePad from "signature_pad";

const currentTreatment = ref("skin");

function switchTreatment(treatment) {
  currentTreatment.value = treatment.toLowerCase();
}
const steps = ["info", "terms", "sign", "pay", "confirm"];
const currentStep = ref(0);
const router = useRouter();
const maxDob = ref("");
const formData = reactive({
  offline_type: "",
  offline_transaction_id: "",
  offline_amount: "",
  cash: "",
  offline_type: "",
  pso: "",
  register_no: "",
  name: "",
  mobile: "",
  email: "",
  dob: "",
  occupation: "",
  gender: "",
  pincode: "",
  address: "",
  signature: "",
  payment_method: "",
  payment_id: "",
  payment_done: false,
  terms: false,
  consultant: "",
  care: "",
  medium: "",
  email_confirm: true,
  whatsapp_confirm: true,
});

const errors = reactive({});
const canvas = ref(null);
const checksign = ref(false);
let signaturePad = null;
let signaturePadInitialized = false;

// --- Lifecycle ---

onMounted(() => {
  signaturePad = new SignaturePad(canvas.value);
  window.addEventListener("resize", resizeCanvas);
  const today = new Date();

  const minAgeDate = new Date(
    today.getFullYear() - 18,
    today.getMonth(),
    today.getDate()
  );

  maxDob.value = minAgeDate.toISOString().split("T")[0];

  formData.dob = maxDob.value;
});

const stepLabels = {
  info: "Registration",
  terms: "Terms & condition",
  sign: "Signature",
  pay: "Payment",
  confirm: "Booking Confirmed",
};

const stepIcons = {
  info: "data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M6.25024%205C6.25024%204.00544%206.64533%203.05161%207.34859%202.34835C8.05185%201.64509%209.00568%201.25%2010.0002%201.25C10.9948%201.25%2011.9486%201.64509%2012.6519%202.34835C13.3552%203.05161%2013.7502%204.00544%2013.7502%205C13.7502%205.99456%2013.3552%206.94839%2012.6519%207.65165C11.9486%208.35491%2010.9948%208.75%2010.0002%208.75C9.00568%208.75%208.05185%208.35491%207.34859%207.65165C6.64533%206.94839%206.25024%205.99456%206.25024%205ZM3.12608%2016.7542C3.15418%2014.9496%203.89078%2013.2284%205.17688%2011.9622C6.46298%2010.6959%208.19542%209.98621%2010.0002%209.98621C11.8051%209.98621%2013.5375%2010.6959%2014.8236%2011.9622C16.1097%2013.2284%2016.8463%2014.9496%2016.8744%2016.7542C16.8766%2016.8757%2016.8433%2016.9951%2016.7786%2017.098C16.7139%2017.2009%2016.6207%2017.2826%2016.5102%2017.3333C14.4679%2018.2698%2012.247%2018.753%2010.0002%2018.75C7.67858%2018.75%205.47274%2018.2433%203.49024%2017.3333C3.37981%2017.2826%203.28656%2017.2009%203.22188%2017.098C3.1572%2016.9951%203.12391%2016.8757%203.12608%2016.7542Z'%20fill='%23181A16'/%3e%3c/svg%3e",
  terms:
    "data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M4.6875%201.25C3.82417%201.25%203.125%201.95%203.125%202.8125V17.1875C3.125%2018.05%203.825%2018.75%204.6875%2018.75H15.3125C16.175%2018.75%2016.875%2018.05%2016.875%2017.1875V10.625C16.875%209.7962%2016.5458%209.00134%2015.9597%208.41529C15.3737%207.82924%2014.5788%207.5%2013.75%207.5H12.1875C11.7731%207.5%2011.3757%207.33538%2011.0826%207.04235C10.7896%206.74933%2010.625%206.3519%2010.625%205.9375V4.375C10.625%203.5462%2010.2958%202.75134%209.70971%202.16529C9.12366%201.57924%208.3288%201.25%207.5%201.25H4.6875ZM6.25%2012.5C6.25%2012.3342%206.31585%2012.1753%206.43306%2012.0581C6.55027%2011.9408%206.70924%2011.875%206.875%2011.875H13.125C13.2908%2011.875%2013.4497%2011.9408%2013.5669%2012.0581C13.6842%2012.1753%2013.75%2012.3342%2013.75%2012.5C13.75%2012.6658%2013.6842%2012.8247%2013.5669%2012.9419C13.4497%2013.0592%2013.2908%2013.125%2013.125%2013.125H6.875C6.70924%2013.125%206.55027%2013.0592%206.43306%2012.9419C6.31585%2012.8247%206.25%2012.6658%206.25%2012.5ZM6.875%2014.375C6.70924%2014.375%206.55027%2014.4408%206.43306%2014.5581C6.31585%2014.6753%206.25%2014.8342%206.25%2015C6.25%2015.1658%206.31585%2015.3247%206.43306%2015.4419C6.55027%2015.5592%206.70924%2015.625%206.875%2015.625H10C10.1658%2015.625%2010.3247%2015.5592%2010.4419%2015.4419C10.5592%2015.3247%2010.625%2015.1658%2010.625%2015C10.625%2014.8342%2010.5592%2014.6753%2010.4419%2014.5581C10.3247%2014.4408%2010.1658%2014.375%2010%2014.375H6.875Z'%20fill='%23181A16'/%3e%3cpath%20d='M10.8096%201.51318C11.4983%202.30732%2011.8769%203.32364%2011.8754%204.37485V5.93735C11.8754%206.10985%2012.0154%206.24985%2012.1879%206.24985H13.7504C14.8016%206.24839%2015.8179%206.62692%2016.6121%207.31568C16.2454%205.92127%2015.515%204.64927%2014.4955%203.62976C13.476%202.61025%2012.204%201.87982%2010.8096%201.51318Z'%20fill='%23181A16'/%3e%3c/svg%3e",
  sign: "data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M18.1094%201.89106C17.6992%201.48091%2017.1428%201.25049%2016.5627%201.25049C15.9826%201.25049%2015.4263%201.48091%2015.016%201.89106L14.0519%202.85523L17.1452%205.94856L18.1094%204.9844C18.5195%204.57417%2018.75%204.01783%2018.75%203.43773C18.75%202.85763%2018.5195%202.30129%2018.1094%201.89106ZM16.261%206.83273L13.1677%203.7394L3.04271%2013.8644C2.52842%2014.3784%202.15036%2015.0125%201.94271%2015.7094L1.27605%2017.9469C1.24386%2018.0549%201.24146%2018.1695%201.2691%2018.2788C1.29674%2018.388%201.35339%2018.4877%201.43306%2018.5674C1.51273%2018.6471%201.61245%2018.7037%201.72168%2018.7313C1.8309%2018.759%201.94557%2018.7566%202.05355%2018.7244L4.29105%2018.0577C4.9879%2017.8501%205.62201%2017.472%206.13605%2016.9577L16.261%206.83273Z'%20fill='%23181A16'/%3e%3c/svg%3e",
  pay: "data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M3.75%203.125C3.08696%203.125%202.45107%203.38839%201.98223%203.85723C1.51339%204.32607%201.25%204.96196%201.25%205.625V6.25H18.75V5.625C18.75%204.96196%2018.4866%204.32607%2018.0178%203.85723C17.5489%203.38839%2016.913%203.125%2016.25%203.125H3.75Z'%20fill='black'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M18.75%208.125H1.25V14.375C1.25%2015.038%201.51339%2015.6739%201.98223%2016.1428C2.45107%2016.6116%203.08696%2016.875%203.75%2016.875H16.25C16.913%2016.875%2017.5489%2016.6116%2018.0178%2016.1428C18.4866%2015.6739%2018.75%2015.038%2018.75%2014.375V8.125ZM3.75%2011.25C3.75%2011.0842%203.81585%2010.9253%203.93306%2010.8081C4.05027%2010.6908%204.20924%2010.625%204.375%2010.625H9.375C9.54076%2010.625%209.69973%2010.6908%209.81694%2010.8081C9.93415%2010.9253%2010%2011.0842%2010%2011.25C10%2011.4158%209.93415%2011.5747%209.81694%2011.6919C9.69973%2011.8092%209.54076%2011.875%209.375%2011.875H4.375C4.20924%2011.875%204.05027%2011.8092%203.93306%2011.6919C3.81585%2011.5747%203.75%2011.4158%203.75%2011.25ZM4.375%2013.125C4.20924%2013.125%204.05027%2013.1908%203.93306%2013.3081C3.81585%2013.4253%203.75%2013.5842%203.75%2013.75C3.75%2013.9158%203.81585%2014.0747%203.93306%2014.1919C4.05027%2014.3092%204.20924%2014.375%204.375%2014.375H6.875C7.04076%2014.375%207.19973%2014.3092%207.31694%2014.1919C7.43415%2014.0747%207.5%2013.9158%207.5%2013.75C7.5%2013.5842%207.43415%2013.4253%207.31694%2013.3081C7.19973%2013.1908%207.04076%2013.125%206.875%2013.125H4.375Z'%20fill='black'/%3e%3c/svg%3e",
  confirm:
    "data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M7.5%201.25H4.6875C3.82417%201.25%203.125%201.95%203.125%202.8125V17.1875C3.125%2018.05%203.825%2018.75%204.6875%2018.75H15.3125C16.175%2018.75%2016.875%2018.05%2016.875%2017.1875V10.625C16.875%209.7962%2016.5458%209.00134%2015.9597%208.41529C15.3737%207.82924%2014.5788%207.5%2013.75%207.5H12.1875C11.7731%207.5%2011.3757%207.33538%2011.0826%207.04235C10.7896%206.74933%2010.625%206.3519%2010.625%205.9375V4.375C10.625%203.5462%2010.2958%202.75134%209.70971%202.16529C9.12366%201.57924%208.3288%201.25%207.5%201.25ZM13.0083%2010.3633C13.0583%2010.2967%2013.0945%2010.2208%2013.1147%2010.14C13.135%2010.0592%2013.1388%209.97512%2013.1261%209.89279C13.1134%209.81047%2013.0844%209.73152%2013.0407%209.66058C12.9971%209.58964%2012.9396%209.52815%2012.8719%209.47971C12.8041%209.43127%2012.7273%209.39687%2012.6461%209.37852C12.5648%209.36018%2012.4807%209.35826%2012.3987%209.37288C12.3167%209.38751%2012.2385%209.41838%2012.1686%209.46368C12.0987%209.50898%2012.0385%209.56779%2011.9917%209.63667L9.295%2013.4117L7.94167%2012.0583C7.82319%2011.9479%207.66648%2011.8878%207.50456%2011.8907C7.34265%2011.8935%207.18816%2011.9591%207.07365%2012.0736C6.95914%2012.1882%206.89354%2012.3426%206.89069%2012.5046C6.88783%2012.6665%206.94793%2012.8232%207.05833%2012.9417L8.93333%2014.8167C8.99749%2014.8808%209.07483%2014.9302%209.15999%2014.9614C9.24515%2014.9926%209.33608%2015.0049%209.42647%2014.9974C9.51686%2014.99%209.60455%2014.963%209.68344%2014.9182C9.76233%2014.8735%209.83054%2014.8121%209.88333%2014.7383L13.0083%2010.3633Z'%20fill='black'/%3e%3cpath%20d='M10.8096%201.51318C11.4983%202.30732%2011.8769%203.32364%2011.8754%204.37485V5.93735C11.8754%206.10985%2012.0154%206.24985%2012.1879%206.24985H13.7504C14.8016%206.24839%2015.8179%206.62692%2016.6121%207.31568C16.2454%205.92127%2015.515%204.64927%2014.4955%203.62976C13.476%202.61025%2012.204%201.87982%2010.8096%201.51318Z'%20fill='black'/%3e%3c/svg%3e",
};

function getIconForStep(step) {
  return stepIcons[step] || "";
}
function resizeCanvas() {
  if (!canvas.value) return;
  const ratio = Math.max(window.devicePixelRatio || 1, 1);
  const width = canvas.value.offsetWidth;
  const height = canvas.value.offsetHeight;

  if (width === 0 || height === 0) return;

  canvas.value.width = width * ratio;
  canvas.value.height = height * ratio;
  const ctx = canvas.value.getContext("2d");
  ctx.scale(ratio, ratio);

  if (signaturePad) {
    signaturePad.clear();
  }
}
watch(currentStep, (newStep) => {
  if (newStep === 2 && !signaturePadInitialized) {
    setTimeout(() => {
      if (canvas.value) {
        signaturePad = new SignaturePad(canvas.value);
        resizeCanvas();
        window.addEventListener("resize", resizeCanvas);
        signaturePadInitialized = true;
      } else {
        console.warn("Canvas not found when trying to init SignaturePad");
      }
    }, 300);
  }
});

function clearSignature() {
  signaturePad.clear();
  formData.signature = "";
}

async function saveSignature() {
  if (!signaturePad) {
    errors.signature = "Signature pad not initialized.";
    return false;
  }
  if (signaturePad.isEmpty()) {
    errors.signature = "Please provide your signature.";
    return false;
  }

  const dataURL = signaturePad.toDataURL("image/png");
  formData.signature = dataURL;

  const input = document.querySelector('input[name="signature"]');
  if (input) input.value = dataURL;

  errors.signature = "";

  try {
    const res = await fetch("http://localhost:8000/", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ signature: dataURL }),
    });

    const data = await res.json();

    if (!res.ok) {
      throw new Error(data.message || "Failed to save signature");
    }
    checksign.value = true;
    return true;
  } catch (err) {
    console.error("Error saving signature", err);
    errors.signature = "Error saving signature. Please try again.";
    return false;
  }
}

async function handleNext() {
  if (currentStep.value === 0 && !validateStep1()) return;
  if (currentStep.value === 1 && !validateTerms()) return;
  if (currentStep.value === 2 && !validateSignature()) return;
  if (currentStep.value === 3) {
    if (formData.payment_method === "online") {
      if (!formData.payment_done) {
        errors.payment_method = "Please complete your online payment.";
        return;
      }
    } else if (formData.payment_method === "offline") {
      const success = await saveOfflinePayment();
      if (!success) return;
    } else {
      errors.payment_method = "Please select a payment method.";
      return;
    }
  }
  if (currentStep.value === 4 && !validateConfirmStep()) return;

  if (currentStep.value < steps.length - 1) {
    currentStep.value++;
  } else {
    await submitForm();
  }
}

function validateConfirmStep() {
  errors.consultant = "";
  errors.medium = "";
  if (!formData.consultant)
    errors.consultant = "Consultant selection is required.";
  if (!formData.medium) errors.medium = "Medium selection is required.";

  return !errors.consultant && !errors.medium;
}

function validateStep1() {
  errors.name = "";
  errors.mobile = "";
  errors.email = "";
  errors.dob = "";
  errors.occupation = "";
  errors.gender = "";
  errors.pincode = "";
  errors.address = "";

  if (!formData.name.trim()) errors.name = "Name is required.";
  if (!formData.mobile.trim()) errors.mobile = "Mobile is required.";
  else if (!/^[6-9]\d{9}$/.test(formData.mobile))
    errors.mobile = "Enter valid 10-digit mobile number starts with 6-9.";
  if (!formData.email.trim()) errors.email = "Email is required.";
  else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email))
    errors.email = "Invalid email address.";
  if (!formData.dob) errors.dob = "Date of Birth is required.";
  if (!formData.occupation.trim())
    errors.occupation = "Occupation is required.";
  if (!formData.gender) errors.gender = "Gender selection is required.";

  if (!/^\d{6}$/.test(formData.pincode))
    errors.pincode = "Pincode must be 6 digits.";
  if (!formData.address.trim()) errors.address = "Address is required.";

  return (
    !errors.register_no &&
    !errors.name &&
    !errors.mobile &&
    !errors.email &&
    !errors.dob &&
    !errors.occupation &&
    !errors.gender &&
    !errors.pincode &&
    !errors.address
  );
}
function clearError(field) {
  errors[field] = "";
}

function validateSignature() {
  errors.signature = "";
  if (!checksign.value) {
    errors.signature = "Save your signature.";
    return false;
  }
  if (!signaturePad) {
    errors.signature = "Signature pad not initialized.";
    return false;
  }
  if (signaturePad.isEmpty()) {
    errors.signature = "Please provide your signature.";
    return false;
  }
  formData.signature = signaturePad.toDataURL();
  return true;
}

function validatePayment() {
  errors.payment_method = "";

  if (!formData.payment_method) {
    errors.payment_method = "Please select a payment method.";
    return false;
  }

  if (formData.payment_method === "online" && !formData.payment_done) {
    errors.payment_method = "Please complete the online payment.";
    return false;
  }

  return true;
}
async function saveOfflinePayment() {
  if (!formData.offline_type) {
    errors.payment_method = "Please select payment type (Cash or PSO).";
    return false;
  }

  if (formData.offline_type === "pso") {
    if (!formData.offline_transaction_id || !formData.offline_amount) {
      errors.payment_method = "Please enter transaction number and amount.";
      return false;
    }
  } else if (formData.offline_type === "cash" && !formData.offline_amount) {
    errors.payment_method = "Please enter amount.";
    return false;
  }

  errors.payment_method = "";

  try {
    const res = await fetch("https://192.168.1.120/coeapi/payment/", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization:
          "Bearer b8e7f61d5d63a23ad24157404976042ec6df8893b09ebe19ef468ba536fdbb14",
      },
      body: JSON.stringify({
        payment_mode: formData.payment_method,
        offline_type: formData.offline_type,
        transaction_id: formData.offline_transaction_id || null,
        offline_amount: formData.offline_amount,
      }),
    });

    const data = await res.json();
    if (!res.ok) throw new Error(data.message || "Failed to save payment");

    formData.payment_done = true;
    return true;
  } catch (err) {
    console.error("Error saving offline payment:", err);
    errors.payment_method = "Error saving payment. Please try again.";
    return false;
  }
}

function validateTerms() {
  errors.terms = "";
  if (!formData.terms) {
    errors.terms = "You must accept the terms.";
    return false;
  }
  return true;
}

// --- Razorpay ---
async function payOnline() {
  try {
    const res = await fetch("http://localhost:8000/create_order.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ amount: 100 }),
    });

    const order = await res.json();
    if (order.error) {
      throw new Error(order.error);
    }

    const options = {
      key: "rzp_test_aZqyp9WC74epcz",
      amount: order.amount,
      currency: order.currency,
      name: "Vcare",
      description: "Payment for Registration",
      order_id: order.id,
      handler: async (response) => {
        formData.payment_id = response.razorpay_payment_id;
        formData.payment_type = "online";
        await savePayment({
          payment_id: response.razorpay_payment_id,
          razor_order_id: response.razorpay_order_id,
          amount: "100",
          status: "success",
        });
        formData.payment_done = true;
      },
      theme: { color: "#9b0032" },
    };

    const rzp = new window.Razorpay(options);
    rzp.open();
  } catch (err) {
    console.error("Payment error:", err);
    errors.payment_method = "Online payment failed.";
  }
}

// --- Save Payment ---
async function savePayment(data) {
  try {
    await fetch("https://192.168.1.120/coeapi/payment/", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization:
          "Bearer b8e7f61d5d63a23ad24157404976042ec6df8893b09ebe19ef468ba536fdbb14",
      },
      body: JSON.stringify(data),
    });
  } catch (err) {
    console.error("Payment API failed:", err);
  }
}

// --- Submit Form ---
async function submitForm() {
  try {
    const res = await fetch("https://192.168.1.120/coeapi/register/", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization:
          "Bearer basic b8e7f61d5d63a23ad24157404976042ec6df8893b09ebe19ef468ba536fdbb14",
      },
      body: JSON.stringify(formData),
    });
    const data = await res.json();
    if (res.status === 200 && !data.error) {
      if (res.status === 200 && !data.error) {
        bookingStore.setBookingData(data);
        router.push({ name: "BookingDetails" });
      } else {
        console.error("Error:", data.message);
      }
    } else {
      console.error("Error:", data.message);
    }
  } catch (err) {
    console.error("Submission error:", err);
  }
}
</script>
