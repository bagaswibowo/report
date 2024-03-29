// Call the dataTables jQuery plugin
$(document).ready(function() {
  var groupColumn = 0;
  var table = $('#logDataTable').DataTable({
      responsive:true,
      "columnDefs": [
          { "visible": false, "targets": groupColumn }
      ],
      "order": [[ groupColumn, 'asc' ]],
      "displayLength": 25,
      "drawCallback": function ( settings ) {
          var api = this.api();
          var rows = api.rows( {page:'current'} ).nodes();
          var last=null;

          api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
              if ( last !== group ) {
                  $(rows).eq( i ).before(
                      '<tr class="group"><td colspan="1">'+group+'</td></tr>'
                  );

                  last = group;
              }
          } );
      }
  } );

  // Order by the grouping
  $('#logDataTable tbody').on( 'click', 'tr.group', function () {
      var currentOrder = table.order()[0];
      if ( currentOrder[0] === groupColumn && currentOrder[1] === 'asc' ) {
          table.order( [ groupColumn, 'desc' ] ).draw();
      }
      else {
          table.order( [ groupColumn, 'asc' ] ).draw();
      }
  } );
} );