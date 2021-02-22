@extends('admin.layouts.app')
@section('content')
    <div class="content-i">
        <div class="content-box"><div class="element-wrapper">
                <h6 class="element-header">
                    {{ (count($user->availableLanguage) > 0) ? $user->availableLanguage[0]->first_name . ' ' .$user->availableLanguage[0]->last_name: ''}}
                </h6>

                <div class="row">
                    <div class="col-2">
                        <table class="table table-striped table-bordered">
                            <tbody>
                            <tr>
                                <th>@lang('admin.user.first_name')/th>
                                <td>
                                    {{ (count($user->availableLanguage) > 0) ? $user->availableLanguage[0]->first_name : ''}}
                                </td>
                            </tr>
                            <tr>
                                <th>@lang('admin.user.last_name')</th>
                                <td>
                                    {{ (count($user->availableLanguage) > 0) ? $user->availableLanguage[0]->last_name : ''}}
                                </td>
                            </tr>
                            <tr>
                                <th>@lang('admin.user.email')</th>
                                <td>
                                    {{ $user->email}}
                                </td>
                            </tr>
                            <tr>
                                <th>@lang('admin.user.phone')</th>
                                <td>
                                    {{ $user->phone}}
                                </td>
                            </tr>
                            <tr>
                                <th>@lang('admin.user.personal_id')</th>
                                <td>{{$user->id_number}}</td>
                            </tr>
                            <tr>
                                <th>@lang('admin.user.address')</th>
                                <td>
                                    {{ (count($user->availableLanguage) > 0) ? $user->availableLanguage[0]->address : ''}}
                                </td>
                            </tr>
                            <tr>
                                <th>@lang('admin.user.status')</th>
                                <td>{{$user->status ? 'Active' : 'Not Active'}}</td>
                            </tr>
                            <tr>
                                <th>@lang('admin.user.created_at')</th>
                                <td>{{\Carbon\Carbon::parse($user->create_at)}}</td>
                            </tr>
                            <tr>
                                <th>@lang('admin.user.updated_at')</th>
                                <td>{{\Carbon\Carbon::parse($user->update_at)}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="image-container">
                            @if(count($user->files) >0 )
                                @foreach($user->files as $file)
                                    <div class="view-image" style="background-image: url('{{url('storage/user/'.$file->fileable_id.'/'.$file->name)}}')"></div>
                                @endforeach
                            @endif
                        </div>
                </div>

        </div>
    </div>

@endsection
