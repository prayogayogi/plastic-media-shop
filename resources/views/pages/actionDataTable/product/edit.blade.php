<a href="{{ route('product.edit', $model->id)  }}" class="btn btn-outline-primary btn-sm btn-pill">Edit</a>
<a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="btn btn-outline-danger btn-sm btn-pill">Delete</a>
<form id="logout-form" action="{{ route('product.destroy', $model->id)  }}" method="post" style="display: none">
    @csrf
    @method("DELETE")
</form>
