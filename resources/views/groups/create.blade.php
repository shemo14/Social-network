@extends('layouts.index')
@section('content')

    <style>
        input:focus{
            transition: 1s;
            border: 1px solid #27aae1;
        }
    </style>
    <div class="well">
        <h2>Create Group</h2>
        {!! Form::open(['url'=>'groups','method'=>'post','id'=>'Login_form','files'=>'true']) !!}
            <div class="row">
                <div class="form-group col-xs-12{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="my-email" class="sr-only">group name</label>
                    <input id="my-email" class="form-control input-group-lg" type="text" name="name" title="Group Name" placeholder="Enter Group Name ..."/>
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-12{{ $errors->has('level') ? ' has-error' : '' }}">
                    <label for="my-email" class="sr-only">Level</label>
                    <select name="level" class="form-control input-group-lg" title="Group Level" id="">
                        <option value="">-Chose Group Level-</option>
                        <option value="Level 1">Level 1</option>
                        <option value="Level 2">Level 2</option>
                        <option value="Level 3">Level 3</option>
                        <option value="Level 4">Level 4</option>
                    </select>
                    @if ($errors->has('level'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('level') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-12{{ $errors->has('desc') ? ' has-error' : '' }}">
                    <label for="my-password" class="sr-only">Description</label>
                    <textarea name="desc" class="form-control input-group-lg" title="Group Description " placeholder="Enter Group Description ..." id="" cols="30" rows="10"></textarea>
                    @if ($errors->has('desc'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
        <div class="row">
            <div class="form-group col-xs-12{{ $errors->has('cover') ? ' has-error' : '' }}">
                <label for="cover" class="sr-only">Group Cover</label>
                <input id="cover" class="form-control input-group-lg" type="file" name="cover" title="Group Cover" placeholder="Enter Group Name ..."/>
                @if ($errors->has('cover'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('cover') }}</strong>
                                    </span>
                @endif
                <input type="submit" class="btn btn-primary" value="Create" style="margin-top: 15px">
            </div>
        </div>
        {!! Form::close() !!}
    </div>


@stop