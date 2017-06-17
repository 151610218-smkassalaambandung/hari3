@if (session()->has('flash_notification.massage'))
  <div class="container">
    <div class="alert alert-{{ session()->get('flash_notification.level') }}">
      <button type="button" class="clone" data-dismiss="alert" aria-hidden="true">$times;</button>

      {{!! session()->get('flash_notification.massage') !!}
      </div>
      </div>
      @endif
