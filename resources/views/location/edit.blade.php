@extends('base')

@section('body')
    <div class="text-center">
        <h2 class="main-title">Editace záznamu</h2>
    </div>

    <hr>

    <div class="row">
        <form class="form-horizontal">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="location">Umístění</label>
                    <div class="col-md-8">
                        <input id="location" name="location" type="text" class="form-control input-md" value="{{ $location->location }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="latitude">Zeměpisná šířka</label>
                    <div class="col-md-8">
                        <input id="latitude" name="latitude" type="text" class="form-control input-md" value="{{ $location->latitude }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="longitude">Zeměpisná délka</label>
                    <div class="col-md-8">
                        <input id="longitude" name="longitude" type="text" class="form-control input-md" value="{{ $location->longitude }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="description">Popis</label>
                    <div class="col-md-8">
                        <textarea class="form-control" id="description" name="description">{{ $location->description }}</textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Kontaktní Email</label>
                    <div class="col-md-8">
                        <input id="email" name="email" type="email" class="form-control input-md" value="{{ $location->email }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="phone">Telefonní číslo</label>
                    <div class="col-md-8">
                        <input id="phone" name="phone" type="text" class="form-control input-md" value="{{ $location->phone }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="website">Webová stránka</label>
                    <div class="col-md-8">
                        <input id="website" name="website" type="text" class="form-control input-md" value="{{ $location->website }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="working_hours">Otevírací doba</label>
                    <div class="col-md-8">
                        <textarea class="form-control" id="working_hours" name="working_hours">{{ $location->working_hours }}</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary pull-right" value="Uložit změny">
            </div>
        </form>

        <form id="dropzonesapaguide" action="/file-upload" class="dropzone dropzone-sapaguide">
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
    </div>
@stop

@section('scripts')
    <script>
        Dropzone.options.dropzonesapaguide = {
            maxFilesize: 20,
            uploadMultiple: true,
            acceptedFiles: 'image/*',
            dictDefaultMessage: 'Sem přetáhněte obrázky pro nahrání na server.'
        };
    </script>
@stop