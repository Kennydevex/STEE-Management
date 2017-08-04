<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript">
$(".dropdown-button").dropdown();
$('.button-collapse').sideNav({
      menuWidth: 200, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true,
}
);
</script>
@stack('scripts')
