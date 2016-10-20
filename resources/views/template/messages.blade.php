@if($errors->any())
    <div class="alert bg-gray  alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
    </div>
@endif