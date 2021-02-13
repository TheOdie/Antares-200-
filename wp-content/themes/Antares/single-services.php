<?php get_header(); ?>
    <section class="services-page">
        <div class="first-screen__image position-relative" style="background: url('<?php the_field('first-screen-bg-image')?>')

                ;background-position: center;display: flex;align-items: flex-end">
            <div class="container">
                <div class="row services-inner">
                    <div class="col-lg-7 col-md-12">
                        <h1 class="services-page__title position-relative">
                            <?php the_field('service-title') ?>
                        </h1>
                        <p class="services-page__subtitle light-grey light">
                            <?php the_field('service-subtitle') ?>
                        </p>
                        <a href="#get-contacts"
                           style="cursor:pointer;"
                           class="contacts__contacts_button send-message d-flex justify-content-center align-items-center text-dark"
                        >
                            Залишити заявку
                        </a>
                    </div>

                    <div class="service-img col-lg-5 col-md-12 col-12 d-flex justify-content-center align-items-center ">
                        <img class="services-page__tematick-img" src="<?php the_field('first-screen-tematic-image') ?>" alt="">
                        <img class="securety_page_service" src="<?php the_field('securety_page_service') ?>" alt="">
                        <img class="debug-service" src="<?php the_field('debug-service') ?>" alt="">
                        <img class="debug-service" src="<?php the_field('fire-service') ?>" alt="">
                        <img class="debug-service" src="<?php the_field('call-center') ?>" alt="">
                        <img class="own-security" src="<?php the_field('own-security') ?>" alt="">

                    </div>
                    <div class="d-flex align-items-center">
                        <img class="antiugon_service " src="<?php the_field('antiugon_service') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php if (get_queried_object_id() ==  99): ?>
    <section>
        <div class="row mb-5 mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                <div class="card service-card pult border border-warning w-100 h-100 p-4" style="width: 18rem;">
                    <img class="card-img-top w-80 h-auto border-3" src="https://antares-2000.com.ua/wp-content/uploads/2021/01/Охорона_обєктів_різної_форми_власності.jpg" alt="Card image cap">
                    <div class="card-body card-body-pult text-center pl-0 pr-0">
                        <h5 class="card-title">Охорона об'єктів різної форми власності</h5>
                        <p class="card-text">Приватна охорона "Антарес-2000" проведе обстеження Вашого об’єкту та
                            запропонуємо максимально ефективну систему охорони для Вашого бізнесу.</p>
                        <a href="/p1/" class="btn action__get-details mt-4">Детальніше</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                <div class="card service-card pult border border-warning w-100 h-100 p-4" style="width: 18rem;">
                    <img class="card-img-top w-80 mh-50" src="https://antares-2000.com.ua/wp-content/uploads/2021/01/Охорона-будинків-квартир.jpg" alt="Card image cap">
                    <div class="card-body card-body-pult text-center pl-0 pr-0">
                        <h5 class="card-title">Охорона будинків, квартир</h5>
                        <p class="card-text">Приватна охорона «Антарес-2000» надає комплекс охоронних послуг,
                            спрямованих на виявлення та знешкодження злочинних посягань на Ваше особисте майно,
                            а саме: — квартири, будинки, господарчі будівлі та інше.
                        </p>
                        <a href="/p2/" class="btn action__get-details mt-4">Детальніше</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                <div class="card service-card border border-warning pult w-100 h-100 p-4" style="width: 18rem;">
                    <img class="card-img-top w-80 mh-50" src="https://antares-2000.com.ua/wp-content/uploads/2021/01/Монтаж-сигнализації.jpg" alt="Card image cap">
                    <div class="card-body card-body-pult text-centerpl-0 pr-0">
                        <h5 class="card-title">Монтаж сигнализації </h5>
                        <p class="card-text">Кваліфіковані інженери "Антерес-2000" проведуть безкоштовне обстеження
                            та запропонують Вам декілька варіантів захисту Вашого майна, з подальшим обладнанням
                            системами  в найкоротший термін.</p>
                            системами  в найкоротший термін.</p>
                        <a href="/p3/" class="btn action__get-details mt-4">Детальніше</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php endif; ?>

   <section class="bg-white">
       <div class="container">
           <div class="row">
               <div class="services-page__description-title text-center w-100">
                  <?php the_field('service-description__title')?>
               </div>
               <div class="col-md-12 col-sm-12 col-xs-12 bg-white services-page__description-wrapper p-0">
                   <div class="pb-4 midle" style="font-size: 22px;">
                      <?php the_field('service-pre-description')?>
                   </div>
                   <div class="services-page__main-content midle p-0">
                      <?php the_field('service-description')?>
                   </div>
               </div>
           </div>
       </div>
       <div class="text-center">
           <span class="single-service__scroll_ico m-auto"></span>
       </div>
   </section>
    <div class="container bg-white my-5 rounded">
        <div class="services-page__contacts">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="services-page__contacts-title">
                        Залиште заявку і ми вам передзвонимо
                    </h1>
                    <p class="services-page__contacts_phone">
                        <span class="midle">або телефонуйте:</span> 
                    </p>
                    <p class="services-page__contacts_phone">
                   <strong class="d-block extra-bold">(099) 097-18-88</strong>
                   <strong class="d-block extra-bold">(097) 097-18-88</strong>
                   <strong class="d-block extra-bold mb-2">(093) 097-18-88</strong>
                    </p>
                </div>
                     <?php echo do_shortcode('[contact-form-7 id="691" title="Страница услуги"]')?>
                <div >
               </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>