
function edit_material(id,url){
  bootbox.confirm({
    message: "Edit it?",
    size:'small',
    buttons: {
        confirm: {
            label: 'Yes',
            className: 'btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
      if (result==true) {
        window.location = url+"/"+id;
      }
      else {
        
      }
    }
});
 
}
 function inactive(id){
  bootbox.confirm({
    message: "Inactive this medication?",
    size:'small',
    buttons: {
        confirm: {
            label: 'Yes',
            className: 'btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
      if (result==true) {
        window.location = "<?php echo base_url() ?>"+"Hospital/inactive_medication/"+id;
      }
      else {
        
      }
    }
});
 
 
}
  function active(id){
    bootbox.confirm({
    message: "Active this medication?",
    size:'small',
    buttons: {
        confirm: {
            label: 'Yes',
            className: 'btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
      if (result==true) {
        window.location = "<?php echo base_url() ?>"+"Hospital/active_medication/"+id;
      }
      else {
        
      }
    }
});
 
 
}

