<img src="/img/noimage.png" alt="" class="rounded-circle" width="140px" height="140px">
<span class="text-uppercase fw-semibold margin-top-ten">{{ __('Diego Geovanny Trigueros Fontan') }}</span>
<div class="container-data d-flex align-items-start flex-column">
    <div class="user-data margin-top-ten">
        <i class="material-icons primary-icon align-middle">
            account_circle
        </i>
        <span class="align-middle">{{$user->codigoUsuario}}</span>
    </div>
    <div class="user-data margin-top-ten">
        <i class="material-icons primary-icon align-middle">
            date_range
        </i>
        <span class="align-middle">{{$user->edadUsuario}} años de edad</span>
    </div>
    <div class="user-data margin-top-ten">
        <i class="material-icons primary-icon align-middle">
            contact_phone
        </i>
        <span class="align-middle">{{$user->telefonoUsuario}}</span>
    </div>
    <button type="button" class="btn btn-outline-primary margin-top-ten">Editar información</button>
</div>
