@extends('app')

@section('title')Главная страница@endsection

@section('content')
<div class="body">
  @if($f == 2)
  <div class="strs">
      <label>По Вашему запросу нашлось объявлений: {{ count($data)}}</label>
    </div>
  @endif
  
  @if (count($data) == 0)
      <div class="message">
          <label>Ничего не нашлось &#128546</label><br/>
          <label>Измените параметры поиска</label>
      </div><hr />
  @endif

  @foreach($data as $elem)
    @foreach($builders as $builder)
      @if ($elem->builder == $builder->builder)
      <hr />
    <div class="objavlenie my-3">
     <div class="photo">
         <img src= "{{ $elem->photo }}" width=300 />
      </div>
      <div class="infoob">
          <div class="osninf">
              <label class="font-bold text-emerald-500"> Жилой комплекс  &#171{{ $elem->GK }}&#187</label><br />
              <label>{{ $elem->rajon }} район, улица {{ $elem->street }}, {{ $elem->numberhouse }}</label><br />
          </div>
          <div class="infrh">
              <div class="infroom">
                  <ul>
                      <li>{{ $elem->countroom }}-комнатная квартира</li>
                      <li>общая площадь {{ $elem->squaretotal }} м<sup><small>2</small></sup></li>
                      <li>жилая площадь {{ $elem->squarelive }} м<sup><small>2</small></sup></li>
                      <li>{{ $elem->level }}/{{ $elem->levelhouse }} этаж</li>
                      <li>{{ $elem->nalbl }}</li>
                  </ul>
              </div>
              <div class="infh">
                  <ul>
                      <li>тип дома: {{ $elem->typehouse }}</li>
                      <li>год сдачи {{ $elem->yearhouse }}</li>
                      <li>отделка {{ $elem->otdelka }}</li>
                  </ul>
              </div>
          </div>
          <div class="infpr text-emerald-500">
              <label> Цена {{ number_format($elem->price, 0, ',', ' ') }} &#8381</label><br />
          </div>
      </div>
      <div class="infozas">
          <div class="photo">
              <img src="{{ $builder->logo }}" width="100"/>
          </div>
          <div class="zas">
              <label>{{ $elem->builder }}</label>
          </div>
          <div class="zas">
              <label>{{ $builder->phone }}</label>
          </div>
      </div>
  </div><hr />
      @endif
    @endforeach
@endforeach
</div>

@if($f == 0)
<div class="flex justify-center">
    <div class="py-4">
    {{ $data->links() }}
    </div>
</div>
@endif

@endsection
