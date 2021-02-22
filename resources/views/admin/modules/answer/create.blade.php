@extends('admin.layouts.app')
@section('content')
<div class="content-box">
    <div class="row">
        <div class="col-lg-6">
            <div class="element-wrapper">
            <h6 class="element-header">
                @lang('admin.create.answers')
            </h6>
            <form action="{{route('AnswerStore', $locale)}}" method="POST" class="bg-white py-3 px-4 grid w-full grid-cols-3 gap-3">
                @csrf
                <div class="col-span-1">
                    <label for="feature">@lang('admin.answer.feature')</label>
                    <select name="feature" id="feature" class="form-control" >
                        @foreach ($features as $feature)
                        <option value="{{$feature->id}}">{{(count($feature->availableLanguage) > 0) ? $feature->availableLanguage[0]->title : $feature->language[0]->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-1 w-full ">
                    <label for="position">@lang('admin.answer.position')</label>
                    <input type="text" id="position" name="position" class="form-control" placeholder="@lang('admin.answer.position')">
                </div>
                <div class="col-span-1 w-full">
                    <label for="slug">@lang('admin.answer.slug')</label >
                    <input required id="slug" type="text" name="slug" class="form-control" placeholder="@lang('admin.answer.slug')">
                </div>
                <div class="col-span-2 w-full">
                    <label for="title">@lang('admin.answer.title')</label>
                    <input required type="text" id="title" name="title" class="form-control" placeholder="@lang('admin.answer.title')"> <br>
                </div>
                <div class="col-span-1 w-full">
                    <label for="status">@lang('admin.answer.status')</label>
                    <select name="status" id="status" class="form-control" >
                        <option value="1">@lang('admin.answer.on')</option>
                        <option value="0">@lang('admin.answer.off')</option>
                    </select> <br>
                </div>
                <div class="border-t m-0 py-3 col-span-3">
                    <button class="btn btn-primary" type="submit"> @lang('admin.create.answers')</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection


