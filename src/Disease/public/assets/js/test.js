
// $.ajax({
//     url: "<?php echo base_url('Train/train')?>",
//     type: "post",
//     data: {
//         "inputEpochsText": "qq.h5",
//         "Weights_value": "5",
//         "inputSaveweightText": "inputSaveweightText",
//     },
//     success: function (data) {

//     },
//     error: function (o) {

//     }
// });

ajax();
function ajax(){
    // ajax({
    //     url: "<?php echo base_url('Train/test')?>",
    //     type: "post",
    
    //     success: function (data) {
    
    //     },
    //     error: function (o) {
    
    //     }
    // });

    jQuery.ajax({
        type: "POST",
        url: "/reverse_pca.py",
        async: false,
        data: { param: input }
    });

    return jqXHR.responseText;

    // window.location.href = "<?php echo site_url('Train/test/admin_link_delete_user/');?>"

}


// self.onmessage = function (event){
//     console.log(event.data);

//     self.postMessage('long task completed');
//     self.close();
// }