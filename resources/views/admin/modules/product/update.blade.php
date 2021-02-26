@extends('admin.layouts.app')
@section('content')
    <input name="old-images[]" id="old_images" hidden disabled value="{{$product->files}}">
    {!! Form::open(['url' => route('productUpdate',[app()->getLocale(),$product->id]),'method' =>'put','files'=>true]) !!}

    <div class="content-box">
        <div class="element-wrapper">
            <h6 class="element-header">
                @lang('admin.service_update')
            </h6>
            <div class="element-box">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-6">
                                <div
                                        class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                    {{ Form::label('title', __('admin.title'), []) }}
                                    {{ Form::text('title', (count($product->availableLanguage) > 0) ? $product->availableLanguage[0]->title : '', ['class' => 'form-control', 'no','placeholder'=>__('admin.enter_title')]) }}
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                    {{ $errors->first('title') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                        class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
                                    {{ Form::label('slug', __('admin.slug'), []) }}
                                    {{ Form::text('slug', $product->slug, ['class' => 'form-control', 'no','placeholder'=>__('admin.enter_slug')]) }}
                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                            {{ $errors->first('slug') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div
                                        class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                    {{ Form::label('description', __('admin.description'), []) }}
                                    {{ Form::text('description', (count($product->availableLanguage) > 0) ? $product->availableLanguage[0]->description : '', ['class' => 'form-control', 'no','placeholder'=>__('admin.enter_description')]) }}
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                    {{ $errors->first('description') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div
                                        class="form-group {{ $errors->has('youtube_url') ? ' has-error' : '' }}">
                                    {{ Form::label('youtube_url', __('admin.youtube_url'), []) }}
                                    {{ Form::text('youtube_url', $product->youtube_url, ['class' => 'form-control', 'no','placeholder'=>__('admin.enter_youtube_url')]) }}
                                    @if ($errors->has('youtube_url'))
                                        <span class="help-block">
                                    {{ $errors->first('youtube_url') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div
                                        class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                                    {{ Form::label('content', __('admin.content'), []) }}
                                    {{ Form::textarea('content', (count($product->availableLanguage) > 0) ? $product->availableLanguage[0]->content : '', ['class' => 'form-control', 'no','placeholder'=>__('admin.enter_content'),'id'=>'ckeditor1']) }}
                                    @if ($errors->has('content'))
                                        <span class="help-block">
                                            {{ $errors->first('content') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <label class="form-check-label"><input class="form-check-input" name="status" {{($product->status) ? 'checked' : ''}}
                                                                           type="checkbox">{{__('admin.status')}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="input-images"></div>
                            @if ($errors->has('images'))
                                <span class="help-block">
                                            {{ $errors->first('images') }}
                                        </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> {{__('admin.update')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {!! Form::close() !!}
@endsection
