@extends('app')

@section('title')Главная страница@endsection

@section('content')
{{-- <div class="body"> --}}
<div class="mx-64 mt-20 mb-14">
  {{-- @if(is_a($data, 'Illuminate\Support\Collection')) --}}
  {{-- @if($is_filter) --}}
    <div class="strs">
      {{-- <label>По Вашему запросу нашлось объявлений: {{ count($data) }}</label> --}}
      <label>По Вашему запросу нашлось объявлений: {{ $data->total() }}</label>
    </div>
  {{-- @endif --}}
  {{-- @endif --}}
  
  @if (count($data) == 0)
      <div class="message rounded-xl mx-3 my-3 bg-white">
          <label>Ничего не нашлось &#128546</label><br/>
          <label>Измените параметры поиска</label>
      </div>
  @endif

  @foreach($data as $elem)
    {{-- @foreach($builders as $builder) --}}
      {{-- @if ($elem->builder == $builder->builder) --}}
      {{-- <hr /> --}}
    <div class="objavlenie flex justify-between rounded-xl mx-3 my-3 bg-white">
        <div class="flex">
            <div class="photo">
                <img src= "{{ $elem->photo }}" width=300 />
            </div>
            <div class="infoob flex flex-col justify-between">
                <div class="">
                    <label class="font-bold text-emerald-500"> Жилой комплекс  &#171{{ $elem->GK }}&#187</label><br />
                    <label>{{ $elem->rajon }} район, улица {{ $elem->street }}, {{ $elem->numberhouse }}</label><br />
                </div>
                <div class="infrh flex mt-3">
                    <div class="">
                        <ul>
                            <li>{{ $elem->countroom }}-комнатная квартира</li>
                            <li>общая площадь {{ $elem->squaretotal }} м<sup><small>2</small></sup></li>
                            <li>жилая площадь {{ $elem->squarelive }} м<sup><small>2</small></sup></li>
                            <li>{{ $elem->level }}/{{ $elem->levelhouse }} этаж</li>
                            <li>{{ $elem->nalbl }}</li>
                        </ul>
                    </div>
                    <div class="ml-6">
                        <ul>
                            <li>тип дома: {{ $elem->typehouse }}</li>
                            <li>год сдачи {{ $elem->yearhouse }}</li>
                            <li>отделка {{ $elem->otdelka }}</li>
                        </ul>
                    </div>
                </div>
                <div class="infpr text-emerald-500 ">
                    <label> Цена {{ number_format($elem->price, 0, ',', ' ') }} &#8381</label><br />
                </div>
            </div>
        </div>
        <div class="mr-6 mt-4">
            <div class="photo">
                <img src="{{ $elem->builder->logo }}" width="100"/>
            </div>
            <div class="zas">
                <label>{{ $elem->builder->builder }}</label>
            </div>
            <div class="zas">
                <label>{{ $elem->builder->phone }}</label>
            </div>
        </div>
  </div>
  {{-- <hr /> --}}
      {{-- @endif --}}
    {{-- @endforeach --}}
@endforeach
</div>

{{-- @if(!is_array($data)) --}}
{{-- @if(!is_a($data, 'Illuminate\Support\Collection')) --}}
<div class="flex justify-center">
    <div class="py-4">
    {{ $data->links() }}
    </div>
</div>
{{-- @endif --}}

@endsection
