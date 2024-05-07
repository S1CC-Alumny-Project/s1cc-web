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

  <section class="h-fit w-full">
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

  <section class="max-w-lg mx-auto ">
    <div class="mb-4 border-b border-gray-200max-w-lg mx-auto">
      <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
        data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600"
        data-tabs-inactive-classes="text-gray-500 hover:text-gray-600 border-gray-100 hover:border-gray-300"
        role="tablist">
        <li class="me-2" role="presentation">
          <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
            data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
            aria-selected="false">Profile</button>
        </li>
        <li class="me-2" role="presentation">
          <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
            id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
            aria-controls="dashboard" aria-selected="false">Dashboard</button>
        </li>
        <li class="me-2" role="presentation">
          <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
            id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab"
            aria-controls="settings" aria-selected="false">Settings</button>
        </li>
        <li role="presentation">
          <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
            id="contacts-styled-tab" data-tabs-target="#styled-contacts" type="button" role="tab"
            aria-controls="contacts" aria-selected="false">Contacts</button>
        </li>
      </ul>
    </div>
    <div id="default-styled-tab-content">
      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel"
        aria-labelledby="profile-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
            class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another
          tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content
          visibility and styling.</p>
      </div>
      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
        aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
            class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking
          another
          tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content
          visibility and styling.</p>
      </div>
      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel"
        aria-labelledby="settings-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
            class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking
          another
          tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content
          visibility and styling.</p>
      </div>
      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts" role="tabpanel"
        aria-labelledby="contacts-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
            class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking
          another
          tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content
          visibility and styling.</p>
      </div>
    </div>
  </section>
@endsection
