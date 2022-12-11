<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <div class="rounded me-2 bg-warning" style="width: 15px; height: 15px"></div>
    <strong class="me-auto">Alert</strong>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    {{ session('yellow-notification') }}
  </div>
</div>