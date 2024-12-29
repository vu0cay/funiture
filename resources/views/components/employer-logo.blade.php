@props(["size" => "90", "img_url" => 'https://picsum.photos/seed/{{rand(0,10000)}}/90'])
<!-- @props(["size" => "90"]) -->

<div class="border-5 ">
    <!-- <img src="https://picsum.photos/seed/{{rand(0,10000)}}/{{$size}}" alt="" class="rounded-xl" /> -->
    <img src={{$img_url}} alt="" {{$attributes->merge(['class' => 'rounded-xl'])}}>
</div>