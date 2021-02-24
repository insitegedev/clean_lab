@extends('admin.layouts.app')
@section('content')
    <input name="old-images[]" id="old_images" hidden disabled value="{{$product->files}}">
    {!! Form::open(['url' => route('productUpdate',[app()->getLocale(),$product->id]),'method' =>'put','files'=>true]) !!}

    <div class="content-box">
        <div class="element-wrapper">
            <h6 class="element-header">
                @lang('admin.product.update')
            </h6>
            <div class="element-box">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-6">
                                <div
                                        class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                    {{ Form::label('slug', 'Slug', []) }}
                                    {{ Form::text('slug', (count($product->availableLanguage) > 0) ? $product->availableLanguage[0]->slug : '', ['class' => 'form-control', 'no','placeholder'=>'Enter Slug']) }}
                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                    {{ $errors->first('slug') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                        class="form-group {{ $errors->has('youtube_url') ? ' has-error' : '' }}">
                                    {{ Form::label('youtube_url', 'Youtube Url', []) }}
                                    {{ Form::text('youtube_url', $product->position, ['class' => 'form-control', 'no','placeholder'=>'Enter Youtube Url']) }}
                                    @if ($errors->has('youtube_url'))
                                        <span class="help-block">
                                            {{ $errors->first('youtube_url') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div
                                        class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
                                    {{ Form::label('slug', 'Slug', []) }}
                                    {{ Form::text('slug', $product->slug, ['class' => 'form-control', 'no','placeholder'=>'Enter Slug']) }}
                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                    {{ $errors->first('slug') }}
                                </span>
                                    @endif
                                </div>
                            </div>
{{--                            <div class="col-6">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-4">--}}
{{--                                        <div--}}
{{--                                                class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">--}}
{{--                                            {{ Form::label('price', 'Price', []) }}--}}
{{--                                            {{ Form::text('price', $product->price/100, ['class' => 'form-control', 'no','placeholder'=>'Enter Price']) }}--}}
{{--                                            @if ($errors->has('price'))--}}
{{--                                                <span class="help-block">--}}
{{--                                            {{ $errors->first('price') }}--}}
{{--                                        </span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-1"></div>--}}
{{--                                    <div class="col-2" style="display: grid">--}}
{{--                                        {{ Form::label('sale', __('admin.sale'), []) }}--}}
{{--                                        {{ Form::checkbox('sale', true,$product->sale,['class' => 'form-control']) }}--}}

{{--                                    </div>--}}
{{--                                    <div class="col-1"></div>--}}

{{--                                    <div class="col-4">--}}
{{--                                        <div--}}
{{--                                                class="form-group {{ $errors->has('sale_price') ? ' has-error' : '' }}">--}}
{{--                                            {{ Form::label('sale_price', __('admin.sale_price'), []) }}--}}
{{--                                            {{ Form::text('sale_price', $product->sale_price/100, ['class' => 'form-control', 'no','placeholder'=>'Enter Sale Price']) }}--}}
{{--                                            @if ($errors->has('sale_price'))--}}
{{--                                                <span class="help-block">--}}
{{--                                            {{ $errors->first('sale_price') }}--}}
{{--                                        </span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-6">--}}
{{--                                <div--}}
{{--                                        class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">--}}
{{--                                    {{ Form::label('description', 'Description', []) }}--}}
{{--                                    {{ Form::textarea('description', (count($product->availableLanguage) > 0) ? $product->availableLanguage[0]->description : '', ['class' => 'form-control', 'no','placeholder'=>'Enter Description']) }}--}}
{{--                                    @if ($errors->has('description'))--}}
{{--                                        <span class="help-block">--}}
{{--                                    {{ $errors->first('description') }}--}}
{{--                                </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-6">--}}
{{--                                <div--}}
{{--                                        class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">--}}
{{--                                    {{ Form::label('content', 'Content', []) }}--}}
{{--                                    {{ Form::textarea('content', (count($product->availableLanguage) > 0) ? $product->availableLanguage[0]->content : '', ['class' => 'form-control', 'no','placeholder'=>'Enter Content']) }}--}}
{{--                                    @if ($errors->has('content'))--}}
{{--                                        <span class="help-block">--}}
{{--                                            {{ $errors->first('content') }}--}}
{{--                                        </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-6">--}}
{{--                                <div class="form-check">--}}
{{--                                    <label class="form-check-label"><input class="form-check-input" name="status"--}}
{{--                                                                           {{$product->status ? 'checked' : ''}}--}}
{{--                                                                           type="checkbox">Status</label>--}}
{{--                                </div>--}}
{{--                                <div class="form-check" style="margin-top: 10px">--}}
{{--                                    <label class="form-check-label"><input class="form-check-input" name="vip" {{$product->vip ? 'checked' : ''}}--}}
{{--                                                                           type="checkbox">Vip</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-6">--}}
{{--                                <div--}}
{{--                                        class="form-group {{ $errors->has('release_date') ? ' has-error' : '' }}">--}}
{{--                                    {{ Form::label('release_date', 'Release Date', []) }}--}}
{{--                                    <div class="date-input">--}}
{{--                                        {{ Form::text('release_date', '', ['class' => 'form-control single-daterange', 'no','placeholder'=>'Release date']) }}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        @if(count($features) > 0)--}}
{{--                            @foreach($features as $feature)--}}
{{--                                @if(count($feature->answer) > 0)--}}
{{--                                    {{ Form::label('featurs',(count($feature->availableLanguage) > 0) ? $feature->availableLanguage[0]->title :$feature->language[0]->title , []) }}--}}
{{--                                    <select name="features[{{$feature->id}}][]" class="form-control select2"--}}
{{--                                            multiple="true">--}}
{{--                                        @foreach($feature->answer as $answer)--}}
{{--                                            <option value="{{$answer->id}}" {{in_array($answer->id,array_column($productAnswers,'answer_id')) ? 'selected' : ''}}>{{(count($answer->availableLanguage) > 0) ? $answer->availableLanguage[0]->title : $answer->language[0]->title }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
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
                            <button class="btn btn-primary" type="submit"> @lang('admin.product.update')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {!! Form::close() !!}
@endsection
