<?php
$error = false;
$error_ps = "";
$error_pe = "";
$error_sts = "";
$error_ste = "";
$error_sls = "";
$error_sle = "";
$error_nh = "";
$error_yh = "";
$error_lhs = "";
$error_lhe = "";
$error_ls = "";
$error_le = "";
$error_crs = "";
$error_cre = "";
?>

@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form name="filtr" action="{{ route('filtr-form') }}" method="post">
  @csrf
    <div class="filtr">
        <div class="wrapper border-b-2 border-emerald-500">
            <div class="sb"></div>

            <div class="price">
                <h3>Цена (руб.)</h3>
                <label class="price1" data-title="Введите минимальную цену">от:</label>
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_ps) echo "class=\"cf\""?> name="price_start" type="text" size="15" value="<?php if (isset($_POST["view"])) echo $_POST["price_start"]?>"/>
                    <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите минимальную цену</p>
                </span>
                <span <?php if ($error_ps) echo "class=\"error\""?> style="color:red"><?=$error_ps?></span>
                
                <label class="price1" data-title="Введите максимальную цену">до:</label>                
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_pe) echo "class=\"cf\""?> name="price_end" type="text" size="15" value="<?php if (isset($_POST["view"])) echo $_POST["price_end"]?>"/>
                    <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальную цену</p>
                </span>
                <span <?php if ($error_pe) echo "class=\"error\""?> style="color:red"><?=$error_pe?></span>
            </div>
            <div class="square">
                <h3>Общая площадь (м<sup><small>2</small></sup>)</h3>
                <label class="price1" data-title="Введите минимальную площадь">от:</label>                    
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_sts) echo "class=\"cf\""?> name="squaretotal_start" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["squaretotal_start"]?>"/>
                    <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите минимальную площадь</p>
                </span>
                <span <?php if ($error_sts) echo "class=\"error\""?> style="color:red"><?=$error_sts?></span>
                
                <label class="price1" data-title="Введите максимальную площадь">до:</label>                    
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_ste) echo "class=\"cf\""?> name="squaretotal_end" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["squaretotal_end"]?>"/>
                    <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальную площадь</p>
                </span>
                <span <?php if ($error_ste) echo "class=\"error\""?> style="color:red"><?=$error_ste?></span>
            </div>
            <div class="square">
                <h3>Жилая площадь (м<sup><small>2</small></sup>)</h3>
                <label class="price1" data-title="Введите минимальную площадь">от:</label>                    
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_sls) echo "class=\"cf\""?> name="squarelive_start" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["squarelive_start"]?>"/>
                    <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите минимальную площадь</p>
                </span>
                <span <?php if ($error_sls) echo "class=\"error\""?> style="color:red"><?=$error_sls?></span>
                
                <label class="price1" data-title="Введите максимальную площадь">до:</label>                    
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_sle) echo "class=\"cf\""?> name="squarelive_end" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["squarelive_end"]?>"/>
                    <p class="absolute bottom-full transform translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальную площадь</p>
                </span>
                <span <?php if ($error_sle) echo "class=\"error\""?> style="color:red"><?=$error_sle?></span>
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
                    <input <?php if ($error_nh) echo "class=\"cf\""?> name="numberhouse" type="text" size="12" value="<?php if (isset($_POST["view"])) echo $_POST["numberhouse"]?>">
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите номер дома</p>
                </span>
                <span <?php if ($error_nh) echo "class=\"error\""?> style="color:red"><?=$error_nh?></span>
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
                    <input <?php if ($error_yh) echo "class=\"cf\""?> name="yearhouse" type="text" size="15" value="<?php if (isset($_POST["view"])) echo $_POST["yearhouse"]?>">
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите год, в котором будет сдан дом</p>
                </span>
                <span <?php if ($error_yh) echo "class=\"error\""?> style="color:red"><?=$error_yh?></span>
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
                <label class="price1" data-title="Введите минимальное количество этажей в доме">от:</label>
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_lhs) echo "class=\"cf\""?> name="levelhouse_start" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["levelhouse_start"]?>">
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите минимальное количество этажей в доме</p>
                </span>
                <span <?php if ($error_lhs) echo "class=\"error\""?> style="color:red"><?=$error_lhs?></span>
                <label class="price1" data-title="Введите максимальное количество этажей в доме">до:</label>
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_lhe) echo "class=\"cf\""?> name="levelhouse_end" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["levelhouse_end"]?>"/>
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальное количество этажей в доме</p>
                </span>
                <span <?php if ($error_lhe) echo "class=\"error\""?> style="color:red"><?=$error_lhe?></span>
            </div>
        </div>
        <div class="wrapper flex items-center border-b-2 border-emerald-500">
            <div class="sb text-xl font-bold">
                <h2>О квартире:</h2>
            </div>
            <div class="adress">
                <h3>Этаж</h3>
                <label class="price1" data-title="Введите минимальный этаж в доме">от:</label>
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_ls) echo "class=\"cf\""?> name="level_start" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["level_start"]?>">
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите минимальный этаж в доме</p>
                </span>
                <span <?php if ($error_ls) echo "class=\"error\""?> style="color:red"><?=$error_ls?></span>
                <label class="price1" data-title="Введите максимальный этаж в доме">до:</label>
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_le) echo "class=\"cf\""?> name="level_end" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["level_end"]?>"/>
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальный этаж в доме</p>
                </span>
                <span <?php if ($error_le) echo "class=\"error\""?> style="color:red"><?=$error_le?></span>
            </div>
            <div class="other">
                <h3>Количество комнат</h3>
                <label class="price1" data-title="Введите минимальное количество комнат в квартире">от:</label>
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_crs) echo "class=\"cf\""?> name="countroom_start" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["countroom_start"]?>">
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальное количество комнат в квартире</p>
                </span>
                <span <?php if ($error_crs) echo "class=\"error\""?> style="color:red"><?=$error_crs?></span>
                <label class="price1" data-title="Введите максимальное количество комнат в квартире">до:</label>
                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="relative">
                    <input <?php if ($error_cre) echo "class=\"cf\""?> name="countroom_end" type="text" size="5" value="<?php if (isset($_POST["view"])) echo $_POST["countroom_end"]?>"/>
                    <p class="absolute bottom-full transform -translate-x-2 mb-2 p-2 text-sm text-gray-500 bg-white rounded-md shadow border" x-cloak x-show="tooltip">Введите максимальное количество комнат в квартире</p>
                </span>
                <span <?php if ($error_cre) echo "class=\"error\""?> style="color:red"><?=$error_cre?></span></label>
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
