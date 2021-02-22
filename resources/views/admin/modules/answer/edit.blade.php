
@extends('admin.layouts.app')
@section('content')
<div class="content-box">
    <div class="row">
        <div class="col-lg-6">
            <div class="element-wrapper">
            <h6 class="element-header">
                @lang('admin.answer.update')
            </h6>
            <form action="{{route('AnswerUpdate', [$locale,$answer->id])}}" method="POST" class="bg-white py-3 px-4 grid w-full grid-cols-3 gap-3">
                @csrf
                @method('PUT')
                <div class="col-span-1">
                    <label for="feature">@lang('admin.answer.feature')</label>
                    <select name="feature" id="feature" class="form-control" >
                        @foreach ($features as $feature)
                        <option value="{{$feature->id}}" {{($answer->feature->feature_id == $feature->id) ? 'selected' : ''}}>{{($feature->language()->where('language_id', $localization)->first()->title) ?? $feature->language()->first()->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-1 w-full ">
                    <label for="position">@lang('admin.answer.position')</label>
                    <input type="text" id="position" name="position"  value="{{$answer->position}}"  class="form-control" placeholder="@lang('admin.answer.position')">
                </div>
                <div class="col-span-1 w-full">
                    <label for="slug">@lang('admin.answer.slug')</label >
                    <input required id="slug" type="text" name="slug" value="{{$answer->slug}}" class="form-control" placeholder="@lang('admin.answer.slug')">
                </div>
                <div class="col-span-2 w-full">
                    <label for="title">@lang('admin.answer.title')</label>
                    <input required type="text" id="title" name="title" class="form-control" value="{{($answer->language()->where('language_id', $localization)->first()->title) ?? ''}}" placeholder="@lang('admin.answer.title')"> <br>
                </div>
                <div class="col-span-1 w-full">
                    <label for="status">@lang('admin.answer.status')</label>
                    <select name="status" id="status" class="form-control" >
                        <option value="1" {{($answer->status == 1) ? 'selected' : ''}}>@lang('admin.answer.on')</option>
                        <option value="0" {{($answer->status == 0) ? 'selected' : ''}}>@lang('admin.answer.off')</option>
                    </select> <br>
                </div>
                <div class="border-t m-0 py-3 col-span-3">
                    <button class="btn btn-primary" type="submit"> @lang('admin.answer.update')</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection





