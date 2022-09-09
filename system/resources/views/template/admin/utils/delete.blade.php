<form action="{{ $url }}" class="form-inline" method="POST"
    onsubmit="return confirm('are you sure delete item?')">
    @csrf
    @method("delete")
    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>
