(function () {
    const input = document.getElementById('avatarInput');
    const button = document.getElementById('uploadAvatarButton');
    const preview = document.getElementById('avatarPreview');

    if (input && button && preview) {
        function updateImage() {
            if (this.files) {
                preview.src = window.URL.createObjectURL(this.files[0]);
            }
        }

        button.addEventListener('click', function (evt) {
            evt.preventDefault();
            input.click();
        });

        input.addEventListener('change', updateImage);
    }
})();
