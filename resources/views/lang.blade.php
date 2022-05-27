@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Chaneg Language</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">@php
    $options = ['e' => 'English', 'b' => 'Bahasa'];
    $selected = ['b','e'];
@endphp
<x-adminlte-select id="optionsLangs" name="optionsLangs[]" label="Languages"
    label-class="text-danger" multiple>
    <x-slot name="prependSlot">
        <div class="input-group-text bg-gradient-red">
            <i class="fas fa-lg fa-language"></i>
        </div>
    </x-slot>
    <x-adminlte-options :options="$options" :selected="$selected"/>
</x-adminlte-select></p>
                </div>
            </div>
        </div>
    </div>
@stop