<?php

use yii\helpers\Html;
use app\models\Article;
use yii\helpers\Url;

?>


<article>
    <div class="row">
        <div class="col-md-2 col-lg-2 left_menu">
            <section id="add_new_text">
                <input value="" id="input_add_new_text" placeholder="ваш текст"><button id="btn_add_new_text">отправить</button>
            </section>
            <section class="family">
                <?php if($families):?>
                    <select id="fontFamily" class="list-group catalog" size="15">
                        <?php foreach ($families as $family):?>
                            <option
                                    style="font-family: <?=$family['title']?>"
                                    title="<?=$family['path']?>"
                                    id="<?=$family['id']?>"
                            >

                                <?php
                                $str = $family['path'];
                                $string = substr($family['path'],9);
                                $pos = strrpos($string, '.'); // поиск позиции точки с конца строки
                                //echo substr($string, 0, $pos );
                                echo $family['title'];
                                ?>
                            </option>
                        <?php endforeach;?>
                    </select>
                <?php else:?>
                    <h2>Error</h2>
                <?php endif;?>
            </section>
        </div>
        <div class="col-md-8 col-lg-8 middle">
            <section id="top_menu">
                <select id="style" size="3">
                    <?php foreach ($styles as $style):?>
                        <option><?=$style['style']?></option>
                        style
                        </option>
                    <?php endforeach;?>
                </select>
                <select id="size" size="3">
                    <?php foreach ($sizes as $size):?>
                        <option><?=$size['size']?></option>
                    <?php endforeach;?>
                </select>
                <select id="weight" size="3">
                    <?php foreach ($weights as $weight):?>
                        <option><?=$weight['weight']?></option>
                    <?php endforeach;?>
                </select>
                <div id="colorSelector" ></div>
                <div id="body2">
                    <h3>Почему он используется?</h3>
                    <p>
                       Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.
                        Lorem Ipsum используют потому, что тот обеспечивает более или менее
                        стандартное заполнение шаблона, а также реальное распределение букв
                        и пробелов в абзацах, которое не получается при простой дубликации
                        "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.."
                        Многие программы электронной вёрстки и редакторы HTML используют
                        Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым
                        словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё
                        дожидаются своего настоящего рождения. За прошедшие годы текст Lorem
                        Ipsum получил много версий. Некоторые версии появились по ошибке,
                        некоторые - намеренно (например, юмористические варианты).
                        "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.."
                        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.
                        Lorem Ipsum используют потому, что тот обеспечивает более или менее
                        стандартное заполнение шаблона, а также реальное распределение букв
                        и пробелов в абзацах, которое не получается при простой дубликации
                        "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.."
                        Многие программы электронной вёрстки и редакторы HTML используют
                        Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым
                        словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё
                        дожидаются своего настоящего рождения. За прошедшие годы текст Lorem
                        Многие программы электронной вёрстки и редакторы HTML используют
                        Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым
                        словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё
                        дожидаются своего настоящего рождения. За прошедшие годы текст Lorem

                    </p>
                </div>
            </section>

        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" id="history">

            <h3>Copy</h3>
            {<br>
                <span>font-family: </span><span id="span_family"> </span><span>;</span><br>
                <span>color: </span> <span id="span_color"> </span><span>;</span><br>
                <span>font-size: </span><span id="span_size"> </span><span>px;</span><br>
                <span>font-weight: </span><span id="span_weight"> </span><span>;</span><br>
                <span>font-style: </span><span id="span_style"> </span><span>;</span><br>
            }
            <br/>
            <a id ="download" download title="шрифт ...">Скачать шрифт</a>
            <br/>
        </div>
    </div>
</article>

