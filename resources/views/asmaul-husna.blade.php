@extends('layout.navbar')
@section('content')
    <div class=" w-full pb-14  mt-28">
        <div class=" flex justify-center ">
            <h1 class=" font-surah font-medium md:text-8xl text-6xl mx-auto -"> الْأَسْمَاءُ الْحُسْنَى</h1>
        </div>
        <div class="flex mt-16 lg:flex-nowrap flex-wrap ">
            <div class="grow w-full">
                @foreach ($response as $asmaulhusna)
                    @if ($asmaulhusna->urutan == 0)
                        @continue
                    @endif
                    <div class=" mt-6 ">
                        <div
                            class=" flex-wrap flex justify-between rounded-xl md:mx-16 mx-2 bg-slate-700 h-24  hover:bg-gradient-to-r from-green-500 to-green-700">
                            <div class=" flex">
                                <div class="md:w-20 md:h-16 h-14 w-12 bg-slate-300 rounded-xl  my-4 ml-4">
                                    <h3
                                        class=" md:text-3xl text-xl  flex h-full justify-center items-center font-bold font-jktsans">
                                        {{ $asmaulhusna->urutan }}</h3>
                                </div>
                                <div
                                    class="text-white md:pl-7 pl-2 flex flex-col justify-center md:max-w-auto lg:max-w-none max-w-[200px]">
                                    <h5 class=" block font-bold  text-base font-jktsans">{{ $asmaulhusna->latin }}</h5>
                                    @if ($asmaulhusna->urutan == 12)
                                        <h6
                                            class=" md:block hidden font-medium  text-sm   md:max-w-[250px] max-w-[180px] font-jktsans color">
                                            {{ $asmaulhusna->arti }}
                                        </h6>
                                    @else
                                        <h6
                                            class=" md:block hidden font-medium md:text-sm text-xs lg:max-w-none md:max-w-auto max-w-[180px]  font-jktsans color">
                                            {{ $asmaulhusna->arti }}
                                        </h6>
                                    @endif
                                </div>
                            </div>
                            <div class="flex items-center mr-11 font-light">
                                <p class="font-medium md:text-4xl lg:text-3xl text-3xl text-white font-surah">
                                    {{ $asmaulhusna->arab }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @if ($asmaulhusna->urutan == 50)
                    @break
                @endif
            @endforeach
        </div>
        <div class=" grow-0 w-1 mt-6 rounded-md  bg-slate-900 hidden lg:inline-block"></div>
        <div class="grow w-full">
            @foreach ($response as $asmaulhusna)
                @if ($asmaulhusna->urutan <= 50)
                    @continue
                @endif
                <div class=" mt-6 ">
                    <div
                        class=" flex-wrap flex justify-between rounded-xl  md:mx-16 mx-2 bg-slate-700 h-24  hover:bg-gradient-to-r from-green-500 to-green-700">
                        <div class=" flex">
                            <div class="md:w-20 md:h-16 h-14 w-12 bg-slate-300 rounded-xl  my-4 ml-4">
                                <h3
                                    class="md:text-3xl text-xl flex h-full justify-center items-center font-bold font-jktsans">
                                    {{ $asmaulhusna->urutan }}</h3>
                            </div>
                            <div class="text-white md:pl-7 pl-2 flex flex-col justify-center ">
                                <h5 class=" block font-bold text-base font-jktsans">{{ $asmaulhusna->latin }}</h5>
                                @if ($asmaulhusna->urutan == 85 || $asmaulhusna->urutan == 57)
                                    <h6
                                        class=" md:block hidden font-medium  text-sm   md:max-w-[250px] max-w-[180px] font-jktsans color">
                                        {{ $asmaulhusna->arti }}
                                    </h6>
                                @else
                                    <h6
                                        class=" md:block hidden font-medium md:text-sm text-xs lg:max-w-none md:max-w-auto max-w-[180px]  font-jktsans color">
                                        {{ $asmaulhusna->arti }}
                                    </h6>
                                @endif
                            </div>
                        </div>
                        <div class="flex items-center mr-11 font-light">
                            <p class="font-medium md:text-4xl lg:text-3xl text-3xl text-white font-surah">{{ $asmaulhusna->arab }}</p>
                        </div>
                    </div>
                </div>
                @if ($asmaulhusna->urutan == '')
                @break
            @endif
        @endforeach
    </div>
@endsection
