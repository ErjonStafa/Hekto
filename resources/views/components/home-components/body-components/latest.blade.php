@php
$products = array(
0=>array('link'=>'Images/Latest/image 3.png', 'name' => 'Comfort Handy Craft', 'discount' => '$42.00', 'price'=>
'$65.00'),
1=>array('link'=>'Images/Latest/image 15.png', 'name' => 'Comfort Handy Craft', 'discount' => '$42.00', 'price'=>
'$65.00'),
2=>array('link'=>'Images/Latest/image 23.png', 'name' => 'Comfort Handy Craft', 'discount' => '$42.00', 'price'=>
'$65.00'),
3=>array('link'=>'Images/Latest/image 32.png', 'name' => 'Comfort Handy Craft', 'discount' => '$42.00', 'price'=>
'$65.00'),
4=>array('link'=>'Images/Latest/image 1166.png', 'name' => 'Comfort Handy Craft', 'discount' => '$42.00', 'price'=>
'$65.00'),
5=>array('link'=>'Images/Latest/image 1168.png', 'name' => 'Comfort Handy Craft', 'discount' => '$42.00', 'price'=>
'$65.00')
);
@endphp


<div class="flex flex-wrap justify-center items-center">
    @foreach ($products as $item)
    <div>
        <x-home-components.body-components.latest-card :link="$item['link']" :name="$item['name']" :discount="$item['discount']"
            :price="$item['price']" />
    </div>
    @endforeach
</div>