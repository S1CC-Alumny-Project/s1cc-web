@extends('layouts.guest')

@section('components')
  @include('components.userNavbar')
  <header class="h-fit mt-28">
    <div class="w-full bg-cover" style="background-image: url({{ asset('/assets/img/latar1.png') }});">
      <div class="flex flex-col-reverse md:flex-row items-center justify-center w-full py-10 md:py-32">
        <div
          class="flex flex-col justify-center rounded-sm mx-5 lg:mx-0 md:max-w-sm lg:max-w-md xl:max-w-lg 2xl:max-w-xl 4xl:max-w-2xl">
          <h1 class="font-bold text-4xl">Smansa Computer Club</h1>
          <p class="text-lg mt-8 font-medium text-justify">Mulai kembangkan skill mu dalam bidang komputer dan jadilah
            talenta digital bersama Smansa Computer Club</p>
        </div>
        <div class="flex items-center justify-center content-center">
          <img src="/assets/img/S1CC_lg-removebg-preview.png" alt="" loading="lazy">
        </div>
      </div>
    </div>
  </header>

  <section class="h-fit w-full mt-10 mb-36">
    <div class="flex flex-col-reverse md:flex-row items-center justify-center w-full">
      <div
        class="flex flex-col justify-center rounded-sm mx-5 lg:mx-3 md:max-w-sm lg:max-w-md xl:max-w-lg 2xl:max-w-xl 4xl:max-w-2xl">
        <h1 class="font-bold text-4xl">Apa Itu S1CC?</h1>
        <p class="text-lg mt-8 font-medium text-justify">S1CC adalah sebuah
          ekstrakurikuler di SMA Negeri 1
          Maros yang bergerak di bidang IT untuk siswa dan siswi agar menyalurkan bakat dan minatnya bidang IT. Serta
          menjadi pusat pengembangan dan pelayanan teknologi informasi dan komunikasi</p>
      </div>
      <div class="flex items-center justify-center content-center mx-10">
        <img src="/assets/img/OrangdanLaptopPng1.png" class="w-[300px] h-full" alt="">
      </div>
    </div>
  </section>

  <section class="h-fit w-full mb-36">
    <div class="text-center">
      <h1 class="text-4xl font-bold">Kenapa Pembelajaran S1CC Menarik</h1>
      <h4 class="text-lg font-semibold mt-5">Belajar teknologi komputer dari mentor yang ahli dan berpengalaman</h4>
    </div>
    <div class="flex flex-col-reverse md:flex-row items-center justify-center w-full mx-4 lg:mx-0">
      <div class="hs-accordion-group md:max-w-sm lg:max-w-md xl:max-w-lg 2xl:max-w-xl 4xl:max-w-2xl">
        <div class="hs-accordion active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
          <button
            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none"
            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
            Bootcamp S1CC
            <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="m6 9 6 6 6-6"></path>
            </svg>
            <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="m18 15-6-6-6 6"></path>
            </svg>
          </button>
          <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
            <p class="text-gray-800">
              Program pelatihan intensif untuk mengembangkan keterampilan teknologi komputer dan membangun portofolio.
            </p>
          </div>
        </div>

        <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-two">
          <button
            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none"
            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
            Mentor yang Didekasikan
            <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="m6 9 6 6 6-6"></path>
            </svg>
            <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="m18 15-6-6-6 6"></path>
            </svg>
          </button>
          <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
            <p class="text-gray-800">
              Mereka akan didedikasikan untuk membimbingmu dalam proses pembelajaran dan membantumu untuk mencapai potensi
              penuhmu
            </p>
          </div>
        </div>

        <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-three">
          <button
            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none"
            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
            Guest Speaker Session (GSS)
            <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="m6 9 6 6 6-6"></path>
            </svg>
            <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="m18 15-6-6-6 6"></path>
            </svg>
          </button>
          <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
            aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
            <p class="text-gray-800">
              Mereka akan berbagi pengalaman dan pengetahuan mereka denganmu dan membantumu untuk memahami perkembangan
              terbaru di bidang IT
            </p>
          </div>
        </div>
      </div>
      <div class="flex items-center justify-center content-center mx-10 mt-5">
        <img src="/assets/img/OrangdanLaptopPng2.png" class="w-[300px] h-full" alt="">
      </div>
    </div>
  </section>

  <section>
    <h1 class="text-4xl mb-5 font-bold text-center">Materi Yang Dapat Kamu Pelajari</h1>
    @include('components.bootcampList')
  </section>

  @include('components.footerGuest')
@endsection
