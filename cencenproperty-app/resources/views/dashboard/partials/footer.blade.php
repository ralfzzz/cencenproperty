{{-- FOOTER --}}
@if($posts->count() <= 2)
<footer style="background-color: rgba(0, 0, 0, 0.1)" class="mb-0 mt-5 fixed-bottom">
    <p class="text-md-end text-body-secondary text-white p-4 m-0">© 2023 Wepsait</p>
  </footer>
@else
<footer style="background-color: rgba(0, 0, 0, 0.1)" class="mb-0 mt-5">
  <p class="text-md-end text-body-secondary text-white p-4 m-0">© 2023 Wepsait</p>
</footer>
@endif