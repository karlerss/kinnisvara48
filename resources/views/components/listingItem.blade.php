<div class="row object">
    <div class="col-3 object__image" style="background-image: url({{$listing->image()->first()->path }});"></div>
    <div class="col-6">
        <h2>{{$listing->street}} {{$listing->house}}, {{$listing->district}} </h2>
        <div>Pindala: {{$listing->area}} m<sup>2</sup></div>
        <div>Piltide arv: {{$listing->image_count}}</div>
    </div>
    <div class="col-3 text-right">
        <h2 class="text-info"> {{number_format($listing->price, 0, ',', ' ')}} €</h2>
        <h4> {{$listing->price_m2}} €/m<sup>2</sup></h4>
    </div>
</div>