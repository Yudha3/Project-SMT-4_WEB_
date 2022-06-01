@foreach ($ajax_product as $item)
<div class="form-group">
    <label for="price_buy">Harga Beli</label>
    <input type="number" class="form-control" name="price_buy" id="price_buy" value="{{ $item->price_buy }}" readonly>
</div>
@endforeach