 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <link rel="icon" type="image/svg+xml" href="/vite.svg" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>coe-final</title>
     <style>
     #skin .tab-slider {
         position: absolute;
         top: 0;
         left: 0;
         height: 100%;
         width: 0;
         border-radius: 1rem;
         background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF0AAABcCAYAAAAMLblmAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPeSURBVHgB7Z1PUtRQEIe7X8Y/y3gCs3YjN3BED4AncKhyMZYL8QQOJwAXyLiw1BOIaxXiCRhP4HAC39IFpO1OmKmBmQELmXTQ31cFJHl5IfnS6feSTTP9Ac/S5dsFcVtIMl3NhCgNuizM6cRuGf3j6HVH1p9qRYbVVra/w4RkoMuDrbh7cN5xeF7DWtpOfxE9Jw4d+g+EXhp6M5h4JxBtzrsBU9InZPcI/B1S9PoxXz+9+YT0btrO9C591LSxROBSYJFBIF6ZjPpwYgcIv3TMZ0GyYxlktG0svZsuv4TwxWBey5R9TJleLK1oDv9BYKHclOLWZsxjGelM4TmBhTOK9lK6zr9XCCyeavpNjNRSL4lQFhLiuwRqw97swxFhxlIn9inFcnpGoE5UOnNGoDaqj4WgXjTIVXr5uRbUBJMg0j0IlmMI1EpgSK+bDOnFAUh3ANIdgHQHIN0BSHcA0h2AdAcg3QFIdwDSHYB0ByDdAUh3ANIdgHQHIN0BSHcA0h2AdAcg3QFIdwDSHYB0ByDdAUh3ANIdgHQHIN0BSHcA0h2AdAcg3QFIdwDSHYB0ByDdAUh3ANIdgHQHIN0BSHcA0h2AdAcg3QFIdwDSHYB0ByDdAUh3ANIdgHQHIN0BSHcA0h2AdAcg3QFId8CkDwnUhhUdRKTXjFV5DCwSCdSGEFukl/U0QU2wFLFFVyynM/FAxAqujs87q+p6SJuuAHb+LU3s36nhlBVvhTZvUvHKar/N2qcskkXhsV5Vhxpd0YYHXBZ95fCTGgvniUhnVM9zf7uTJa3WO11c0rZU78hOKxRrd568LdtNvlDYYKZGloazil5VlcZbD/Ya+XgKve/H3dXR6rHw/VL2yR1ji2VpJN7opsvvjqO+OYjk/bh3v6rSKE0sbcz5pHAjSa5tTAsv900Phd9Pbqn6ck6NQsrSx6X07fj5m+VMagiWwy2lTDWcnTKmy8HJ0aqMqp87Y377Mc9tefxydIOKda5mBf4I92ZXIj/rnWL6CdCLHCZ6LHLGvJrf0fpYus0KhOSRt3iLiDfx66uZbTryz+2oA+qsza/tWDo2kBOjwt6Ts64TnwEsMm6Q3PdKNfZ/t+Pui3nth4fJ6uxo14E0XF+b16/M70I9qhm7HvN5+qnleR266cO29npZ06xG04CsbcW9T+ftuL/dzZLkaKPK7xIt+hO+3rnzZOvgvL5P0wePhaVHC5/H6wAuvN6PX/KZred1t3kvU6KDlNwr9GSZLXeO691ldHGGGn25Pmwf5p3cojD5BclK0DdZTakXrcc6tF9602MhMtSUMaxeNIvcMsZZHX8DgaBDmc46nekAAAAASUVORK5CYII=');
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
         transition: all 0.4s ease;
         z-index: 0;
     }

     #hair .tab-slider {
         position: absolute;
         top: 0;
         left: 0;
         height: 100%;
         width: 0;
         border-radius: 1rem;
         background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF0AAABcCAYAAAAMLblmAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPYSURBVHgB7Z3PUtNQFIfPuWlZ1z97s3YjSwcdrW+AT2CZYeEOfALKEwALh5UjPoH4BAYQcEd9AsMeMWsh93hP2mKhLThCc6L+vpmm7b1JJvlycnJvNofpN2jMzNyLatwUkpiYYg5NQlx8D6wW079P1vsoqS6CkzQsUi/UoZw62d7e4VU74XEdjWaz4fyPBWZu0f8h9EboXgTe9KeyOu4CDEkfkN0mcC1EpH28vbd8sf2c9EbzYewkeh8apwncCELU8ScyOxj1bnAFCL951Ker86ZmkH7bmfTbT2aWIHwyFOJDyh74300rkURfCUyUnOu3siTJikh3PlogMHH60d5NL0yzBCYPU6v4Qmopl/xEYke5e0CgNHRm7xxjxFIm+irFhZlnTKA8wrsrfZDGBEpDXxI6AqXCxIj0svEkiHQLVHqDQKlAesn0czooGUg3ANINgHQDIN0ASDcA0g2AdAMg3QBINwDSDYB0AyDdAEg3ANINgHQDIN0ASDcA0g2AdAMg3QBINwDSDYB0AyDdAEg3ANINgHQDIN0ASDcA0g2AdAMg3QBINwDSDYB0AyDdAEg3ANINgHQDIN0ASDcA0g2AdAMg3QBINwDSDYB0AyDdAEg3ANINgHQDIN0ASDcA0g2AdAMg3QBIN0ClpwTKJEOkl4yQZE5+lXoEJeCIVbqkBEpDg7zGwun4qqTVQ6sehmVHC68WDUVRWo7Dryb9BYhQp8ZOvpBU3nomIqveTa1p7bdRKxRlPb17UfWitUx5h7VkYyQn36m6JPmJtPr1PA/WW3FUq72loqIkN0LEb9acX7w//6bo71Yocyuhr5Kl4bSiVxHid54++kjVvD03vm3tzvX/9IQfFLLPIZonp/vilXBOemFaVC2ScD7PiiEje9+m6pEMCleiqL4yLFzhxqnwxmBLb9uEKkTOXJQ+LqQf7exvhQS/StUh05Qy1Hp5NcmhcnA55yq+EkNi9ZslnxL9fTY58q6+3B0Z2CPi26MrkcslAofvgCz5nOq+yJiiznTw2/9/Jl1HBZ7z59biNSKOt/fXRvWFoeH4YwsP1FHNvX1tkBFnhb0HRl3nXgNoZHiuP7NKNV3hu6/G9Z+eRnOjoz08SN3U4rjtNL9rOXkqGT0f9Xnxrh07QL/bfNwMB7pEpYxqJM09LWY7ex+uWvNg/WUcRflKN79LptEf8VTr/vzrw6u2vfPk0YuwXZsmP45Pwnxh+aiXwy9y5ayoGPdSfVq8f8oscS93xr3umP6cNLyCSBy7d+MOblJ05cusEMfXqCCf6kKn9RyCRsLMXieaOflEM8ZlG/4EZX1aWI4Mp1IAAAAASUVORK5CYII=');
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

     <script type="module" crossorigin src="./assets/index-vxiWb_HH.js"></script>
     <link rel="stylesheet" crossorigin href="./assets/index-BT_wlDao.css">
 </head>

 <body>
     <div class="container m-auto relative switch-treatment bg-gray-50" x-data="profileData('Skin','placeholder')"
         x-init="initTabs()" :id="activeTab == 'Hair' ? 'hair' :'skin'">
         <!-- name of each tab group should be unique -->
         <div class="relative">
             <div
                 class="absolute top-0 left-0 right-0 py-3 min-h-[200px] w-full p-3 items-center prime-bg rounded-b-3xl">
                 <div class="flex items-center justify-between relative">
                     <div>
                         <img src="./assets/logo-Dg8oQ9Mo.svg" alt="logo">
                     </div>
                     <div class="flex gap-3">
                         <button id="btnHair" class="border border-[#CECACA] h-10 w-30 rounded"
                             :class="{'bg-white text-black': activeTab === 'Hair','bg-transparent text-white': activeTab !== 'Hair'} "
                             @click="typeClick('Hair')">Hair</button>
                         <button id="btnSkin" class="border border-[#CECACA] h-10 w-30 rounded"
                             :class="{'bg-white text-black': activeTab === 'Skin', 'bg-transparent text-white': activeTab !== 'Skin'} "
                             @click="typeClick('Skin')">Skin</button>
                     </div>
                 </div>
             </div>

             <div id="reload" class="tab-content ">
                 <div class="absolute top-16 mt-4 w-full flex justify-center">
                     <div
                         class="bg-white w-full shadow p-3 m-3 mb-30 rounded-xl min-h-[60vh] flex justify-center items-center flex-col">
                         <div
                             class="font-s400 prime-bg text-white text-sm p-2 px-3 rounded mb-3 flex items-center gap-2">
                             REFRESH
                             <img src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='UTF-8'?%3e%3csvg%20xmlns='http://www.w3.org/2000/svg'%20xmlns:xlink='http://www.w3.org/1999/xlink'%20width='20px'%20height='20px'%20viewBox='0%200%2020%2020'%20version='1.1'%3e%3cg%20id='surface1'%3e%3cpath%20style='%20stroke:none;fill-rule:nonzero;fill:rgb(33.333334%25,34.117648%25,32.549021%25);fill-opacity:1;'%20d='M%2010%201.539062%20C%208.335938%201.539062%206.785156%202.023438%205.476562%202.855469%20L%203.707031%201.085938%20L%203.707031%206.042969%20L%208.664062%206.042969%20L%206.695312%204.074219%20C%207.675781%203.527344%208.800781%203.207031%2010%203.207031%20C%2013.746094%203.207031%2016.792969%206.253906%2016.792969%2010%20C%2016.792969%2010.890625%2016.613281%2011.742188%2016.300781%2012.523438%20L%2017.757812%2013.375%20C%2018.210938%2012.339844%2018.460938%2011.199219%2018.460938%2010%20C%2018.460938%205.335938%2014.664062%201.539062%2010%201.539062%20Z%20M%2010%201.539062%20'/%3e%3cpath%20style='%20stroke:none;fill-rule:nonzero;fill:rgb(33.333334%25,34.117648%25,32.549021%25);fill-opacity:1;'%20d='M%2013.300781%2015.921875%20C%2012.324219%2016.472656%2011.199219%2016.792969%2010%2016.792969%20C%206.253906%2016.792969%203.207031%2013.746094%203.207031%2010%20C%203.207031%209.15625%203.371094%208.355469%203.652344%207.609375%20L%202.195312%206.730469%20C%201.773438%207.738281%201.539062%208.84375%201.539062%2010%20C%201.539062%2014.664062%205.335938%2018.460938%2010%2018.460938%20C%2011.664062%2018.460938%2013.210938%2017.972656%2014.519531%2017.140625%20L%2016.292969%2018.914062%20L%2016.292969%2013.957031%20L%2011.335938%2013.957031%20Z%20M%2013.300781%2015.921875%20'/%3e%3c/g%3e%3c/svg%3e"
                                 class="w-5 reload_btn" alt="">
                         </div>
                         <div class="font-i400">
                             Oops! Something went wrong. Please try again.
                         </div>
                         <div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="absolute top-16 mt-4 w-full flex justify-center">


                 <div
                     class="w-full shadow p-3 m-3 mb-30 rounded-xl h-[70vh] max-h-[70vh] overflow-y-hidden bg-[#FAFAFA]">
                     <!-- <h1 class="text-xl font-i600">
                        Step Into Confidence
                    </h1> -->

                     <div class="flex flex-col items-center">
                         <!-- Step Icons -->
                         <div class="progress-tracker flex my-5 mx-3 items-center justify-around max-w-[600px] w-full">
                             <div v-for="(step, index) in steps" :key="step" class="flex items-center">
                                 <!-- Step icon -->
                                 <div :class="stepClasses(index)">
                                     <img :src="getIconForStep(step)" alt="" class="w-5 h-5" />
                                 </div>

                                 <!-- Connector line -->
                                 <div v-if="index < steps.length - 1"
                                     :class="index < currentStep ? 'progress_bar' : 'pending_bar'"></div>
                             </div>
                         </div>

                         <!-- Step Labels -->
                         <div
                             class="progress-tracker flex mx-3 mb-4 items-center justify-around text-center max-w-[600px] w-full">
                             <div v-for="(step, index) in steps" :key="step" class="flex items-center">
                                 <div class="w-20 text-xs text-center font-s400">
                                     {{ stepLabels[step] }}
                                 </div>
                                 <div v-if="index < steps.length - 1" class="opacity-0 w-4"></div>
                             </div>
                         </div>
                     </div>
                     </template>







                     <div id="registration" class="block step">
                         <fieldset class="fieldset">
                             <div class="grid grid-cols-12 gap-4 pb-2">
                                 <div class="col-span-6">
                                     <input type="number" class="input input-bordered w-full" name="register_no"
                                         placeholder="Register No" required data-error="Register No is required" />
                                     <span class="error-message text-red-500 hidden"></span>
                                 </div>
                                 <div class="col-span-6">
                                     <input type="text" class="input input-bordered w-full" name="name"
                                         placeholder="Name" required data-error="Please enter your name" />
                                     <span class="error-message text-red-500 hidden"></span>
                                 </div>
                             </div>
                             <div class="grid grid-cols-12 gap-4 mt-2 pb-2">
                                 <div class="col-span-6">
                                     <input type="text" class="input input-bordered w-full" name="mobile"
                                         placeholder="Mobile Number" required
                                         data-error="Please enter your mobile number" />
                                     <span class="error-message text-red-500 hidden"></span>
                                 </div>
                                 <div class="col-span-6">
                                     <input type="email" class="input input-bordered w-full" name="email"
                                         placeholder="Email" required data-error="Please enter a valid email address" />
                                     <span class="error-message text-red-500 hidden"></span>
                                 </div>
                             </div>

                             <div class="grid grid-cols-12 gap-4 mt-2 pb-2">
                                 <div class="col-span-6">
                                     <input type="date" class="input input-bordered w-full" name="dob" required
                                         data-error="Please enter your Date of Birth" />
                                     <span class="error-message text-red-500 hidden"></span>
                                 </div>
                                 <div class="col-span-6">
                                     <select name="gender" class="select select-bordered w-full" required
                                         data-error="Please select gender">
                                         <option disabled selected value="">Select gender</option>
                                         <option value="Male">Male</option>
                                         <option value="Female">Female</option>
                                         <option value="Other">Other</option>
                                     </select>
                                     <span class="error-message text-red-500 hidden"></span>
                                 </div>
                             </div>

                             <div class="grid grid-cols-12 gap-4 mt-2 pb-2">
                                 <div class="col-span-6">
                                     <input type="text" class="input input-bordered w-full" name="occupation"
                                         placeholder="Occupation" required data-error="Please enter your occupation" />
                                     <span class="error-message text-red-500 hidden"></span>
                                 </div>
                                 <div class="col-span-6">
                                     <input type="text" class="input input-bordered w-full" name="pincode"
                                         placeholder="Pincode" required
                                         data-error="Please enter a valid 6-digit pincode" />
                                     <span class="error-message text-red-500 hidden"></span>
                                 </div>
                             </div>

                             <div class="pb-2">
                                 <textarea class="textarea textarea-bordered w-full" name="address"
                                     placeholder="Enter your address" required
                                     data-error="Please enter your address"></textarea>
                                 <span class="error-message text-red-500 hidden"></span>
                             </div>
                         </fieldset>
                     </div>

                     <div id="terms" class="hidden step">
                         <h2 class="font-i600 pb-3">Privacy Policy</h2>

                         <iframe
                             src="https://docs.google.com/viewer?url=http://www.pdf995.com/samples/pdf.pdf&embedded=true"
                             frameborder="0" height="500px" width="100%">
                         </iframe>

                         <div class="flex items-center gap-2 mt-4">
                             <input type="checkbox" id="terms-checkbox" name="terms" class="checkbox checkbox-xs"
                                 required data-error="You must agree to the Terms and Conditions." />
                             <p class="font-i400 text-xs">I agree to the Terms and Conditions.</p>
                         </div>

                         <span id="terms-error" class="text-red-500 text-xs mt-2 hidden">
                             Please agree to the Terms and Conditions before proceeding.
                         </span>
                     </div>

                     <div id="sign" class="hidden step">
                         <div class="flex flex-col items-center h-full mt-20">
                             <h2 class="font-i600 pb-3">
                                 Draw Your Signature Below
                             </h2>

                             <canvas id="signature-pad"></canvas>

                             <form id="signature-form" method="POST" action="save_signature.php">
                                 <input type="hidden" name="signature" id="signature">
                                 <div class="button-group">
                                     <button class="prime-bg text-white font-i500 text-xs" type="button"
                                         id="clear">Clear</button>
                                     <button class="prime-bg text-white font-i500 text-xs" type="submit">Save
                                         Signature</button>
                                 </div>
                                 <span class=" text-red-500 hidden" id="sign-error"></span>

                             </form>

                         </div>

                     </div>
                     <div id="pay" class="hidden h-full step">
                         <div class="flex flex-col items-center h-full mt-20">
                             <h2 class="font-i600 mb-2">Select Payment Method</h2>

                             <form method="POST" id="paymentForm">
                                 <div class="radio-group gap-2 flex">
                                     <label>
                                         <input type="radio" name="payment_method" value="online" required>
                                         Pay Online
                                     </label>

                                     <label>
                                         <input type="radio" name="payment_method" value="offline" required>
                                         Pay Offline
                                     </label>
                                     <input type="hidden" name="payment_type" id="payment_type" value="">
                                 </div>
                                 <span class=" text-red-500 hidden" id="payment-error"></span>


                                 <button type="submit" class="btn prime-bg text-white  w-40 mt-7">Continue
                                     Payment</button>
                             </form>
                             <div id="offlineDetails" class="hidden mt-3">
                                 <p>Please visit our office to complete the offline payment.</p>
                             </div>
                         </div>
                     </div>
                     <div id="confirm" class="hidden step">

                         <fieldset class="fieldset">
                             <legend class="fieldset-legend text-lg font-semibold">
                                 <h2 class="font-i600 pb-3">
                                     Booking Confirmed
                                 </h2>
                             </legend>
                             <div class="grid grid-cols-12 gap-4 mt-2 pb-2">
                                 <div class="col-span-6">
                                     <select name="consultant" class="select select-bordered w-full">
                                         <option disabled selected>Select Consultant </option>
                                         <option>one</option>
                                         <option>two</option>
                                         <option>Other</option>
                                     </select>
                                     <span class=" text-red-500 hidden" id="consultant-error"></span>
                                 </div>

                                 <div class="col-span-6">

                                     <select name="medium" class="select select-bordered w-full">
                                         <option disabled selected>Select Medium</option>
                                         <option>one</option>
                                         <option>two</option>
                                         <option>Other</option>
                                     </select>
                                     <span class=" text-red-500 hidden" id="medium-error"></span>
                                 </div>


                             </div>
                         </fieldset>
                         <div>
                         </div>
                         <div class="flex gap-5 items-baseline justify-between my-2">
                             <p class="font-i400 mb-2 text-xs">Please select which is your registration type</p>
                             <div class="flex gap-2 items-center">
                                 <label>
                                     <input type="radio" name="care" value="hair" checked=""> Hair
                                 </label>
                                 <label>
                                     <input type="radio" name="care" value="skin"> Skin
                                 </label>
                                 <label class="m-0">
                                     <input type="radio" name="care" value="skin"> Both
                                 </label>
                                 <span class=" text-red-500 hidden" id="care-error"></span>
                             </div>


                         </div>
                         <div class="flex gap-5 items-baseline justify-between my-2">
                             <p class="font-i400 mb-2 text-xs">You’ll receive an email once your appointment is
                                 confirmed.</p>
                             <div class="flex gap-2 items-center">
                                 <input type="checkbox" checked="checked" name="email_confirm"
                                     class="toggle toggle-xs custom-toggle" />
                             </div>


                         </div>
                         <div class="flex gap-5 items-baseline justify-between my-2">
                             <p class="font-i400 mb-2 text-xs">You’ll receive an whatsapp once your appointment is
                                 confirmed.</p>
                             <div class="flex gap-2 items-center">
                                 <input type="checkbox" name="whatsapp_confirm" checked="checked"
                                     class="toggle toggle-xs custom-toggle" />
                             </div>


                         </div>

                     </div>
                     <div class="flex justify-center mt-4 pb-2 sticky-footer">
                         <button class="btn prime-bg text-white  w-40 nxt_btn">Next</button>
                     </div>




                 </div>

             </div>


         </div>



     </div>


     <script>
     document.addEventListener("DOMContentLoaded", () => {
         const nextBtn = document.querySelector(".nxt_btn");
         const steps = document.querySelectorAll(".step");
         let currentStep = 0;
         const formData = {};

         const canvas = document.getElementById("signature-pad");
         const ctx = canvas?.getContext("2d");
         let drawing = false;

         if (canvas && ctx) {
             canvas.addEventListener("mousedown", () => (drawing = true));
             canvas.addEventListener("mouseup", () => {
                 drawing = false;
                 ctx.beginPath();
             });
             canvas.addEventListener("mousemove", draw);
             canvas.addEventListener("mouseleave", () => (drawing = false));

             function draw(e) {
                 if (!drawing) return;
                 ctx.lineWidth = 2;
                 ctx.lineCap = "round";
                 ctx.strokeStyle = "#000";
                 ctx.lineTo(e.offsetX, e.offsetY);
                 ctx.stroke();
                 ctx.beginPath();
                 ctx.moveTo(e.offsetX, e.offsetY);
             }

             document.getElementById("clear")?.addEventListener("click", () => {
                 ctx.clearRect(0, 0, canvas.width, canvas.height);
                 document.getElementById("signature").value = "";
             });
         }

         function isCanvasBlank(canvas) {
             const blank = document.createElement("canvas");
             blank.width = canvas.width;
             blank.height = canvas.height;
             return canvas.toDataURL() === blank.toDataURL();
         }


         function getCustomMessage(input) {
             if (input.name === "register_no" && !input.value.trim()) return "Register No is required.";
             if (input.name === "name" && !input.value.trim()) return "Please enter your full name.";
             if (input.name === "mobile" && !/^[6-9]\d{9}$/.test(input.value))
                 return "Enter a valid 10-digit mobile number.";
             if (input.name === "email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value))
                 return "Please enter a valid email address.";
             if (input.name === "dob" && !input.value.trim()) return "Date of Birth is required.";
             if (input.name === "gender" && !input.value.trim()) return "Please select your gender.";
             if (input.name === "occupation" && !input.value.trim()) return "Please enter your occupation.";
             if (input.name === "pincode" && !/^\d{6}$/.test(input.value))
                 return "Enter a valid 6-digit pincode.";
             if (input.name === "address" && !input.value.trim()) return "Address cannot be empty.";
             if (input.name === "consultant" && !input.value.trim()) return "Select Consultant";
             if (input.name === "medium" && !input.value.trim()) return "Select Medium";
             return "This field is required.";
         }

         function updateButtonText() {
             if (currentStep === steps.length - 1) {
                 nextBtn.textContent = "Done";
             } else {
                 nextBtn.textContent = "Next ";
             }
         }

         updateButtonText();

         nextBtn.addEventListener("click", () => {
             const current = steps[currentStep];
             const inputs = current.querySelectorAll("input, select, textarea");
             let valid = true;
             current.querySelectorAll(".error-message").forEach((el) => el.classList.add("hidden"));
             inputs.forEach((input) => {
                 const errorSpan = input.closest("div")?.querySelector(".error-message");

                 if (input.type === "checkbox") {
                     if (!input.checked) {
                         valid = false;
                         document.getElementById("terms-error")?.classList.remove("hidden");
                     } else {
                         document.getElementById("terms-error")?.classList.add("hidden");
                     }
                 } else if (!input.checkValidity()) {
                     valid = false;
                     const customError = getCustomMessage(input);
                     if (errorSpan) {
                         errorSpan.innerText = customError;
                         errorSpan.classList.remove("hidden");
                     }
                     input.classList.add("border-red-500");
                 } else {
                     input.classList.remove("border-red-500");
                 }
             });

             if (current.id === "sign") {
                 const signError = document.getElementById("sign-error");
                 if (isCanvasBlank(canvas)) {
                     valid = false;
                     signError.textContent =
                         "draw your signature before proceeding.";
                     signError.classList.remove("hidden");
                 } else {
                     signError.classList.add("hidden");
                     document.getElementById("signature").value = canvas
                         .toDataURL();
                 }
             }

             if (current.id === "terms") {
                 const checkbox = current.querySelector('input[type="checkbox"]');
                 const termsError = document.getElementById("terms-error");
                 if (!checkbox?.checked) {
                     valid = false;
                     termsError?.classList.remove("hidden");
                 } else {
                     termsError?.classList.add("hidden");
                 }
             }
             if (current.id === "pay") {
                 const paymentRadios = document.querySelectorAll('input[name="payment_method"]');
                 const paymentError = document.getElementById("payment-error");
                 let selectedValue = "";
                 const selected = Array.from(paymentRadios).find(r => r.checked);

                 if (!selected) {
                     valid = false;
                     paymentError.textContent = "Please select a payment method.";
                     paymentError.classList.remove("hidden");
                 } else {
                     paymentError.classList.add("hidden");
                     selectedValue = selected.value;
                 }

                 if (!valid) return;
                 formData["payment_type"] = selectedValue;

                 if (selectedValue.toLowerCase() === "offline") {
                     document.getElementById('payment_type').textContent = "offline";
                     const paymentoffline = {
                         payment_mode: selectedValue,
                         user_id: document.querySelector('input[name="register_no"]').value,
                         amount: 0
                     };

                     fetch("https://192.168.1.120/coeapi/payment/", {
                             method: "POST",
                             headers: {
                                 "Content-Type": "application/json",
                                 "Authorization": "Bearer b8e7f61d5d63a23ad24157404976042ec6df8893b09ebe19ef468ba536fdbb14"
                             },
                             body: JSON.stringify(paymentoffline)
                         })
                         .then(res => res.json())
                         .then(data => {
                             console.log("Response:", data);
                             if (data.status === 200) {
                                 steps[currentStep].classList.add("hidden");
                                 currentStep++;
                                 if (currentStep < steps.length) {
                                     steps[currentStep].classList.remove("hidden");
                                     updateButtonText();
                                 }
                             } else {
                                 paymentError.textContent = data.message ||
                                     "Payment failed. Please try again.";
                                 paymentError.classList.remove("hidden");
                             }
                         })
                         .catch(err => {
                             console.error(err);
                             paymentError.textContent = "Network error! Please try again later.";
                             paymentError.classList.remove("hidden");
                         });

                     return;
                 }
             }


             if (!valid) return;

             inputs.forEach((input) => {
                 if (input.type === "checkbox") {
                     formData[input.name] = input.checked;
                 } else {
                     formData[input.name] = input.value;
                 }
             });


             steps[currentStep].classList.add("hidden");
             currentStep++;
             updateButtonText();

             if (currentStep < steps.length) {
                 steps[currentStep].classList.remove("hidden");
             } else {

                 const lastStep = steps[steps.length - 1];
                 steps[steps.length - 1].classList.remove("hidden");

                 const lastInputs = lastStep.querySelectorAll("input, select, textarea");
                 let validLast = true;
                 lastStep.querySelectorAll(".error-message").forEach(el => el.classList.add("hidden"));

                 lastInputs.forEach((input) => {
                     const errorSpan = input.closest("div")?.querySelector(".error-message");
                     if (!input.checkValidity()) {
                         validLast = false;
                         const customError = getCustomMessage(input);
                         if (errorSpan) {
                             errorSpan.innerText = customError;
                             errorSpan.classList.remove("hidden");
                         }
                         input.classList.add("border-red-500");
                     } else {
                         input.classList.remove("border-red-500");
                     }
                 });

                 if (!validLast) return;


                 fetch("https://192.168.1.120/coeapi/register/", {
                         method: "POST",
                         headers: {
                             "Content-Type": "application/json",
                             "Authorization": "Bearer basic b8e7f61d5d63a23ad24157404976042ec6df8893b09ebe19ef468ba536fdbb14"
                         },
                         body: JSON.stringify(formData)
                     })
                     .then(res => res.json())
                     .then(data => {
                         console.log("Server Response:", data);
                         steps[currentStep].classList.add("hidden");


                     })
                     .catch(err => {
                         console.error("Submission failed:", err);
                     });
             }

         });
         document.querySelectorAll("input, select, textarea").forEach((input) => {
             input.addEventListener("input", () => {
                 input.classList.remove("border-red-500");
                 const errorSpan = input.parentElement.querySelector(
                     ".error-message");
                 if (errorSpan) errorSpan.classList.add("hidden");
             });
         });
     });
     </script>





     <!-- Signature Pad Library -->
     <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>

     <!-- Main Script -->
     <script>
     window.addEventListener('load', () => {
         const canvas = document.getElementById('signature-pad');
         const signaturePad = new SignaturePad(canvas);
         const form = document.getElementById('signature-form');
         const signatureInput = document.getElementById('signature');
         const clearButton = document.getElementById('clear');

         // Resize canvas properly
         function resizeCanvas() {
             const ratio = Math.max(window.devicePixelRatio || 1, 1);
             const width = canvas.offsetWidth;
             const height = canvas.offsetHeight;

             // Only resize if dimensions are valid
             if (width > 0 && height > 0) {
                 canvas.width = width * ratio;
                 canvas.height = height * ratio;
                 const ctx = canvas.getContext('2d');
                 ctx.scale(ratio, ratio);
                 signaturePad.clear(); // clear after resize to avoid distortion
             }
         }

         // Call resize after short delay to allow layout to stabilize
         setTimeout(resizeCanvas, 300);

         // Resize again on window resize
         window.addEventListener('resize', resizeCanvas);

         // Clear button
         clearButton.addEventListener('click', () => {
             signaturePad.clear();
         });

         // On form submit, save the base64 image to hidden input
         form.addEventListener('submit', function(e) {
             if (signaturePad.isEmpty()) {
                 alert('Please provide a signature first.');
                 e.preventDefault();
             } else {
                 signatureInput.value = signaturePad.toDataURL('image/png');
             }
         });
     });
     </script>









     <script>
     document.addEventListener("DOMContentLoaded", () => {
         const radios = document.querySelectorAll('input[name="payment_method"]');
         const offlineDiv = document.getElementById("offlineDetails");

         radios.forEach(radio => {
             radio.addEventListener("change", () => {
                 if (radio.value === "offline" && radio.checked) {
                     offlineDiv.classList.remove("hidden");
                 } else {
                     offlineDiv.classList.add("hidden");
                 }
             });
         });
     });
     </script>
     <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
     <script>
     document.getElementById("paymentForm").addEventListener("submit", async function(e) {
         e.preventDefault();

         const paymentMethod = document.querySelector('input[name="payment_method"]:checked').value;

         if (paymentMethod === "online") {
             document.getElementById('payment_type').textContent = "online";
             try {
                 const response = await fetch("create_order.php", {
                     method: "POST",
                     headers: {
                         "Content-Type": "application/json"
                     },
                     body: JSON.stringify({
                         amount: 100
                     })
                 });

                 const order = await response.json();

                 if (order.id) {

                     const options = {
                         key: 'rzp_test_aZqyp9WC74epcz',
                         amount: order.amount,
                         currency: order.currency,
                         name: "Vcare",
                         description: "Payment for Registration",
                         order_id: order.id,
                         handler: function(response) {
                             const paymentData = {
                                 payment_id: response.razorpay_payment_id,
                                 razor_order_id: response.razorpay_order_id,
                                 amount: "100",
                                 status: "success",
                                 description: "Payment for Registration"
                             };

                             fetch("https://192.168.1.120/coeapi/payment/", {
                                     method: "POST",
                                     headers: {
                                         "Content-Type": "application/json",
                                         "Authorization": "Bearer b8e7f61d5d63a23ad24157404976042ec6df8893b09ebe19ef468ba536fdbb14"
                                     },
                                     body: JSON.stringify(paymentData)
                                 })
                                 .then(response => response.json())
                                 .then(data => {
                                     console.log("Payment Saved:", data);

                                     const msg = document.createElement('div');
                                     msg.style.color = "green";
                                     msg.style.fontSize = "20px";
                                     msg.style.marginTop = "20px";
                                     msg.innerHTML = " Payment Successful!<br>Payment ID: " +
                                         response.razorpay_payment_id;

                                     document.getElementById("paymentForm").appendChild(msg);
                                     document.getElementById("pay-button").style.display =
                                         "none";


                                 })
                                 .catch(err => {
                                     console.error("Error saving payment:", err);
                                 });
                         },
                         prefill: {
                             name: "",
                             email: "",
                             contact: ""
                         },
                         theme: {
                             color: "#3399cc"
                         }
                     };


                     const rzp1 = new Razorpay(options);
                     rzp1.open();

                     rzp1.on("payment.failed", function(resp) {
                         window.location.href = "payment_failed.php?reason=" + encodeURIComponent(
                             resp.error.description);
                     });
                 } else {
                     alert("Error creating order!");
                 }
             } catch (error) {
                 console.error("Error:", error);
                 alert("Something went wrong!");
             }
         } else {
             console.log("Offline payment selected");
         }
     });
     </script>






 </body>

 </html>