@extends('layouts.guest')

@section('components')
  @include('components.userNavbar')
  <header class="h-fit mt-16">
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

  <section class="h-fit w-full mt-10 mb-24">
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

  <section class="h-fit w-full mt-10">
    <div class="text-center">
      <h1 class="text-4xl font-bold">Kenapa Pembelajaran S1CC Menarik</h1>
      <h4 class="text-lg font-semibold mt-5">Belajar teknologi komputer dari mentor yang ahli dan berpengalaman</h4>
    </div>
    <div class="flex flex-col-reverse md:flex-row items-center justify-center w-full">
      <div
        class="flex flex-col justify-center rounded-sm mx-5 lg:mx-3 md:max-w-sm lg:max-w-md xl:max-w-lg 2xl:max-w-xl 4xl:max-w-2xl w-full mt-5">
        <div id="accordion-flush" data-accordion="collapse"
          data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
          data-inactive-classes="text-gray-500 dark:text-gray-400">
          <h2 id="accordion-flush-heading-1">
            <button type="button"
              class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
              data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
              <span class="font-semibold text-xl">Bootcamp S1CC</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 5 5 1 1 5" />
              </svg>
            </button>
          </h2>
          <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
              <p class="mb-2 text-gray-500 text-lg dark:text-gray-400">Program pelatihan intensif untuk mengembangkan
                keterampilan
                teknologi komputer dan membangun portofolio.</p>
            </div>
          </div>
          <h2 id="accordion-flush-heading-2">
            <button type="button"
              class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
              data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
              aria-controls="accordion-flush-body-2">
              <span class="font-semibold text-xl">Mentor yang Didekasikan</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 5 5 1 1 5" />
              </svg>
            </button>
          </h2>
          <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
              <p class="mb-2 text-gray-500 text-lg dark:text-gray-400">Mereka akan didedikasikan untuk membimbingmu dalam
                proses
                pembelajaran dan membantumu untuk mencapai potensi penuhmu</p>
            </div>
          </div>
          <h2 id="accordion-flush-heading-3">
            <button type="button"
              class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
              data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
              aria-controls="accordion-flush-body-3">
              <span class="font-semibold text-xl">Guest Speaker Session (GSS)</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 5 5 1 1 5" />
              </svg>
            </button>
          </h2>
          <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
              <p class="mb-2 text-gray-500 text-lg dark:text-gray-400">The main difference is that the core components
                from
                Mereka akan berbagi pengalaman dan pengetahuan mereka denganmu dan membantumu untuk memahami perkembangan
                terbaru di bidang IT</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex items-center justify-center content-center mx-10 mt-5">
        <img src="/assets/img/OrangdanLaptopPng2.png" class="w-[300px] h-full" alt="">
      </div>
    </div>
  </section>

  <section class="">
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700 mx-auto">
      <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
        data-tabs-toggle="#default-styled-tab-content"
        data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
        data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
        role="tablist">
        <li class="me-2" role="presentation">
          <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
            data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
            aria-selected="false">Profile</button>
        </li>
        <li class="me-2" role="presentation">
          <button
            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
            id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
            aria-controls="dashboard" aria-selected="false">Dashboard</button>
        </li>
        <li class="me-2" role="presentation">
          <button
            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
            id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab"
            aria-controls="settings" aria-selected="false">Settings</button>
        </li>
        <li role="presentation">
          <button
            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
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
