<form id="logout-form" action="{{ route('categoryProduct.destroy', $model->id)  }}" method="post" style=" float:left; margin-right:8px;">
    @csrf
    @method("DELETE")
    <button type="submit" onclick="return confirm('Apakah mau menghapus data {{ $model->name }}')" class="btn btn-outline-danger btn-sm btn-pill">Delete</button>
</form>
<a href="{{ route('categoryProduct.edit', $model->id) }}" class="btn btn-outline-primary btn-sm btn-pill">Edit</a>
