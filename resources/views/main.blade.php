@extends('header.header')
@section('js')

@endsection
@section('content')


<section id="slide">
    <div class="zastavka">

    </div>
    <div class="ovrbg">

    </div>
    <div class=" zastv obj">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <div class="txt-cont wow zoomIn">
                           <div class="txt-cont-1">Нет времени на уборку?</div>
                            <div class="txt-cont-2">ЗВОНИТЕ НАМ!</div>
                            <p>Качественный клининг по низкой цене</p>
                        <button type="button" class="btn btn-success">Заказать уборку</button>
                    </div>

                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>
</section>
<section id="sec2">
    <div class="obj">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Наши УСЛУГИ</h2>

                </div>
            </div>
            <div class="row">
                <? foreach ($uslugi as $k){?>

                   <div class="col-lg-4 wow zoomIn">
                       <a href="/certain/<?=$k->id?>">
                           <div class="thb-i">
                               <div class="thb-i-img">
                                   <img src="<?=request()->root()?>/<?=$k->image?>"/>
                               </div>
                               <div class="thb-i-title">
                                   <?=$k->name?>
                               </div>
                               <hr>
                                <div class="price-title">
                                   <?if($k->id ==3){?>
                                       цена за шт : <?=$k->price?>

                                    <?}else{?>
                                       цена за м <sup>2</sup> : <?=$k->price?>
                                    <?}?>
                                </div>
                               <hr>
                               <button type="button" class="btn btn-success">Подробнее</button>
                           </div>
                       </a>
                   </div>

                <?}?>
            </div>
        </div>
    </div>
</section>
<section id="sec3">
    <div class="obj">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Немного О НАС</h2>
                </div>
                <div class="col-lg-6">
                    <div class="onas-txt">

                        <p>Освободить время для досуга, занятий спортом,
                            отдыха – вот наша задача. Подумайте, сколько
                            времени вы тратите на поддерживающую уборку?
                            Опыт показывает, что еженедельная уборка
                            трехкомнатной квартиры осуществляется в течение
                            трех-четырех часов, генеральная иногда занимает
                            несколько дней, которые, как правило, отнимаются от
                            долгожданного и драгоценного отпуска. Подумайте, а не
                            лучше ли поручить это не очень чистое дело профессионалам? Тогда еженедельная уборка превратится в еженедельный совместный отдых со всей семьей,
                            или занятия в спортклубе, на которые вам вечно не хватает
                            времени, или поход в театр, где вы в последнее время бываете редко.</p>

                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="prim">
                        <div class="prim-item wow zoomIn">
                                <div class="conter">1</div>
                                <div class="prim-item-2">
                                    <img src="/img/001.svg"/>
                                </div>
                                <div class="prim-item-3">
                                    Заявка
                                </div>
                                <div class="prim-item-4">
                                   Напишите или позвоните нам:<br/>
                                    <span>0702 122 889</span>

                                </div>
                        </div>
                        <div class="prim-item wow zoomIn">
                            <div class="conter">2</div>
                            <div class="prim-item-2">
                                <img src="/img/002.svg"/>
                            </div>
                            <div class="prim-item-3">
                                Выезд клинеров
                            </div>
                            <div class="prim-item-4">
                                Специалисты компании (клинеры) выезжают к клиенту

                            </div>
                        </div>

                        <div class="prim-item wow zoomIn">
                            <div class="conter">3</div>
                            <div class="prim-item-2">
                                <img src="/img/003.svg"/>
                            </div>
                            <div class="prim-item-3">
                                Сдача работы
                            </div>
                            <div class="prim-item-4">
                                Чистота и порядок у Вас дома

                            </div>
                        </div>

                        <div class="prim-item wow zoomIn">
                            <div class="conter">4</div>
                            <div class="prim-item-2">
                                <img src="/img/005.svg"/>
                            </div>
                            <div class="prim-item-3">
                                Оплата
                            </div>
                            <div class="prim-item-4">
                                Выбор способа оплаты

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="sec4">
    <div class="obj">
        <div class="container">
            <div class="row">
                    <div class="col-lg-12">
                        <h1>Наши РАБОТЫ</h1>
                        <hr>
                    </div>
            </div>
            <div class="row">
                <? foreach ($jobs as $k){
                        $img = json_decode($k->images);
                    ?>

                    <div class="col-lg-3 wow zoomIn">
                        <div class="th-r-i" data-id="<?=$k->id?>">
                            <div class="th-r-i2">
                                <div class="item-label"><div class="align-elem">+</div></div>
                                <img src="<?=request()->root()?>/<?=$img[0]?>"
                            </div>
                            <div class="th-r-i3">
                                <?=$k->name?>
                            </div>

                        </div>
                    </div>

                <?}?>
            </div>
        </div>
    </div>
</section>
<section id="sec5">
    <div class="secover"></div>
    <div class="obj">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Наши ПРЕИМУЩЕСТВА</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
