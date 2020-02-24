@extends('layouts.master')
@section('content')
    @include('backend.dashboard.includes.header')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title"><small>Assign Roles Manually</small></div>
                <div class="ibox-content">
                    <form method="POST" class="form-horizontal" action="{{ route('roles.update', request('role')) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10"><input type="text" name ="name" value="{{ isset($user) ? $user->name : old('name') }}" class="form-control">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <input type="hidden" name="id" value="{{isset($user)?$user->id:''}}">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="{{(isset($user) && ($user->email))? $user-> email: old('email')}}" class="form-control">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Select Role</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="role" required>
                                    <option disabled="disabled">-Select-</option>
                                    @foreach ($roles as $value)
                                        <option value="{{$value}}"> {{ $value}} </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('role'))
                                    <span class="invalid-feedback">
                                     <strong>{{ $errors->first('role') }}</strong>
                                     </span>
                                @endif
                            </div>
                        </div>
                        @if(empty($role))
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{{ __('Password') }}</label>
                                <div class="col-sm-10">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{{ __('Confirm Password') }}</label>
                                <div class="col-sm-10">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                        @endif
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="submit">Cancel</button>
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
