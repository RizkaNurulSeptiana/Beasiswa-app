<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Beasiswa | Home</title>
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
        background-image: linear-gradient(-225deg, #82e0ec 0%, #0a74b1 100%);
      }

      button,
      .gradient2 {
        background-color: #f39f86;
        background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
      }

      /* Browser mockup code
 * Mengatur warna
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

      /* Custom code untuk demo */
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
                class="inline-block py-2 px-4 text-black font-bold no-underline"
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
                class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                href="http://127.0.0.1:8000/menu"
                >Menu</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mx-auto h-screen">
      <div class="text-center px-3 lg:px-0">
        <h1
          class="my-4 text-2xl md:text-3xl lg:text-5xl font-black leading-tight"
        >
          Get The Scholarship Soon!
        </h1>
        <p
          class="leading-normal text-gray-800 text-base md:text-xl lg:text-2xl mb-8"
        >
          Choose The Path to Get Your Education!
        </p>

        <button
          class="mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded my-2 md:my-6 py-4 px-15 shadow-lg w-48"
        >
          Daftar Sekarang!
        </button>
        <a
          href="http://127.0.0.1:8000/menu"
          class="inline-block mx-auto lg:mx-0 hover:underline bg-transparent text-gray-600 font-extrabold my-2 md:my-6 py-2 lg:py-4 px-8"
          >See More >></a
        >
      </div>
      <div class="container-fluid py-5">
        <div class="container">
          <div class="col-lg-6 d-block mx-auto mt-5">
            <center><img src="img/logo.png" style="width: 200px" class="img-fluid img-thumbnail text-center" alt="">
          </div>
        </div>
      </div>

    <!--Footer-->
    <footer class="bg-white ">
      <div class="container mx-auto mt-8 px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6">
            <a
              class="text-orange-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
              href="http://127.0.0.1:8000/home"
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
            <p class="uppercase font-extrabold text-gray-500 md:mb-6">Contact Us</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Jl. Jendral Sudirman Gedung C Lantai 13, Senayan Jakarta Pusat</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Phone : 177</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Email Pengaduan : pengaduan@kemendikbud.go.id </a
                >
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase font-extrabold text-gray-500 md:mb-6"></p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                
                
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase font-extrabold text-gray-500 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="https://www.facebook.com/Kemdikbud.RI"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Facebook</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="https://www.linkedin.com/company/direktorat-jendral-kebudayaan-kementerian-pendidikan-dan-kebudayaan/?originalSubdomain=id"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Linkedin</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="https://twitter.com/kemdikbud_ri"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Twitter</a
                >
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase font-extrabold text-gray-500 md:mb-6">
              Tautan Terkait
            </p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="https://www.kemdikbud.go.id/main/?lang=id"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Kemdikbud</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="http://127.0.0.1:8000/about"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >About Us</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="http://127.0.0.1:8000/contact"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

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