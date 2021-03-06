@extends('layouts.admin.master')

@section('title','Bedrijfsprofielen')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="h9" style="margin-top: 15px">Bedrijfsprofiel Aanpassen</h1>
        <div class="col-lg-6 col-lg-offset-3">
            {!! Form::model($profile, ['method' => 'PATCH', 'action' => ['BedrijfsprofielenController@update', $profile->id],'files' => true]) !!}
                @include('partials.admin.bedrijfsprofielform',['submitButtonText' => 'Aanpassen','pictureLabelText' => 'Foto (Niet aankomen als je de foto niet wil wijzigen)'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            $('#body').redactor({
                focus: true,
                imageUpload: '/admin/upload?_token=' + '{{ csrf_token() }}',
                plugins: ['table', 'video'],
                maxHeight: 300,
                minHeight: 300,
                callbacks: {
                    imageUploadError: function (json) {
                        $.each(json.error.file, function (file, item) {
                            toastr.error(item);
                        });
                    }
                }
            });
        });
    </script>
@endsection