<div class="flex justify-between gap-x-4 px-2 py-2">
    <div class="flex flex-col md:flex-row ">
        <a href="#"
            class="flex items-center justify-center gap-x-1 text-blue-900 hover:text-blue-950 work-sans-normal animate-bounce animate-thrice text-xs md:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-outgoing" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1e40af" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                <path d="M15 9l5 -5" />
                <path d="M16 4l4 0l0 4" />
            </svg>
            +2722486069
        </a>
        <a href="mailto:vrabogados@siccoms.com"
            class="flex items-center justify-center gap-x-1 text-blue-900 hover:text-blue-950 work-sans-normal animate-bounce animate-thrice text-xs md:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-forward" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1e40af" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />
                <path d="M3 6l9 6l9 -6" />
                <path d="M15 18h6" />
                <path d="M18 15l3 3l-3 3" />
            </svg>
            vrabogados@siccoms.com
        </a>

    </div>
    <div class="flex gap-x-8 flex-col sm:flex-row">
        @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
                <a href="{{ route('lang', $lang) }}" class="flex items-center justify-center px-3">
                    <span
                        class="text-gray-800 font-semibold mr-2 work-sans-link text-xs md:text-base">{{ strtoupper($lang) }}</span>
                    @if ($lang == 'es')
                        <img class="w-8 h-8" src="{{ asset('img/mx.png') }}" alt="Logo de México">
                    @elseif($lang == 'en')
                        <img class="w-8 h-8" src="{{ asset('img/eeuu.png') }}" alt="Logo de EEUU">
                    @endif
                </a>
            @endif
        @endforeach
    </div>


</div>
