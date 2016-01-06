<div class="form-group required @if($errors->has('title')) has-error @endif">
    {!! Form::label('title','Titel',['class' => 'control-label']) !!}
    {!! Form::text('title', \Illuminate\Support\Facades\Input::old('title'), ['class' => 'form-control']) !!}
    @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
</div>
<div class="form-group required @if($errors->has('picture')) has-error @endif">
    {!! Form::label('picture',$pictureLabelText,['class' => 'control-label']) !!}
    {!! Form::file('picture', ['class' => 'form-control','value' => \Illuminate\Support\Facades\Input::old('picture')]) !!}
    @if ($errors->has('picture')) <p class="help-block">{{ $errors->first('picture') }}</p> @endif
</div>
<div class="form-group required @if($errors->has('body')) has-error @endif">
    {!! Form::label('body','Bedrijfsprofiel',['class' => 'control-label']) !!}
    {!! Form::textarea('body', \Illuminate\Support\Facades\Input::old('body'), ['class' => 'form-control', 'style' => 'height:20px']) !!}
    @if ($errors->has('body')) <p class="help-block">{{ $errors->first('body') }}</p> @endif
</div>
<div class="form-group">
    <button class="btn btn-primary form-control ladda-button" data-style="zoom-in" type="submit">
        <span class="ladda-label">{{$submitButtonText}}</span>
    </button>
</div>