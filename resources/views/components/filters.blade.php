<div class="container">
    <div class="row">
        <form action="filter" class="form-inline mb-4">
            <div class="form-group">
                <input type="number" class="form-control" name="m2_price_min" placeholder="Min m2 hind"
                       @if (!empty($minPrice))
                      value="{{$minPrice}}"
                       @endif
                >


            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="m2_price_max" placeholder="Max m2 hind"
                       @if (!empty($maxPrice))
                       value="{{$maxPrice}}"
                       @endif
                >
            </div>
            <button type="submit" class="btn btn-primary">Otsi</button>
        </form>
    </div>
</div>