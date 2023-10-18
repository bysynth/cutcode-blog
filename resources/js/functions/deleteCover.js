(function () {
    const button = document.getElementById('deleteCover');

    if (button) {
        button.addEventListener('click', function (evt) {
            let articleId = button.dataset.articleId;
            if (confirm('Действительно удалить?')) {
                axios.delete(`/admin/articles/${articleId}/delete-cover`)
                    .then(r => location.reload());
            }
        });
    }
})();
