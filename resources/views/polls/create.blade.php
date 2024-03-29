@extends('layouts.baseplage')
<x-app-layout>
    <x-slot name="header">
        <div class="container d-flex justify-content-between
">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Polls') }}
            </h2>
            <a href="{{ url('/polls/index') }}" , class="btn btn-md bg-success text-white leading-tight">Show Polls</a>
        </div>
    </x-slot>
    <div class="py-10">
        <form action="{{ route('polls.post') }}" class="form-group" , method="POST">
            @csrf
            <div class="row px-3">
                <div class="col-md-6 px-4 py-2">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" style="border: none; border-bottom:2px solid black;"
                        name="title">
                </div>
                <div class="col-md-6 px-4 py-2"> <label for="" class="form-label">Start Date</label>
                    <input type="date" class="input-group" style="border: none; border-bottom:2px solid black;" name="start_date">
                </div>
                <div class="col-md-6 px-4 py-2"> <label for="" class="form-label">End Date</label>
                    <input type="date" class="input-group" style="border: none; border-bottom:2px solid black;" name="end_date">
                </div>
                <div class="col-md-6 px-4 py-2"> <label for="" class="form-label">Start Time</label>
                    <input type="time" class="input-group" style="border: none; border-bottom:2px solid black;" name="start_time">
                </div>
                <div class="col-md-6 px-4 py-2"> <label for="" class="form-label">End Time</label>
                    <input type="time" class="input-group" style="border: none; border-bottom:2px solid black;" name="end_time">
                </div>
            </div>
            <div class="row col-sm-12 pt-4 p-3" x-data="{
optionsNumber: 2
}">
                <h2 class="px-3 fw-bold">Options</h2>
                <template x-for="i in optionsNumber">
                    <div class="row pt-3">
                        <div class="col-sm-6 px-3">
                            <input type="text" name="options[]" id="option" placeholder="Options value" required="required"
                                class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <button
                                x-on:click="optionsNumber > 2 ? optionsNumber-- : alert('Poll needs to have two options.')"
                                class="waves-effect waves-light btn btn-danger" type="button">
                                Remove
                            </button>
                        </div>
                    </div>
                </template>
                <div class="pt-3 col-md-12"><button class="btn btn-md bg-success text-white"
                        x-on:click="optionsNumber < 3 ? optionsNumber++ : alert('We cannot hold greater than 3 options.')">Add Options</button>
            </div>
        </form>
    </div>

</x-app-layout>
