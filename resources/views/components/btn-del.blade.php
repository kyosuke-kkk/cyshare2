<form style="display:inline" action="{{ url($table.'/'.$id) }}" mathod="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        {{ __('Delete') }}
    </button>
</form>