@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="card">
        <div class="card-body">
          <form method="post" action="{{ route('contact.store') }}" class="row g-3">
            @csrf
            <div class="col-md-6">
                <x-inputs.label for="name">Name</x-inputs.label>
                <x-inputs.input name="name"></x-inputs.input>
            </div>
            <div class="col-md-6">
             <x-inputs.label for="email">Email address</x-inputs.label>
              <x-inputs.input type="email" name="email"></x-inputs.input>
            </div>
            <div class="col-12">
             <x-inputs.label for="subject">Subject</x-inputs.label>
              <x-inputs.input name="subject"></x-inputs.input>
            </div>
            <div class="col-12">
              <x-inputs.label for="message">Message</x-inputs.label>
              <x-inputs.txtarea name="message" rows="3">{{ old('message') }}</x-inputs.txtarea>
            </div>
            <div class="col-12">
              <x-button class="float-end">Send</x-button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection