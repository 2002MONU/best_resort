document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.file-input').forEach(function(input) {
        input.addEventListener('change', function(e) {
            var file = e.target.files[0];
            var messageId = 'message' + e.target.id.replace('fileInput', '');
            var messageElement = document.getElementById(messageId);

            if (file) {
                var fileType = file.name.split('.').pop().toLowerCase();
                var validTypes = ['png', 'jpg', 'jpeg'];
                if (validTypes.includes(fileType)) {
                    messageElement.innerText = 'You have selected a ' + fileType.toUpperCase() + ' file.';
                    messageElement.classList.remove('text-danger');
                    messageElement.classList.add('text-success');
                } else {
                    messageElement.innerText = 'Please select a PNG, JPG, or JPEG file.';
                    messageElement.classList.remove('text-success');
                    messageElement.classList.add('text-danger');
                }
            }
        });
    });
});
