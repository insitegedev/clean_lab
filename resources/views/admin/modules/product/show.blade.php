@extends('admin.layouts.app')
@section('content')
    <div class="content-i">
        <div class="content-box"><div class="element-wrapper">
                <h6 class="element-header">
                    {{ (count($product->availableLanguage) > 0) ? $product->availableLanguage[0]->title : ''}}
                </h6>

                <div class="row">
                    <div class="col-2">
                        <table class="table table-striped table-bordered">
                            <tbody>
                            <tr>
                                <th>Slug</th>
                                <td>
                                    {{ (count($product->availableLanguage) > 0) ? $product->availableLanguage[0]->slug : ''}}
                                </td>
                            </tr>
                            <tr>
                                <th>Youtube Url</th>
                                <td>
                                    {{ (count($product->availableLanguage) > 0) ? $product->availableLanguage[0]->youtube_url : ''}}
                                </td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$product->status ? 'True' : 'False'}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="image-container">
                            @if(count($product->files) >0 )
                                @foreach($product->files as $file)
                                    <div class="view-image" style="background-image: url('{{url('storage/product/'.$file->fileable_id.'/'.$file->name)}}')"></div>
                                @endforeach
                            @endif
                        </div>
                </div>

        </div>
    </div>

@endsection
