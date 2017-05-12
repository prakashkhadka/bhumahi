var photo_counter = 0;

Dropzone.options.realDropzone = {

    uploadMultiple: true,
    parallelUploads: 10000,
    maxFilesize: 8,
    autoProcessQueue: false,
    previewsContainer: '#dropzonePreview',
    previewTemplate: document.querySelector('#preview-template').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove',
    dictFileTooBig: 'Image is bigger than 8MB',
   
    // The setting up of the dropzone
    init:function() {
       
      var myDropzone = this;

      $('#submitfiles').on("click", function (e) {

        e.preventDefault();
        e.stopPropagation();

        
          myDropzone.processQueue();
        

      });
      
      this.on("sendingmultiple", function() {

        alert("Sending multiple files");

      // Gets triggered when the form is actually being sent.
      // Hide the success button or the complete form.
      });
      this.on("successmultiple", function(files, response) {
        alert("multiple successful");
        // Gets triggered when the files have successfully been sent.
        // Redirect user or notify of success.
      });
      this.on("errormultiple", function(files, response) {
        alert("multiple error");
        // Gets triggered when there was an error sending the files.
        // Maybe show form again, and notify user of error
      });

    }
}
