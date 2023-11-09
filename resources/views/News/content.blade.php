@extends('layouts.main')

@section('content')
    <div class="pt-32">
        <div class="grid col-span-2">
            <div>
                <label for="country-data" class="mr-4 font-semibold font-roboto">Country</label>
                <select id="country-data"
                    class="js-example-basic-single h-full rounded-md border bg-transparent py-1 pl-10 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                    name="country">
                    <option value="ae" {{ request()->get('country') == 'ae' ? 'selected' : '' }}>UAE</option>
                    <option value="ar" {{ request()->get('country') == 'ar' ? 'selected' : '' }}>Argentina</option>
                    <option value="at" {{ request()->get('country') == 'at' ? 'selected' : '' }}>Austria</option>
                    <option value="au" {{ request()->get('country') == 'au' ? 'selected' : '' }}>Australia</option>
                    <option value="be" {{ request()->get('country') == 'be' ? 'selected' : '' }}>Belgium</option>
                    <option value="bg" {{ request()->get('country') == 'bg' ? 'selected' : '' }}>Bulgaria</option>
                    <option value="br" {{ request()->get('country') == 'br' ? 'selected' : '' }}>Brazilia</option>
                    <option value="ca" {{ request()->get('country') == 'ca' ? 'selected' : '' }}>Canada</option>
                    <option value="ch" {{ request()->get('country') == 'ch' ? 'selected' : '' }}>Switzerland</option>
                    <option value="cn" {{ request()->get('country') == 'cn' ? 'selected' : '' }}>China</option>
                    <option value="co" {{ request()->get('country') == 'co' ? 'selected' : '' }}>Columbia</option>
                    <option value="cu" {{ request()->get('country') == 'cu' ? 'selected' : '' }}>Cuba</option>
                    <option value="cz" {{ request()->get('country') == 'cz' ? 'selected' : '' }}>Czech republic
                    </option>
                    <option value="de" {{ request()->get('country') == 'de' ? 'selected' : '' }}>Germany</option>
                    <option value="eg" {{ request()->get('country') == 'eg' ? 'selected' : '' }}>Egypt</option>
                    <option value="fr" {{ request()->get('country') == 'fr' ? 'selected' : '' }}>France</option>
                    <option value="gb" {{ request()->get('country') == 'gb' ? 'selected' : '' }}>United Kingdom
                    </option>
                    <option value="gr" {{ request()->get('country') == 'gr' ? 'selected' : '' }}>Greece</option>
                    <option value="hk" {{ request()->get('country') == 'hk' ? 'selected' : '' }}>Hong kong</option>
                    <option value="hu" {{ request()->get('country') == 'hu' ? 'selected' : '' }}>Hungary</option>
                    <option value="id" {{ request()->get('country') == 'id' ? 'selected' : '' }}>Indonesia</option>
                    <option value="ie" {{ request()->get('country') == 'ie' ? 'selected' : '' }}>Ireland</option>
                    <option value="in" {{ request()->get('country') == 'in' ? 'selected' : '' }}>India</option>
                    <option value="it" {{ request()->get('country') == 'it' ? 'selected' : '' }}>Italy</option>
                    <option value="jp" {{ request()->get('country') == 'jp' ? 'selected' : '' }}>Japan</option>
                    <option value="kr" {{ request()->get('country') == 'kr' ? 'selected' : '' }}>South Korea</option>
                    <option value="lt" {{ request()->get('country') == 'lt' ? 'selected' : '' }}>Lithuania</option>
                    <option value="lv" {{ request()->get('country') == 'lv' ? 'selected' : '' }}>Latvia</option>
                    <option value="ma" {{ request()->get('country') == 'ma' ? 'selected' : '' }}>Marocco</option>
                    <option value="mx" {{ request()->get('country') == 'mx' ? 'selected' : '' }}>Mexico</option>
                    <option value="my" {{ request()->get('country') == 'my' ? 'selected' : '' }}>Malaysia</option>
                    <option value="ng" {{ request()->get('country') == 'ng' ? 'selected' : '' }}>Nigeria</option>
                    <option value="nl" {{ request()->get('country') == 'nl' ? 'selected' : '' }}>Netherlands</option>
                    <option value="no" {{ request()->get('country') == 'no' ? 'selected' : '' }}>Norway</option>
                    <option value="nz" {{ request()->get('country') == 'nz' ? 'selected' : '' }}>New Zealand</option>
                    <option value="ph" {{ request()->get('country') == 'ph' ? 'selected' : '' }}>Philipines</option>
                    <option value="pl" {{ request()->get('country') == 'pl' ? 'selected' : '' }}>Poland</option>
                    <option value="pt" {{ request()->get('country') == 'pt' ? 'selected' : '' }}>Portugal</option>
                    <option value="ro" {{ request()->get('country') == 'ro' ? 'selected' : '' }}>Romania</option>
                    <option value="rs" {{ request()->get('country') == 'rs' ? 'selected' : '' }}>Serbia</option>
                    <option value="ru" {{ request()->get('country') == 'ru' ? 'selected' : '' }}>Rusia</option>
                    <option value="sa" {{ request()->get('country') == 'sa' ? 'selected' : '' }}>Saudi arabia</option>
                    <option value="se" {{ request()->get('country') == 'se' ? 'selected' : '' }}>Sweden</option>
                    <option value="sg" {{ request()->get('country') == 'sg' ? 'selected' : '' }}>Singapore</option>
                    <option value="si" {{ request()->get('country') == 'si' ? 'selected' : '' }}>Slovenia</option>
                    <option value="sk" {{ request()->get('country') == 'sk' ? 'selected' : '' }}>Slovakia</option>
                    <option value="th" {{ request()->get('country') == 'th' ? 'selected' : '' }}>Thailand</option>
                    <option value="tr" {{ request()->get('country') == 'tr' ? 'selected' : '' }}>Turkey</option>
                    <option value="tw" {{ request()->get('country') == 'tw' ? 'selected' : '' }}>Taiwan</option>
                    <option value="ua" {{ request()->get('country') == 'ua' ? 'selected' : '' }}>Ukraine</option>
                    <option value="us" {{ request()->get('country') == 'us' ? 'selected' : '' }}>United state</option>
                    <option value="ve" {{ request()->get('country') == 've' ? 'selected' : '' }}>Venuzuela</option>
                    <option value="za" {{ request()->get('country') == 'za' ? 'selected' : '' }}>South africa</option>
                </select>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-x-4 gap-y-7 mt-10">
            @foreach ($contentHasCategory['articles'] as $content)
                <div class="">
                    <div>
                        <img src="{{ $content['urlToImage'] }}" alt="{{ $content['urlToImage'] ?? 'image' }}"
                            class="w-full box-border h-32">
                    </div>
                    <div class="mt-4">
                        <p class="text-secondary text-sm font-sans uppercase">
                            {{ \Carbon\Carbon::parse($content['publishedAt'])->format('d F Y') }}</p>
                        <a href="{{ $content['url'] }}">
                            <h4 class="font-roboto text-md mt-1 font-semibold hover:underline">
                                {{ \Illuminate\Support\Str::limit($content['title'], 50, '...') }}</h4>
                        </a>
                        <p class="mt-1">
                            {{ \Illuminate\Support\Str::limit($content['description'], 120, '...') }}
                        </p>
                        <p class="text-xs font-sans mt-3">Source <span
                                class="text-primary">{{ $content['source']['name'] ?? '' }}</span>
                        </p>
                        <div class="flex flex-row justify-between mt-1">
                            <p class="text-xs font-sans">
                                By <span class="text-primary"><a href="{{ $content['author'] }}">Author</a></span>
                            </p>
                            <span class="text-xs font-sans">
                                {{ \Carbon\Carbon::parse($content['publishedAt'])->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


@section('custom-js')
    <script type="text/javascript">
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 4,
            perMove: 1,
            gap: '1rem',
        });

        splide.mount();
    </script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        $(document).on('change', '#country-data', function(e) {
            e.preventDefault()
            var country = $(this).val();
            let category = '{{ request()->get('category') }}'
            let url = `/?category=${category}&country=${country}`
            window.location.href = window.location.origin + url
        })
    </script>
@endsection
