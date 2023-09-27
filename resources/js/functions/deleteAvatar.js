(function () {
    const button = document.getElementById('deleteAvatarButton');

    if (button) {
        button.addEventListener('click', function (evt) {
            if (confirm('Действительно удалить?')) {
                axios.delete(`/profile/delete-avatar`).then(r => location.reload());
            }
        });
    }
})();
