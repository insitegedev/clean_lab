@extends('admin.layouts.app')
@section('content')

    {!! Form::open(['url' => route('productStore',app()->getLocale()),'method' =>'post','files'=>true]) !!}

    <div class="content-box">
        <div class="element-wrapper">
            <h6 class="element-header">
                @lang('admin.create.products')
            </h6>
            <div class="element-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div
                                    class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                    {{ Form::label('title', 'Title', []) }}
                                    {{ Form::text('title', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Title']) }}
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                    {{ $errors->first('title') }}
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div
                                    class="form-group {{ $errors->has('youtube_url') ? ' has-error' : '' }}">
                                    {{ Form::label('youtube_url', 'Youtube Url', []) }}
                                    {{ Form::text('youtube_url', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Youtube Url']) }}
                                    @if ($errors->has('youtube_url'))
                                        <span class="help-block">
                                            {{ $errors->first('youtube_url') }}
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div
                                    class="form-group  {{ $errors->has('slug') ? ' has-error' : '' }}">
                                    {{ Form::label('slug', 'Slug', []) }}
                                    {{ Form::text('slug', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Slug']) }}
                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                    {{ $errors->first('slug') }}
                                </span>
                                    @endif
                                </div>

                            </div>
                                    <div class="col-1"></div>
                                    <div class="col-1"></div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                    {{ Form::label('description', 'Description', []) }}
                                    {{ Form::textarea('description', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Description']) }}
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                    {{ $errors->first('description') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                                    {{ Form::label('content', 'Content', []) }}
                                    {{ Form::textarea('content', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Content']) }}
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
                                    <label class="form-check-label"><input class="form-check-input" name="status"
                                                                           type="checkbox">Status</label>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <div class="input-images"></div>
                                @if ($errors->has('images'))
                                    <span class="help-block">
                                            {{ $errors->first('images') }}
                                        </span>
                                @endif
                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit"> {{__('admin.create.products')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    </div>
                </div>


    {!! Form::close() !!}
@endsection
