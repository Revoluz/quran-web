<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al-quran pro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Trocchi&display=swap"
        rel="stylesheet">
    <link rel="icon" href="{{ URL::asset('resources/img/logo.svg') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/layout') }}" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="h-full bg-gradient-to-b  from-gray-50 to-amber-100 bg-no-repeat bg-fixed">
    <div class=" lg:h-full lg:flex flex-wrap {{ Request::is('about') ? ' gap-32' : '' }}">
        <nav class=" md:static relative border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 w-full">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="/" class="mt-2 ml-4 bg">
                    <svg width="68" height="67" viewBox="0 0 68 67" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M63.9704 62.9065V65.9998H67.119V62.9065H63.9704ZM22.1401 18.6875H18.9915V21.7808H22.1401V18.6875ZM22.1401 14.2656H18.9915V17.3589H22.1401V14.2656ZM18.9915 9.84371V12.937H22.1401V9.84371H18.9915ZM14.4937 9.84371V12.937H17.6422V9.84371H14.4937ZM9.99577 12.937H13.1443V9.84371H9.99577V12.937ZM9.99577 17.3589H13.1443V14.2656H9.99577V17.3589ZM9.99577 18.6875V21.7808H13.1443V18.6875H9.99577ZM8.64641 21.7808V18.6875H5.49793V21.7808H8.64641ZM31.1358 54.0627H27.9873V57.156H31.1358V54.0627ZM31.1358 49.6408H27.9873V52.7341H31.1358V49.6408ZM31.1358 45.2189H27.9873V48.3122H31.1358V45.2189ZM31.1358 40.797H27.9873V43.8903H31.1358V40.797ZM31.1358 36.3751H27.9873V39.4684H31.1358V36.3751ZM31.1358 31.9532H27.9873V35.0465H31.1358V31.9532ZM31.1358 30.6246V27.5313H27.9873V30.6246H31.1358ZM45.9789 27.5313V30.6246H49.1273V27.5313H45.9789ZM36.9831 30.6246H40.1316V27.5313H36.9831V30.6246ZM41.4809 45.219V48.3122H44.6295V45.219H41.4809ZM40.1316 45.219H36.9831V48.3122H40.1316V45.219ZM40.1316 40.7971H36.9831V43.8904H40.1316V40.7971ZM40.1316 39.4685V36.3752H36.9831V39.4685H40.1316ZM44.6295 39.4685V36.3752H41.4809V39.4685H44.6295ZM45.9789 39.4685H49.1273V36.3752H45.9789V39.4685ZM45.9789 43.8904H49.1273V40.7971H45.9789V43.8904ZM45.9789 48.3122H49.1273V45.219H45.9789V48.3122ZM49.1273 49.6408H45.9789V52.7342H49.1273V49.6408ZM31.1358 18.6876H27.9873V21.7809H31.1358V18.6876ZM31.1358 14.2657H27.9873V17.359H31.1358V14.2657ZM31.1358 9.84379H27.9873V12.9371H31.1358V9.84379ZM27.9873 8.51519H31.1358V5.4219H27.9873V8.51519ZM40.1316 18.6876H36.9831V21.7809H40.1316V18.6876ZM40.1316 14.2657H36.9831V17.359H40.1316V14.2657ZM40.1316 12.9371V9.84379H36.9831V12.9371H40.1316ZM41.4809 12.9371H44.6295V9.84379H41.4809V12.9371ZM49.1273 18.6876H45.9789V21.7809H49.1273V18.6876ZM50.4767 9.84379V12.9371H53.6252V9.84379H50.4767ZM45.9789 12.9371H49.1273V9.84379H45.9789V12.9371ZM49.1273 17.359V14.2657H45.9789V17.359H49.1273ZM59.4725 9.84379V12.9371H62.621V9.84379H59.4725ZM54.9745 12.9371H58.1231V9.84379H54.9745V12.9371ZM54.9745 17.359H58.1231V14.2657H54.9745V17.359ZM58.1231 21.7809V18.6876H54.9745V21.7809H58.1231ZM59.4725 18.6876V21.7809H62.621V18.6876H59.4725ZM36.9831 1V4.09329H40.1316V1H36.9831ZM32.4852 1V4.09329H35.6337V1H32.4852ZM31.1358 4.09329V1H27.9873V4.09329H31.1358ZM49.1273 4.09329V1H45.9789V4.09329H49.1273ZM54.9745 1V4.09329H58.1231V1H54.9745ZM23.4894 1V4.09329H26.6379V1H23.4894ZM18.9915 1V4.09329H22.14V1H18.9915ZM14.4936 1V4.09329H17.6421V1H14.4936ZM9.99569 1V4.09329H13.1443V1H9.99569ZM5.49784 1V4.09329H8.64633V1H5.49784ZM1 4.09329H4.1484V1H1V4.09329ZM1 8.51519H4.1484V5.4219H1V8.51519ZM1 12.9371H4.14848V9.84379H1V12.9371ZM1 17.359H4.1484V14.2657H1V17.359ZM1 21.7809H4.1484V18.6876H1V21.7809ZM1 26.2028H4.1484V23.1095H1V26.2028ZM4.14848 30.6247V27.5314H1V30.6247H4.14848ZM8.64633 30.6247V27.5314H5.49784V30.6247H8.64633ZM13.1443 30.6247V27.5314H9.99569V30.6247H13.1443ZM17.6421 30.6247V27.5314H14.4936V30.6247H17.6421ZM18.9915 30.6247H22.14V27.5314H18.9915V30.6247ZM18.9915 36.3752V39.4685H22.14V36.3752H18.9915ZM13.1443 39.4685V36.3752H9.99569V39.4685H13.1443ZM14.4936 36.3752V39.4685H17.6421V36.3752H14.4936ZM5.49784 36.3752V39.4685H8.64633V36.3752H5.49784ZM1 39.4685H4.1484V36.3752H1V39.4685ZM9.99569 54.0628V57.1561H13.1443V54.0628H9.99569ZM4.14848 58.4847H1.00009V61.578H4.14848V58.4847ZM4.14848 54.0628H1V57.1561H4.14848V54.0628ZM4.14848 49.6408H1.00009V52.7342H4.14848V49.6408ZM4.14848 48.3122V45.219H1V48.3122H4.14848ZM13.1443 48.3122V45.219H9.99569V48.3122H13.1443ZM17.6421 48.3122V45.219H14.4936V48.3122H17.6421ZM18.9915 48.3122H22.14V45.219H18.9915V48.3122ZM18.9915 52.7342H22.14V49.6408H18.9915V52.7342ZM18.9915 57.1561H22.14V54.0628H18.9915V57.1561ZM22.14 61.578V58.4847H18.9915V61.578H22.14ZM40.1316 58.4847H36.9831V61.578H40.1316V58.4847ZM40.1316 57.1561V54.0628H36.9831V57.1561H40.1316ZM44.6295 57.1561V54.0628H41.4809V57.1561H44.6295ZM49.1273 57.1561V54.0628H45.9789V57.1561H49.1273ZM53.6252 57.1561V54.0628H50.4767V57.1561H53.6252ZM58.1231 54.0628H54.9745V57.1561H58.1231V54.0628ZM58.1231 49.6408H54.9745V52.7342H58.1231V49.6408ZM58.1231 45.219H54.9745V48.3122H58.1231V45.219ZM58.1231 40.7971H54.9745V43.8904H58.1231V40.7971ZM58.1231 36.3752H54.9745V39.4685H58.1231V36.3752ZM58.1231 31.9533H54.9745V35.0466H58.1231V31.9533ZM54.9745 30.6247H58.1231V27.5314H54.9745V30.6247ZM67.1189 58.4847H63.9703V61.578H67.1189V58.4847ZM67.1189 54.0628H63.9703V57.1561H67.1189V54.0628ZM67.1189 49.6408H63.9703V52.7342H67.1189V49.6408ZM67.1189 45.219H63.9703V48.3122H67.1189V45.219ZM67.1189 40.7971H63.9703V43.8904H67.1189V40.7971ZM67.1189 36.3752H63.9703V39.4685H67.1189V36.3752ZM67.1189 31.9533H63.9703V35.0466H67.1189V31.9533ZM67.1189 27.5314H63.9703V30.6247H67.1189V27.5314ZM67.1189 18.6876H63.9703V21.7809H67.1189V18.6876ZM67.1189 14.2657H63.9703V17.359H67.1189V14.2657ZM67.1189 9.84379H63.9703V12.9371H67.1189V9.84379ZM67.1189 5.4219H63.9703V8.51519H67.1189V5.4219ZM63.9703 1.00008V4.09338H67.1189V1.00008H63.9703ZM4.14848 66V62.9067H1.00009V66H4.14848ZM8.64633 66V62.9067H5.49784V66H8.64633ZM13.1443 66V62.9067H9.99569V66H13.1443ZM17.6421 66V62.9067H14.4936V66H17.6421ZM22.14 66V62.9067H18.9915V66H22.14ZM31.1358 66V62.9067H27.9873V66H31.1358ZM35.6337 66V62.9067H32.4852V66H35.6337ZM40.1316 66V62.9067H36.9831V66H40.1316ZM49.1273 66V62.9067H45.9789V66H49.1273ZM53.6252 66V62.9067H50.4767V66H53.6252ZM58.1231 66V62.9067H54.9745V66H58.1231ZM62.621 66V62.9067H59.4725V66H62.621Z"
                            fill="#E5B800" stroke="#E5B800" stroke-width="1.38234" stroke-miterlimit="2.61313" />
                    </svg>
                </a>
                <div class="flex md:order-2 mr-4">

                    <a href="/about"><button type="button"
                            class="  text-white bg-green-700 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-jktsans">About</button></a>
                    <button data-collapse-toggle="navbar-cta" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-cta" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="md:static  relative  items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                    id="navbar-cta">
                    <ul
                        class=" md:static absolute w-full flex flex-col p-4 mt-4 border align-middle border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/"
                                class=" font-jktsans  test block py-2 pl-3 pr-4 hover:bg-green-500 hover:text-white rounded  md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700  {{ Request::is('/') ? 'text-green-600 font-bold text-lg' : 'font-semibold md:text-gray-700 text-base' }}"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/al-quran"
                                class="font-jktsans  test block py-2 pl-3 pr-4 hover:bg-green-500 hover:text-white rounded  md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('al-quran*') ? 'text-green-600 font-bold text-lg' : 'font-semibold md:text-gray-700 text-base' }}">Al-Quran</a>
                        </li>
                        <li>
                            <a href="/asmaul-husna"
                                class="font-jktsans  test block py-2 pl-3 pr-4 hover:bg-green-500 hover:text-white rounded  md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('asmaul-husna') ? 'text-green-600 font-bold text-lg' : 'font-semibold md:text-gray-700 text-base' }}">Asmaul
                                Husna</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
</body>

</html>
