@if(session()->has('flash_message'))
    <div class="alert alert-{{ session('flash_message_type') }}">{{ session('flash_message') }}</div>
@endif