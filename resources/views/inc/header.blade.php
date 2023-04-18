<div class="flex justify-between bg-white py-3 bgimg">
    <div class="flex">
        <div class="flex pl-20">
            <img class="h-14 w-14" src="/img/logo.jpg" />
            <div class="text-4xl ml-2">
                <h1>Домовик</h1>
            </div>
        </div>
        {{-- <div class="pl-20">
            <img src="/img/point.jpg" width="15" />
        </div>
        <div class="ml-1">
            <h4>Ижевск</h4>
        </div> --}}
    </div>
    <div class="pr-14 text-lg">
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
            </svg>
            <h2 class="ml-2">+7(951)-215-06-76</h2>
        </div>
        <div class="flex mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
            </svg>              
            <h4 class="ml-2">domovik18@home.com</h4>
        </div>
    </div>
</div>
<div class="menu bg-emerald-500 border-3 border-emerald-600 font-bold text-white">
    <ul class="mx-28 my-2 flex justify-around">
        <li class=""><a href="{{ route('main') }}" class="">Главная</a></li>
        <li class=""><a href="#" class="">Новостройки</a></li>
        <li class=""><a href="#" class="">Застройщики</a></li>
        <li class=""><a href="{{ route('editShow') }}" class="">Ввод данных</a></li>
        <li class=""><a href="{{ route('help') }}" class="">Справка</a></li>
        <li class=""><a href="#" onclick="generatePDF()" class="" accesskey="o">Отчёт</a></li>
    </ul>
</div>
