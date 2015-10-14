@if($errors->has())
    <ul class="alert alert-danger">
        <li><strong>Chyba při validaci. Opravte prosím následující chyby a zkuste znova.</strong></li>
        @foreach($errors->all() as $error)
            <li>&nbsp;&bull;&nbsp;{{ $error }}</li>
        @endforeach
    </ul>
@endif