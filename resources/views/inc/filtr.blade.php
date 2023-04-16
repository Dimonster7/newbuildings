<form name="filtr" action="{{ route('filtr-form') }}" method="post">
  @csrf
    <div class="filtr">
        <div class="wrapper border-b-2 border-emerald-500">
            <div class="sb"></div>

            <div class="price">                
                <h3>Цена (руб.)</h3>
                <div class="flex">
                    <div>
                        <label class="price1" data-title="Введите минимальную цену">от:</label>
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('price_start') cf @enderror" name="price_start" type="text" size="15" value="@if(isset($_POST['view'])) {{ $_POST['price_start'] }} @else {{ old('price_start') }} @endif"/>
                            <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите минимальную цену</p>                    
                        </span>
                        @error('price_start')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div>
                        <label class="price1" data-title="Введите максимальную цену">до:</label>                
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('price_end') cf @enderror" name="price_end" type="text" size="15" value="@if(isset($_POST['view'])) {{ $_POST['price_end'] }} @else {{ old('price_end') }} @endif"/>
                            <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальную цену</p>
                        </span>
                        @error('price_end')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="square">
                <h3>Общая площадь (м<sup><small>2</small></sup>)</h3>
                <div class="flex">
                    <div>
                        <label class="price1" data-title="Введите минимальную площадь">от:</label>                    
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('squaretotal_start') cf @enderror" name="squaretotal_start" type="text" size="5" value="@if(isset($_POST['view'])) {{ $_POST['squaretotal_start'] }} @else {{ old('squaretotal_start') }} @endif"/>
                            <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите минимальную площадь</p>
                        </span>
                        @error('squaretotal_start')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div>
                        <label class="price1" data-title="Введите максимальную площадь">до:</label>                    
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('squaretotal_end') cf @enderror" name="squaretotal_end" type="text" size="5" value="@if(isset($_POST['view'])) {{ $_POST['squaretotal_end'] }} @else {{ old('squaretotal_end') }} @endif"/>
                            <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальную площадь</p>
                        </span>
                        @error('squaretotal_end')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="square">
                <h3>Жилая площадь (м<sup><small>2</small></sup>)</h3>
                <div class="flex">
                    <div>
                        <label class="price1" data-title="Введите минимальную площадь">от:</label>                    
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('squarelive_start') cf @enderror" name="squarelive_start" type="text" size="5" value="@if(isset($_POST['view'])) {{ $_POST['squarelive_start'] }} @else {{ old('squarelive_start') }} @endif"/>
                            <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите минимальную площадь</p>
                        </span>
                        @error('squarelive_start')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div>
                        <label class="price1" data-title="Введите максимальную площадь">до:</label>                    
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('squarelive_end') cf @enderror" name="squarelive_end" type="text" size="5" value="@if(isset($_POST['view'])) {{ $_POST['squarelive_end'] }} @else {{ old('squarelive_end') }} @endif"/>
                            <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальную площадь</p>
                        </span>
                        @error('squarelive_end')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper flex items-center border-b-2 border-emerald-500">
            <div class="sb text-xl font-bold">
                <h2>Адрес:</h2>
            </div>
            <div class="adress">
                <h3>Район</h3>
                {{-- <label class="r" data-title="Выберите район, в котором находится дом"></label> --}}
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <select name="rajon">
                        <option value="" <?php if ((isset($_POST["view"])) && ($_POST["rajon"] == '')) echo "selected";?>>Выбрать</option>
                        <option value="Индустриальный" <?php if ((isset($_POST["view"])) && ($_POST["rajon"] == 'Индустриальный')) echo "selected";?>>Индустриальный</option>
                        <option value="Октябрьский" <?php if ((isset($_POST["view"])) && ($_POST["rajon"] == 'Октябрьский')) echo "selected";?>>Октябрьский</option>
                        <option value="Ленинский" <?php if ((isset($_POST["view"])) && ($_POST["rajon"] == 'Ленинский')) echo "selected";?>>Ленинский</option>
                        <option value="Первомайский" <?php if ((isset($_POST["view"])) && ($_POST["rajon"] == 'Первомайский')) echo "selected";?>>Первомайский</option>
                        <option value="Устиновский" <?php if ((isset($_POST["view"])) && ($_POST["rajon"] == 'Устиновский')) echo "selected";?>>Устиновский</option>
                    </select>
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Выберите район, в котором находится дом</p>
                </span>
            </div>
            <div class="adress">
                <h3>Жилой комплекс</h3>
                {{-- <label class="g" data-title="Введите название жилого комплекса"></label> --}}
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input name="GK" type="text" value="<?php if (isset($_POST["view"])) echo $_POST["GK"]?>">
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите название жилого комплекса</p>
                </span>
            </div>
            <div class="adress">
                <h3>Улица</h3>
                {{-- <label class="st" data-title="Введите название улицы"></label> --}}
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input name="street" type="text" value="<?php if (isset($_POST["view"])) echo $_POST["street"]?>">
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите название улицы</p>
                </span>
            </div>
            <div class="adress">
                <h3>Номер дома</h3>
                {{-- <label class="nh" data-title="Введите номер дома"></label> --}}
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input name="numberhouse" type="text" size="12" value="<?php if (isset($_POST["view"])) echo $_POST["numberhouse"]?>">
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите номер дома</p>
                </span>                
            </div>
        </div>
        <div class="wrapper flex items-center border-b-2 border-emerald-500">
            <div class="sb text-xl font-bold">
                <h2>О доме:</h2>
            </div>
            <div class="other">
                <h3>Год сдачи дома</h3>
                {{-- <label class="yh" data-title="Введите год, в котором будет сдан дом"></label> --}}
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input class="@error('yearhouse') cf @enderror" name="yearhouse" type="text" size="15" value="<?php if (isset($_POST["view"])) echo $_POST["yearhouse"]?>">
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите год, в котором будет сдан дом</p>
                </span>
                @error('yearhouse')
                    <div class="error w-56">{{ $message }}</div>
                @enderror
            </div>
            <div class="other">
                <h3>Тип дома</h3>
                {{-- <label class="th" data-title="Выберите материал стен дома"></label> --}}
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <select name="typehouse">
                        <option value="" <?php if ((isset($_POST["view"])) && ($_POST["typehouse"] == '')) echo "selected";?>>Выбрать</option>
                        <option value="кирпичный" <?php if ((isset($_POST["view"])) && ($_POST["typehouse"] == 'кирпичный')) echo "selected";?>>Кирпичный</option>
                        <option value="блочный" <?php if ((isset($_POST["view"])) && ($_POST["typehouse"] == 'блочный')) echo "selected";?>>Блочный</option>
                        <option value="панельный" <?php if ((isset($_POST["view"])) && ($_POST["typehouse"] == 'панельный')) echo "selected";?>>Панельный</option>
                        <option value="монолитный" <?php if ((isset($_POST["view"])) && ($_POST["typehouse"] == 'монолитный')) echo "selected";?>>Монолитный</option>
                    </select>
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите материал стен дома</p>
                </span>
            </div>
            <div class="adress">
                <h3>Этажность дома</h3>
                <div class="flex">
                    <div>
                        <label class="price1" data-title="Введите минимальное количество этажей в доме">от:</label>
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('levelhouse_start') cf @enderror" name="levelhouse_start" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["levelhouse_start"]?>">
                            <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите минимальное количество этажей в доме</p>
                        </span>
                        @error('levelhouse_start')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div>
                        <label class="price1" data-title="Введите максимальное количество этажей в доме">до:</label>
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('levelhouse_end') cf @enderror" name="levelhouse_end" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["levelhouse_end"]?>"/>
                            <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальное количество этажей в доме</p>
                        </span>
                        @error('levelhouse_end')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper flex items-center border-b-2 border-emerald-500">
            <div class="sb text-xl font-bold">
                <h2>О квартире:</h2>
            </div>
            <div class="adress">
                <h3>Этаж</h3>
                <div class="flex">
                    <div>
                        <label class="price1" data-title="Введите минимальный этаж в доме">от:</label>
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('level_start') cf @enderror" name="level_start" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["level_start"]?>">
                            <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите минимальный этаж в доме</p>
                        </span>
                        @error('level_start')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div>
                        <label class="price1" data-title="Введите максимальный этаж в доме">до:</label>
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('level_end') cf @enderror" name="level_end" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["level_end"]?>"/>
                            <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальный этаж в доме</p>
                        </span>
                        @error('level_end')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="other">
                <h3>Количество комнат</h3>
                <div class="flex">
                    <div>
                        <label class="price1" data-title="Введите минимальное количество комнат в квартире">от:</label>
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('countroom_start') cf @enderror" name="countroom_start" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["countroom_start"]?>">
                            <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальное количество комнат в квартире</p>
                        </span>
                        @error('countroom_start')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div>
                        <label class="price1" data-title="Введите максимальное количество комнат в квартире">до:</label>
                        <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                            <input class="@error('countroom_end') cf @enderror" name="countroom_end" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["countroom_end"]?>"/>
                            <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальное количество комнат в квартире</p>
                        </span>
                        @error('countroom_end')
                            <div class="error w-56">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="other" data-title="Выберите отделку квартиры">
                <h3>Отделка</h3>
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <label>
                        <input class="mr-1" name="otdelka" type="radio" value="черновая" <?php if (isset($_POST["view"])) if(isset($_POST["otdelka"]) && $_POST["otdelka"] == 'черновая') echo "checked";?>>
                        Черновая
                    </label>
                    <label class="ml-2">
                        <input class="mr-1" name="otdelka" type="radio" value="чистовая" <?php if (isset($_POST["view"])) if(isset($_POST["otdelka"]) && $_POST["otdelka"] == 'чистовая') echo "checked";?>>
                        Чистовая
                    </label>
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Выберите отделку квартиры</p>
                </span>
            </div>
            <div class="other">
                <h3>Наличие балкона/лоджии</h3>
                <label><input class="mr-1" name="nalbl" type="radio" value="балкон" <?php if (isset($_POST["view"])) if(isset($_POST["nalbl"]) && $_POST["nalbl"] == 'балкон') echo "checked";?>>Балкон</label>
                <label class="ml-2"><input class="mr-1" name="nalbl" type="radio" value="лоджия" <?php if (isset($_POST["view"])) if(isset($_POST["nalbl"]) && $_POST["nalbl"] == 'лоджия') echo "checked";?>>Лоджия</label>
            </div>
        </div>
    </div>
    <div class="button text-white">
        <input style="text-shadow: 1px 1px 0px #283744;" class="button1 bg-emerald-500 border-3 border-emerald-600" type="submit" name="view" value="Показать" accesskey="t">
        <input style="text-shadow: 1px 1px 0px #283744;" class="button1 bg-emerald-500 border-3 border-emerald-600" type="submit" name="clear" value="Сбросить" accesskey="r">
        <!--<button class="button1" type="submit" name="view">Показать</button>-->
       <!-- <input class="button1" type="submit" name="topdf" value="Отчёт" accesskey="o" onclick="generatePDF()"> -->
    </div>
</form>
