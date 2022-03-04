@php
    $product = array(
        0=>array('link'=>'Images/Featured/image 1168.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        1=>array('link'=>'Images/Featured/image 1.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        2=>array('link'=>'Images/Featured/image 1169.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        3=>array('link'=>'Images/Featured/image 3.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        4=>array('link'=>'Images/Featured/image 1168.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        5=>array('link'=>'Images/Featured/image 1.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        6=>array('link'=>'Images/Featured/image 1169.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        7=>array('link'=>'Images/Featured/image 3.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        8=>array('link'=>'Images/Featured/image 1168.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        9=>array('link'=>'Images/Featured/image 1.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        10=>array('link'=>'Images/Featured/image 1169.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        11=>array('link'=>'Images/Featured/image 3.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        12=>array('link'=>'Images/Featured/image 1168.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        13=>array('link'=>'Images/Featured/image 1.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        14=>array('link'=>'Images/Featured/image 1169.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
        15=>array('link'=>'Images/Featured/image 3.png', 'name' => 'Cantilever chair', 'code' => 'Y523201', 'price'=> '$42.00'),
    );
@endphp

<div>
    <div class="swiper swiper2 pb-24">
        <div class="swiper-wrapper">
            @for ($i = 0; $i < count($product); $i++)
                <div class="swiper-slide flex flex-wrap justify-center items-center">
                    <x-home-components.body-components.featured-card :link="$product[$i]['link']" :name="$product[$i]['name']" :code="$product[$i]['code']" :price="$product[$i]['price']"/>
                </div>
            @endfor
        </div>
        <div class="swiper-pagination swiper-pagination2"></div>
    </div>
</div>
