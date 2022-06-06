<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Beasiswa App</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link
      href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css"
      rel="stylesheet"
    />
    <!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->

    <style>
      @import url("https://rsms.me/inter/inter.css");
      html {
        font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
          "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
          "Noto Color Emoji";
      }

      .gradient {
        background-image: linear-gradient(-225deg, #8edff8 0%, #4999c7 100%);
      }

      button,
      .gradient2 {
        background-color: #f39f86;
        background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
      }

      /* Browser mockup code
 * Contribute: https://gist.github.com/jarthod/8719db9fef8deb937f4f
 * Live example: https://updown.io
 */

      .browser-mockup {
        border-top: 2em solid rgba(230, 230, 230, 0.7);
        position: relative;
        height: 60vh;
      }

      .browser-mockup:before {
        display: block;
        position: absolute;
        content: "";
        top: -1.25em;
        left: 1em;
        width: 0.5em;
        height: 0.5em;
        border-radius: 50%;
        background-color: #f44;
        box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
      }

      .browser-mockup > * {
        display: block;
      }

      /* Custom code for the demo */
    </style>
  </head>

  <body class="gradient leading-relaxed tracking-wide flex flex-col">
    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 text-white py-1 lg:py-6">
      <div
        class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-2 lg:py-6"
      >
        <div class="pl-4 flex items-center">
          <a
            class="text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
            href="#"
          >
            <svg
              class="h-6 w-6 inline-block fill-current text-yellow-700"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
            >
            </svg>
            Beasiswa App
          </a>
        </div>

        <div class="block lg:hidden pr-4">
          <button
            id="nav-toggle"
            class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-green-500 appearance-none focus:outline-none"
          >
            <svg
              class="fill-current h-3 w-3"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>

        <div
          class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 text-black p-4 lg:p-0 z-20"
          id="nav-content"
        >
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a
                class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                href="http://127.0.0.1:8000/home"
                >Home</a
              >
            </li>
            <li class="mr-3">
              <a
                class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                href="http://127.0.0.1:8000/about"
                >About</a
              >
            </li>
            <li class="mr-3">
              <a
                class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                href="http://127.0.0.1:8000/contact"
                >Contact</a
              >
            </li>
            <li class="mr-3">
                <a
                  class="inline-block py-2 px-4 text-black font-bold no-underline"
                  href="http://127.0.0.1:8000/menu"
                  >Menu</a
                >
              </li>
          </ul>
        </div>
      </div>
    </nav>

    
    <section class="section-prices">  
        <h2 class="section-header">Our Pricing</h2>  
        <div class="list-boxs">  
             <div class="card starter">  
                  <div class="head">  
                       Starter  
                  </div>  
                  <div class="ticket">$5.90</div>  
                  <div class="body">  
                       <p>  
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  
                            dolore  
                            magna  
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  
                            consequat.  
                       </p>  
                       <button class="btn">Order Now</button>  
                  </div>  
             </div>  
             <div class="card standard">  
                  <div class="head">  
                       Standard  
                  </div>  
                  <div class="ticket">$10.50</div>  
                  <div class="body">  
                       <p>  
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  
                            dolore  
                            magna  
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  
                            consequat.  
                       </p>  
                       <button class="btn">Order Now</button>  
                  </div>  
             </div>  
             <div class="card premium">  
                  <div class="head">  
                       Premium  
                  </div>  
                  <div class="ticket">$15.90</div>  
                  <div class="body">  
                       <p>  
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  
                            dolore  
                            magna  
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  
                            consequat.  
                       </p>  
                       <button class="btn">Order Now</button>  
                  </div>  
             </div>  
        </div>  
        </section>  

      
          

    <!--Footer-->
    <footer class="bg-white ">
      <div class="container mx-auto mt-8 px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-3">
            <a
              class="text-orange-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
              href="#"
            >
              <svg
                class="h-1 w-1 inline-block"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
              </svg>
              Beasiswa App
            </a>
          </div>

          <div class="flex-1">
            <p class="uppercase font-extrabold text-white-500 md:mb-6">Contact Us</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-white-800 hover:text-orange-500"
                  >Jl. Jendral Sudirman Gedung C Lantai 13, Senayan Jakarta Pusat</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-white-800 hover:text-orange-500"
                  >Phone : 177</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-white-800 hover:text-orange-500"
                  >Email Pengaduan : pengaduan@kemendikbud.go.id </a
                >
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase font-extrabold text-white-500 md:mb-6">Tautan Terkait</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="https://www.kemdikbud.go.id/main/?lang=id"
                  class="font-light no-underline hover:underline text-white-800 hover:text-orange-500"
                  >Kemdikbud</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="https://setjen.kemdikbud.go.id/"
                  class="font-light no-underline hover:underline text-white-800 hover:text-orange-500"
                  >Sekjen Kemdikbud</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="https://puslapdik.kemdikbud.go.id/"
                  class="font-light no-underline hover:underline text-white-800 hover:text-orange-500"
                  >puslapdik</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-white-800 hover:text-orange-500"
                  >Terms of Service</a
                >
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase font-extrabold text-white-500 md:mb-6">
              Company
            </p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="http://127.0.0.1:8000/home"
                  class="font-light no-underline hover:underline text-white-800 hover:text-orange-500"
                  >Official Blog</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="http://127.0.0.1:8000/about"
                  class="font-light no-underline hover:underline text-white-800 hover:text-orange-500"
                  >About Us</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="http://127.0.0.1:8000/contact"
                  class="font-light no-underline hover:underline text-white-800 hover:text-orange-500"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <style>
      @import url("https://rsms.me/inter/inter.css");
      footer
      {
        background-image: linear-gradient(-225deg, #8edff8 0%, #4999c7 100%)
      }
    </style>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>