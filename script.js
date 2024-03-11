$(document).ready(function() {
    $('#unitForm').submit(function(e) {
      e.preventDefault();
      let unitName = $('#unitName').val();
      let unitLabel = $('#unitLabel').val();
      let unitRelation = $('#unitRelation').val();
  
      // Send data to server using AJAX
      $.ajax({
        type: 'POST',
        url: 'save_unit.php',
        data: {unitName: unitName, unitLabel: unitLabel, unitRelation: unitRelation},
        success: function(response) {
          alert(response);
        }
      });
    });
  });
  